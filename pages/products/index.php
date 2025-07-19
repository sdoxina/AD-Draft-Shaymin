<?php 
declare(strict_types=1);

require_once UTILS_PATH . "/products.util.php";

// Prepare search keyword and product list
$keyword = trim($_GET['search'] ?? '');
$products = $keyword
    ? ProductsUtil::search($keyword)
    : ProductsUtil::getAll();

// Group products by category
$categories = [];
foreach ($products as $product) {
    $category = $product['category'] ?? 'Uncategorized';
    $categories[$category][] = $product;
}
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

        <section class="all-categories-bg">
            <div class="top-bar">

                <form method="GET" action="" class="search-section">
                    <input 
                        type="text" 
                        class="search" 
                        name="search" 
                        placeholder="Search"
                        value="<?= htmlspecialchars($keyword) ?>"
                    >
                    <button type="submit" class="search-btn">
                        <img src="/images/search.png" class="search-icon" alt="Search">
                    </button>
                </form>

                <div class="icons">
                    <img src="/images/carttt.png" alt="Cart" class="icon-img">
                </div>
            </div>

            <?php foreach ($categories as $category => $items): ?>
                <h2 class="category-title"><?= htmlspecialchars($category) ?></h2>
                <div class="product-grid">
                    <?php foreach ($items as $product): 
                        // Handle image path with fallback if file doesn't exist
                        $imageFilename = $product['image_path'] ?? 'default.png';
                        $imageDir = '/pages/products/assets/img/';
                        $absolutePath = $_SERVER['DOCUMENT_ROOT'] . $imageDir . $imageFilename;
                        $finalFilename = file_exists($absolutePath) ? $imageFilename : 'default.png';
                        $bgPath = $imageDir . rawurlencode($finalFilename);
                    ?>
                        <div 
                            class="product-card"
                            style="background-image: url('<?= htmlspecialchars($bgPath) ?>');"
                        >
                            <div class="product-info">
                                <div class="product-name"><?= htmlspecialchars($product['name'] ?? '') ?></div>
                                <div class="product-desc"><?= htmlspecialchars($product['description'] ?? '') ?></div>
                                <div class="product-price">
                                    <?= htmlspecialchars($product['price'] ?? '0.00') ?> zombie crystals
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </section>
        
         <!-- Footer -->
       <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>
