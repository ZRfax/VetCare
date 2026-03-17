# ============================================================
# Script de preparacion para subir VetCare a Hostinger
# Ejecutar desde la raiz del proyecto:
#   .\preparar-hostinger.ps1
# ============================================================

$projectRoot = $PSScriptRoot
$outputDir   = "$projectRoot\..\VetCare-Hostinger"

Write-Host ""
Write-Host "================================================" -ForegroundColor Cyan
Write-Host "  Preparando VetCare para Hostinger..." -ForegroundColor Cyan
Write-Host "================================================" -ForegroundColor Cyan
Write-Host ""

# 1. Compilar assets
Write-Host "[1/5] Compilando assets con Vite..." -ForegroundColor Yellow
Set-Location $projectRoot
npm run build
Write-Host "      OK - Assets compilados en public/build/" -ForegroundColor Green

# 2. Crear carpeta de salida limpia
Write-Host "[2/5] Creando carpeta de salida..." -ForegroundColor Yellow
if (Test-Path $outputDir) { Remove-Item $outputDir -Recurse -Force }
New-Item -ItemType Directory -Path $outputDir | Out-Null
New-Item -ItemType Directory -Path "$outputDir\public_html" | Out-Null
New-Item -ItemType Directory -Path "$outputDir\public_html\vetcare" | Out-Null
Write-Host "      OK - Carpeta: $outputDir" -ForegroundColor Green

# 3. Copiar contenido de public/ a public_html/
Write-Host "[3/5] Copiando archivos publicos a public_html/..." -ForegroundColor Yellow
Copy-Item "$projectRoot\public\*" "$outputDir\public_html\" -Recurse -Force
# Reemplazar index.php con el especial de Hostinger
Copy-Item "$projectRoot\index.hostinger.php" "$outputDir\public_html\index.php" -Force
Write-Host "      OK - Archivos publicos copiados" -ForegroundColor Green

# 4. Copiar proyecto Laravel a public_html/vetcare/
Write-Host "[4/5] Copiando proyecto Laravel a vetcare/..." -ForegroundColor Yellow
$exclude = @('node_modules', '.git', 'public', '.claude', 'VetCare-Hostinger', 'preparar-hostinger.ps1', 'index.hostinger.php', '.env', '.env.production')

Get-ChildItem $projectRoot | Where-Object {
    $_.Name -notin $exclude
} | ForEach-Object {
    Copy-Item $_.FullName "$outputDir\public_html\vetcare\$($_.Name)" -Recurse -Force
}

# Copiar .env.production como .env
Copy-Item "$projectRoot\.env.production" "$outputDir\public_html\vetcare\.env" -Force
Write-Host "      OK - Proyecto copiado" -ForegroundColor Green

# 5. Crear carpetas necesarias vacias (storage)
Write-Host "[5/5] Asegurando carpetas de storage..." -ForegroundColor Yellow
$storageDirs = @(
    "framework\cache\data",
    "framework\sessions",
    "framework\views",
    "logs",
    "app\public"
)
foreach ($dir in $storageDirs) {
    $path = "$outputDir\public_html\vetcare\storage\$dir"
    if (-not (Test-Path $path)) {
        New-Item -ItemType Directory -Path $path | Out-Null
    }
    # Crear .gitkeep
    $null | Out-File "$path\.gitkeep" -Encoding utf8
}
Write-Host "      OK - Carpetas de storage listas" -ForegroundColor Green

Write-Host ""
Write-Host "================================================" -ForegroundColor Green
Write-Host "  LISTO! Estructura generada en:" -ForegroundColor Green
Write-Host "  $outputDir" -ForegroundColor White
Write-Host "================================================" -ForegroundColor Green
Write-Host ""
Write-Host "SIGUIENTE PASO: Edita el .env antes de subir:" -ForegroundColor Yellow
Write-Host "  $outputDir\public_html\vetcare\.env" -ForegroundColor White
Write-Host ""
Write-Host "  - Cambia APP_URL=https://tudominio.com" -ForegroundColor White
Write-Host "  - Cambia DB_DATABASE, DB_USERNAME, DB_PASSWORD" -ForegroundColor White
Write-Host "  - (Datos los encuentras en hPanel > Bases de datos)" -ForegroundColor White
Write-Host ""
