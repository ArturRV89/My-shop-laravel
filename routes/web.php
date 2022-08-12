<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Http\Controllers\MainController::class)->name('main.index');

Route::controller(\App\Http\Controllers\Category\CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category.index');
    Route::get('/category/create', 'create')->name('category.create');
    Route::post('/category', 'store')->name('category.store');
    Route::get('/category/show/{category}', 'show')->name('category.show');
    Route::get('/category/edit/{category}', 'edit')->name('category.edit');
    Route::patch('/category/{category}', 'update')->name('category.update');
    Route::delete('/category/{category}', 'delete')->name('category.delete');
});

Route::controller(\App\Http\Controllers\Color\ColorController::class)->group(function () {
    Route::get('/color', 'index')->name('color.index');
    Route::get('/color/create', 'create')->name('color.create');
    Route::post('/color', 'store')->name('color.store');
    Route::get('/color/show/{color}','show')->name('color.show');
    Route::get('/color/edit/{color}', 'edit')->name('color.edit');
    Route::patch('/color/{color}', 'update')->name('color.update');
    Route::delete('/color/{color}', 'delete')->name('color.delete');
});

Route::controller(\App\Http\Controllers\Tag\TagController::class)->group(function () {
    Route::get('/tag', 'index')->name('tag.index');
    Route::get('/tag/create', 'create')->name('tag.create');
    Route::post('/tag', 'store')->name('tag.store');
    Route::get('/tag/show/{tag}', 'show')->name('tag.show');
    Route::get('/tag/edit/{tag}', 'edit')->name('tag.edit');
    Route::patch('/tag/{tag}', 'update')->name('tag.update');
    Route::delete('/tag/{tag}', 'delete')->name('tag.delete');
});

Route::controller(\App\Http\Controllers\User\UserController::class)->group(function () {
    Route::get('/user', 'index')->name('user.index');
    Route::get('/user/create', 'create')->name('user.create');
    Route::post('/user', 'store')->name('user.store');
    Route::get('/user/show/{user}', 'show')->name('user.show');
    Route::get('/user/edit/{user}', 'edit')->name('user.edit');
    Route::patch('/user/{user}', 'update')->name('user.update');
    Route::delete('/user/{user}', 'delete')->name('user.delete');
});

Route::controller(\App\Http\Controllers\Product\ProductController::class)->group(function () {
    Route::get('/product', 'index')->name('product.index');
    Route::get('/product/create', 'create')->name('product.create');
    Route::post('/product', 'store')->name('product.store');
    Route::get('/product/show/{product}', 'show')->name('product.show');
    Route::get('/product/edit/{product}', 'edit')->name('product.edit');
    Route::patch('/product/{product}', 'update')->name('product.update');
    Route::delete('/product/{product}', 'delete')->name('product.delete');
});
