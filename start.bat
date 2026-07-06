@echo off
set PHP=%~dp0tools\php\php.exe
set COMPOSER=%~dp0tools\composer.phar

if not exist "%PHP%" (
  echo PHP portable no encontrado en tools\php. Lee README.md
  exit /b 1
)

if not exist vendor\autoload.php (
  echo Instalando dependencias...
  "%PHP%" "%COMPOSER%" install --no-interaction
)

echo.
echo  EscalaPHP corriendo en http://localhost:8000
echo  Presiona Ctrl+C para detener
echo.

"%PHP%" -S localhost:8000 -t public public\router.php
