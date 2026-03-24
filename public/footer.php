  <footer>
    <div class="container footer-grid">
      <div>
        <h4>Golden Plate Recipes</h4>
        <p>Easy, reliable, and beautiful recipes for everyday home cooks.</p>
      </div>
      <div>
        <h4>Pages</h4>
        <a href="<?php echo home_url(); ?>">Home</a>
        <a href="<?php echo home_url('/recipes/'); ?>">Recipes</a>
        <a href="<?php echo home_url('/about/'); ?>">About</a>
        <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
      </div>
      <div>
        <h4>Legal</h4>
        <a href="<?php echo home_url('/privacy-policy/'); ?>">Privacy Policy</a>
        <a href="<?php echo home_url('/disclaimer/'); ?>">Disclaimer</a>
        <a href="<?php echo home_url('/terms-and-conditions/'); ?>">Terms & Conditions</a>
        <a href="<?php echo home_url('/refund-and-returns/'); ?>">Refund & Returns</a>
        <a href="<?php echo home_url('/shipping-policy/'); ?>">Shipping Policy</a>
      </div>
    </div>
    <div class="copyright">© 2026 Golden Plate Recipes. All rights reserved.</div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>