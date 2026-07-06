@echo off
setlocal
cd /d "%~dp0.."

echo ==^> EscalaPHP deploy (requiere Docker Desktop)
where docker >nul 2>&1 || (
    echo Docker no encontrado. Instala Docker Desktop o usa DEPLOY.md para VPS manual.
    exit /b 1
)

if not exist .env (
    copy .env.production.example .env
    echo Creado .env — edita APP_URL, APP_KEY y ADMIN_PASSWORD antes de exponer a internet.
)

docker compose -f docker-compose.prod.yml up -d --build
echo.
echo Verifica: http://localhost/health
echo Admin: http://localhost/admin/login
endlocal
