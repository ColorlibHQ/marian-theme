<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Marian
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function marian_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'marian' ),
        'id'            => 'marian-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'marian' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-5"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_2 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'marian' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-xl-3 col-lg-3 col-md-3 col-sm-3"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_3 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'marian' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-xl-3 col-lg-3 col-md-4  col-sm-5"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_4 %2$s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'marian_widgets_init' );
