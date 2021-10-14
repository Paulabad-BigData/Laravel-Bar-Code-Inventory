<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ElementController;
use App\Http\Controllers\ResgInvController;
use App\Http\Controllers\RepInvController;
use App\Http\Controllers\GenBarController;

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('regist', function(){
    return view('barras/regist');
});


Route::get('/registerI', function () {
    return view('barras/registerInventor');
  });
  
Route::post('/update_element_post',[ElementController::class, 'update_element_post']);

Route::resource('barras',ElementController::class);

Route::resource('registerI',ResgInvController::class);

Route::resource('reporteI',RepInvController::class);

Route::get('reporteI',[RepInvController::class,'search']);

Route::resource('/generateC',GenBarController::class);



//Route::get('/barras/generateC',[ElementController::class,'show']);

/*
Route::get('barras/generateC', function () {
    return view('barras/generateBarCode');
});
*/
//Route::get('/generateB', [App\Http\Controllers\GenBarController::class, 'generateBarcode'])->name('showbarcode2');

