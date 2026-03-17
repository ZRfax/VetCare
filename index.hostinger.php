<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| INDEX.PHP PARA HOSTINGER
|--------------------------------------------------------------------------
| Este archivo reemplaza public_html/index.php cuando se sube el proyecto
| con la estructura:
|
|   public_html/
|   ├── index.php          ← este archivo (renombrado)
|   ├── .htaccess          ← copiado de public/.htaccess
|   ├── build/             ← copiado de public/build/
|   ├── img/               ← copiado de public/img/
|   ├── favicon.ico        ← copiado de public/favicon.ico
|   ├── robots.txt         ← copiado de public/robots.txt
|   └── vetcare/           ← resto del proyecto Laravel
|       ├── app/
|       ├── bootstrap/
|       ├── vendor/
|       └── ...
|
*/

$laravelPath = __DIR__ . '/vetcare';

// Maintenance mode
if (file_exists($maintenance = $laravelPath . '/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoloader
require $laravelPath . '/vendor/autoload.php';

// Bootstrap Laravel
/** @var Application $app */
$app = require_once $laravelPath . '/bootstrap/app.php';

$app->handleRequest(Request::capture());
