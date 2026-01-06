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
      <button class="visit-btn" type="button" id="visitBtn">
        <span class="txt">Plan Your Visit</span>
        <span class="arrow">→</span>
      </button>

      <button class="icon" type="button" aria-label="Facebook">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M13.5 22v-8h2.7l.4-3h-3.1V9.1c0-.9.3-1.5 1.6-1.5h1.6V5c-.3 0-1.4-.1-2.7-.1-2.7 0-4.6 1.6-4.6 4.6V11H7v3h2.7v8h3.8Z"/>
        </svg>
      </button>

      <button class="icon" type="button" aria-label="YouTube">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M21 7.2a3 3 0 0 0-2.1-2.1C17 4.6 12 4.6 12 4.6s-5 0-6.9.5A3 3 0 0 0 3 7.2 31.6 31.6 0 0 0 2.6 12 31.6 31.6 0 0 0 3 16.8a3 3 0 0 0 2.1 2.1c1.9.5 6.9.5 6.9.5s5 0 6.9-.5a3 3 0 0 0 2.1-2.1 31.6 31.6 0 0 0 .4-4.8 31.6 31.6 0 0 0-.4-4.8ZM10.3 14.9V9.1L15.5 12l-5.2 2.9Z"/>
        </svg>
      </button>

      <button class="icon" type="button" aria-label="Instagram">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M7 2h10a5 5 0 0 1 5 5v10a5 5 0 0 1-5 5H7a5 5 0 0 1-5-5V7a5 5 0 0 1 5-5Zm10 2H7a3 3 0 0 0-3 3v10a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3V7a3 3 0 0 0-3-3Zm-5 4.2A3.8 3.8 0 1 1 8.2 12 3.8 3.8 0 0 1 12 8.2Zm0 2A1.8 1.8 0 1 0 13.8 12 1.8 1.8 0 0 0 12 10.2ZM17.6 6.6a.9.9 0 1 1-.9.9.9.9 0 0 1 .9-.9Z"/>
        </svg>
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
