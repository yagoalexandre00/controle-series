<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Controle de Séries e Filmes</title>
    {{-- Logo --}}
    <link rel="shortcut icon" href="{{ asset('img/movie-logo.png') }}" type="image/x-icon">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- Open-iconic --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/open-iconic/1.1.1/font/css/open-iconic.min.css"
        integrity="sha512-LeCmts7kEi09nKc+DwGJqDV+dNQi/W8/qb0oUSsBLzTYiBwxj0KBlAow2//jV7jwEHwSCPShRN2+IWwWcn1x7Q=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Sofia+Sans" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg ">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/movie-logo.png') }}" alt=""></a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="/series">Séries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sair</a>
                    </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="/login">Entrar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">Registrar</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>

    @yield('content')
</body>

</html>
