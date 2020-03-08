<?php
/**
 * Create our custom shortcodes
 *
 * @package WP_MarMar_Theme
 */

/**
 * Add support for shortcodes in widgets
 */
add_filter( 'widget_text', 'do_shortcode' );
