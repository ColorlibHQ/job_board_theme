<?php 
/**
 * @Packge     : Job_Board
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'job_board_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'job_board' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'job_board_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Footer Menu Section
     */
    array(
        'id'   => 'job_board_footer_menu_options_panel',
        'args' => array(
            'title'    => esc_html__( 'Footer Menus', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 2,
        ),
    ),
    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'job_board_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 3,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'job_board_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'job_board_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'job_board_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 6,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'job_board_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 7,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'job_board_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 8,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'job_board_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'job_board' ),
            'panel'    => 'job_board_theme_options_panel',
            'priority' => 9,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>