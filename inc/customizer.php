<?php
/*
 * Register colors and layout for the Theme Customizer.
*/

function docpress_customize_register($wp_customize) {

	class DocPress_Support extends WP_Customize_Control {
		public function render_content() {
			echo __('If you like this theme and if it helped you with your business then please consider supporting the development <a target="_blank" href="http://www.hardeepasrani.com/donate/">by donating some money</a>. This theme is 100% free and will always be. <a target="_blank" href="http://www.hardeepasrani.com/donate/">Any amount, even $1.00, is appreciated :)</a>','docpress');
		}
	}

	$wp_customize->add_panel( 'docpress_header', array(
		'priority'	   => 40,
		'capability'	 => 'edit_theme_options',
		'title'		  => __('Header', 'docpress'),
		'description'	=> __('This section allows you to customize theme\'s header.', 'docpress'),
	) );
	
	$wp_customize->get_section( 'header_image' )->panel = 'docpress_header';
	$wp_customize->get_section( 'header_image' )->title = 'Background';
	$wp_customize->get_section( 'header_image' )->priority = 5;

	$wp_customize->add_section('donate_section', array(
		'priority' => 5,
		'title' => __('Do You Like This Theme?', 'docpress')
	));

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

	$wp_customize->add_setting( 'donate_section_main', array(
		'sanitize_callback' => 'docpress_sanitize_text'
	));

	$wp_customize->add_control( new DocPress_Support( $wp_customize, 'donate_section_main', array(
		'section' => 'donate_section',
	)));

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

	function docpress_sanitize_checkbox( $input ) {
		if ( $input == 1 ) {
			return 1;
		} else {
			return '';
		}
	}

	function docpress_sanitize_text( $input ) {
		return $input;
	}
}
add_action('customize_register', 'docpress_customize_register');

?>