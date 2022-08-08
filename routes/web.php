<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
//  Route::get('/products',[ProductsController::class,'index'])->name('products');
//  Route::get('/products/about',[ProductsController::class,'about'])->name('about');
// //only numeric 
//  Route::get('/products/{id}',
//  [ProductsController::class,'show'])->where('id','[0-9]+');

//  //only string 
//  Route::get('/products/{name}',
//  [ProductsController::class,'show'])->where('name','[a-zA-Z]+');

//only string and numeric
// Route::get('/products/{name}/{id}',
// [ProductsController::class,'show'])->where(
//  [
//     'name'=>'[a-zA-Z]+',
//     'id'=>'[0-9]+'
//  ]    
// );