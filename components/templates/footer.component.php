<?php
require_once BASE_PATH . '/handlers/pageData.handler.php';
?>

<footer class="footer">
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <ul class="footer flex-column list-unstyled">
            <?php foreach ($footerLinks as $link): ?>
              <li class="footer-item mb-2">
                <a href="<?= $link['url'] ?>" class="footer-link p-0 text-body-secondary">
                  <?= htmlspecialchars($link['label']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
        <div class="col-6 col-md-2 mb-3">
          <h5><?= htmlspecialchars($webDesigner['role']) ?></h5>
          <h6><?= htmlspecialchars($webDesigner['name']) ?></h6>
        </div>
        <div class="col-md-7 offset-md-1 mb-3">
          <img src="<?= $companyLogo ?>" alt="Outlast Logo">
        </div>
      </div>
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>Copyright <?= $companyCopyright ?></p>
      </div>
    </footer>
  </div>
</footer>
