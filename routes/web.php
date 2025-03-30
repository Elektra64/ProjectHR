<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// });

// Temporary route for testing
Route::get('/dev-login', function () {
    Auth::loginUsingId(1); // Log in as user ID=1
    return redirect('/home'); // Redirect to dashboard
});