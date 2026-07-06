<?php

declare(strict_types=1);

return array (
  0 => 
  array (
    'slug' => 'el-intro',
    'order' => 1,
    'title' => 'Electron intro',
    'level' => 'Conceptos',
    'minutes' => 25,
    'summary' => 'Desktop apps con web tech.',
    'concepts' => 
    array (
      0 => 'electron',
      1 => 'desktop',
      2 => 'chromium',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Electron',
        'body' => '**Electron** — **Chromium** + **Node.js** — VS Code, Slack, Discord — HTML/CSS/JS desktop cross-platform.',
        'code' => 'console.log(\'Practica: el-intro\');',
      ),
      1 => 
      array (
        'heading' => 'Procesos',
        'body' => 'Main process (Node) + Renderer processes (browser windows) — IPC comunicación.',
        'code' => 'console.log(\'Practica: el-intro\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Electron combina...?',
        'options' => 
        array (
          0 => 'Chromium UI + Node.js backend',
          1 => 'PHP + MySQL',
          2 => 'Only native Swift',
        ),
        'answer' => 'Chromium UI + Node.js backend',
        'explanation' => 'Web tech desktop.',
        'pro_tip' => 'Tauri alternative lighter Rust.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Main process?',
        'options' => 
        array (
          0 => 'Node — windows, menus, native APIs',
          1 => 'Browser tab only',
          2 => 'CSS engine',
        ),
        'answer' => 'Node — windows, menus, native APIs',
        'explanation' => 'One main, many renderers.',
        'pro_tip' => 'electron-forge scaffold.',
      ),
    ),
  ),
  1 => 
  array (
    'slug' => 'el-main',
    'order' => 2,
    'title' => 'Main process',
    'level' => 'Fundamentos',
    'minutes' => 35,
    'summary' => 'BrowserWindow, app lifecycle.',
    'concepts' => 
    array (
      0 => 'browserwindow',
      1 => 'app',
      2 => 'lifecycle',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'BrowserWindow',
        'body' => 'new BrowserWindow({ width: 800, webPreferences: { preload } })',
        'code' => 'const { app, BrowserWindow } = require(\'electron\');
app.whenReady().then(createWindow);',
      ),
      1 => 
      array (
        'heading' => 'Security',
        'body' => 'contextIsolation: true, nodeIntegration: false — preload bridge only.',
        'code' => 'new BrowserWindow({ ... })',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿nodeIntegration false?',
        'options' => 
        array (
          0 => 'Renderer sin Node direct — más seguro',
          1 => 'Disable app',
          2 => 'Faster only',
        ),
        'answer' => 'Renderer sin Node direct — más seguro',
        'explanation' => 'XSS no ejecuta fs.',
        'pro_tip' => 'Curso seguridad web XSS.',
      ),
      1 => 
      array (
        'type' => 'contains',
        'question' => 'Escribe BrowserWindow',
        'must_contain' => 
        array (
          0 => 'BrowserWindow',
        ),
        'hint' => 'new BrowserWindow({ ... })',
        'explanation' => 'Create app window.',
        'pro_tip' => 'loadURL vs loadFile.',
      ),
    ),
  ),
  2 => 
  array (
    'slug' => 'el-ipc',
    'order' => 3,
    'title' => 'IPC preload bridge',
    'level' => 'Intermedio',
    'minutes' => 35,
    'summary' => 'contextBridge, ipcRenderer.',
    'concepts' => 
    array (
      0 => 'ipc',
      1 => 'preload',
      2 => 'contextbridge',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Preload',
        'body' => 'contextBridge.exposeInMainWorld("api", { readFile: () => ipcRenderer.invoke("read") })',
        'code' => 'console.log(\'Practica: el-ipc\');',
      ),
      1 => 
      array (
        'heading' => 'invoke/handle',
        'body' => 'Main: ipcMain.handle("read", async () => fs.readFile(...)) — async request/response.',
        'code' => 'console.log(\'Practica: el-ipc\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿contextBridge?',
        'options' => 
        array (
          0 => 'Expose safe APIs renderer',
          1 => 'Merge Node renderer',
          2 => 'CSS bridge',
        ),
        'answer' => 'Expose safe APIs renderer',
        'explanation' => 'Whitelist capabilities.',
        'pro_tip' => 'Never expose full ipcRenderer.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿ipc invoke vs send?',
        'options' => 
        array (
          0 => 'invoke returns Promise response',
          1 => 'send synchronous only',
          2 => 'No difference',
        ),
        'answer' => 'invoke returns Promise response',
        'explanation' => 'handle/on pattern.',
        'pro_tip' => 'Validate all IPC inputs main.',
      ),
    ),
  ),
  3 => 
  array (
    'slug' => 'el-window',
    'order' => 4,
    'title' => 'Menus, tray y native',
    'level' => 'Intermedio',
    'minutes' => 30,
    'summary' => 'Menu, Tray, dialog nativos.',
    'concepts' => 
    array (
      0 => 'menu',
      1 => 'tray',
      2 => 'dialog',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Menu',
        'body' => 'Menu.buildFromTemplate — File/Edit app menu cross-platform.',
        'code' => 'console.log(\'Practica: el-window\');',
      ),
      1 => 
      array (
        'heading' => 'Tray',
        'body' => 'Tray icon background app — minimize to tray pattern.',
        'code' => 'console.log(\'Practica: el-window\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿dialog.showOpenDialog?',
        'options' => 
        array (
          0 => 'Native file picker OS',
          1 => 'HTML input only',
          2 => 'Terminal',
        ),
        'answer' => 'Native file picker OS',
        'explanation' => 'Main process API.',
        'pro_tip' => 'macOS menu bar differences.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Platform differences?',
        'options' => 
        array (
          0 => 'Test Win/Mac/Linux behaviors',
          1 => 'Identical always',
          2 => 'Windows only',
        ),
        'answer' => 'Test Win/Mac/Linux behaviors',
        'explanation' => 'Menu roles platform-specific.',
        'pro_tip' => 'electron-builder targets.',
      ),
    ),
  ),
  4 => 
  array (
    'slug' => 'el-packager',
    'order' => 5,
    'title' => 'Packaging',
    'level' => 'Práctica',
    'minutes' => 35,
    'summary' => 'electron-builder, code sign.',
    'concepts' => 
    array (
      0 => 'builder',
      1 => 'sign',
      2 => 'asar',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'electron-builder',
        'body' => 'build mac dmg, win exe/nsis, linux AppImage — auto-update support.',
        'code' => 'console.log(\'Practica: el-packager\');',
      ),
      1 => 
      array (
        'heading' => 'Code signing',
        'body' => 'Apple Developer + Windows cert — evita "unknown publisher" warnings.',
        'code' => 'console.log(\'Practica: el-packager\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿asar archive?',
        'options' => 
        array (
          0 => 'Pack app source single file',
          1 => 'Database',
          2 => 'Video codec',
        ),
        'answer' => 'Pack app source single file',
        'explanation' => 'Read-only app bundle.',
        'pro_tip' => 'Not encryption — obfuscation minimal.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Auto-update library?',
        'options' => 
        array (
          0 => 'electron-updater',
          1 => 'git pull',
          2 => 'npm update',
        ),
        'answer' => 'electron-updater',
        'explanation' => 'Squirrel/GitHub releases.',
        'pro_tip' => 'Code sign required macOS auto-update.',
      ),
    ),
  ),
  5 => 
  array (
    'slug' => 'el-prod',
    'order' => 6,
    'title' => 'Producción y alternativas',
    'level' => 'Producción',
    'minutes' => 30,
    'summary' => 'Performance, Tauri, updates.',
    'concepts' => 
    array (
      0 => 'performance',
      1 => 'tauri',
      2 => 'update',
    ),
    'sections' => 
    array (
      0 => 
      array (
        'heading' => 'Performance',
        'body' => 'Electron heavy RAM — lazy load windows, avoid unnecessary renderers.',
        'code' => 'console.log(\'Practica: el-prod\');',
      ),
      1 => 
      array (
        'heading' => 'Tauri',
        'body' => 'Rust shell + webview OS native — 10x smaller binary alternative evaluate.',
        'code' => 'console.log(\'Practica: el-prod\');',
      ),
    ),
    'exercises' => 
    array (
      0 => 
      array (
        'type' => 'choice',
        'question' => '¿Electron downside?',
        'options' => 
        array (
          0 => 'Large bundle RAM Chromium each app',
          1 => 'No cross-platform',
          2 => 'No Node',
        ),
        'answer' => 'Large bundle RAM Chromium each app',
        'explanation' => 'Tauri/Flutter desktop alt.',
        'pro_tip' => 'Curso Flutter desktop possible.',
      ),
      1 => 
      array (
        'type' => 'choice',
        'question' => '¿Squirrel.Windows?',
        'options' => 
        array (
          0 => 'Install/update mechanism Windows',
          1 => 'Database',
          2 => 'Testing tool',
        ),
        'answer' => 'Install/update mechanism Windows',
        'explanation' => 'electron-builder integrates.',
        'pro_tip' => 'Crash reporting Sentry electron.',
      ),
    ),
  ),
);
