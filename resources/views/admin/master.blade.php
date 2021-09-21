<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('head-title') Helados Artika</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <h1>Helados Artika</h1>
    </header>
    <main>
        <section>
            @yield('content')
        </section>
    </main>
    <footer>
        <span>Desarrollado por Helados Artika</span>
    </footer>
</body>
</html>