<link rel="stylesheet" type="text/css" href="css/navbar.css" />
<nav>
  <div class="logo">
    <a href="index.php"><img src="Main/assets/logoHorizon.png" alt="logo" class="logo-img" /></a> <!-- Adjust the path as needed -->
  </div>
  <ul class="main-nav">
    <li><a href="index.php">Beranda</a></li>
    <li><a href="Main/tentang.php">Tentang Amansa</a></li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Umroh</a>
      <ul class="dropdown-content">
        <li><a href="Main/Umroh.php">Paket Umroh</a></li>
        <li><a href="Main/tabura.php">Tabungan Umroh</a></li>
        <li><a href="Main/badalUmroh.php">Badal Umroh</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Haji</a>
      <ul class="dropdown-content">
        <li><a href="Main/Haji.php">Haji Furoda</a></li>
        <li><a href="Main/hajiKhusus.php">Haji Khusus</a></li>
        <li><a href="Main/tabungan.php">Tabungan Haji</a></li>
        <li><a href="Main/badalHaji.php">Badal Haji</a></li>
      </ul>
    </li>
    <li><a href="Main/kemitraan.php">Kemitraan</a></li>
    <li><a href="Main/galeri.php">Galeri & Artikel</a></li>
  </ul>
  <div class="menu-button" onclick="showSidebar()">
    <svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26">
      <path d="M120 816v-60h720v60H120Zm0-210v-60h720v60H120Zm0-210v-60h720v60H120Z"/>
    </svg>
  </div>
  <ul class="sidebar">
    <li onclick="hideSidebar()">
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 96 960 960" width="26"><path d="m249 849-42-42 231-231-231-231 42-42 231 231 231-231 42 42-231 231 231 231-42 42-231-231-231 231Z"/></svg></a>
    </li>
    <li><a href="index.php">Beranda</a></li>
    <li><a href="Main/tentang.php">Tentang Amansa</a></li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Umroh</a>
      <ul class="dropdown-content">
        <li><a href="Main/Umroh.php">Paket Umroh</a></li>
        <li><a href="Main/tabura.php">Tabungan Umroh</a></li>
        <li><a href="Main/badalUmroh.php">Badal Umroh</a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#" class="dropbtn">Haji</a>
      <ul class="dropdown-content">
        <li><a href="Main/Haji.php">Haji Furoda</a></li>
        <li><a href="Main/hajiKhusus.php">Haji Khusus</a></li>
        <li><a href="Main/tabungan.php">Tabungan Haji</a></li>
        <li><a href="Main/badalHaji.php">Badal Haji</a></li>
      </ul>
    </li>
    <li><a href="Main/kemitraan.php">Kemitraan</a></li>
    <li><a href="Main/galeri.php">Galeri & Artikel</a></li>
  </ul>
</nav>

<script>
  // Function to set active link based on current URL
  function setActiveLink() {
    const links = document.querySelectorAll('nav a');
    const currentUrl = window.location.href;

    links.forEach(link => {
      if (link.href === currentUrl) {
        link.classList.add('active');
      } else {
        link.classList.remove('active');
      }
    });
  }

  // Set active link when the page loads
  document.addEventListener('DOMContentLoaded', setActiveLink);

  // Functions to show and hide sidebar
  function showSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.add('active');
  }

  function hideSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.remove('active');
  }
</script>
