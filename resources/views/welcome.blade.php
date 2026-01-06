       
<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel 12 App')</title>
    <!-- Include CSS using the asset helper for proper pathing -->
    <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}">
</head>
<body>

    <header>
        <h1>Welcome, {{ $user->name }}</h1>
    </header>

    <main>
        <!-- This is where child views inject their content -->
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} My App</p>
    </footer>

    <!-- Include JavaScript using the asset helper -->
    <script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
