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
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="dashboard">Dashboard</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="employees">Employees</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="attendance">Attendance</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="leave">Leave</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="recruitment">Recruitment</a></li>
                    <li class="list-group-item"><a href="#" class="ajax-menu" data-page="engagement">Engagement</a></li>
                </ul>
            </aside>
        <main class="container" id = "mainContent">
        <div class="loading">Loading...</div>
        </main>
    </div>
    </body>
 </html>
