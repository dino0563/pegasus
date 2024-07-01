<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';
Route::get('/', [PortfolioController::class, 'show']);
// Route::get('/portfolio/details/{slug}', [PortfolioController::class, 'show_details'])->name('portfolio.details');


// ROUTE USER
Route::get('/about-us', function () {
    return view('user/about-us');
});

Route::get('/contact-us', function () {
    return view('user/contact-us');
});

Route::get('/service/solusi', function () {
    return view('user.service.solusi');
});
Route::get('/service/layanan-handal-responsif', function () {
    return view('user.service.layanan-handal-responsif');
});
Route::get('/service/memberi-manfaat-bagi-masyarakat', function () {
    return view('user.service.memberi-manfaat-bagi-masyarakat');
});

Route::get('/blog', [BlogController::class, 'show'])->name('blog');
Route::get('/blog/details/{slug}', [BlogController::class, 'detailBlog'])->name('blog.detail');

Route::get('/portfolio', [PortfolioController::class, 'display'])->name('portfolio');
Route::get('/portfolio/details/{slug}', [PortfolioController::class, 'detailPortfolio'])->name('portfolio.detail');

Route::get('/dashboard', function () {
    return view('admin/dashboard/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //ROUTE USER SETTINGS
    Route::get('/profile/edit', [ProfileController::class, 'editProfile'])->name('profile.index');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('profile.updatee');
    Route::post('/profile/photo', [ProfileController::class, 'updateProfilePhoto'])->name('profile.photo'); // Pastikan fungsi ini ada di controller Anda

    // ROUTE PORTFOLIO
    Route::get('/manage-portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/add-portfolio', [PortfolioController::class, 'create'])->name('portfolio.create');
    Route::post('/add-portfolio', [PortfolioController::class, 'store'])->name('portfolio.store');
    Route::get('/edit-portfolio/{Portfolio_id}', [PortfolioController::class, 'edit'])->name('portfolio.edit');
    Route::post('/update-portfolio/{Portfolio_id}', [PortfolioController::class, 'update'])->name('portfolio.update');
    Route::get('/delete-portfolio/{portfolio_id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');
    Route::delete('/delete-portfolio/{portfolio_id}', [PortfolioController::class, 'destroy'])->name('portfolio.delete');

    // ROUTE BLOG
    Route::get('/manage-blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/add-blog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/add-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/delete-blog/{blog_id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::delete('/delete-blog/{blog_id}', [BlogController::class, 'destroy'])->name('blog.delete');
    Route::get('/edit-blog/{blog_id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/update-blog/{blog_id}', [BlogController::class, 'update'])->name('blog.update');

    // ROUTE USER
    Route::get('/manage-user', [UserController::class, 'index'])->name('user.index');
    Route::get('/add-user', [UserController::class, 'create'])->name('user.create');
    Route::post('/add-user', [UserController::class, 'store'])->name('user.store');
    Route::get('/delete-user/{user_id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::delete('/delete-user/{user_id}', [UserController::class, 'destroy'])->name('user.delete');
    Route::get('/edit-user/{user_id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/update-user/{user_id}', [UserController::class, 'update'])->name('user.update');
});

require __DIR__ . '/auth.php';

Route::get('/admin', function () {
    return view('admin/dashboard/index');
})->middleware(['auth', 'verified'])->name('admin');
