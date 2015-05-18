<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('users', 'UsersController@getInfos');
//Route::post('users', 'UsersController@postInfos');

Route::controller('users', 'UsersController');

//Route::get('/', 'WelcomeController@index');
Route::get('/', function()
{
    return View::make('welcome');
});

Route::get('{n}', function($n)
{
    return 'Je suis la page ' . $n . ' !'; }
)->where('n', '[1-3]');

Route::get('vue1', function()
{
    return view('vue1');
});

/*** route des joueurs **/
Route::get('player/{n}', 'PlayerController@show')->where('n', '[0-9]+');

get('article/{n}', function($n)
{
    return view('article')->with('numero', $n);
})->where('n', '[0-9]+');

Route::get('facture/{n}', function($n)
{
    return view('facture')->withNumero($n);
})->where('id', '[0-9]+');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
