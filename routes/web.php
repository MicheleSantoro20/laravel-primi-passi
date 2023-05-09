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



    $data= [
        'img'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png',
        'hello'=> 'Hello World!'
    ];

    return view('home',$data,);
})->name('homepage');
Route::get('about', function () {



    $data= [
        'img'=> 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/985px-Laravel.svg.png',
        'txt'=> 'Redirect page...'
    ];

    return view('about',$data,);
})->name('redirect');
