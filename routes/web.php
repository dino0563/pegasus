<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';
Route::get('/', [PortfolioController::class, 'show']);
Route::get('/portfolio', [PortfolioController::class, 'display']);
Route::get('/blog', [BlogController::class, 'show']);

// ROUTE USER
Route::get('/about-us', function () {
    return view('user/about-us');
});


Route::get('/contact-us', function () {
    return view('user/contact-us');
});


Route::get('/dashboard', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ROUTE PORTFOLIO
    Route::get('/manage-portfolio',[PortfolioController::class,'index'])->name('portfolio.index');
    Route::get('/add-portfolio',[PortfolioController::class,'create'])->name('portfolio.create');
    Route::post('/add-portfolio',[PortfolioController::class,'store'])->name('portfolio.store');
    Route::get('/edit-portfolio/{Portfolio_id}',[PortfolioController::class,'edit'])->name('portfolio.edit');
    Route::put('/update-portfolio/{Portfolio_id}',[PortfolioController::class,'update'])->name('portfolio.update');
    Route::get('/delete-portfolio/{portfolio_id}',[PortfolioController::class,'destroy'])->name('portfolio.delete');

    // ROUTE BLOG
    Route::get('/manage-blog',[BlogController::class,'index'])->name('blog.index');
    Route::get('/add-blog',[BlogController::class,'create'])->name('blog.create');
    Route::post('/add-blog',[BlogController::class,'store'])->name('blog.store');
    Route::get('/delete-blog/{blog_id}',[BlogController::class,'destroy'])->name('blog.delete');

    // ROUTE USER
    Route::get('/manage-user',[UserController::class,'index'])->name('user.index');
    Route::get('/add-user',[UserController::class,'create'])->name('user.create');
    Route::post('/add-user',[UserController::class,'store'])->name('user.store');
    Route::get('/delete-user/{user_id}',[UserController::class,'destroy'])->name('user.delete');

});

require __DIR__.'/auth.php';


Route::get('/admin', function () {
    return view('admin/index');
})->middleware(['auth', 'verified'])->name('admin');


