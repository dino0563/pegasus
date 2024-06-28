<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user/home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/about-us', function () {
    return view('user/about-us');
});

Route::get('/portfolio', function () {
    return view('user/portfolio');
});

Route::get('/blog', function () {
    return view('user/blog');
});

Route::get('/contact-us', function () {
    return view('user/contact-us');
});

Route::get('/admin', function () {
    return view('admin/index');
});
Route::get('/manage-blog', function () {
    return view('admin/blog');
});
Route::get('/manage-portfolio', function () {
    return view('admin/portfolio');
});
Route::get('/manage-user', function () {
    return view('admin/user');
});
