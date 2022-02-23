<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home');
    Route::post('/','insert')->name('insert');
});
Route::controller(AdminController::class)->group(function(){
    // auth routes
    Route::get('/all_pizzas','all_pizzas')->middleware(['auth'])->name('pizzas');
    Route::get('/logout','logout')->name('logout');
    // permission routes
    Route::get('/all_pizzas/{id}','delete_order')->name('delete');
    Route::get('/all_pizzas/edit/{id}','edit_order')->name('edit');
    Route::post('/all_pizzas/update/{id}','update_order')->name('update');
});

require __DIR__.'/auth.php';
