<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scroll Snap Example</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/style.css" />

  <style>
    html, body {
      height: 100%;
      margin: 0;
      scroll-behavior: smooth; /* Smooth scrolling */
    }

    .container-snap {
      display: flex;
      flex-direction: column;
      height: 100vh; /* Full height of the viewport */
      scroll-snap-type: y mandatory; /* Enable vertical snapping */
      overflow-y: scroll; /* Enable vertical scrolling */
      -ms-overflow-style: none; /* Internet Explorer 10+ */
      scrollbar-width: none; /* Firefox */
    }

    .container-snap::-webkit-scrollbar {
      display: none; /* Safari and Chrome */
    }

    .snap-section {
      scroll-snap-align: start; /* Snap to the start of the section */
      scroll-snap-stop: always;
      flex: 0 0 100vh; /* Each section takes full viewport height */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2rem;
      background: lightblue;
      border: 1px solid #ccc;
    }

    .snap-section:nth-child(odd) {
      background: lightcoral;
    }
  </style>
</head>
<body>
  <?php include 'navbarAmansa.php'; ?>

  <div class="container-snap">
    <section class="snap-section">Section 1</section>
    <section class="snap-section">Section 2</section>
    <section class="snap-section">Section 3</section>
    <section class="snap-section">Section 4</section>
  </div>



  <?php include 'footerAmansa.php'; ?>

</body>
</html>
