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

   <header class="header-bg">
  <div class="header-inner">

    <!-- Left Nav -->
    <nav class="nav-pill">
      <a class="active">Home</a>
      <a>About Us</a>
      <a>Enter</a>
      <a>Contact</a>
      <a>Merch ▾</a>
    </nav>

    <!-- Center Brand -->
    <div class="brand">
      <div class="name">METTACITY</div>
      <div class="tag">An immersive Universe</div>
    </div>

    <!-- Right Actions -->
    <div class="actions">
      <!-- your crescent Plan Visit button -->
    </div>

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
