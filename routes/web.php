<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Beranda
|--------------------------------------------------------------------------
*/
Route::view('/', 'index')->name('home');

// Varian beranda (opsional, bisa dihapus kalau tidak dipakai)
Route::prefix('home')->name('home.')->group(function () {
    Route::view('/university', 'home-variants.university')->name('university');
    Route::view('/university-onepage', 'home-variants.university-onepage')->name('university-onepage');
    Route::view('/courses', 'home-variants.courses')->name('courses');
    Route::view('/courses-onepage', 'home-variants.courses-onepage')->name('courses-onepage');
    Route::view('/admission', 'home-variants.admission')->name('admission');
    Route::view('/admission-onepage', 'home-variants.admission-onepage')->name('admission-onepage');
});

/*
|--------------------------------------------------------------------------
| Halaman Statis
|--------------------------------------------------------------------------
*/
Route::view('/about', 'about')->name('about');
Route::view('/campus', 'campus')->name('campus');
Route::view('/alumni', 'alumni')->name('alumni');
Route::view('/faq', 'faq')->name('faq');
Route::view('/pricing', 'pricing')->name('pricing');
Route::view('/contact', 'contact')->name('contact');
Route::view('/typography', 'typography')->name('typography');
Route::view('/error', 'error')->name('error');

/*
|--------------------------------------------------------------------------
| Program Studi
|--------------------------------------------------------------------------
*/
Route::prefix('program')->name('program.')->group(function () {
    Route::view('/', 'program.index')->name('index');
    Route::view('/program-2', 'program.program-2')->name('program-2');
    Route::view('/details', 'program.details')->name('details');
    Route::view('/details-sidebar', 'program.details-sidebar')->name('details-sidebar');
});

/*
|--------------------------------------------------------------------------
| Dosen / Pengajar
|--------------------------------------------------------------------------
*/
Route::prefix('teacher')->name('teacher.')->group(function () {
    Route::view('/', 'teacher.index')->name('index');
    Route::view('/details', 'teacher.details')->name('details');
});

Route::prefix('faculty')->name('faculty.')->group(function () {
    Route::view('/', 'faculty.index')->name('index');
    Route::view('/details', 'faculty.details')->name('details');
});

/*
|--------------------------------------------------------------------------
| Berita / Blog
|--------------------------------------------------------------------------
*/
Route::prefix('blog')->name('blog.')->group(function () {
    Route::view('/', 'blog.index')->name('index');
    Route::view('/details', 'blog.details')->name('details');
    Route::view('/details-sidebar', 'blog.details-sidebar')->name('details-sidebar');
});

/*
|--------------------------------------------------------------------------
| Event / Kegiatan
|--------------------------------------------------------------------------
*/
Route::prefix('event')->name('event.')->group(function () {
    Route::view('/', 'event.index')->name('index');
    Route::view('/details', 'event.details')->name('details');
});

/*
|--------------------------------------------------------------------------
| Penelitian
|--------------------------------------------------------------------------
*/
Route::prefix('research')->name('research.')->group(function () {
    Route::view('/', 'research.index')->name('index');
    Route::view('/details', 'research.details')->name('details');
});

/*
|--------------------------------------------------------------------------
| Shop (bawaan template, hapus jika tidak diperlukan prodi)
|--------------------------------------------------------------------------
*/
Route::prefix('shop')->name('shop.')->group(function () {
    Route::view('/', 'shop.index')->name('index');
    Route::view('/details', 'shop.details')->name('details');
    Route::view('/cart', 'shop.cart')->name('cart');
    Route::view('/checkout', 'shop.checkout')->name('checkout');
    Route::view('/wishlist', 'shop.wishlist')->name('wishlist');
});

/*
|--------------------------------------------------------------------------
| Fallback 404
|--------------------------------------------------------------------------
*/
Route::fallback(fn () => response()->view('error', [], 404));