<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\KoszykController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegulaminController;
use App\Http\Controllers\KonkursController;
use App\Http\Controllers\FavoriteController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    // Trasa do dashboardu, wyświetla produkty w koszyku
    Route::get('/dashboard', [KoszykController::class, 'index'])->name('dashboard');

    // Trasa do dodania produktu do koszyka (dodawanie do dashboard)
    Route::post('/dashboard/koszyk/store/{productId}', [KoszykController::class, 'store'])->name('koszyk.store');

    // Trasa do aktualizowania ilości produktu w koszyku
    Route::put('/dashboard/{koszykId}', [KoszykController::class, 'update'])->name('koszyk.update');

    // Trasa do usuwania produktu z koszyka
    Route::delete('/dashboard/{koszykId}', [KoszykController::class, 'destroy'])->name('koszyk.destroy');

    // Trasa do składania zamówień
    Route::post('/checkout', [KoszykController::class, 'checkout'])->name('koszyk.checkout');

    // Trasa do wyświetlenia zamówień użytkownika
    Route::get('/profile', [OrderController::class, 'userOrders'])->name('profile.edit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/zamowienia', [OrderController::class, 'index'])->name('admin.orders.index');
    Route::put('/zamowienia/{order}', [OrderController::class, 'update'])->name('admin.orders.update');
});

Route::get('/products', [ProductController::class, 'index'])
    ->name('products.index');  // Zmieniamy tutaj na /products
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');


Route::get('/onas', function () {
    return view('onas');
})->name('onas');

Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

/*Route::get('/zamowienia', function () {
    return view('zamowienia');
});*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('books', BookController::class);
});

require __DIR__ . '/auth.php';

Route::resource('/comments', CommentController::class);
// trasa Products
Route::resource('/products', ProductController::class);

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
    // Trasa do zapisywania edytowanych produktów
    Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::get('/regulamin', [RegulaminController::class, 'index'])->name('regulamin');

Route::middleware(['auth'])->group(function () {
    Route::get('/konkurs', [KonkursController::class, 'showForm'])->name('konkurs.show');
    Route::post('/konkurs/submit', [KonkursController::class, 'store'])->name('konkurs.submit');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/zgloszenia', [KonkursController::class, 'index'])->name('konkurs.index');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/favorites', [FavoriteController::class, 'index'])->name('favorites.index');
    Route::post('/favorites/{product}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{product}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
});
