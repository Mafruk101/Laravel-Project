<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\Leave;
use App\Models\Recruitment;
use App\Models\Event;
class HRDashboardController extends Controller
{
    public function index()
    {
        return view('HRDashboard');
    }
    public function dashboardContent(){
        $employees = Employee::all();
        $totalEmployees = Employee::count();
        $activeEmployees = Employee::where('Status','Active')->count();

        $inactiveEmployees = Employee::where('Status','Inactive')->count();

        $totalDepartments = Employee::distinct()->count('Department');

        return view('partials.dashboard-content',
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
    public function attendanceContent()
    {
        $attendance = Attendance::orderBy('EmployeeId')->get();
        return view('Partials.attendance-content', compact('attendance'));
    }
    public function LeaveContent(){
        $leaveRequests = Leave::orderBy('EmployeeId')->get();
        return view('Partials.leave-content', compact('leaveRequests'));
    }
    public function recruitmentContent(){
        $recruitmentRequests = Recruitment::orderBy('ApplicationId')->get();
        return view('Partials.recruitment-content', compact('recruitmentRequests'));
    }
    public function engagementContent(){
        $events = Event::orderBy('EventId')->get();
        return view('Partials.engagement-content', compact('events'));
    }
}
