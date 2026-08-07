<?php

use App\Http\Controllers\HRDashboardController;
use App\Models\Employee;
use App\Models\Leave;
use App\Models\Recruitment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/hr-dashboard', [HRDashboardController::class, 'index'])->name('hr.dashboard');

Route::get('/hr/dashboard', function () {
    $employees = Employee::orderBy('EmployeeId')->get();
    $leaveRequests = Leave::orderBy('EmployeeId')->get();
    $recruitmentRequests = Recruitment::orderBy('ApplicationId')->get();

    return view('Partials.dashboard-content', [
        'employees' => $employees,
        'totalEmployees' => $employees->count(),
        'activeEmployees' => $employees->where('Status', 'Active')->count(),
        'inactiveEmployees' => $employees->where('Status', 'Inactive')->count(),
        'leaveRequests' => $leaveRequests,
        'recruitmentRequests' => $recruitmentRequests,
    ]);
})->name('hr.dashboard.content');

Route::get('/hr/employees', function () {
    return view('Partials.employees-content', [
        'employees' => Employee::orderBy('EmployeeId')->get(),
    ]);
})->name('hr.employees.content');

Route::get('/hr/attendance', [HRDashboardController::class, 'attendanceContent']);
Route::get('/hr/leave',[HRDashboardController::class, 'leaveContent']);
Route::get('/hr/recruitment',[HRDashboardController::class, 'recruitmentContent']);
Route::get('/hr/engagement',[HRDashboardController::class, 'engagementContent']);

// ->name('hr.attendance')
