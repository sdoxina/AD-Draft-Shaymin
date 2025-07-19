<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.util.php';

$products = [
    ['product_id' => 1, 'product_name' => 'Baseball bat', 'price' => 10],
    ['product_id' => 2, 'product_name' => 'Sword', 'price' => 10],
    ['product_id' => 3, 'product_name' => 'Knife', 'price' => 10],
    ['product_id' => 4, 'product_name' => 'Axe', 'price' => 10],
    ['product_id' => 5, 'product_name' => 'Machete', 'price' => 25],
    ['product_id' => 6, 'product_name' => 'Chainsaw', 'price' => 25],
    ['product_id' => 7, 'product_name' => 'Gun', 'price' => 25],
    ['product_id' => 8, 'product_name' => 'Bow and Arrow', 'price' => 25],
    ['product_id' => 9, 'product_name' => 'Flamethrower', 'price' => 50],
    ['product_id' => 10, 'product_name' => 'Bazooka', 'price' => 50],

    ['product_id' => 11, 'product_name' => 'Bandaid', 'price' => 10],
    ['product_id' => 12, 'product_name' => 'Bandage', 'price' => 25],
    ['product_id' => 13, 'product_name' => 'Healing Potion', 'price' => 50],

    ['product_id' => 14, 'product_name' => 'Compass', 'price' => 10],
    ['product_id' => 15, 'product_name' => 'Flashlight', 'price' => 10],
    ['product_id' => 16, 'product_name' => 'Lighter', 'price' => 10],
    ['product_id' => 17, 'product_name' => 'Radio', 'price' => 10],
    ['product_id' => 18, 'product_name' => 'Binoculars', 'price' => 25],

    ['product_id' => 19, 'product_name' => 'Chocolate', 'price' => 5],
    ['product_id' => 20, 'product_name' => 'Turon', 'price' => 5],
    ['product_id' => 21, 'product_name' => 'Chicken', 'price' => 25],
    ['product_id' => 22, 'product_name' => 'Rice', 'price' => 25],
    ['product_id' => 23, 'product_name' => 'Water', 'price' => 10],

    ['product_id' => 24, 'product_name' => 'Beginner\'s Bundle', 'price' => 150],
    ['product_id' => 25, 'product_name' => 'Intermediate Bundle', 'price' => 180],
    ['product_id' => 26, 'product_name' => 'Advanced Bundle', 'price' => 300],
];

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
                        <input type="hidden" id="productData" value="<?= htmlspecialchars(json_encode($products)) ?>" />
                        <input type="hidden" name="order_items" id="orderItems" />

                        <!-- Select and Add Product -->
                        <div class="mb-3 d-flex justify-content-between align-items-center select-product">
                            <div>
                            <label for="product" class="form-label zombie-label">Select Product</label>
                            <select id="product" class="form-select">
                                <option value="" disabled selected>Choose product</option>
                                <?php foreach ($products as $product): ?>
                                <option value="<?= htmlspecialchars($product['product_id']) ?>">
                                    <?= htmlspecialchars($product['product_name']) ?> (₱<?= $product['price'] ?>)
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div>
                                <label for="quantity" class="form-label zombie-label">Quantity</label>
                                <input type="number" id="quantity" class="form-control" min="1" value="1" />
                            </div>

                            <div>
                                <label class="form-label zombie-label d-block">&nbsp;</label>
                                <button type="button" id="addProductBtn" class="btn btn-success">Add</button>
                            </div>
                        </div>

                        <!-- <div class="mb-3 d-flex justify-content-between align-items-center">
                            <div>
                                <label for="price" class="form-label zombie-label">Price (₱)</label>
                                <input type="text" id="price" class="form-control" readonly value="0.00" />
                            </div>

                            
                        </div> -->

                        <!-- Order Table -->
                        <table class="table table-dark table-bordered mb-3" id="orderTable">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Qty</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                        <!-- Payment Section -->
                        <div class="mb-3">
                            <label for="money_given" class="form-label zombie-label">Money Given</label>
                            <div class="input-group">
                                <span class="input-group-text" id="currencyIcon">
                                    <img src="/pages/orders/assets/img/crystal.png" alt="Currency" style="width: 24px; height: 24px;" />
                                </span>
                                <input type="number" step="0.01" min="0" id="money_given" name="money_given" class="form-control" placeholder="Enter amount given" required />
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="total" class="form-label zombie-label">Total (₱)</label>
                            <input type="text" id="total" class="form-control" readonly value="0.00" />
                        </div>

                        <div class="mb-3">
                            <label for="change" class="form-label zombie-label">Change</label>
                            <input type="text" id="change" class="form-control" readonly value="0.00" />
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success zombie-submit" id="submitBtn" disabled>BUY NOW</button>
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