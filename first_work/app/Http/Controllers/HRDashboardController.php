<?php

namespace App\Http\Controllers;

use App\Models\Employee;

class HRDashboardController extends Controller
{
    public function index()
    {
        // $employees = Employee::orderBy('EmployeeId')->get();

        // return view('HRDashboard', [
        //     'employees' => $employees,
        //     'totalEmployees' => $employees->count(),
        //     'activeEmployees' => $employees->where('Status', 'Active')->count(),
        //     'inactiveEmployees' => $employees->where('Status', 'Inactive')->count(),
        //     'leaveRequests' => [],
        //     'recruitments' => [],
        // ]);

        return view('HRDashboard');
    }
    // public function employeeContent(){
    //     $employees = Employee::all();
    //     return view('Partials.employee-content',compact('employees'));
    // }
    public function dashboardContent(){
        $employees = Employee::all();
        $totalEmployees = Employee::count();

        $activeEmployees = Employee::where(
            'Status',
            'Active'
        )->count();

        $inactiveEmployees = Employee::where(
            'Status',
            'Inactive'
        )->count();

        $totalDepartments = Employee::distinct()
            ->count('Department');

        return view(
            'partials.dashboard-content',
            compact(
                'employees',
                'totalEmployees',
                'activeEmployees',
                'inactiveEmployees',
                'totalDepartments'
            )
        );
    }
     public function employeesContent()
    {
        $employees = Employee::all();

        return view(
            'partials.employees-content',
            compact('employees')
        );
    }
}
