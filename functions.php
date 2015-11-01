<?php
/*
 * Hey
 * Only edit this file if you know what you're doing or make a backup before editing it
 * Happy Blogging
*/

require get_template_directory() . "/inc/customizer.php";
require get_template_directory() . "/inc/wp_bootstrap_navwalker.php";

function docpress_setup() {

	global $content_width;
		if (!isset($content_width)) {
		$content_width = 540;
	}

	// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
	add_theme_support('title-tag');

	// Loads texdomain. https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	load_theme_textdomain('docpress', get_template_directory() . '/languages');

	// Add automatic feed links support. https://codex.wordpress.org/Automatic_Feed_Links
	add_theme_support('automatic-feed-links');

	// Add post thumbnails support. https://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');

	// Add HTML5 widget support
	add_theme_support( 'html5', array( 'widgets' ) );

	// Add custom background support. http://codex.wordpress.org/Custom_Backgrounds
	add_theme_support('custom-background', array(
		// Default color
		'default-color' => 'FFF',
	));

	// Add custom header support. http://codex.wordpress.org/Custom_Headers
	add_theme_support('custom-header', array(
		// Flex height
		'flex-height' => true,
		// Recommended height
		'height' => 428,
		// Flex width
		'flex-width' => false,
		// Recommended width
		'width' => 1349,
		// Header text
		'header-text' => false,
		// Default image
		'default-image' => get_stylesheet_directory_uri() . '/assets/images/header.jpg',
	));

	// This theme uses wp_nav_menu(). https://codex.wordpress.org/Function_Reference/register_nav_menu
	register_nav_menus( array(
		'main_menu' => __( 'Main Menu', 'docpress' ),
	));
}

add_action( 'after_setup_theme', 'docpress_setup' );

// To add backwards compatibility for titles
if ( ! function_exists( '_wp_render_title_tag' ) ) {
	function docpress_render_title() {
?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php
	}
	add_action( 'wp_head', 'docpress_render_title' );
}

// Adding scripts/stylesheets to header
function docpress_scripts() {
	wp_enqueue_style( 'docpress_raleway', '//fonts.googleapis.com/css?family=Raleway:700,300');
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_enqueue_style( 'docpress_bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style('docpress_stylesheet', get_stylesheet_uri());
	wp_enqueue_script( 'docpress_bootstrap', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array( 'jquery' ),'',true);
}

add_action('wp_enqueue_scripts', 'docpress_scripts');


function docpress_sidebars() {
	register_sidebar(array(
		'name' => __('Sidebar', 'docpress'),
		'id' => 'sidebar',
		'before_widget' => '<div id="%1$s" class="row widget docs-nav %2$s"><div class="widget-wrap">',
		'after_widget' => '</div></div>',
		'before_title' => '<strong class="widget-title">',
		'after_title' => '</strong>',
		'description' => __('The widgets which will appear on the main sidebar.', 'docpress'),
	));
}

add_action( 'widgets_init', 'docpress_sidebars' );
?>