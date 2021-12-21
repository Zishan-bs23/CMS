<?php

use App\Http\Controllers\HomeController;
use App\Http\Livewire\Quarters;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::view('quarters/index', 'quarters-index')->name('quarters.index');
Route::view('salary-reviews/index', 'salary-reviews-index')->name('salary-reviews.index');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/home/users-action', [HomeController::class, 'action'])->name('users.action');