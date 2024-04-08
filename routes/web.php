<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogCRUDController;

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


Route::get('blog-list', [BlogCRUDController::class, 'index']);
Route::post('store-blog', [BlogCRUDController::class, 'store']);
Route::post('edit-blog', [BlogCRUDController::class, 'edit']);
Route::post('delete-blog', [BlogCRUDController::class, 'destroy']);
