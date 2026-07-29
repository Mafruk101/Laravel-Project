<?php

use App\Http\Controllers\HRDashboardController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/hr-dashboard', [HRDashboardController::class, 'index'])->name('hr.dashboard');

Route::get('/hr/dashboard', function () {
    $employees = Employee::orderBy('EmployeeId')->get();

    return view('Partials.dashboard-content', [
        'employees' => $employees,
        'totalEmployees' => $employees->count(),
        'activeEmployees' => $employees->where('Status', 'Active')->count(),
        'inactiveEmployees' => $employees->where('Status', 'Inactive')->count(),
        'leaveRequests' => [],
        'recruitments' => [],
    ]);
})->name('hr.dashboard.content');

Route::get('/hr/employees', function () {
    return view('Partials.employees-content', [
        'employees' => Employee::orderBy('EmployeeId')->get(),
    ]);
})->name('hr.employees.content');

Route::get('/hr/{page}', function (string $page) {
    abort_unless(in_array($page, ['attendance', 'leave', 'recruitment', 'engagement'], true), 404);

    return '<section class="table-section"><h2>' . ucfirst($page) . '</h2><p>This section is not set up yet.</p></section>';
})->where('page', 'attendance|leave|recruitment|engagement');
