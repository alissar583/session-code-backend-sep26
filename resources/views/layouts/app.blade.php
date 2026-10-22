
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'Dashboard')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Header -->
    @include('partials.header')

    <div class="container-fluid">
        <div class="row">

            <!-- Sidebar -->
            <aside class="col-md-3 col-lg-2 bg-dark text-white min-vh-100 p-3">
                @include('partials.sidebare')
            </aside>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 p-4">
                <div class="bg-white rounded shadow-sm p-4">
                    @yield('content')
                </div>
            </main>

        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        @include('partials.footer')
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
