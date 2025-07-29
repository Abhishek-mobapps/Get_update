@echo off
cd /d "%~dp0"
git add .
git commit -m "Auto commit - %date% %time%" >nul 2>&1
git push origin main >nul 2>&1
