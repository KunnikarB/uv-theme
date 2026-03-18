<?php  

/**
 * Theme Support
 */
add_theme_support('post-thumbnails');

/**
 * Enqueue Styles and Script
 */

// Assets
function uv_assets() {
  // CSS
  wp_enqueue_style(
    'main-style',
    get_stylesheet_uri(),
    array(),
    filemtime(get_stylesheet_directory() . '/style.css')
  );

  // JS
  wp_enqueue_script(
  'uv-main-js',
  get_template_directory_uri() . '/dist/main.js',
  array(),
  filemtime(get_template_directory() . '/dist/main.js'),
  true
);
}
add_action('wp_enqueue_scripts', 'uv_assets');

// Register menu
if (!function_exists('uv_theme_setup')) {
  function uv_theme_setup() {
    register_nav_menus(array(
      'primary' => 'Primary Menu',
      'footer'  => 'Footer Menu'
    ));
  }
}
add_action('after_setup_theme', 'uv_theme_setup');

// Open links in new tab
add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
    $atts['target'] = '_blank';
    $atts['rel'] = 'noopener noreferrer';
    return $atts;
}, 10, 3);