<!DOCTYPE html>
<html>
    <head>
        <title>HR Dashboard</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        @vite(['resources/css/HRDashboard.css', 'resources/js/app.js'])
    </head>
    <body>
        <header class="navbar">
                <div>
                    <h2>HR Dashboard</h2>
                </div>
                    <button id = "menu-btn"><i class ="fa-solid fa-bars"></i></button>
                    <div class = "search-box">
                        <input type = "text"
                        id = "searchInput"
                        placeholder = "Search...">
                    </div>
                    <div class = "profile">
                        <div class="avater">M</div>
                    </div>
        </header>
        <div class="side-main-grid">
        <aside class="sidebar">
                <ul class="menu">
                    <li class="list-group-item"><a href="{{ route('hr.dashboard') }}"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="#">Employees</a></li>
                    <li class="list-group-item"><a href="#">Attendance</a></li>
                    <li class="list-group-item"><a href="#">Leave</a></li>
                    <li class="list-group-item"><a href="#">Recruitment</a></li>
                    <li class="list-group-item"><a href="#">Engagement</a></li>
                </ul>
            </aside>
        <div class="container">
            <main>
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
                        <th>Name</th>
                        <th>Employee ID</th>
                        <th>Status</th>
                    </tr>

                    </thead>

                    <tbody>

                    <?php foreach($leaveRequests as $leave): ?>

                    <tr>

                        <td><?= $leave[0] ?></td>

                        <td><?= $leave[1] ?></td>

                        <td>

                            <?php if($leave[2]=="Approved"): ?>

                                <span class="badge success">
                                    Approved
                                </span>

                            <?php else: ?>

                                <span class="badge danger">
                                    Pending
                                </span>

                            <?php endif; ?>

                        </td>

                    </tr>

                    <?php endforeach; ?>

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

                    <?php foreach($recruitments as $rec): ?>

                    <tr>

                        <td><?= $rec[0] ?></td>

                        <td><?= $rec[1] ?></td>

                        <td><?= $rec[2] ?></td>

                        <td><?= $rec[3] ?></td>

                        <td><?= $rec[4] ?></td>

                    </tr>

                    <?php endforeach; ?>

                    </tbody>

                </table>

            </section>

        </div>
        </main>
        </div>
    </div>


            {{-- <li class="list-group-item"><a href="{{ route('hr.employees') }}">Employees</a></li>
            <li class="list-group-item"><a href="{{ route('hr.attendance') }}">Attendance</a></li>
            <li class="list-group-item"><a href="{{ route('hr.leave') }}">Leave</a></li>
            <li class="list-group-item"><a href="{{ route('hr.recruitment') }}">Recruitment</a></li>
            <li class="list-group-item"><a href="{{ route('hr.engagement') }}">Engagement</a></li> --}}

    </body>
 </html>
{{-- </html>
<!DOCTYPE html>
<html>
    <head>
        <title>HR Dashboard</title>
        @vite(['resources/css/HRDashboard.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="container">
            <p class="eyebrow">Human resources</p>
            <h1>HR Dashboard</h1>
            <p class="intro">Welcome to your HR workspace. Employee management and HR insights will appear here.</p>

            <a class="action action-link" href="{{ url('/') }}">
                <span class="action-icon"><i class="bi bi-arrow-left"></i></span>
                <span class="action-copy"><strong>Back to home</strong><span>Return to the workspace menu</span></span>
            </a>
        </main>
    </body>
</html> --}}
