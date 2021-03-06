<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('index');
Route::get('/produits', [App\Http\Controllers\ProductsController::class, 'index'])->name('products');
Route::get('/produit/{product}', [App\Http\Controllers\ProductsController::class, 'show'])->name('products.show');
Route::get('/apropos', [App\Http\Controllers\AboutController::class, 'index'])->name('apropos');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::post('/contact/envoyer', [App\Http\Controllers\ContactController::class, 'mailContactForm'])->name('mailContactForm');
Route::get('/contact/reload-captcha', [App\Http\Controllers\ContactController::class, 'reloadCaptcha'])->name('reloadCaptcha');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
