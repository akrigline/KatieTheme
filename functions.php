<?php
/**
 * KatieTheme functions and definitions
 *
 * @package KatieTheme
 */

if ( ! function_exists( 'katietheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function katietheme_setup() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

}
endif; // katietheme_setup
add_action( 'after_setup_theme', 'katietheme_setup' );
