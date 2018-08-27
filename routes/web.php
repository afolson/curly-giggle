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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/', 'PokemonController@all');
$router->get('/pokemon', 'PokemonController@index');

$router->post('/pokemon', 'PokemonController@store');

$router->get('/pokemon/{id:[\d]+}', [
    'as' => 'pokemon.show',
    'uses' => 'PokemonController@show'
]);


// PUT $id
$router->put('/pokemon/{id:[\d]+}', 'PokemonController@update');

// DELETE $id
//$app->delete('/pokemon/{id:[\d]+}', 'PokemonController@destroy');
