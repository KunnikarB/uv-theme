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
        <ul>
          <li><a href="">Se & Upplev</a></li>
          <li><a href="">Äta & Bo</a></li>
          <li><a href="">Butiker</a></li>
          <li><a href="">Evenemang</a></li>
          <li><a href="">Historia</a></li>
        </ul>
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
                  <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 0C1.26522 0 1.51957 0.105357 1.70711 0.292893C1.89464 0.48043 2 0.734784 2 1V11C2 11.2652 1.89464 11.5196 1.70711 11.7071C1.51957 11.8946 1.26522 12 1 12C0.734784 12 0.48043 11.8946 0.292893 11.7071C0.105357 11.5196 0 11.2652 0 11V1C0 0.734784 0.105357 0.48043 0.292893 0.292893C0.48043 0.105357 0.734784 0 1 0ZM7 0C7.26522 0 7.51957 0.105357 7.70711 0.292893C7.89464 0.48043 8 0.734784 8 1V11C8 11.2652 7.89464 11.5196 7.70711 11.7071C7.51957 11.8946 7.26522 12 7 12C6.73478 12 6.48043 11.8946 6.29289 11.7071C6.10536 11.5196 6 11.2652 6 11V1C6 0.734784 6.10536 0.48043 6.29289 0.292893C6.48043 0.105357 6.73478 0 7 0Z" fill="currentColor"/>
                  </svg>
                </figure>
              </div>
            </li>

            <li class="top-buttons__item">
              <div class="button">
                <span class="button__text">
                  Language
                </span>
                <span class="button__text button__text--responsive">
                  Lang.
                </span>
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