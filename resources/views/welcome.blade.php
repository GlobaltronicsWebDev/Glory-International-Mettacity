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
   <header class="main-header">
    <div class="header-inner">

        <!-- Left Navigation -->
        <nav class="nav-left">
            <ul>
                <li class="{{ request()->is('/') ? 'active' : '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ request()->is('about') ? 'active' : '' }}">
                    <a href="{{ url('/about') }}">About Us</a>
                </li>
                <li class="{{ request()->is('enter') ? 'active' : '' }}">
                    <a href="{{ url('/enter') }}">Enter</a>
                </li>
                <li class="{{ request()->is('contact') ? 'active' : '' }}">
                    <a href="{{ url('/contact') }}">Contact</a>
                </li>
                <li>
                    <a href="#">Merch ▾</a>
                </li>
            </ul>
        </nav>

        <!-- Logo -->
        <div class="logo">
            <h1>METTACITY</h1>
            <span>An Immersive Universe</span>
        </div>

        <!-- Right Actions -->
        <div class="nav-right">
            <a href="{{ url('/visit') }}" class="cta-btn">Plan Your Visit</a>

            <div class="social-icons">
                <a href="#"><i class="fab fa-x-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>
</header>

</body>
</html>
