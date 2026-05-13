<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem E-Bengkel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            background-color: #fff8f0;
        }

        .navbar{
            background-color: #f4b183;
        }

        .navbar-brand,
        .nav-link{
            color: white !important;
            font-weight: bold;
        }

        .btn-primary{
            background-color: #ff9f68;
            border: none;
        }

        .btn-primary:hover{
            background-color: #ff8b4d;
        }

        .table thead{
            background-color: #ffd6ba;
        }

        .card{
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg mb-4">
    <div class="container">
        <a class="navbar-brand" href="/kendaraan">
            Sistem E-Bengkel
        </a>

        <a href="/kendaraan" class="nav-link">
            Daftar Servis
        </a>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

</body>
</html>