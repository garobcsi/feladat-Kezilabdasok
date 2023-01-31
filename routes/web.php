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

Route::get('/',[CsapatController::class, 'index'])->name('home');
Route::get('/csapat/{id}',[CsapatController::class, 'show'])->name('csapat.show');
Route::get('/jatekos/create',[JatekosController::class, 'create'])->name('jatekos.create');
Route::post('/jatekos',[JatekosController::class, 'store'])->name('jatekos.store');
Route::get('/jatekos/{id}/edit',[JatekosController::class, 'edit'])->name('jatekos.edit');
Route::put('/jatekos/{id}',[JatekosController::class, 'update'])->name('jatekos.update');