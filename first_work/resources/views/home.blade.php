<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <main class="container">
            <p class="eyebrow">Workspace</p>
            <h1>Welcome</h1>
            <p class="intro">Choose a dashboard to continue</p>

            <section class="actions" aria-label="Dashboard options">
                <a class="action action-link" href="HRDashboard.blade.php">
                    <span class="action-icon"><i class="bi bi-people"></i></span>
                    <span class="action-copy"><strong>HR Dashboard</strong></span>
                    <i class="bi bi-arrow-right action-arrow"></i>
                </a>
            </section>
        </main>
        </div>

    </body>
</html>
