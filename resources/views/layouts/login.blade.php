<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
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
    <h2>Login</h2>
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password">
        </div>

        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Remember Me</label>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>
        <a href="/">Volta ai nego</a>
    </form>
    <footer>
        Kaiu &copy; 2024  
    </footer>
</body>
</html>