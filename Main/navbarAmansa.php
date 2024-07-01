<style>
  nav ul li a:hover {
    background-color: #2573b3;

  }

  .dropdown-menu {
    --bs-dropdown-link-active-bg: #0D3C63;
  }

  .bgdrop {
    background-color: red;
  }

  .kiri {
    margin-left: 0;
    /* background-color: #0D3C63; */
    padding-bottom: 0px;


  }

  .teksputih {
    /* add your styles here */
    color: #E0B64A;
    font-weight: 600;
  }

  .topline {
    border-top: 1px solid #E0B64A;
  }

  .underline {
    border-bottom: 1px solid #E0B64A;


  }

  nav {
    padding: 10px 5%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
    z-index: 1;
    background-color: #0d3c63;
  }

  ol,
  ul {
    padding-left: 2rem;
  }

  @media (max-width: 768px) {
    nav ul {
      flex-direction: column;
      display: none;
    }

    nav ul li {
      margin-left: 0;
    }

    nav .menu-toggle {
      display: block;
      cursor: pointer;
      color: #E0B64A;
      font-size: 24px;
    }

    nav.active ul {
      display: flex;
    }

    .bgdrop:hover .dropdown-menu {
      position: static;
    }


  }
</style>
<nav>
  <div class="logo">
    <a href="index.php"><img src="assets/logoHorizon.png" alt="logo" /></a>
  </div>
  </div>
  <ul>
    <li>
      <a href="index.php">Beranda</a>
    </li>
    <li>
      <a href="tentang.php">Tentang Amansa</a>
    </li>
    <!-- <li>
      <a href="Umroh.php">Umroh</a>
    </li> -->
    <!-- <li>
      <a href="Haji.php">Haji</a>
    </li> -->

    <li>
      <div class="dropdown"></div>
      <button class="btn btn-secondary bgdrop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; color: #E0B64A; background: none; ">
        <a>Umroh</a>
      </button>

      <ul class="dropdown-menu kiri kiri-hover" aria-labelledby="dropdownMenuButton1" style="border: 1px; background-color: #0D3C63;">
        <li class="kiri"><a class="dropdown-item teksputih underline" href="Umroh.php">Paket Umroh</a></li>
        <li class="kiri"><a class="dropdown-item teksputih underline" href="tabura.php">Tabungan Umroh</a></li>
        <li class="kiri"><a class="dropdown-item teksputih " href="badalUmroh.php">Badal Umroh</a></li>
      </ul>
    </li>

    <li>
      <div class="dropdown"></div>
      <button class="btn btn-secondary bgdrop" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="border: none; color: #E0B64A; background: none; ">
        <a>Haji</a>
      </button>

      <ul class="dropdown-menu kiri kiri-hover" aria-labelledby="dropdownMenuButton1" style="border: 1px; background-color: #0D3C63;">
        <li class="kiri"><a class="dropdown-item teksputih underline" href="Haji.php">Haji Furoda</a></li>
        <li class="kiri"><a class="dropdown-item teksputih underline" href="#">Haji Khusus</a></li>
        <li class="kiri"><a class="dropdown-item teksputih underline" href="tabungan.php">Tabungan Haji</a></li>
        <li class="kiri"><a class="dropdown-item teksputih" href="badalHaji.php">Badal Haji</a></li>
      </ul>
    </li>

    <!-- <li>
  <a href="#">Badal</a>
</li> -->
    <li>
      <a href="kemitraan.php">Kemitraan</a>
    </li>
    <li>
      <a href="galeri.php">Galeri & Artikel</a>
    </li>
</nav>
<div class="menubar">
  <ul>
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <a href="#">Services</a>
    </li>
    <li>
      <a href="#">Blog</a>
    </li>
    <li>
      <a href="#">Contact Us</a>
    </li>
  </ul>
</div>