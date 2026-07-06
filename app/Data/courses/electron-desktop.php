<?php

declare(strict_types=1);

return [
    ['slug' => 'el-intro', 'order' => 1, 'title' => 'Electron intro', 'level' => 'Conceptos', 'minutes' => 25, 'summary' => 'Desktop apps con web tech.', 'concepts' => ['electron', 'desktop', 'chromium'], 'sections' => [
        ['heading' => 'Electron', 'body' => '**Electron** — **Chromium** + **Node.js** — VS Code, Slack, Discord — HTML/CSS/JS desktop cross-platform.'],
        ['heading' => 'Procesos', 'body' => 'Main process (Node) + Renderer processes (browser windows) — IPC comunicación.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Electron combina...?', 'options' => ['Chromium UI + Node.js backend', 'PHP + MySQL', 'Only native Swift'], 'answer' => 'Chromium UI + Node.js backend', 'explanation' => 'Web tech desktop.', 'pro_tip' => 'Tauri alternative lighter Rust.'],
        ['type' => 'choice', 'question' => '¿Main process?', 'options' => ['Node — windows, menus, native APIs', 'Browser tab only', 'CSS engine'], 'answer' => 'Node — windows, menus, native APIs', 'explanation' => 'One main, many renderers.', 'pro_tip' => 'electron-forge scaffold.'],
    ]],
    ['slug' => 'el-main', 'order' => 2, 'title' => 'Main process', 'level' => 'Fundamentos', 'minutes' => 35, 'summary' => 'BrowserWindow, app lifecycle.', 'concepts' => ['browserwindow', 'app', 'lifecycle'], 'sections' => [
        ['heading' => 'BrowserWindow', 'body' => 'new BrowserWindow({ width: 800, webPreferences: { preload } })', 'code' => "const { app, BrowserWindow } = require('electron');\napp.whenReady().then(createWindow);"],
        ['heading' => 'Security', 'body' => 'contextIsolation: true, nodeIntegration: false — preload bridge only.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿nodeIntegration false?', 'options' => ['Renderer sin Node direct — más seguro', 'Disable app', 'Faster only'], 'answer' => 'Renderer sin Node direct — más seguro', 'explanation' => 'XSS no ejecuta fs.', 'pro_tip' => 'Curso seguridad web XSS.'],
        ['type' => 'contains', 'question' => 'Escribe BrowserWindow', 'must_contain' => ['BrowserWindow'], 'hint' => 'new BrowserWindow({ ... })', 'explanation' => 'Create app window.', 'pro_tip' => 'loadURL vs loadFile.'],
    ]],
    ['slug' => 'el-ipc', 'order' => 3, 'title' => 'IPC preload bridge', 'level' => 'Intermedio', 'minutes' => 35, 'summary' => 'contextBridge, ipcRenderer.', 'concepts' => ['ipc', 'preload', 'contextbridge'], 'sections' => [
        ['heading' => 'Preload', 'body' => 'contextBridge.exposeInMainWorld("api", { readFile: () => ipcRenderer.invoke("read") })'],
        ['heading' => 'invoke/handle', 'body' => 'Main: ipcMain.handle("read", async () => fs.readFile(...)) — async request/response.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿contextBridge?', 'options' => ['Expose safe APIs renderer', 'Merge Node renderer', 'CSS bridge'], 'answer' => 'Expose safe APIs renderer', 'explanation' => 'Whitelist capabilities.', 'pro_tip' => 'Never expose full ipcRenderer.'],
        ['type' => 'choice', 'question' => '¿ipc invoke vs send?', 'options' => ['invoke returns Promise response', 'send synchronous only', 'No difference'], 'answer' => 'invoke returns Promise response', 'explanation' => 'handle/on pattern.', 'pro_tip' => 'Validate all IPC inputs main.'],
    ]],
    ['slug' => 'el-window', 'order' => 4, 'title' => 'Menus, tray y native', 'level' => 'Intermedio', 'minutes' => 30, 'summary' => 'Menu, Tray, dialog nativos.', 'concepts' => ['menu', 'tray', 'dialog'], 'sections' => [
        ['heading' => 'Menu', 'body' => 'Menu.buildFromTemplate — File/Edit app menu cross-platform.'],
        ['heading' => 'Tray', 'body' => 'Tray icon background app — minimize to tray pattern.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿dialog.showOpenDialog?', 'options' => ['Native file picker OS', 'HTML input only', 'Terminal'], 'answer' => 'Native file picker OS', 'explanation' => 'Main process API.', 'pro_tip' => 'macOS menu bar differences.'],
        ['type' => 'choice', 'question' => '¿Platform differences?', 'options' => ['Test Win/Mac/Linux behaviors', 'Identical always', 'Windows only'], 'answer' => 'Test Win/Mac/Linux behaviors', 'explanation' => 'Menu roles platform-specific.', 'pro_tip' => 'electron-builder targets.'],
    ]],
    ['slug' => 'el-packager', 'order' => 5, 'title' => 'Packaging', 'level' => 'Práctica', 'minutes' => 35, 'summary' => 'electron-builder, code sign.', 'concepts' => ['builder', 'sign', 'asar'], 'sections' => [
        ['heading' => 'electron-builder', 'body' => 'build mac dmg, win exe/nsis, linux AppImage — auto-update support.'],
        ['heading' => 'Code signing', 'body' => 'Apple Developer + Windows cert — evita "unknown publisher" warnings.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿asar archive?', 'options' => ['Pack app source single file', 'Database', 'Video codec'], 'answer' => 'Pack app source single file', 'explanation' => 'Read-only app bundle.', 'pro_tip' => 'Not encryption — obfuscation minimal.'],
        ['type' => 'choice', 'question' => '¿Auto-update library?', 'options' => ['electron-updater', 'git pull', 'npm update'], 'answer' => 'electron-updater', 'explanation' => 'Squirrel/GitHub releases.', 'pro_tip' => 'Code sign required macOS auto-update.'],
    ]],
    ['slug' => 'el-prod', 'order' => 6, 'title' => 'Producción y alternativas', 'level' => 'Producción', 'minutes' => 30, 'summary' => 'Performance, Tauri, updates.', 'concepts' => ['performance', 'tauri', 'update'], 'sections' => [
        ['heading' => 'Performance', 'body' => 'Electron heavy RAM — lazy load windows, avoid unnecessary renderers.'],
        ['heading' => 'Tauri', 'body' => 'Rust shell + webview OS native — 10x smaller binary alternative evaluate.'],
    ], 'exercises' => [
        ['type' => 'choice', 'question' => '¿Electron downside?', 'options' => ['Large bundle RAM Chromium each app', 'No cross-platform', 'No Node'], 'answer' => 'Large bundle RAM Chromium each app', 'explanation' => 'Tauri/Flutter desktop alt.', 'pro_tip' => 'Curso Flutter desktop possible.'],
        ['type' => 'choice', 'question' => '¿Squirrel.Windows?', 'options' => ['Install/update mechanism Windows', 'Database', 'Testing tool'], 'answer' => 'Install/update mechanism Windows', 'explanation' => 'electron-builder integrates.', 'pro_tip' => 'Crash reporting Sentry electron.'],
    ]],
];
