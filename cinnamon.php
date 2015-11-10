<?php
/*
Plugin Name: Cinnamon
Plugin URI: https://wordpress.org/plugins/cinnamon/
Description: Find in-page text using synonyms
Version: 1.1.2
Author: David Artiss
Author URI: http://www.artiss.co.uk
Text Domain: cinnamon
*/

/**
* Plugin initialisation
*
* Loads the plugin's translated strings
*
* @since	1.1.1
*/

function cinnamon_plugin_init() {

	$language_dir = plugin_basename( dirname( __FILE__ ) ) . '/languages/';

	load_plugin_textdomain( 'cinnamon', false, $language_dir );

}

add_action( 'init', 'cinnamon_plugin_init' );

/**
* Add meta to plugin details
*
* Add options to plugin meta line
*
* @since	1.0
*
* @param	string  $links	Current links
* @param	string  $file	File in use
* @return   	string		Links, now with settings added
*/

function cinnamon_set_plugin_meta( $links, $file ) {

	if ( strpos( $file, 'cinnamon.php' ) !== false ) {
		$links = array_merge( $links, array( '<a href="http://wordpress.org/support/plugin/cinnamon">' . __( 'Support', 'cinnamon' ) . '</a>' ) );
		$links = array_merge( $links, array( '<a href="http://www.artiss.co.uk/donate">' . __( 'Donate', 'cinnamon' ) . '</a>' ) );
	}

	return $links;
}
add_filter( 'plugin_row_meta', 'cinnamon_set_plugin_meta', 10, 2 );

/**
* Add script to theme
*
* Add Cinnamon scripts to the main theme
*
* @since	1.0
*/

function cinnamon_add_script() {

	wp_enqueue_script( 'cinnamon_script', plugin_dir_url( __FILE__ ) . 'js/cinnamon.min.js', '', '', true );		

}

add_action( 'wp_enqueue_scripts', 'cinnamon_add_script' );

/**
* Cinnamon shortcode
*
* Shortcode function to output cinnamon script
*
* @since	1.0
*
* @param	string	$paras		Shortcode parameters
* @param	string	$content	Word to be cinnamoned!
* @return	string			Output code
*/

function cinnamon_shortcode( $paras = '', $content = '' ) {

    // Loop through shortcode parameters and, if found, built the cinnamon word list

    $array = 0;
    $cinnamon_list = '';
    while ( $array < count( $paras ) ) {
		if ( $array > 0 ) { $cinnamon_list .= ','; }
		$cinnamon_list .= $paras[ $array ];
		$array++;
    }

    // If a word list exists, output the cinnamon code

    if ( $cinnamon_list != '' ) { $content = '<span data-cinnamon="' . $cinnamon_list . '">' . $content. '</span>'; }

    return $content;

}

add_shortcode( 'cinnamon', 'cinnamon_shortcode' );
?>