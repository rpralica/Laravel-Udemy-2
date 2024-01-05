<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Sweet Alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<title>@yield('title', 'Laravel Project')</title>

<body>

    <div class="container mt-3">

        <div class="mt-4 p-3 bg-primary text-white rounded">
            <h1 style="text-align: center;">@yield('page-name')</h1>

        </div>
    </div>
    <br><br>
    @yield('content')


    <script src="script.js"></script>
</body>

</html>
