#!/usr/bin/env python3
"""Audit mentor files vs lesson catalog exercise counts."""

from __future__ import annotations

import re
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
MENTOR_DIR = ROOT / "app" / "Data" / "mentor"
DATA_DIR = ROOT / "app" / "Data"


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
            r"'type'\s*=>\s*'(choice|code|contains|min_length|js|sql)'",
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


def mentor_exercise_indices(path: Path) -> list[int]:
    text = path.read_text(encoding="utf-8", errors="ignore")
    indices = [int(m.group(1)) for m in re.finditer(r"'exercise_index'\s*=>\s*(\d+)", text)]
    indices.sort()
    return indices


def main() -> None:
    catalog_counts = lesson_catalog_counts()
    issues: list[str] = []

    for slug, expected in sorted(catalog_counts.items()):
        if expected == 0:
            continue
        mentor_path = MENTOR_DIR / f"{slug}.php"
        if not mentor_path.is_file():
            continue
        indices = mentor_exercise_indices(mentor_path)
        want = list(range(expected))
        if indices != want:
            issues.append(
                f"{slug}: catalog={expected} mentor=[{','.join(map(str, indices))}]"
            )

    print(f"{len(issues)} mentor files with exercise gaps")
    for line in issues[:80]:
        print(f"  - {line}")
    if len(issues) > 80:
        print(f"  ... and {len(issues) - 80} more")


if __name__ == "__main__":
    main()
