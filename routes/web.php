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

Route::get('file1', function () {
    return view('file1');
});

Route::get('file2', function () {
    return view('file2');
});

Route::get('file3', function () {
    return view('file3');
});

Route::get('file4', function () {
    return view('file4');
});

Route::get('file5', function () {
    return view('file5');
});

Route::get('file6', function () {
    return view('file6');
});

Route::get('file7', function () {
    return view('file7');
});

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('tugas2', function () {
    return view('tugas2');
});

Route::get('tugas3', function () {
    return view('tugas3');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');

Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');
