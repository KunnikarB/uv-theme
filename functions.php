<?php  

/**
 * Enqueue Styles and Script
 */
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

// Add type="module"
add_filter('script_loader_tag', function($tag, $handle) {
  if ($handle === 'uv-main-js') {
    return str_replace('<script ', '<script type="module" ', $tag);
  }
  return $tag;
}, 10, 2);
}

add_action('wp_enqueue_scripts', 'uv_assets');

// Registr menu
function uv_theme_setup() {
  register_nav_menus(array(
    'primary' => 'Primary Menu'
  ));
}
add_action('after_setup_theme', 'uv_theme_setup');