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


Auth::routes();
Route::resource('scripts', ScriptController::class)->middleware('auth');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');})->name('dashboard');
Route::get('/starten', [App\Http\Controllers\ScriptController::class, 'starten']);
Route::get('/', [App\Http\Controllers\ScriptController::class, 'starten']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/scripts/{id}', [ScriptController::class, 'deleteScript'])->middleware('auth');
Route::get('/export', [App\Http\Controllers\ScriptController::class, 'exportData'])->middleware('auth');







