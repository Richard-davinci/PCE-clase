<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}} :: Proyecto Da Vinci</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    {{--  {{url( )}}  --}}
    {{--   {{ route ('')  }}  --}}
</head>
<body>
<div id=”app”>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Proyecto Da Vinci</a>
            <button class="navbar-toggler" type="button" data-bstoggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" arialabel="Alternar menú de navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}"
                           {!! request()->routeIs('home') ? 'aria-current="page"' : '' !!}
                           href="{{ route('home')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about' )}}">Quiénes
                            Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route( 'movies.index')}}">Películas</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="p-4">
        {{$slot}}
    </main>
    <footer class="footer text-bg-dark text-center">
        <p>Copyright &copy; Da Vinci 2024</p>
    </footer>
</div>
</body>
</html>
