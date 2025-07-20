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
    <link rel="icon" type="image/x-icon" href="./assets/img/outlastLgFav.png">
</head>
<body>
    <!-- Nav -->
     <?php require_once BASE_PATH . '/components/templates/nav.component.php'; ?>

    <section class="hero-section">
         <div class="container-fluid">
            <div class="col hero-txt">
              <img src="./assets/img/outlastLgWhite.png" alt="Outlast Logo" class="hero-img">
                <h1 class="hero-subheading">Survive the Horde. <br> Thrive in the Apocalypse.</h1>
        <p class="hero-body">
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
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6">
              <img src="./assets/img/outlastImage1.png" alt="Woman standing infront of door" class="img-fluid abt-img">
            </div>
            <div class="col-12 col-sm-6">
              <img src="./assets/img/outlastImage2.png" alt="Why Choose Outlast text" class="img-fluid abt-img">
            </div>
          </div>
          <!-- <img src="./assets/img/chooseOutlast.png" alt="Why Choose Outlast" class="choose-img"> -->
        </div>
      </section>

      <section class="about-cards">
        <div class="about-container container">
          <div class="row g-4" id="about-cards-grid"></div>
        </div>
      </section>

      <section class="zcry-section">
        <div class="container-fluid zcry-container">
          <div class="row g-0">
            <div class="col-12 col-sm-6 zcry-col">
              <img src="./assets/img/zcry-img.png" alt="" class="img-fluid zcry-img">
            </div>
            <div class="col-12 col-sm-6 d-flex align-items-center justify-content-center">
              <div class="zcry-text">
                <img src="./assets/img/zcry-heading.png" alt="Zombie Crystals text" class="img-fluid zcry-txt">
                <h5>
                  In the ashes of the old world, currency is no longer paper and metal. Now, only Zombie Crystals (ZCRY)—harvested from the skulls of the undead—hold value. These glowing shards hum with lingering energy, accepted universally in settlements and black markets alike. Power, trade, and survival—everything runs on the crystal now.
                </h5>
              </div>
            </div>
          </div>
        </div>
      </section>




      <!-- Footer -->
       <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>