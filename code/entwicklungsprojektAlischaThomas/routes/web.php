<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testController;
use App\Http\Controllers\sharkController;
use App\Http\Controllers\ScriptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
Route::get('/index', [App\Http\Controllers\ScriptController::class, 'index']);


Route::get('/starten', function () {
    return view('scripts.starten');
});


Route::resource('scripts', ScriptController::class);


Route::get('', function () {
    return view('scripts.starten');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Controller mit Funktion exportData importieren
Route::get('/export', [App\Http\Controllers\ScriptController::class, 'exportData']);

