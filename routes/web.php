<?php

use App\Http\Controllers\dashbord\AdminCategoryController;
use App\Http\Controllers\dashbord\AdminContactController;
use App\Http\Controllers\dashbord\AdminHomeController;
use App\Http\Controllers\dashbord\AdminLoginController;
use App\Http\Controllers\dashbord\ProductController;
use App\Http\Controllers\dashbord\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/products/{id}', [HomeController::class, 'products'])->name('products');
Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/cart', [HomeController::class, 'cart'])->name('cart');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact', [HomeController::class, 'contactSend'])->name('contactSend');
Auth::routes();




Route::group(['prefix' => "dashboard", 'as' => "admin."], function () {
    // Auth
    Route::get('/', [AdminLoginController::class, 'login'])->name('login');
    Route::post('/', [AdminLoginController::class, 'adminLogin'])->name('admin_login');
    Route::post('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    // Route::get('/profile', [AdminLoginController::class, 'profile'])->name('profile');
    // Route::put('/profile/update/{id}', [AdminLoginController::class, 'profileUpdate'])->name('profile.update');
    // //
    Route::get('/home', [AdminHomeController::class, 'home'])->name('home');
    Route::resource('categories', AdminCategoryController::class);
    Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
    Route::delete('/contact/destroy/{id}', [AdminContactController::class, 'destroy'])->name('contacts.destroy');
    Route::resource('users', UserController::class);
    // //Settings
    // Route::get('/setting', [SettingController::class, 'setting'])->name('settings.index');
    // Route::put('/stting/update', [SettingController::class, 'settingUpdate'])->name('settings.update');
    // //Products
    Route::resource('products', ProductController::class);
    // //Orders
    // Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
    // Route::get('/orders/{id}', [AdminOrderController::class, 'order'])->name('orders.show');
});
