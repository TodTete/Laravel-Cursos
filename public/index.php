<?php
//Este proyecto fue realizado por :
// Ricardo Vallejo Sánchez
// Gmail: vallejoricardo3@gmail.com
// Dedicado a mi esposa : 
// Angelica M. G. 
use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));


if (file_exists(__DIR__.'/../storage/framework/maintenance.php')) {
    require __DIR__.'/../storage/framework/maintenance.php';
}



require __DIR__.'/../vendor/autoload.php';


$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = tap($kernel->handle(
    $request = Request::capture()
))->send();

$kernel->terminate($request, $response);
