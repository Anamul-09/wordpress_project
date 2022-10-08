<?php 

add_theme_support( 'post-thumbnails' );
add_theme_support( 'widgets' );

function zBoom_register_nav_menu(){
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'zBoommusic' ),
        'footer_menu'  => __( 'Footer Menu', 'zBoommusic' ),
    ) );
};
    add_action( 'after_setup_theme', 'zBoom_register_nav_menu');

    
function wpb_widgets_init() {
 
    register_sidebar( array(
        'name' => __( 'Right Sidebar', 'zboom' ),
        'id' => 'right-sb-1',
        'description' => __( 'The main sidebar appears on the right on each page except the front page template', 'zboom' ),
        'before_widget' => '<div class="col-1-3"><div class="wrap-col">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="box"><div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ) );
 
    register_sidebar( array(
        'name' =>__( 'Footer sidebar', 'zboom'),
        'id' => 'footer-sb-2',
        'description' => __( 'Appears on the static front page template', 'zboom' ),
        'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
        'after_widget' => '</div></div></div></div>',
        'before_title' => '<div class="heading"><h2>',
        'after_title' => '</h2></div><div class="content">',
    ) ); 
    }
 
    add_action( 'widgets_init', 'wpb_widgets_init' );

    // Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

?>