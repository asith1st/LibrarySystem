<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
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
    return redirect('/books');
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/books', [BookController::class, 'index'])->name('books');
    Route::get('/bookdetails/{id}', [BookController::class, 'show'])->name('show');
    Route::get('/bookedit/{id}', [BookController::class, 'edit'])->name('edit');
    Route::post('/updatebook', [BookController::class, 'update'])->name('update');
    Route::get('/bookadd', [BookController::class, 'add'])->name('add');
    Route::post('/booksave', [BookController::class, 'save'])->name('save');
    Route::get('/bookdelete/{id}', [BookController::class, 'delete'])->name('delete');
});



require __DIR__ . '/auth.php';
