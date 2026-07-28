<?php

use App\Http\Controllers\HRDashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/hr-dashboard', [HRDashboardController::class, 'index'])->name('hr.dashboard');


// Route::get('/', [HRDashboardController::class, 'index'])->name('hr.dashboard');
