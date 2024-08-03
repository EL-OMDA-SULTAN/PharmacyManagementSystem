<?php

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\PharmacyController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\WishlistController;

use Illuminate\Support\Facades\Route;

// Customer routes
Route::post('/customers', [CustomerController::class, 'register']);
Route::get('/customers/{id}', [CustomerController::class, 'show']);
Route::get('/customers', [CustomerController::class, 'index']);
Route::put('/customers/{id}', [CustomerController::class, 'update']);
Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);

// Pharmacy routes
Route::post('/pharmacy', [PharmacyController::class, 'register']);
Route::get('/pharmacy', [PharmacyController::class, 'index']);
Route::get('/pharmacy/{id}', [PharmacyController::class, 'show']);
Route::post('/login', [UserController::class, 'login']);
// WishList routes
Route::post('/wishlists/{user_id}/{product_id}', [WishlistController::class, 'store']);
Route::get('/wishlists', [WishlistController::class, 'index']);
Route::get('/wishlists/{id}', [WishlistController::class, 'show']);
Route::delete('/wishlists/{id}', [WishlistController::class, 'destroy']);
// Test route
Route::get('test', function () {
    return 'Route is working!';
});

Route::apiResource('category', CategoryController::class);
Route::apiResource('products', ProductController::class);
// Route::put('/product/{id}',ProductController ::class,'update');
Route::apiResource('sale', SaleController::class);
Route::apiResource('order', OrderController::class);

Route::apiResource('wishlist', WishlistController::class);
