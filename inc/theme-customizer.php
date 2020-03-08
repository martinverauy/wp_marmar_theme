<?php
/**
 * Register customizer options
 *
 * @package WP_MarMar_Theme
 */

/**
 * Callback for customize_register action.
 *
 * Registers new customizer section and settings
 *
 * @param mixed $wp_customize customize registered parameter.
 */
function wp_marmar_theme_customize_register( $wp_customize ) {

	// Adding Setting.
	$wp_customize->add_setting( 'wp_marmar_theme_logo' );
	$wp_customize->add_setting( 'wp_marmar_theme_logo_width' );

	// Adding Control.
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'wp_marmar_theme_logo',
			array(
				'label'    => __( 'Upload Logo', 'wp_marmar_theme_logo' ),
				'section'  => 'wp_marmar_theme_customizer_section',
				'settings' => 'wp_marmar_theme_logo',
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'wp_marmar_theme_logo_width',
			array(
				'label'    => __( 'Logo Width (px)', 'wp_marmar_theme_logo_width' ),
				'section'  => 'wp_marmar_theme_customizer_section',
				'settings' => 'wp_marmar_theme_logo_width',
				'type'     => 'number',
			)
		)
	);

	// Adding Section.
	$wp_customize->add_section(
		'wp_marmar_theme_customizer_section',
		array(
			'title'    => __( 'Mar&Mar Options', 'starter' ),
			'priority' => 30,
		)
	);
}

add_action( 'customize_register', 'wp_marmar_theme_customize_register' );
