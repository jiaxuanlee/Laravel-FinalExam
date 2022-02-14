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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/addRack', [App\Http\Controllers\RackController::class,'index'])->name('add.Rack');

Route::get('/addStock', [App\Http\Controllers\ManageStockController::class,'index'])->name('add.Stock');

Route::get('/showRack', [App\Http\Controllers\RackController::class,'view'])->name('showRack');

Route::get('/showStock', [App\Http\Controllers\ManageStockController::class,'view'])->name('showStock');

Route::get('/deleteStock/{id}' ,[App\Http\Controllers\ManageStockController::class,'delete'])->name('deleteStock');

Route::get('/editStock/{id}', [App\Http\Controllers\ManageStockController::class,'edit'])->name('editStock');

Route::get('/viewStock', [App\Http\Controllers\StockController::class,'viewStock'])->name('viewStock');