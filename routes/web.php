<?php

use App\Http\Controllers\AuthorController;

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

Route::get('/author', 'AuthorController@index');
//tutti i post
//Route::resource('post', 'PostController');

Route::resource('post', PostController::class);

//solo i commenti relativi ad ogni post
route::resource('comment','PostController');
