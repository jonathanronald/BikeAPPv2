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
//users

$app->get('/users/', 'UserController@index');
$app->post('/users/', 'UserController@store');
$app->get('/users/{user_id}', 'UserController@show');
$app->put('/users/{user_id}', 'UserController@update');
$app->delete('/users/{user_id}', 'UserController@destroy');

//trip

$app->get('/trips/', 'TripController@index');
$app->post('/trips/', 'TripController@store');
$app->get('/trips/{trip_id}', 'TripController@show');
$app->put('/trips/{trip_id}', 'TripController@update');
$app->delete('/trips/{trip_id}', 'TripController@destroy');

// Request Access Tokens
$app->post('/oauth/access_token', function() use ($app){
    return response()->json($app->make('oauth2-server.authorizer')->issueAccessToken());
});