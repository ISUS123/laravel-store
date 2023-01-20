<?php

use App\Http\Controllers\MainController;
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

Route::get('/', 'MainController@index');
Route::get('/about_company', 'MainController@about_company');
Route::get('/catalog', 'MainController@index');
Route::get('/product/{product?}', 'MainController@product');
Route::get('/location', 'MainController@location');
Route::get('/login', 'MainController@login');
Route::get('/register', 'MainController@register');