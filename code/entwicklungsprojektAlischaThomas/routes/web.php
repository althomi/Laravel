<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exportController;
use App\Http\Controllers\sharkController;
use App\Http\Controllers\ScriptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Http\Controllers\ProductController;



Route::get('/index', [App\Http\Controllers\ScriptController::class, 'index']);

//Funktion um View auszugeben
/*Route::get('/starten', function () {
    return view('scripts.starten');
});
Route::get('', function () {
    return view('scripts.starten');
});*/

//eigentlich werden eher folgende Routen benutzt, die zu Controller führen, der Funktion beinhaltet, die ausgegeben wird.

Route::get('/starten', [App\Http\Controllers\ScriptController::class, 'starten']);
Route::get('/', [App\Http\Controllers\ScriptController::class, 'starten']);


//View/Funktion enablen
Route::get('/admin/product','Productcontroller@index');
Route::resource('scripts', ScriptController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/export', [App\Http\Controllers\ScriptController::class, 'exportData']);

//dynamische Route
Route::delete('/scripts/{id}', [ScriptController::class, 'deleteScript']);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
