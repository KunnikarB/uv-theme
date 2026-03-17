  </div> <!-- .container -->

  <footer class="site-footer">
    <div class="site-footer__inner">

      <!-- Brand -->
      <div class="site-footer__col site-footer__col--brand">
        <h3 class="site-footer__logo"><?php bloginfo('name'); ?></h3>
        <p class="site-footer__description">
          Discover Vadstena - culture, history, and unique experiences.
        </p>
        <!-- Social icons -->
        <div class="site-footer__social">
          <a href="#" aria-label="Facebook" class="social-link">
            <svg viewBox="0 0 24 24" width="20" height="20">
              <path fill="currentColor" d="M22 12a10 10 0 1 0-11.6 9.9v-7h-2.6v-2.9h2.6V9.4c0-2.6 1.5-4 3.8-4 1.1 0 2.2.2 2.2.2v2.4h-1.2c-1.2 0-1.6.8-1.6 1.5v1.8h2.8l-.4 2.9h-2.4v7A10 10 0 0 0 22 12z"/>
            </svg>
          </a>

          <a href="#" aria-label="Instagram" class="social-link">
            <svg viewBox="0 0 24 24" width="20" height="20">
              <path fill="currentColor" d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm5 5.8A4.2 4.2 0 1 1 7.8 12 4.2 4.2 0 0 1 12 7.8zm0 6.9A2.7 2.7 0 1 0 9.3 12 2.7 2.7 0 0 0 12 14.7zm4.4-7.4a1 1 0 1 1-1-1 1 1 0 0 1 1 1z"/>
            </svg>
          </a>
        </div>
      </div>

      <!-- Navigation -->
      <div class="site-footer__col">
        <h4 class="site-footer__heading">Explore</h4>
        <?php
          wp_nav_menu(array(
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'site-footer__menu',
            'fallback_cb' => false
          ));
        ?>
      </div>

      <!-- Contact -->
      <div class="site-footer__col">
        <h4 class="site-footer__heading">Contact</h4>
        <ul class="site-footer__contact">
          <li>Email: info@example.com</li>
          <li>Phone: +46 123 456</li>
        </ul>
      </div>
    </div>

      <!-- Bottom -->
      <div class="site-footer__bottom">
      <p>
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.
      </p>
      </div>
  </footer>

  <?php wp_footer(); ?>

</body>
</html>