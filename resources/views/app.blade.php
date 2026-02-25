<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blocket</title>

    @vite(['resources/css/app.css'])
</head>
<body>

<nav>
    <div><strong>Blocket</strong></div>

    <div>
        <a href="#">Notis</a>
        <a href="#" style="margin-left:20px;">Ny annons</a>
        <a href="#" style="margin-left:20px;">Meddelande</a>
        <a href="#" style="margin-left:20px;">Logga in</a>
    </div>
</nav>

@yield('content')

</body>
</html>