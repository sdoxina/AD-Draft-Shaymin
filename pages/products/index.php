<?php 
declare(strict_types=1);

$categoryIcons = [
  'Weapons' => 'fa-solid fa-gun',              // or fa-crosshairs, fa-bolt
  'Medical' => 'fa-solid fa-kit-medical',
  'Tools' => 'fa-solid fa-binoculars',
  'Sustenance' => 'fa-solid fa-apple-whole',
  'Bundles' => 'fa-solid fa-suitcase',
];


// DUMMY DATA FOR DEVELOPMENT (optional override)
$products = [
    // WEAPONS
    [
        'name' => 'Baseball bat',
        'description' => 'Sturdy blunt weapon effective for close combat and self-defense.',
        'category' => 'Weapons',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'baseballbat.png',
    ],
    [
        'name' => 'Sword',
        'description' => 'Sharp melee weapon ideal for silent and precise attacks.',
        'category' => 'Weapons',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'sword.png',
    ],
    [
        'name' => 'Knife',
        'description' => 'Compact blade suitable for stealth and utility purposes.',
        'category' => 'Weapons',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'knife.png',
    ],
    [
        'name' => 'Axe',
        'description' => 'Heavy-duty weapon capable of chopping through bone and wood.',
        'category' => 'Weapons',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'axe.png',
    ],
    [
        'name' => 'Machete',
        'description' => 'Long blade perfect for slashing through dense areas or enemies.',
        'category' => 'Weapons',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'machete.png',
    ],
    [
        'name' => 'Chainsaw',
        'description' => 'Devastating close-range weapon with high damage output.',
        'category' => 'Weapons',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'chainsaw.png',
    ],
    [
        'name' => 'Gun',
        'description' => 'Reliable ranged weapon suitable for rapid elimination of threats.',
        'category' => 'Weapons',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'gun.png',
    ],
    [
        'name' => 'Bow and Arrow',
        'description' => 'Silent ranged weapon useful for distance attacks and reuse of ammo.',
        'category' => 'Weapons',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'bowandarrow.jpg',
    ],
    [
        'name' => 'Flamethrower',
        'description' => 'Spreads fire across multiple targets, effective for crowd control.',
        'category' => 'Weapons',
        'price' => 50,
        'stock_quantity' => 100,
        'image_path' => 'flamethrower.jpg',
    ],
    [
        'name' => 'Bazooka',
        'description' => 'Powerful explosive weapon designed for maximum destruction.',
        'category' => 'Weapons',
        'price' => 50,
        'stock_quantity' => 100,
        'image_path' => 'bazooka.jpg',
    ],

    // MEDICAL
    [
        'name' => 'Bandaid',
        'description' => 'Adhesive bandage used for covering minor cuts and wounds.',
        'category' => 'Medical',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'bandaid.jpg',
    ],
    [
        'name' => 'Bandage',
        'description' => 'Basic medical supply used to stop bleeding and heal minor wounds.',
        'category' => 'Medical',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'bandage.jpg',
    ],
    [
        'name' => 'Healing Potion',
        'description' => 'Restores health quickly and effectively during critical moments.',
        'category' => 'Medical',
        'price' => 50,
        'stock_quantity' => 100,
        'image_path' => 'healingpotion.jpg',
    ],

    // TOOLS
    [
        'name' => 'Compass',
        'description' => 'Navigation tool used to determine direction and assist in orienteering.',
        'category' => 'Tools',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'compass.jpg',
    ],
    [
        'name' => 'Flashlight',
        'description' => 'Portable light source essential for exploring dark areas.',
        'category' => 'Tools',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'flashlight.jpg',
    ],
    [
        'name' => 'Lighter',
        'description' => 'Compact fire-starting tool useful for survival and cooking.',
        'category' => 'Tools',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'lighter.jpg',
    ],
    [
        'name' => 'Radio',
        'description' => 'Communication device to receive emergency broadcasts and updates.',
        'category' => 'Tools',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'radio.jpg',
    ],
    [
        'name' => 'Binoculars',
        'description' => 'Optical tool for scouting distant areas and spotting threats early.',
        'category' => 'Tools',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'binoculars.jpg',
    ],

    // SUSTENANCE
    [
        'name' => 'Chocolate',
        'description' => 'High-energy food item that boosts morale and provides quick calories.',
        'category' => 'Sustenance',
        'price' => 5,
        'stock_quantity' => 100,
        'image_path' => 'chocolate.jpg',
    ],
    [
        'name' => 'Turon',
        'description' => 'Sweet banana roll snack that offers a quick energy boost.',
        'category' => 'Sustenance',
        'price' => 5,
        'stock_quantity' => 100,
        'image_path' => 'turon.jpg',
    ],
    [
        'name' => 'Chicken',
        'description' => 'Protein-rich meal ideal for restoring stamina.',
        'category' => 'Sustenance',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'chicken.jpg',
    ],
    [
        'name' => 'Rice',
        'description' => 'Carbohydrate staple providing long-lasting energy.',
        'category' => 'Sustenance',
        'price' => 25,
        'stock_quantity' => 100,
        'image_path' => 'rice.jpg',
    ],
    [
        'name' => 'Water',
        'description' => 'Essential for hydration and survival.',
        'category' => 'Sustenance',
        'price' => 10,
        'stock_quantity' => 100,
        'image_path' => 'water.jpg',
    ],

    // BUNDLES
    [
        'name' => 'Beginner\'s Bundle',
        'description' => 'Includes 3 weapons, 2 medical items, and 2 sustenance supplies — perfect for new survivors.',
        'category' => 'Bundles', // fixed from 'Sustenance'
        'price' => 150,
        'stock_quantity' => 100,
        'image_path' => 'beginner.jpg',
    ],
    [
        'name' => 'Intermediate Bundle',
        'description' => 'Includes 2 weapons, 2 medical items, 2 tools, and 2 sustenance supplies — perfect for balanced survival.',
        'category' => 'Bundles',
        'price' => 180,
        'stock_quantity' => 100,
        'image_path' => 'intermediate.jpg',
    ],
    [
        'name' => 'Advanced Bundle',
        'description' => 'Loaded with 5 weapons, 2 medical items, 3 tools, and 3 sustenance supplies — ideal for long-term survival.',
        'category' => 'Bundles',
        'price' => 300,
        'stock_quantity' => 100,
        'image_path' => 'advanced.jpg',
    ],
];

