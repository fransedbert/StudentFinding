<?php

use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('dashboard');
// });

Route::get('/', [studentcontroller::class, 'dashboard']);


// Route::get('/dashboard', [studentcontroller::class, 'dashboard'])->name('dashboard');


