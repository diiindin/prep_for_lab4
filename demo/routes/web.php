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
Route::get('/myName/{id?}/{phone?}', function ($id=0, $phone=0) {
    return "Phone number is ".$phone." and id is ".$id;
});
Route::get('/info', function () {
    return view('name');
});