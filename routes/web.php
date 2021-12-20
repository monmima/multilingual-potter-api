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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/test', function () {
//     return view('test');
// });

Route::get('/characters', 'App\Http\Controllers\CharacterController@index');
Route::get('/character/{id}', "App\Http\Controllers\CharacterController@edit");

Route::get('/test', function () {
    $string = "This is my super string!";
    return view('test', compact("string"));
});

