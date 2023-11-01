<?php
/**
 * af-themes Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package af-themes
 * @since 1.0.0
 */

define('CHILD_THEME_URL', get_stylesheet_directory_uri());
define('CHILD_THEME_PATH', get_stylesheet_directory());

require_once('vendor/autoload.php');

use VanjaBeautyTheme\ThemeSetup;

new ThemeSetup();

/**
 * Define Constants
 */
define( 'CHILD_THEME_AF_THEMES_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function child_enqueue_styles() {

	wp_enqueue_style( 'af-themes-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_AF_THEMES_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles', 15 );

add_action('before_ast-container', function() {
	echo "<h1 class='text-center my-4'>Blog</h1>";
});
