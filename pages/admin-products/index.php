<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.util.php';
?>

<?php
// Extended Dummy Data for testing
$products = [
    [
        'name'           => 'Baseball bat',
        'description'    => 'Sturdy blunt weapon effective for close combat and self-defense.',
        'category'       => 'Weapons',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Sword',
        'description'    => 'Sharp melee weapon ideal for silent and precise attacks.',
        'category'       => 'Weapons',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Knife',
        'description'    => 'Compact blade suitable for stealth and utility purposes.',
        'category'       => 'Weapons',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Axe',
        'description'    => 'Heavy-duty weapon capable of chopping through bone and wood.',
        'category'       => 'Weapons',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Machete',
        'description'    => 'Long blade perfect for slashing through dense areas or enemies.',
        'category'       => 'Weapons',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Chainsaw',
        'description'    => 'Devastating close-range weapon with high damage output.',
        'category'       => 'Weapons',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Gun',
        'description'    => 'Reliable ranged weapon suitable for rapid elimination of threats.',
        'category'       => 'Weapons',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Bow and Arrow',
        'description'    => 'Silent ranged weapon useful for distance attacks and reuse of ammo.',
        'category'       => 'Weapons',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Flamethrower',
        'description'    => 'Spreads fire across multiple targets, effective for crowd control.',
        'category'       => 'Weapons',
        'price'          => 50,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Bazooka',
        'description'    => 'Powerful explosive weapon designed for maximum destruction.',
        'category'       => 'Weapons',
        'price'          => 50,
        'stock_quantity' => 100,
    ],

    // MEDICAL
    [
        'name'           => 'Bandaid',
        'description'    => 'Adhesive bandage used for covering minor cuts and wounds.',
        'category'       => 'Medical',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Bandage',
        'description'    => 'Basic medical supply used to stop bleeding and heal minor wounds.',
        'category'       => 'Medical',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Healing Potion',
        'description'    => 'Restores health quickly and effectively during critical moments.',
        'category'       => 'Medical',
        'price'          => 50,
        'stock_quantity' => 100,
    ],

    // TOOLS
    [
        'name'           => 'Compass',
        'description'    => 'Navigation tool used to determine direction and assist in orienteering.',
        'category'       => 'Tools',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Flashlight',
        'description'    => 'Portable light source essential for exploring dark areas.',
        'category'       => 'Tools',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Lighter',
        'description'    => 'Compact fire-starting tool useful for survival and cooking.',
        'category'       => 'Tools',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Radio',
        'description'    => 'Communication device to receive emergency broadcasts and updates.',
        'category'       => 'Tools',
        'price'          => 10,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Binoculars',
        'description'    => 'Optical tool for scouting distant areas and spotting threats early.',
        'category'       => 'Tools',
        'price'          => 25,
        'stock_quantity' => 100,
    ],

    // SUSTENANCE
    [
        'name'           => 'Chocolate',
        'description'    => 'High-energy food item that boosts morale and provides quick calories.',
        'category'       => 'Sustenance',
        'price'          => 5,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Turon',
        'description'    => 'Sweet banana roll snack that offers a quick energy boost.',
        'category'       => 'Sustenance',
        'price'          => 5,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Chicken',
        'description'    => 'Protein-rich meal ideal for restoring stamina.',
        'category'       => 'Sustenance',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Rice',
        'description'    => 'Carbohydrate staple providing long-lasting energy.',
        'category'       => 'Sustenance',
        'price'          => 25,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Water',
        'description'    => 'Essential for hydration and survival.',
        'category'       => 'Sustenance',
        'price'          => 10,
        'stock_quantity' => 100,
    ],

    // BUNDLE DATA
    [
        'name'           => 'Beginner\'s Bundle',
        'description'    => '3 weapons, 2 medical, 2 sustenance (one food, one water)',
        'category'       => 'Sustenance',
        'price'          => 150,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Intermediate Bundle',
        'description'    => 'Includes 2 weapons, 2 medical items, 2 tools, and 2 sustenance supplies — perfect for balanced survival.',
        'category'       => 'Bundles',
        'price'          => 180,
        'stock_quantity' => 100,
    ],
    [
        'name'           => 'Advanced Bundle',
        'description'    => 'Loaded with 5 weapons, 2 medical items, 3 tools, and 3 sustenance supplies — ideal for long-term survival.',
        'category'       => 'Bundles',
        'price'          => 300,
        'stock_quantity' => 100,
    ],
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

        <!-- Products Management Section -->
<section class="admin-orders-section">
  <div class="card p-4 shadow-lg aos-card" style="max-width: 900px; width: 100%;">
    <h2 class="text-center signup-txt mb-4">Product List</h2>

    <!-- Product Table -->
    <?php if (empty($products)): ?>
      <p class="text-center">No products found.</p>
    <?php else: ?>
      <div class="table-wrapper aos-table">
        <table class="table table-hover table-sm mb-0">
          <colgroup>
            <col style="width: 25%;">
            <col style="width: 15%;">
            <col style="width: 20%;">
            <col style="width: 15%;">
            <col style="width: 25%;">
          </colgroup>
          <thead class="table-dark">
            <tr>
              <th>Product Name</th>
              <th>Category</th>
              <th>Price (Zombie Crystals)</th>
              <th>Stock</th>
              <th>Description</th>
            </tr>
          </thead>
        </table>

        <div class="table-body-scroll">
          <table class="table table-hover table-sm mb-0">
            <colgroup>
              <col style="width: 25%;">
              <col style="width: 15%;">
              <col style="width: 20%;">
              <col style="width: 15%;">
              <col style="width: 25%;">
            </colgroup>
            <tbody>
              <?php foreach ($products as $p): ?>
                <tr>
                  <td><?= htmlspecialchars($p['name']) ?></td>
                  <td><?= htmlspecialchars($p['category']) ?></td>
                  <td><?= number_format((float)$p['price'], 2) ?></td>
                  <td><?= (int)$p['stock_quantity'] ?></td>
                  <td><?= htmlspecialchars($p['description']) ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

      

      <!-- Footer -->
       <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>