<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\sharkController;
//use App\Http\Controllers\EintraegeController;
//use App\Http\Controllers\DrehbuchController;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);





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

//aufgabe2
Route::get('test', [testController::class, "test"]);
Route::get('para/{para}', [testController::class, "parameter"]);

//browsereingabe: http://myproject1.test:8000/para/irgendwas

/*
//aufgabe3
Route::get('test/{para}', function ($para) {
    return view('test', ['para' => $para]);
});*/

//Aufgabe4
Route::get('arrayAufrufenPfad', [testController::class, "arrayAusgeben"]);

Route::resource('sharks', sharkController::class);

Route::get('/start', function () {
    return view('einfuehrungDrehbuchErsteller');
});

Route::get('/start', function () {
    $nameKey = request('nameKey');
    return view('einfuehrungDrehbuchErsteller',['nameKey' => $nameKey]);});



//Connection zum Controller für Drehbuecher herstellen
//Route::resource('drehbuecher', \App\Http\Controllers\DrehbuchController::class);


//Connection zum Controller für Eintraege herstellen
//Route::resource('eintraege', \App\Http\Controllers\EintraegeController::class);





