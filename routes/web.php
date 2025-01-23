<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\servicesController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\ThankyouController;
use Illuminate\Support\Facades\Route;
use App\Models\Room;

Route::get('/web/index', [HomeController::class, 'HomePage'])->name('web-Home');
Route::get('/web/about', [AboutController::class, 'AboutPage'])->name('web-about');
Route::get('/web/blog', [blogController::class, 'blogPage'])->name('web-blog');
Route::get('/web/cart', [cartController::class, 'cartPage'])->name('web-cart');
Route::get('/web/checkout', [checkoutController::class, 'checkoutPage'])->name('web-checkout');
Route::get('/web/services', [servicesController::class, 'servicesPage'])->name('web-services');
Route::get('/web/shop', [shopController::class, 'shopPage'])->name('web-shop');
Route::get('/web/Thankyou', [ThankyouController::class, 'ThankyouPage'])->name('web-Thankyou');
