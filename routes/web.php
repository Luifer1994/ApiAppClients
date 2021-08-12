<?php
use App\Http\Controllers\PaisesController;
use Illuminate\Support\Facades\Route;

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//$router->get('/paises', ['PaisesController@index']);

$router->get('paises', [
    'as' => 'paises', 'uses' => 'PaisesController@index'
]);
$router->post('paises/store', [
    'as' => 'paises/store', 'uses' => 'PaisesController@store'
]);

$router->get('departamentos', [
    'as' => 'departamentos', 'uses' => 'DepartamentosController@index'
]);

$router->post('departamentos/store', [
    'as' => 'departamentos/store', 'uses' => 'DepartamentosController@store'
]);