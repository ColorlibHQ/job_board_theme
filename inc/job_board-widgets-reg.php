<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
}

/**
 * @Packge     : Job_Board
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 

function job_board_widgets_init() {
    // sidebar widgets register
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'job_board' ),
        'id'            => 'job_board-post-sidebar',
        'before_widget' => '<div id="%1$s" class="single_sidebar_widget widget blog-post-archives %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget_title">',
        'after_title'   => '</h4>',
    ) );
    
    // footer widgets register
    // register_sidebar( array(
    //     'name'          => esc_html__( 'Footer One', 'job_board' ),
    //     'id'            => 'footer-1',
    //     'before_widget' => '<div class="col-xl-3 col-md-6 col-lg-3"><div id="%1$s" class="single-footer-widget menu_links footer_widget widget footer_1 %2$s">',
    //     'after_widget'  => '</div></div>',
    //     'before_title'  => '<h3 class="footer_title">',
    //     'after_title'   => '</h3>',
    // ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Two', 'job_board' ),
        'id'            => 'footer-2',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-3"><div id="%1$s" class="single-footer-widget menu_links footer_widget wow fadeInUp widget footer_2 %2$s" data-wow-duration="1.1s" data-wow-delay=".4s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Three', 'job_board' ),
        'id'            => 'footer-3',
        'before_widget' => '<div class="col-xl-2 col-md-6 col-lg-2"><div id="%1$s" class="single-footer-widget menu_links footer_widget wow fadeInUp widget footer_3 %2$s" data-wow-duration="1.2s" data-wow-delay=".5s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Four', 'job_board' ),
        'id'            => 'footer-4',
        'before_widget' => '<div class="col-xl-4 col-md-6 col-lg-4"><div id="%1$s" class="single-footer-widget menu_links footer_widget wow fadeInUp widget footer_4 %2$s" data-wow-duration="1.3s" data-wow-delay=".6s">',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h3 class="footer_title">',
        'after_title'   => '</h3>',
    ) );
    
}
add_action( 'widgets_init', 'job_board_widgets_init' );
