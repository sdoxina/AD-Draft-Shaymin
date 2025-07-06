<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.util.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlast</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/outlastFavicon.png">
</head>
<body>
    <!-- Nav -->
     <?php require_once BASE_PATH . '/components/templates/nav.component.php'; ?>

    <section class="hero-section">
         <div class="container-fluid">
            <div class="col hero-txt">
                <h1 class="hero-heading">Survive the Horde. <br> Thrive in the Apocalypse.</h1>
        <p class="hero-subheading">
          When the world fell, we didn’t hide—we prepared. Get the ultimate survival gear. Trade in Zombie Crystals and secure your life.
        </p>
        <a href="shop.php" class="btn btn-lg hero-cta">Our Products<i class="lni lni-arrow-right"></i></a>
      </div>
            </div>
            <div id="image"></div>
            <div id="glitch"></div>
      </div>
      </section>

      <section class="about-section">
         <div class="container-fluid">

         </div>
      </section>

      <!-- Footer -->
       <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>