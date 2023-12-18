<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ROUTE USER
Route::controller(UserController::class)->middleware(['auth'])->prefix('users')->group(function(){
    Route::get('/', 'index')->name('users.index');
    Route::post('/', 'index')->name('users.search');
    Route::get('/create', 'create')->name('users.create');
    Route::post('/store', 'store')->name('users.store');
    Route::get('/{user:slug}/show', 'show')->name('users.show');
    Route::get('/{user:slug}/edit', 'edit')->name('users.edit');
    Route::put('/{user:slug}/update', 'update')->name('users.update');
    Route::delete('{user:slug}/delete', 'destroy')->name('users.delete');

    Route::get('{user:slug}/check', 'check')->name('users.check');
});
// END ROUTE USER


require __DIR__.'/auth.php';
