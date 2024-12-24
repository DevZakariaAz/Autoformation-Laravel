<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/admin', function () {
    return 'Admin Dashboard';
})->middleware('role:admin');

Route::get('/editor', function () {
    return 'Editor Dashboard';
})->middleware('role:editor');