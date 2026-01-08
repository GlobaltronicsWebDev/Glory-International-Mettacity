<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <title>@yield('title', 'GLORY INTERNATIONAL METACITY')</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('cssfolder/main.css') }}">
  <link rel="icon" href="{{ asset('public\favicon.ico') }}">

</head>

<body>

<header class="header" id="siteHeader">
  <div class="header-image">

    <!-- Center logo -->
    <img src="{{asset('METTACITY Logo.png')}}" alt="Mettacity" class="header-logo">

    <!-- Plan Your Visit -->
    <a href="#visit" class="moon-btn">
      <span class="visit-text">Plan Your Visit</span>
      <span class="moon-icon"><i class="fa-solid fa-arrow-right"></i></span>
    </a>

    <!-- Nav -->
    <nav class="nav-inner">
      <a class="nav-link" href="#">Home</a>
      <a class="nav-link" href="#">About Us</a>
      <a class="nav-link nav-link--active" href="#">Tickets</a>
      <a class="nav-link" href="#">Contact</a>

      <div class="dropdown">
        <button class="nav-link dropdown-toggle">
          Merch <span class="caret">▾</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Shirts</a>
          <a class="dropdown-item" href="#">Hoodies</a>
          <a class="dropdown-item" href="#">Accessories</a>
        </div>
      </div>
    </nav>

  </div>
</header>

<main>
  <section class="hero">
    <h1>Welcome to Mettacity</h1>
  </section>

  <section id="visit" class="section">
    <h2>Plan Your Visit</h2>
    <p>This is a sample section.</p>
  </section>
</main>

<script>
  const header = document.getElementById("siteHeader");
  window.addEventListener("scroll", () => {
    header.classList.toggle("is-scrolled", window.scrollY > 40);
  });
</script>

</body>
</html>
