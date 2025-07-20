<?php
if (!defined('BASE_PATH')) {
    define('BASE_PATH', __DIR__);
}
require_once BASE_PATH . '/vendor/autoload.php';
require_once BASE_PATH . '/utils/htmlEscape.util.php';

// Dummy user
$user = [
    'first_name' => 'Alex',
    'last_name' => 'Mercer'
];

// Dummy transactions
$transactions = [
    [
        'transaction_id' => 101,
        'transaction_date' => '2025-07-18 14:35',
        'currency' => 'PHP',
        'amount_paid' => 200,
        'total_amount' => 150,
        'change' => 50,
        'status' => 'completed'
    ],
    [
        'transaction_id' => 102,
        'transaction_date' => '2025-07-19 10:15',
        'currency' => 'PHP',
        'amount_paid' => 180,
        'total_amount' => 180,
        'change' => 0,
        'status' => 'pending'
    ],
    [
        'transaction_id' => 103,
        'transaction_date' => '2025-07-19 12:20',
        'currency' => 'PHP',
        'amount_paid' => 500,
        'total_amount' => 300,
        'change' => 200,
        'status' => 'completed'
    ]
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

<section class="transaction-section text-white py-5">
    <div class="container">
        <h2 class="text-center ts-title mb-4">Transaction History</h2>

        <?php if (empty($transactions)): ?>
            <p class="text-center text-muted">No transactions yet.</p>
        <?php else: ?>
            <?php foreach ($transactions as $tx): ?>
                <form 
                    class="transaction-form mb-4 p-4 rounded"
                    method="<?= $tx['status'] === 'pending' ? 'POST' : 'GET' ?>" 
                    action="<?= $tx['status'] === 'pending' ? '/handlers/mark_completed.handler.php' : '#' ?>"
                >
                    <div class="form-group mb-3">
                        <label>User</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Date</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= htmlspecialchars($tx['transaction_date']) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Currency</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= htmlspecialchars($tx['currency']) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Amount Paid</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= number_format((float)$tx['amount_paid'], 2) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Total Amount</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= number_format((float)$tx['total_amount'], 2) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Change</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= number_format((float)$tx['change'], 2) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label>Status</label>
                        <input type="text" class="form-control readonly-input" 
                            value="<?= ucfirst($tx['status']) ?>" readonly>
                    </div>

                    <?php if ($tx['status'] === 'pending'): ?>
                        <input type="hidden" name="transaction_id" value="<?= $tx['transaction_id'] ?>">
                        <button type="submit" class="pay-button mt-3">Proceed to Pay</button>
                    <?php endif; ?>
                </form>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>
    
    <!-- Footer -->
     <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>
</body>
</html>
