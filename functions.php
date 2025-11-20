<?php
/**
 * Functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package quincy
 */
namespace LAPP;

/**
 * Get all the include files for the theme.
 *
 * @author PEA
 */
function include_inc_files() {
	$files = array(
		'inc/'
	);

	foreach ( $files as $include ) {
		$include = trailingslashit( get_stylesheet_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}

include_inc_files();
