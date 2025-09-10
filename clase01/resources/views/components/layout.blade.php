<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? ''}} :: Proyecto Da Vinci</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
                        <a class="nav-link" href="/">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="quienes-somos">Quiénes
                            Somos</a>
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
