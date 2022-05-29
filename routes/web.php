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

Route::get('/', \App\Http\Controllers\Main\IndexController::class)->name('main.index');

Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function() {
    Route::get('/', 'IndexController')->name('category.index');
    Route::get('/create', 'CreateController')->name('category.create');
    Route::post('/', 'StoreController')->name('category.store');
    Route::get('/{category}', 'ShowController')->name('category.show');
    Route::get('/{category}/edit', 'EditController')->name('category.edit');
    Route::patch('/{category}', 'UpdateController')->name('category.update');
    Route::delete('/{category}', 'DeleteController')->name('category.delete');
});

Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function() {
    Route::get('/', 'IndexController')->name('tag.index');
    Route::get('/create', 'CreateController')->name('tag.create');
    Route::post('/', 'StoreController')->name('tag.store');
    Route::get('/{tag}', 'ShowController')->name('tag.show');
    Route::get('/{tag}/edit', 'EditController')->name('tag.edit');
    Route::patch('/{tag}', 'UpdateController')->name('tag.update');
    Route::delete('/{tag}', 'DeleteController')->name('tag.delete');
});

Route::group(['namespace' => 'Color', 'prefix' => 'colors'], function() {
    Route::get('/', 'IndexController')->name('color.index');
    Route::get('/create', 'CreateController')->name('color.create');
    Route::post('/', 'StoreController')->name('color.store');
    Route::get('/{color}', 'ShowController')->name('color.show');
    Route::get('/{color}/edit', 'EditController')->name('color.edit');
    Route::patch('/{color}', 'UpdateController')->name('color.update');
    Route::delete('/{color}', 'DeleteController')->name('color.delete');
});

