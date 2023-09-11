<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BcsakhiController;
use App\Http\Controllers\UserController;

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

// BcsakhiController
Route::get('/add-bcsakhi', [BcsakhiController::class, 'add_bcsakhi'])->name('add-bcsakhi');
Route::post('/save-bcsakhi', [BcsakhiController::class, 'create'])->name('save-bcsakhi');
Route::post('/import-bcsakhi', [BcsakhiController::class, 'bcsakhiimport'])->name('import-bcsakhi');
Route::get('/view-bcsakhi', [BcsakhiController::class, 'view_bcsakhi'])->name('view-bcsakhi');


// UserController
Route::get('/add-user', [UserController::class, 'index'])->name('add-user');
Route::post('/save-user', [UserController::class, 'create'])->name('save-user');
Route::get('/view-user',[UserController::class, 'view_user'])->name('view-user');
Route::get('/update-user/{id}',[UserController::class, 'edit']);
Route::put('/update-user/{id}', [UserController::class, 'update']);


Route::get('/dashboard', function(){
       return view('pages.dashboard');
});