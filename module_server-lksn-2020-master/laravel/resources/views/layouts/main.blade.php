<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>YukPilih</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
<link rel="stylesheet" href="{!! asset('assets/css/bootstrap.min.css') !!}">
<link rel="stylesheet" href="{!! asset('assets/assets/css/black-dashboard.css')!!}">
</head>
<body>
<nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="#">YukPilih</a>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Hari senin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hari Selasa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Hari Rabu</a>
            </li>
        </ul>
    </div>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>
</nav>

@yield('content')

</body>
</html>
