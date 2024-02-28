<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        
        <!-- fonte do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- CSS Bootsratps -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
        <!-- CSS da aplicação -->
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/script.js"></script>
    
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
               <div class="collapse navbar-collapse" id="navbar">
                <a href="" class="navbar-brand">
                    <img src="/img/2.jpg" alt="logozin">
                </a>
                <ul class="navbar-nav">
                    <li class="navbar-item">
                        <a href="/" class="nav-link">Infos</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/" class="nav-link">entrar</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/" class="nav-link">cadastrar</a>
                    </li>
                </ul>
               </div>
            </nav>
        </header>
       @yield('content')
<footer>
    Kaiu &copy; 2024
</footer>
    </body>
</html>
