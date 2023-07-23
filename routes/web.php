<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    CategoryController
};


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::controller(CategoryController::class)->group(function () {
    Route::delete('/categories/delete', 'delete')->name('category.delete');
    Route::put('/categories/update', 'update')->name('category.update');
    Route::get('/categories', 'index')->name('category.index');
    Route::get('/categories/create', 'create')->name('category.create');
    Route::post('/categories/store', 'store')->name('category.store');
    Route::get('/categories/show/{id}', 'show')->name('category.show');
    Route::get('/categories/edit/{id}', 'edit')->name('category.edit');
});