<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');

Route::post('/create', 'MessageController@create');

Route::get('/message/{id}', 'MessageController@view');

Route::get('/welcome', function () {
    return view('welcome');
});


// Route::get('/getting', function () {
//     echo "I'm sending a GET request!";
// });

// Route::post('/postting', function () {
//     echo "I'm sending a POST request!";
// });
