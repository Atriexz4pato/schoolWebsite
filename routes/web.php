<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ViewsController;
use Illuminate\Routing\ViewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->name('home');
});

Route::get('/co_curricular',[ViewsController::class, 'co_curricular'])->name('co_curricular');
Route::get('/',[ViewsController::class, 'home'])->name('home');
Route::get('/teachers',[ViewsController::class, 'teachers'])->name('teachers');
Route::get('/events',[ViewsController::class, 'events'])->name('events');
Route::get('/contacts',[ViewsController::class, 'contacts'])->name('contacts');
Route::get('/user/admin/login', [AdminController::class, 'login'])->name('admin_login');

