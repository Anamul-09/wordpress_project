

<?php
include_once('nav-menu-walker.php');

function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'epora' ) );
  register_nav_menu( 'Catagory', __( 'Catagory Menu', 'epora' ) );
  add_theme_support('post_thumbnail');
  
}
add_action( 'after_setup_theme', 'register_my_menu' );

/**
 * Add script and style
 */
function my_load_scripts() {
   
    wp_enqueue_style('favicon_img',get_template_directory_uri().'/assets/css/favicon.css');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.css');
    wp_enqueue_style('meanmenu',get_template_directory_uri().'/assets/css/meanmenu.css');
    wp_enqueue_style('animate',get_template_directory_uri().'/assets/css/animate.css');
    wp_enqueue_style('slick',get_template_directory_uri().'/assets/css/slick.css');
    // wp_enqueue_style('slick',get_template_directory_uri().'/assets/img/slick.css');
    wp_enqueue_style('backtotop',get_template_directory_uri().'/assets/css/backtotop.css');
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style('nice-select',get_template_directory_uri().'/assets/css/nice-select.css');
    wp_enqueue_style('ui-icon',get_template_directory_uri().'/assets/css/ui-icon.css');
    wp_enqueue_style('elegentfonts',get_template_directory_uri().'/assets/css/elegentfonts.css');
    wp_enqueue_style('font-awesome-pro',get_template_directory_uri().'/assets/css/font-awesome-pro.css');
    wp_enqueue_style('spacing',get_template_directory_uri().'/assets/css/spacing.css');
    wp_enqueue_style('style',get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_style('mystyle',get_stylesheet_uri());

    // add script
	
	wp_register_script( 'jq-epora', get_template_directory_uri().'/assets/js/vendor/jquery.js',array(),'3.6.0',true);

	wp_enqueue_script ( 'waypoints',get_template_directory_uri().'/assets/js/vendor/waypoints.js/js',array(),'', true);

    wp_enqueue_script ( 'bundle',get_template_directory_uri().'/assets/js/bootstrap-bundle.js',array(),'', true);

    wp_enqueue_script ( 'slick',get_template_directory_uri().'/assets/js/vendor/slick.js',array(),'', true);

    wp_enqueue_script ( 'magnific-popup',get_template_directory_uri().'/assets/js/vendor/magnific-popup.js',array(),'', true);

    wp_enqueue_script ( 'parallax',get_template_directory_uri().'/assets/js/vendor/parallax.js',array(),'', true);

    wp_enqueue_script ( 'backtotop',get_template_directory_uri().'/assets/js/vendor/backtotop.js',array(),'', true);

    wp_enqueue_script ( 'nice-select',get_template_directory_uri().'/assets/js/vendor/nice-select.js',array(),'', true);

    wp_enqueue_script ( 'counterup',get_template_directory_uri().'/assets/js/vendor/counterup.js',array(),'', true);

    wp_enqueue_script ( 'wow',get_template_directory_uri().'/assets/js/vendor/wow.js',array(),'', true);

    wp_enqueue_script ( 'isotope-pkgd',get_template_directory_uri().'/assets/js/vendor/isotope-pkgd.js',array(),'', true);

    wp_enqueue_script ( 'imagesloaded-pkgd',get_template_directory_uri().'/assets/js/vendor/imagesloaded-pkgd.js',array(),'', true);

    wp_enqueue_script ( 'ajax-form',get_template_directory_uri().'/assets/js/vendor/ajax-form.js',array(),'', true);

    wp_enqueue_script ( 'main',get_template_directory_uri().'/assets/js/vendor/main.js',array(),'', true);

    


}
add_action('wp_enqueue_scripts', 'my_load_scripts');