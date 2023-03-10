<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::middleware('locale')->group(function () {
    Route::get('/', fn () => view('welcome'));

    Route::view('articles', 'articles')->name('articles');
    Route::view('about', 'about')->name('about');
    Route::view('contact', 'contact')->name('contact');

    Route::controller(LanguageController::class)->group(function () {
        Route::get('language', 'create')->name('language');
        Route::post('language', 'store');
    });

    Route::get('/dashboard', fn () => view('dashboard'))->middleware(['auth', 'verified'])->name('dashboard');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
});
