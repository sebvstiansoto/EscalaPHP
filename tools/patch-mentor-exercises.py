#!/usr/bin/env python3
"""Persist mentor exercise alignment to disk (same rules as normalizeExerciseSteps)."""

from __future__ import annotations

import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
MENTOR_DIR = ROOT / "app" / "Data" / "mentor"
DATA_DIR = ROOT / "app" / "Data"
EXERCISE_TYPES = ("choice", "code", "contains", "min_length", "js", "sql")


def lesson_blocks(path: Path) -> dict[str, str]:
    text = path.read_text(encoding="utf-8", errors="ignore")
    blocks: dict[str, str] = {}
    matches = list(re.finditer(r"'slug'\s*=>\s*'([^']+)'", text))
    for i, match in enumerate(matches):
        slug = match.group(1)
        start = match.start()
        end = matches[i + 1].start() if i + 1 < len(matches) else len(text)
        blocks[slug] = text[start:end]
    return blocks


def exercise_count_in_block(block: str) -> int:
    ex_pos = block.find("'exercises'")
    if ex_pos < 0:
        return 0
    ex_part = block[ex_pos:]
    return len(
        re.findall(
            rf"'type'\s*=>\s*'({'|'.join(EXERCISE_TYPES)})'",
            ex_part,
        )
    )


def lesson_catalog_counts() -> dict[str, int]:
    counts: dict[str, int] = {}
    catalog = (DATA_DIR / "catalog.php").read_text(encoding="utf-8", errors="ignore")
    for match in re.finditer(r"'lessons'\s*=>\s*'([^']+)'", catalog):
        rel = match.group(1).replace("\\", "/")
        path = DATA_DIR / rel
        if not path.is_file():
            continue
        for slug, block in lesson_blocks(path).items():
            counts[slug] = exercise_count_in_block(block)
    return counts


def exercise_question(block: str, index: int) -> str:
    types = "|".join(EXERCISE_TYPES)
    pattern = rf"\n\s+{index}\s*=>\s*\n\s+array\s*\(\s*\n\s+'type'\s*=>\s*'(?:{types})',\s*\n\s+'question'\s*=>\s*'((?:\\'|[^'])*)'"
    match = re.search(pattern, block)
    return match.group(1).replace("\\'", "'") if match else ""


def mentor_exercise_indices(text: str) -> list[int]:
    indices = [int(m.group(1)) for m in re.finditer(r"'exercise_index'\s*=>\s*(\d+)", text)]
    indices.sort()
    return indices


def remove_exercise_block(text: str, index: int) -> str:
    pattern = (
        rf"\n\s+\d+\s*=>\s*\n\s+array\s*\(\s*\n\s+'type'\s*=>\s*'exercise',"
        rf"[\s\S]*?'exercise_index'\s*=>\s*{index},\s*\n\s+\),"
    )
    return re.sub(pattern, "", text, count=1)


def insert_exercise_block(text: str, index: int, question: str) -> str:
    body = question if question else "Aplica lo aprendido con lo visto en esta lección."
    block = (
        f"\n  array (\n"
        f"    'type' => 'exercise',\n"
        f"    'title' => 'Tu turno — práctica {index + 1}',\n"
        f"    'body' => '{body.replace(chr(39), chr(92) + chr(39))}',\n"
        f"    'exercise_index' => {index},\n"
        f"  ),"
    )
    for marker in ("'type' => 'project'", "'type' => 'complete'"):
        pos = text.find(marker)
        if pos >= 0:
            line_start = text.rfind("\n", 0, pos)
            return text[:line_start] + block + text[line_start:]
    return text + block


def patch_file(path: Path, slug: str, expected: int, lesson_block: str) -> bool:
    text = path.read_text(encoding="utf-8", errors="ignore")
    original = text
    indices = mentor_exercise_indices(text)

    for idx in sorted(indices, reverse=True):
        if idx >= expected:
            text = remove_exercise_block(text, idx)

    indices = mentor_exercise_indices(text)
    for idx in range(expected):
        if idx not in indices:
            question = exercise_question(lesson_block, idx)
            text = insert_exercise_block(text, idx, question)

    if text == original:
        return False

    path.write_text(text, encoding="utf-8")
    return True


def lesson_block_for_slug(slug: str) -> str:
    catalog = (DATA_DIR / "catalog.php").read_text(encoding="utf-8", errors="ignore")
    for match in re.finditer(r"'lessons'\s*=>\s*'([^']+)'", catalog):
        rel = match.group(1).replace("\\", "/")
        path = DATA_DIR / rel
        if not path.is_file():
            continue
        blocks = lesson_blocks(path)
        if slug in blocks:
            return blocks[slug]
    return ""


def main() -> None:
    counts = lesson_catalog_counts()
    patched = 0

    for slug, expected in sorted(counts.items()):
        if expected == 0:
            continue
        mentor_path = MENTOR_DIR / f"{slug}.php"
        if not mentor_path.is_file():
            continue
        if patch_file(mentor_path, slug, expected, lesson_block_for_slug(slug)):
            patched += 1
            print(f"Patched: {slug}")

    print(f"\nDone: {patched} mentor files updated.")


if __name__ == "__main__":
    main()
