  <footer class="footer-container container-fluid mb-0">
    <div class="row">
      <div class="footer-columns col-md-4">
        <ul class="navbar-nav">
          <li <?php if (is_page('links')) echo 'class="current_page_item"' ?> class="nav-item">
            <h6 class="footer-h6"><a href="<?php echo esc_url(site_url('/links')); ?>" class="footer-link">
              Links
            </a></h6>
          </li>
        </ul> <!-- .navbar-nav -->
      </div> <!-- .footer-columns .col-md-4 -->
      <div class="footer-columns col-md-4">
        <ul class="navbar-nav">
          <li <?php if (is_page('impressum')) echo 'class="current_page_item"' ?> class="nav-item">
            <h6 class="footer-h6"><a href="<?php echo esc_url(site_url('/impressum')); ?>" class="footer-link">
              Impressum
            </a></h6>
          </li>
        </ul> <!-- .navbar-nav -->
      </div> <!-- .footer-columns .col-md-4 -->
      <div class="footer-columns col-md-4 text-center">
        <ul class="navbar-nav">
          <li <?php if (is_page('datenschutzerklaerung')) echo 'class="current_page_item"' ?> class="nav-item">
            <h6 class="footer-h6"><a href="<?php echo esc_url(site_url('/datenschutzerklaerung')); ?>" class="footer-link">
              Datenschutzerklärung
            </a></h6>
          </li>
        </ul> <!-- .navbar-nav -->
      </div> <!-- .footer-columns .col-md-4 -->
    </div> <!-- .row -->
  </footer> <!-- .footer-container .container-fluid -->
  <?php wp_footer(); ?>
  </body>
</html>
