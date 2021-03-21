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

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::view('/user', 'file_user'); // memanggil dengan cara ini akan lebih singkat
// vaariabel , nama_file

Route::view('/admin', 'admin.form_admin'); // memanggil dengan cara ini akan lebih singkat
// vaariabel , nama_file dan folder
