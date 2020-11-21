<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\sharkController;

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
