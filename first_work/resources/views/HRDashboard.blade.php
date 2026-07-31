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
                    {{-- <button id = "menu-btn"><i class ="fa-solid fa-bars"></i></button> --}}
                    <div class = "search-box">
                        <input type = "text" id = "searchInput" placeholder = "Search...">
                    </div>
                    <div class = "profile">
                        <div class="avater">M</div>
                    </div>
        </header>
        <div class="side-main-grid">
        <aside class="sidebar">
                <ul class="menu">
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="dashboard"><i class="bi bi-grid"></i>Dashboard</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="employees"><i class="bi bi-people"></i>Employees</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="attendance"><i class="bi bi-clock"></i>Attendance</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="leave"><i class="bi bi-calendar"></i>Leave</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="recruitment"><i class="bi bi-briefcase"></i>Recruitment</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="engagement"><i class="bi bi-heart"></i>Engagement</a></li>
                </ul>
            </aside>
        <main class="container" id = "mainContent">
        <div class="loading">Loading...</div>
        </main>
    </div>
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
{{-- <li class="list-group-item"><a href="{{ route('hr.employees') }}">Employees</a></li>
<li class="list-group-item"><a href="{{ route('hr.attendance') }}">Attendance</a></li>
<li class="list-group-item"><a href="{{ route('hr.leave') }}">Leave</a></li>
<li class="list-group-item"><a href="{{ route('hr.recruitment') }}">Recruitment</a></li>
<li class="list-group-item"><a href="{{ route('hr.engagement') }}">Engagement</a></li> --}}
