<?php
/* Theme setup */
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
add_theme_support( 'post-thumbnails' ); 

// Changing excerpt more
   function new_excerpt_more($more) {
   global $post;
   return '… <a href="'. get_permalink($post->ID) . '">' . '<br><span class="btn btn-primary">Read More &raquo;</span>' . '</a>';
   }
   add_filter('excerpt_more', 'new_excerpt_more');

?>

<?php // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');
?>

<?php  // register footer
	function footer() {
    echo '<p>This is inserted at the bottom</p>';
}
add_action('wp_footer', 'footer');
?>
