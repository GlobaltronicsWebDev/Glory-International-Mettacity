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
    <!-- LEFT NAV PILL -->
    <nav class="nav-pill" aria-label="Primary navigation">
      <a href="#" data-nav="home">Home</a>
      <a href="#" data-nav="about">About Us</a>
      <a class="active" href="#" data-nav="pricing">Pricing</a>
      <a href="#" data-nav="contact">Contact</a>
     <a href="#" class="dropdown">Merch ▼</a>
    </nav>

    <!-- PERFECTLY CENTERED BRAND -->
    <div class="brand" aria-label="Brand">
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
    // Active tab switching (demo)
    const links = document.querySelectorAll(".nav-pill a");
    links.forEach(a => {
      a.addEventListener("click", (e) => {
        e.preventDefault();
        links.forEach(x => x.classList.remove("active"));
        a.classList.add("active");
      });
    });

    document.getElementById("visitBtn").addEventListener("click", () => {
      alert("Plan Your Visit clicked");
    });

    const dropdown = document.querySelector(".nav-dropdown");
  const toggle = dropdown.querySelector(".dropdown-toggle");

  toggle.addEventListener("click", (e) => {
    e.stopPropagation();
    dropdown.classList.toggle("open");
    toggle.setAttribute(
      "aria-expanded",
      dropdown.classList.contains("open")
    );
  });

  // Close on outside click
  document.addEventListener("click", () => {
    dropdown.classList.remove("open");
    toggle.setAttribute("aria-expanded", "false");
  });
  </script>


</body>
</html>
