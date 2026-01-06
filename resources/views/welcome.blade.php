<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GLORY INTERNATIONAL METACITY')</title>
    <!-- Include CSS using the asset helper for proper pathing -->
    <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}">
    <link rel="icon" href="{{ asset('public\favicon.ico') }}">
</head>
<body>

    <h1>@yield('Hello World')</h1>

</body>
</html>
