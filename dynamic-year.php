<?php
/**
 * Plugin Name: WP Dynamic Year Shortcode
 * Description: A lightweight utility to display the current year using the [year] shortcode. Perfect for automated copyright footers.
 * Version:     1.0.0
 * Author:      PicklesBucket
 * Author URI:  https://www.picklesbucket.com
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Shortcode: [year]
 * Returns: Current Year (e.g., 2025)
 */
function pb_dynamic_year_shortcode() {
	return date( 'Y' );
}
add_shortcode( 'year', 'pb_dynamic_year_shortcode' );