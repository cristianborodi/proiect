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
Route::resource('projects', ProjectController::class);
Route::get('/home', [App\Http\Controllers\ProjectController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('create');
Route::post('/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('create');

Route::get('/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('edit');
Route::post('/edit', [App\Http\Controllers\ProjectController::class, 'edit'])->name('edit');

/* ----------------------- Users Routes END -------------------------------- */

//Route::resource('projects', 'Admin\ProjectController::class');
Route::get('/admin/home', [App\Http\Controllers\Admin\ProjectController::class, 'index'])->name('admin.home');
Route::get('/admin/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('admin.create');
Route::post('/admin/create', [App\Http\Controllers\Admin\ProjectController::class, 'create'])->name('admin.create');

Route::get('/admin/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('admin.edit');
Route::post('/admin/edit', [App\Http\Controllers\Admin\ProjectController::class, 'edit'])->name('admin.edit');
/* ----------------------- Admin Routes START -------------------------------- */

