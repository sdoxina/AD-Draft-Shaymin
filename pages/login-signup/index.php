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
    <link rel="icon" type="image/x-icon" href="../../assets/img/outlastLgFav.png">
</head>
<body>
    <!-- Nav -->
     <?php require_once BASE_PATH . '/components/templates/nav.component.php'; ?>

    <section class="login-signup-section d-flex align-items-center">
    <div class="card p-4 shadow-lg" style="max-width: 400px; width: 100%;">
      <!-- Sign In Form -->
      <form id="sign-in-form" class="needs-validation" novalidate>
        <h2 class="text-center mb-4">Sign In</h2>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" required>
          <div class="invalid-feedback">Please enter your username.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" required>
          <div class="invalid-feedback">Please enter your password.</div>
        </div>
        <button type="submit" class="btn w-100 mb-2">Login</button>
        <p class="text-center small">
          Don't have an account? 
          <a href="#" id="show-signup">Register</a>
        </p>
      </form>

      <!-- Sign Up Form -->
      <form id="sign-up-form" class="d-none needs-validation" novalidate>
        <h2 class="text-center mb-4">Sign Up</h2>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" required>
          <div class="invalid-feedback">Please enter a username.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" class="form-control" required>
          <div class="invalid-feedback">Please enter a valid email.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <input type="password" class="form-control" minlength="8" required>
          <div class="invalid-feedback">Password must be at least 8 characters.</div>
        </div>
        <button type="submit" class="btn w-100 mb-2">Sign Up</button>
        <p class="text-center small">
          Already have an account? 
          <a href="#" id="show-signin">Login</a>
        </p>
      </form>
    </div>
  </section>

      <!-- Footer -->
       <?php require_once BASE_PATH . '/components/templates/footer.component.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <script src="./assets/js/script.js"></script>
</body>
</html>