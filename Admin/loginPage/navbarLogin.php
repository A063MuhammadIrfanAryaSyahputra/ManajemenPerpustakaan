<link rel="stylesheet" type="text/css" href="../../Main/css/navbar.css" />
<nav>
  <div class="logo">
    <a href="../../index.php"><img src="../../Main/assets/logoHorizon.png" alt="logo" class="logo-img" /></a> <!-- Adjust the path as needed -->
  </div>
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
