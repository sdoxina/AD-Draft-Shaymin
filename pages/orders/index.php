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

    <section class="orders-section">
        <div class="zombie-order-form py-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="/handlers/orders.handler.php" method="POST" class="p-4 zombie-form shadow rounded" id="orderForm">
                        <!-- Pass products as JSON for JS -->
                        <input type="hidden" id="productData" value="<?= htmlspecialchars(json_encode($products)) ?>" />

                        <div class="mb-3">
                            <label for="product" class="form-label zombie-label">Select Product</label>
                            <select id="product" name="product_id" class="form-select" required>
                                <option value="" disabled selected>Choose product</option>
                                <?php foreach ($products as $product): ?>
                                <option value="<?= htmlspecialchars($product['product_id']) ?>">
                                    <?= htmlspecialchars($product['product_name']) ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <label for="price" class="form-label zombie-label">Price (₱)</label>
                                <input type="text" id="price" class="form-control" readonly value="0.00" />
                            </div>

                            <div>
                                <label for="quantity" class="form-label zombie-label">Quantity</label>
                                <!-- NO disabled -->
                                <input type="number" id="quantity" name="quantity" class="form-control" min="1" value="1" required />
                            </div>

                            <div>
                                <label for="total" class="form-label zombie-label">Total (₱)</label>
                                <input type="text" id="total" class="form-control" readonly value="0.00" />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="money_given" class="form-label zombie-label">Money Given</label>
                            <div class="input-group">
                                <span class="input-group-text" id="currencyIcon">
                                    <img
                                        src="/pages/orders/assets/img/crystal.png
    "
                                        alt="Currency"
                                        style="width: 24px; height: 24px;"
                                    />
                                </span>
                                <!-- NO disabled -->
                                <input type="number" step="0.01" min="0" id="money_given" name="money_given" class="form-control" placeholder="Enter amount given" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="change" class="form-label zombie-label">Change</label>
                            <input type="text" id="change" class="form-control" readonly value="0.00" />
                        </div>

                        <div class="d-grid">
                            <!-- NO disabled -->
                            <button type="submit" class="btn btn-success zombie-submit" id="submitBtn">BUY NOW</button>
                        </div>
                    </form>
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