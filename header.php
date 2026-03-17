<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">

  <header class="site-header">
    <div class="site-header__inner">
      <!-- Branding -->
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.svg'); ?>" alt="<?php bloginfo('name'); ?>">
      </a>

      <!-- Menu -->
      <nav class="site-menu">
        <?php
         wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'site-menu__list',
        'fallback_cb' => false
        ));
        ?>
      </nav>

       <!-- Button -->
        <div class="top-buttons">
          <ul class="top-buttons__list">
            <li class="top-buttons__item">
              <div class="button">
                <span class="button__text">
                  Sök
                </span>
                <figure class="button__icon">
                  <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14.001 8C14.0009 7.21214 13.8454 6.43199 13.5439 5.7041C13.2424 4.97617 12.8003 4.31496 12.2432 3.75781C11.6861 3.20071 11.0247 2.75857 10.2969 2.45703C9.56888 2.15549 8.78798 2 8 2C7.21214 2.00005 6.43199 2.15553 5.7041 2.45703C4.97615 2.75858 4.31497 3.20066 3.75781 3.75781C2.63261 4.88301 2.00009 6.40874 2 8C2 9.59139 2.63253 11.1179 3.75781 12.2432C4.883 13.3683 6.4088 14.0009 8 14.001C9.59139 14.001 11.1179 13.3684 12.2432 12.2432C12.8003 11.686 13.2424 11.0248 13.5439 10.2969C13.8455 9.56888 14.001 8.78798 14.001 8ZM16.001 8C16.001 9.0505 15.7936 10.091 15.3916 11.0615C15.1178 11.7226 14.7553 12.3414 14.3184 12.9043L17.707 16.293C18.0976 16.6835 18.0976 17.3165 17.707 17.707C17.3165 18.0976 16.6835 18.0976 16.293 17.707L12.9033 14.3174C11.5076 15.4007 9.78559 16.001 8 16.001C5.8783 16.0009 3.84305 15.1575 2.34277 13.6572C0.842639 12.1569 0 10.1217 0 8C9.45803e-05 5.8783 0.8425 3.84305 2.34277 2.34277C3.08558 1.59997 3.96797 1.01143 4.93848 0.609375C5.90901 0.207365 6.9495 4.68919e-05 8 0C9.05054 0 10.0909 0.207384 11.0615 0.609375C12.032 1.01137 12.9144 1.60004 13.6572 2.34277C14.4001 3.0856 14.9895 3.96794 15.3916 4.93848C15.7936 5.90902 16.0009 6.9495 16.001 8Z" fill="currentColor"/>
                  </svg>

                </figure>
              </div>
            </li>

            <li class="top-buttons__item">
              <div class="button">
                <span class="button__text">
                  Language
                </span>
                <!-- <span class="button__text button__text--responsive">
                  Lang.
                </span> -->
                <figure class="button__icon">
                  <svg width="19" height="11" viewBox="0 0 19 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L9.5 9.5L18 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </figure>
              </div>
            </li>

            <li class="top-buttons__item top-buttons__item--hidden">
              <div class="button">
                <figure class="button__icon">
                  <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 12.001C18.5523 12.001 19 12.4487 19 13.001C18.9997 13.553 18.5521 14.001 18 14.001H1C0.447878 14.001 0.000263794 13.553 0 13.001C0 12.4487 0.447715 12.001 1 12.001H18ZM18 6C18.5522 6 18.9999 6.44783 19 7C19 7.55228 18.5523 8 18 8H1C0.447715 8 0 7.55228 0 7C0.00013192 6.44783 0.447797 6 1 6H18ZM18 0C18.5523 0 19 0.447715 19 1C19 1.55228 18.5523 2 18 2H1C0.447715 2 0 1.55228 0 1C0 0.447715 0.447715 0 1 0H18Z" fill="currentColor"/>
                  </svg>
                </figure>
              </div>
            </li>

          </ul>
        </div>
    </div>
  </header>