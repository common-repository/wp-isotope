
<?php
/*
Plugin Name: WP Isotope
Plugin URI: http://github.com/imtiazprotik
Description: A plugin for sorting function
Author: Imtiaz khan
version: 1.0
*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
*
* Plugin All Css, js and conditional js files
*
*/

if( file_exists( dirname(__FILE__).'/inc/wp_istop_files.php') ){

    require_once(dirname(__FILE__).'/inc/wp_istop_files.php');

}


/**
*
* Plugin Shortcode file
*
*/
if( file_exists( dirname(__FILE__).'/inc/wp_istop_shortcodes.php') ){

    require_once(dirname(__FILE__).'/inc/wp_istop_shortcodes.php');

}




/**
*
* Plugin Supports
*
*/
if( file_exists( dirname(__FILE__).'/inc/wp_istop_supports.php') ){

    require_once(dirname(__FILE__).'/inc/wp_istop_supports.php');

}

