<?php

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

$router->get('/key', 'ExampleController@key');

$router->get('/menu', [
    'uses' => 'MenuController@index',
    'as' => 'list_menu'
]);

function kategori($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
kategori($router, '/kategori', 'KategoriController');

function menu($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
menu($router, '/menu', 'MenuController');


// function kategori($router, $uri, $controller){
//     $router->get($uri.'/{id}', $controller.'@getKategori');
//     $router->post($uri, $controller.'@postKategori');
// }
// kategori($router, '/kategori', 'TblKategori');

function order($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
order($router, '/order', 'OrderController');

function user($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
user($router, '/user', 'UserController');

order($router, '/order', 'OrderController');

function pelanggan($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
pelanggan($router, '/pelanggan', 'PelangganController');

function order_detail($router, $uri, $controller){
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');

    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');

    $router->delete($uri.'/{id}', $controller.'@destroy');

}
order_detail($router, '/order_detail', 'OrderDetailController');