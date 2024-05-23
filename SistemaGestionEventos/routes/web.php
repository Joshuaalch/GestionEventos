<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

// Página de bienvenida o landing page
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/inicio', function () {
    return view('inicio');
})->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
