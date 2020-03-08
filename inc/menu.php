<?php
/**
 * Theme Menu
 *
 * @package WP_MarMar_Theme
 */

// This theme uses wp_nav_menu() in header.
register_nav_menus(
	array(
		'primary' => __( 'Primary', 'wp_marmar_theme' ),
	)
);

// This theme uses wp_nav_menu() in footer.
register_nav_menus(
	array(
		'secondary' => __( 'Secondary', 'wp_marmar_theme' ),
	)
);
