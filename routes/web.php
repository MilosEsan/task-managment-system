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

Route::pattern('path', '[a-zA-Z0-9-/]+');
Route::any( '{path}', function( $page ) {   
     return view('welcome');
});

Route::redirect('/', '/todos', 301);
