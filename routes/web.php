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

Route::get('/under-construction',[\App\Http\Controllers\HomeController::class,'underConstruction'])->name('under-construction');
Route::get('/test',[\App\Http\Controllers\HomeController::class,'test'])->name('test');
Route::get('/add-customers',[\App\Http\Controllers\HomeController::class,'addCustomers'])->name('add-customers');
Route::get('/company/{company_id?}/customers/born-after/{birth_date?}',[\App\Http\Controllers\HomeController::class,'filterCustomers'])->name('filter-customers');