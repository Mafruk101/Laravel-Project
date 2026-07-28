<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class HRDashboardController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('EmployeeId')->get();

        return view('HRDashboard', [
            'employees' => $employees,
            'totalEmployees' => $employees->count(),
            'activeEmployees' => $employees->where('Status', 'Active')->count(),
            'inactiveEmployees' => $employees->where('Status', 'Inactive')->count(),
            'leaveRequests' => [],
            'recruitments' => [],
        ]);
    }
}
