<?php

use App\Http\Controllers\NotesController;
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

Route::get('/', [NotesController::class, "Index"])->name("Index");

Route::get('/notes', [NotesController::class, 'List'])->name('notes');

Route::get('/notes/create', [NotesController::class, 'Create'])->name('notes.create');
Route::get('/notes/details/{id}', [NotesController::class, 'Details'])->name('notes.details');
Route::get('/notes/edit/{id}', [NotesController::class, 'Edit'])->name('notes.edit');

Route::get('/notes/post/delete/{id}', [NotesController::class, 'Remove'])->name('notes.post.delete');
Route::post('/notes/post/store', [NotesController::class, 'Store'])->name('notes.post.store');
Route::put('/notes/post/edit/{id}', [NotesController::class, 'Update'])->name('notes.post.edit');