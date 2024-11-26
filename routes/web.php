<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;

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
Route::get('/', [BookController::class, 'index']);
Route::get('/books/{book}', [BookController::class, 'show']);
Route::post('/books/{book}/rate', [BookController::class, 'rate'])->middleware('auth');
Route::post('/books/{book}/comment', [CommentController::class, 'store'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
});



require __DIR__.'/auth.php';
