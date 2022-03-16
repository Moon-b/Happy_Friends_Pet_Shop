<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PetController;
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
// Route::get('/', function () {
//     return view('master');
// });
Route::get('/dashboard', function () {
    return view('backend.pages.Dashboard');
});
// Route::get('/petcategory', function() {
//     return view('backend.pages.PetCategory');
// });

Route::get('/category',[CategoryController::class,'PetCategory'])->name('category');

Route::get('/pet',[PetController::class,'pet'])->name('pet');
Route::get('/petform',[PetController::class,'petform'])->name('pet.form');
Route::post('/petpost',[Petcontroller::class,'petpost'])->name('pet.post');