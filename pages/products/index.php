<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/../../vendor/autoload.php';
require_once BASE_PATH . '/../../utils/htmlEscape.util.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Outlast</title>
  <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="icon" type="image/x-icon" href="../../assets/img/outlastLgFav.png" />
</head>
<body>

  <!-- Navigation -->
  <?php require_once BASE_PATH . '/../../components/templates/nav.component.php'; ?>

  <!-- Product Catalog -->
  <section class="product-page container py-5">
    <div class="text-center mb-4">
      <h1 class="outlast-title">Outlast Products</h1>
      <input type="text" id="searchInput" placeholder="Search..." class="form-control search-box" />
    </div>

    <div class="row g-4" id="productGrid">
      <!-- Product Card -->
      <?php
        $products = [
          ["title" => "LUITION", "desc" => "Knockoff Good Back Pack", "price" => "₱1999"],
          ["title" => "UEREATIN", "desc" => "Multi-Pocket Crossbag", "price" => "₱1999"],
          ["title" => "PRODJOR", "desc" => "Dark Red Sling Bag", "price" => "₱1999"],
          ["title" => "FOO TITE", "desc" => "Camera Backpack", "price" => "₱1999"],
          ["title" => "ADRP EGSE", "desc" => "Combat Style Gear", "price" => "₱1999"],
        ];

        foreach ($products as $p) {
          echo '
          <div class="col-sm-6 col-md-4 col-lg-3 product-card">
            <div class="card h-100 bg-dark text-white border border-danger text-center p-3">
              <h5 class="text-danger">' . htmlEscape($p["title"]) . '</h5>
              <p>' . htmlEscape($p["desc"]) . '</p>
              <p class="fw-bold">' . htmlEscape($p["price"]) . '</p>
            </div>
          </div>';
        }
      ?>
    </div>
  </section>

  <!-- Footer -->
  <?php require_once BASE_PATH . '/../../components/templates/footer.component.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="./assets/js/script.js"></script>
</body>
</html>
