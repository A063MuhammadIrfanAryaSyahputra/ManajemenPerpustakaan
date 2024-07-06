<style>
  nav ul li a:hover {
    background-color: #2573b3;
    list-style: none;
  }
  nav ul li {
    list-style: none;
      list-style: none;
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
      list-style: none;
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
    <a href="../../index.php"><img src="../../Main/assets/logoHorizon.png" alt="logo" /></a>
  </div>
  </div>
  
    <li>
    </li>

    <!-- <li>
  <a href="#">Badal</a>
</li> -->
    <li>
    </li>
    <li>
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