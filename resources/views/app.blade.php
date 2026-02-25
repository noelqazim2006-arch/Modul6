<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blocket</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="background-color: brown;">

<header>
    <nav>
        <div id="logo">
            <img src="" alt="Logo"> bild
        </div>

        <div id="notis">
            <a href="#">Notis</a>
        </div>

        <div id="ny_annons">
            <a href="{{ route('annons.create') }}">Ny annons</a>
        </div>

        <div id="meddelande">
            <a href="#">Meddelande</a>
        </div>

        <div id="logga_in">
            <a href="{{ route('login') }}">Logga in</a>
        </div>
    </nav>
</header>

<br>

<main>
    @yield('content')
</main>

<footer>
</footer>

</body>
</html>
