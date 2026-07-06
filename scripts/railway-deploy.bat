@echo off
setlocal
cd /d "%~dp0.."

where railway >nul 2>&1 || (
    echo Railway CLI no encontrado.
    echo Instala: npm i -g @railway/cli
    echo Luego: railway login
    exit /b 1
)

echo ==^> EscalaPHP -^> Railway
railway up --detach
echo.
echo Siguiente:
echo   railway domain
echo   railway logs
echo.
echo IMPORTANTE: anade volumenes en el dashboard Railway:
echo   /var/www/html/database
echo   /var/www/html/storage
echo.
echo Ver RAILWAY.md
endlocal
