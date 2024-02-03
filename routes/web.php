<?php

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

use App\Http\Controllers\My_Controller;  
Route::get('/index',[My_Controller::class, 'index'])->name('index');
Route::get('/form',[My_Controller::class, 'user_form'])->name('form');
Route::post('/insert',[My_Controller::class, 'insert'])->name('insert');
Route::get('/edit_data{id}',[My_Controller::class, 'edit'])->name('edit');
Route::post('/update_data{id}',[My_Controller::class, 'update'])->name('update');
Route::get('/delete_data{id}',[My_Controller::class, 'destroy'])->name('destroy'); 
Route::get('/', [My_Controller::class, 'loginForm'])->name('login');
Route::post('/', [My_Controller::class, 'login'])->name('login.post');
