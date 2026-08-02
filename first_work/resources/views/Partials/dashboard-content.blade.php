<section class= "cards">

    <div class = "card">
        <h2>{{ $totalEmployees }}</h2>
        <p>Total Employees </p>
    </div>
    <div class = "card">
        <h2>{{ $activeEmployees }}</h2>
        <p>Active Employees</p>
    </div>
    <div class = "card">
        <h2>{{ $inactiveEmployees }}</h2>
        <p>Inactive Employees</p>
    </div>
    <div class = "card">
        <h2>{{ $employees->pluck('Department')->unique()->count() }}</h2>
        <p>Departments</p>
    </div>

</section>

<section class="table-section">
    <div class = "section-header">
        <h2>Attendance Overview</h2>
    </div>
    <table>
        <thead>
        <tr>
            <th>Employee</th>
            <th>Role</th>
            <th>Department</th>
            <th>Status</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>Employee {{ $employee->EmployeeId }}</td>
                    <td>{{ $employee->Role }}</td>
                    <td>{{ $employee->Department }}</td>
                    <td>{{ $employee->Status }}</td>
                    <td>{{ $employee->Location }}</td>
                    <td>{{ $employee->Action }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No employees found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>

            <!-- Bottom Section -->
<div class="bottom-grid">
    <!-- Leave -->
    <section class="table-section">
        <div class="section-header">
            <h2>Leave Requests</h2>
        </div>

        <table>
            <thead>
            <tr>
                <th>Employee ID</th>
                <th>Name</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            @forelse($leaveRequests as $leave)
            <tr>
                <td>Employee {{ $leave->EmployeeId }}</td>
                <td>{{  $leave->Name }}</td>
                <td>{{ $leave->Status }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3">No leave requests found.</td>
            </tr>
            @endforelse
            </tbody>
        </table>
    </section>

    <!-- Recruitment -->
    <section class="table-section">
        <div class="section-header">
            <h2>Recruitment Pipeline</h2>
        </div>

        <table>
            <thead>
            <tr>
                <th>Name</th>
                <th>Applicant ID</th>
                <th>Status</th>
                <th>Priority</th>
                <th>Assigned To</th>
            </tr>
            </thead>
            <tbody>
            @forelse ($recruitmentRequests as $recruitment)
                <tr>
                    <td>Applicant {{ $recruitment->ApplicationId }}</td>
                    <td>{{ $recruitment->Name }}</td>
                    <td>{{ $recruitment->Status }}</td>
                    <td>{{ $recruitment->Priority }}</td>
                    <td>{{ $recruitment->AssignedTo }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No recruitment requests found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </section>
</div>
