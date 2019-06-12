<?php

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
    return view('home');
})->name('index');

Route::get('galeria', function () {
    return view('galeria');
})->name('galery');

Route::get('about', function () {
    return view('about');
})->name('abouts');

Route::get('prueba', function () {
	
	$trabajo = ['malo','bueno','odio','risa','gracias','varios','open','templatess','atom','sublime','carai','dicho','halo','infinity','work','117'];

    //return view('beta',['trabajos'=>$trabajo]);
    return view ('beta',compact('trabajo'));
})->name('test');