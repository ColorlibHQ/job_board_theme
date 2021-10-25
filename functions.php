<?php
/**
 * @Packge       : Colorlib
 * @Version      : 1.0
 * @Author       : Colorlib
 * @Author       URI : http://colorlib.com/wp/
 *
 */

// Block direct access
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


/**
 *
 * Define constant
 *
 */

// Base URI
if ( ! defined( 'JOB_BOARD_DIR_URI' ) ) {
	define( 'JOB_BOARD_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'JOB_BOARD_DIR_ASSETS_URI' ) ) {
	define( 'JOB_BOARD_DIR_ASSETS_URI', JOB_BOARD_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'JOB_BOARD_DIR_CSS_URI' ) ) {
	define( 'JOB_BOARD_DIR_CSS_URI', JOB_BOARD_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'JOB_BOARD_DIR_JS_URI' ) ) {
	define( 'JOB_BOARD_DIR_JS_URI', JOB_BOARD_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'JOB_BOARD_DIR_IMGS_URI' ) ) {
	define( 'JOB_BOARD_DIR_IMGS_URI', JOB_BOARD_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'JOB_BOARD_DIR_ICON_IMG_URI' ) ) {
	define( 'JOB_BOARD_DIR_ICON_IMG_URI', JOB_BOARD_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'JOB_BOARD_DIR_PATH' ) ) {
	define( 'JOB_BOARD_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'JOB_BOARD_DIR_PATH_INC' ) ) {
	define( 'JOB_BOARD_DIR_PATH_INC', JOB_BOARD_DIR_PATH . 'inc/' );
}

//Job_Board Libraries Folder Directory
if ( ! defined( 'JOB_BOARD_DIR_PATH_LIBS' ) ) {
	define( 'JOB_BOARD_DIR_PATH_LIBS', JOB_BOARD_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'JOB_BOARD_DIR_PATH_CLASSES' ) ) {
	define( 'JOB_BOARD_DIR_PATH_CLASSES', JOB_BOARD_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'JOB_BOARD_DIR_PATH_HOOKS' ) ) {
	define( 'JOB_BOARD_DIR_PATH_HOOKS', JOB_BOARD_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function job_board_admin_script(){
    wp_enqueue_style( 'job_board-admin', get_template_directory_uri().'/assets/css/job_board-admin.css', false, '1.0.0' );
    // wp_enqueue_script( 'job_board_admin', get_template_directory_uri().'/assets/js/job_board-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'job_board_admin_script' );



/**
 * Include File
 *
 */
require_once( JOB_BOARD_DIR_PATH_INC . 'job_board-breadcrumbs.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'job_board-widgets-reg.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'post-like.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'job_board-functions.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'job_board-commoncss.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'support-functions.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( JOB_BOARD_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( JOB_BOARD_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( JOB_BOARD_DIR_PATH_HOOKS . 'hooks.php' );
require_once( JOB_BOARD_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( JOB_BOARD_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );



/**
 * Instantiate Job_Board object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Job_Board = new Job_Board();