// Search filter
$keyword = trim($_GET['search'] ?? '');
if ($keyword) {
    $products = array_filter($products, function ($product) use ($keyword) {
        return stripos($product['name'], $keyword) !== false ||
               stripos($product['description'], $keyword) !== false ||
               stripos($product['category'], $keyword) !== false;
    });
}

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="./assets/img/outlastLgFav.png">
</head>
<body>
    <!-- Nav -->
    <?php require_once BASE_PATH . '/components/templates/nav.component.php'; ?>

        <section class="products-section">
            <div class="category-nav d-flex justify-content-between align-items-center flex-wrap mb-4">
                <div class="category-heading mb-2 mb-md-0">
                    <h2 class="text-white m-0">Products</h2>
                </div>
                <div class="category-links d-flex flex-wrap justify-content-end gap-2">
                    <?php foreach ($categories as $category => $_): ?>
                        <a href="#<?= htmlspecialchars(strtolower(str_replace(' ', '-', $category))) ?>" class="category-link">
                            <i class="<?= $categoryIcons[$category] ?? 'lni lni-tag' ?> me-1"></i> <?= htmlspecialchars($category) ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>



            <?php foreach ($categories as $category => $items): ?>
                <h2 id="<?= htmlspecialchars(strtolower(str_replace(' ', '-', $category))) ?>" class="category-title">
                    <?= htmlspecialchars($category) ?>
                </h2>
                <div class="product-grid">
                    <?php foreach ($items as $product): 
                        // Handle image path with fallback if file doesn't exist
                        $imageFilename = $product['image_path'] ?? 'default.png';
                        $imageDir = '/pages/products/assets/img/';
                        $absolutePath = $_SERVER['DOCUMENT_ROOT'] . $imageDir . $imageFilename;
                        $finalFilename = file_exists($absolutePath) ? $imageFilename : 'default.png';
                        $bgPath = $imageDir . rawurlencode($finalFilename);
                    ?>
                        <div class="product-card">
                            <div 
                                class="product-image"
                                style="background-image: url('<?= htmlspecialchars($bgPath) ?>');"
                            ></div>
                            <div class="product-info">
                                <div class="product-name"><?= htmlspecialchars($product['name'] ?? '') ?></div>
                                <div class="product-desc"><?= htmlspecialchars($product['description'] ?? '') ?></div>
                                <div class="product-price">
                                <?= htmlspecialchars((string)($product['price'] ?? '0.00')) ?> zombie crystals
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
