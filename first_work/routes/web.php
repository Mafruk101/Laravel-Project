<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
// routes/web.php
Route::get('/hr-dashboard', function () {
    return view('HRDashboard');
})->name('hr.dashboard');
