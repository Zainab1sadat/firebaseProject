<?php

use App\Http\Controllers\FirebaseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',[FirebaseController::class,'index'])->name('index');
Route::get('/add-contact',[FirebaseController::class,'create'])->name('create');
Route::post('/add-contact',[FirebaseController::class,'store'])->name('store');
Route::get('/edit-contact/{id}',[FirebaseController::class,'edit']);
Route::put('/update-contact/{id}',[FirebaseController::class,'update']);
Route::get('/delete-contact/{id}',[FirebaseController::class,'destroy']);

