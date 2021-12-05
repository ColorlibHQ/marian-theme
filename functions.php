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
if ( ! defined( 'MARIAN_DIR_URI' ) ) {
	define( 'MARIAN_DIR_URI', get_template_directory_uri() . '/' );
}

// assets URI
if ( ! defined( 'MARIAN_DIR_ASSETS_URI' ) ) {
	define( 'MARIAN_DIR_ASSETS_URI', MARIAN_DIR_URI . 'assets/' );
}

// Css File URI
if ( ! defined( 'MARIAN_DIR_CSS_URI' ) ) {
	define( 'MARIAN_DIR_CSS_URI', MARIAN_DIR_ASSETS_URI . 'css/' );
}

// Js File URI
if ( ! defined( 'MARIAN_DIR_JS_URI' ) ) {
	define( 'MARIAN_DIR_JS_URI', MARIAN_DIR_ASSETS_URI . 'js/' );
}

// Images URI
if ( ! defined( 'MARIAN_DIR_IMGS_URI' ) ) {
	define( 'MARIAN_DIR_IMGS_URI', MARIAN_DIR_ASSETS_URI . 'img/' );
}

// Icon Images
if ( ! defined( 'MARIAN_DIR_ICON_IMG_URI' ) ) {
	define( 'MARIAN_DIR_ICON_IMG_URI', MARIAN_DIR_ASSETS_URI . 'img/icon/' );
}

// Base Directory
if ( ! defined( 'MARIAN_DIR_PATH' ) ) {
	define( 'MARIAN_DIR_PATH', get_parent_theme_file_path() . '/' );
}

//Inc Folder Directory
if ( ! defined( 'MARIAN_DIR_PATH_INC' ) ) {
	define( 'MARIAN_DIR_PATH_INC', MARIAN_DIR_PATH . 'inc/' );
}

//Marian Libraries Folder Directory
if ( ! defined( 'MARIAN_DIR_PATH_LIBS' ) ) {
	define( 'MARIAN_DIR_PATH_LIBS', MARIAN_DIR_PATH_INC . 'libraries/' );
}

//Classes Folder Directory
if ( ! defined( 'MARIAN_DIR_PATH_CLASSES' ) ) {
	define( 'MARIAN_DIR_PATH_CLASSES', MARIAN_DIR_PATH_INC . 'classes/' );
}

//Hooks Folder Directory
if ( ! defined( 'MARIAN_DIR_PATH_HOOKS' ) ) {
	define( 'MARIAN_DIR_PATH_HOOKS', MARIAN_DIR_PATH_INC . 'hooks/' );
}

// Admin Enqueue script
function marian_admin_script(){
    wp_enqueue_style( 'marian-admin', get_template_directory_uri().'/assets/css/marian-admin.css', false, '1.0.0' );
    wp_enqueue_script( 'marian_admin', get_template_directory_uri().'/assets/js/marian-admin.js', false, '1.0.0' );
}
add_action( 'admin_enqueue_scripts', 'marian_admin_script' );



/**
 * Include File
 *
 */
require_once( MARIAN_DIR_PATH_INC . 'marian-breadcrumbs.php' );
require_once( MARIAN_DIR_PATH_INC . 'marian-widgets-reg.php' );
require_once( MARIAN_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
require_once( MARIAN_DIR_PATH_INC . 'post-like.php' );
require_once( MARIAN_DIR_PATH_INC . 'marian-functions.php' );
require_once( MARIAN_DIR_PATH_INC . 'marian-commoncss.php' );
require_once( MARIAN_DIR_PATH_INC . 'support-functions.php' );
require_once( MARIAN_DIR_PATH_INC . 'wp-html-helper.php' );
require_once( MARIAN_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
require_once( MARIAN_DIR_PATH_INC . 'customizer/customizer.php' );
require_once( MARIAN_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
require_once( MARIAN_DIR_PATH_CLASSES . 'Class-Config.php' );
require_once( MARIAN_DIR_PATH_HOOKS . 'hooks.php' );
require_once( MARIAN_DIR_PATH_HOOKS . 'hooks-functions.php' );
require_once( MARIAN_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
require_once( MARIAN_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );

/**
 * Instantiate Marian object
 *
 * Inside this object:
 * Enqueue scripts, Google font, Theme support features, Epsilon Dashboard .
 *
 */

$Marian = new Marian();