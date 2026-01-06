<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GLORY INTERNATIONAL METACITY')</title>
    <!-- Include CSS using the asset helper for proper pathing -->
   <link rel="stylesheet" href="{{ asset('public/cssfolder/main.css') }}">
   <link rel="icon" href="{{ asset('public\favicon.ico') }}">
</head>
<body>
   <header class="topbar">

  <!-- LEFT NAV -->
  <nav class="nav-pill">
    <a href="#" class="active">Home</a>
    <a href="#">About Us</a>
    <a href="#">Pricing</a>
    <a href="#">Contact</a>

    <div class="nav-dropdown">
      <button class="dropdown-toggle">
        Merch <i class="fa-solid fa-chevron-down caret"></i>
      </button>
      <div class="dropdown-menu">
        <a href="#"><i class="fa-solid fa-shirt"></i> T-Shirts</a>
        <a href="#"><i class="fa-solid fa-hoodie"></i> Hoodies</a>
        <a href="#"><i class="fa-solid fa-bag-shopping"></i> Accessories</a>
        <a href="#"><i class="fa-solid fa-star"></i> Limited Edition</a>
      </div>
    </div>
  </nav>

  <!-- CENTER BRAND -->
  <div class="brand">
    <div class="name">METTACITY</div>
    <div class="tag">An immersive Universe</div>
  </div>

  <!-- RIGHT ACTIONS -->
  <div class="actions">
    <button class="plan-visit">
      <span>Plan Your Visit</span>
      <span class="plan-visit__icon">
        <i class="fa-solid fa-arrow-right"></i>
      </span>
    </button>

    <button class="icon" aria-label="Facebook">
      <i class="fa-brands fa-facebook-f"></i>
    </button>

    <button class="icon" aria-label="YouTube">
      <i class="fa-brands fa-youtube"></i>
    </button>

    <button class="icon" aria-label="Instagram">
      <i class="fa-brands fa-instagram"></i>
    </button>
  </div>

</header>

<script>
const dropdown = document.querySelector(".nav-dropdown");
const toggle = dropdown.querySelector("button");

toggle.addEventListener("click", e=>{
  e.stopPropagation();
  dropdown.classList.toggle("open");
});

document.addEventListener("click", ()=>{
  dropdown.classList.remove("open");
});
</script>

</body>
</html>
