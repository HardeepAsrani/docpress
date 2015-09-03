<?php
/*
 * Register colors and layout for the Theme Customizer.
*/

function docpress_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
		return 1;
	} else {
		return '';
	}
}

function docpress_customize_register($wp_customize) {

	$wp_customize->add_panel( 'docpress_header', array(
		'priority'	   => 40,
		'capability'	 => 'edit_theme_options',
		'title'		  => __('Header', 'docpress'),
		'description'	=> __('This section allows you to customize theme\'s header.', 'docpress'),
	) );
	
	$wp_customize->get_section( 'header_image' )->panel = 'docpress_header';
	$wp_customize->get_section( 'header_image' )->title = 'Background';
	$wp_customize->get_section( 'header_image' )->priority = 5;
	
	$wp_customize->add_section('docpress_header_text', array(
		'priority' => 10,
		'title' => __('Text', 'docpress'),
		'panel'  => 'docpress_header',
	));
	
	$wp_customize->add_section('docpress_header_search', array(
		'priority' => 15,
		'title' => __('Search', 'docpress'),
		'panel'  => 'docpress_header',
	));

	$wp_customize->add_setting('docpress_header_title', array(
		'default' => __('Need Help? Try me!', 'docpress'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('docpress_header_title', array(
		'label' => __('Title', 'docpress'),
		'section' => 'docpress_header_text',
		'priority' => 5,
		'settings' => 'docpress_header_title'
	));

	$wp_customize->add_setting('docpress_header_subtitle', array(
		'default' => __('Your answer is just one search away!', 'docpress'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('docpress_header_subtitle', array(
		'label' => __('Subtitle', 'docpress'),
		'section' => 'docpress_header_text',
		'priority' => 10,
		'settings' => 'docpress_header_subtitle'
	));

	$wp_customize->add_setting( 'docpress_header_search_display', array(
		'sanitize_callback' => 'docpress_sanitize_checkbox'
	));

	$wp_customize->add_control('docpress_header_search_display',array(
		'type' => 'checkbox',
		'label' => __('Disable Search Bar','docpress'),
		'section' => 'docpress_header_search',
		'priority' => 5,
	));

	$wp_customize->add_setting('docpress_header_search_label', array(
		'default' => __('Search...', 'docpress'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('docpress_header_search_label', array(
		'label' => __('Label', 'docpress'),
		'section' => 'docpress_header_search',
		'priority' => 10,
		'settings' => 'docpress_header_search_label'
	));

	$wp_customize->add_setting('docpress_header_search_button', array(
		'default' => __('Search', 'docpress'),
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'sanitize_text_field'
	));

	$wp_customize->add_control('docpress_header_search_button', array(
		'label' => __('Button', 'docpress'),
		'section' => 'docpress_header_search',
		'priority' => 15,
		'settings' => 'docpress_header_search_button'
	));
}
add_action('customize_register', 'docpress_customize_register');

?>