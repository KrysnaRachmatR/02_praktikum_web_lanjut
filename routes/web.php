<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route :: get('/', function(){
    echo "Selamat Datang";
});

route :: get('about', function(){
    echo "NIM : 2141720219 <br>";
    echo "NAMA : Krysna Rachmat Ramadhan Budiono <br>"; 
    echo "KELAS : 2H";
});

route :: get('articles/{id}', function($id){
    echo "Selamat Duataang di Artikel".$id;
});

/*
Route::get('/index', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);
*/

