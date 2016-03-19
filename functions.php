<?php
/*
 * Hey,
 * Only edit this file if you know what you're doing or make a backup before editing it.
 * Happy Blogging!
*/

require_once( trailingslashit( get_template_directory() ) . "/inc/customizer.php" );
require_once( trailingslashit( get_template_directory() ) . "/inc/wp_bootstrap_navwalker.php" );
if ( is_admin() ) {
	require get_template_directory() . '/inc/admin/welcome-screen/welcome-screen.php';
}

function docpress_setup() {
	// Using this feature you can set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.  https://codex.wordpress.org/Content_Width
	global $content_width;
	if (!isset($content_width)) {
		$content_width = 620;
	}

	// Takes care of the <title> tag. https://codex.wordpress.org/Title_Tag
	add_theme_support('title-tag');
	
	// Loads texdomain. https://codex.wordpress.org/Function_Reference/load_theme_textdomain
	load_theme_textdomain('docpress', get_template_directory() . '/languages');

	// Add automatic feed links support. https://codex.wordpress.org/Automatic_Feed_Links
	add_theme_support('automatic-feed-links');

	// Add post thumbnails support. https://codex.wordpress.org/Post_Thumbnails
	add_theme_support('post-thumbnails');

	// Add custom background support. https://codex.wordpress.org/Custom_Backgrounds
	add_theme_support('custom-background', array(
		// Default color
		'default-color' => 'FFF',
	));

	// Add custom header support. http://codex.wordpress.org/Custom_Headers
	add_theme_support('custom-header', array(
		// Header text
		'header-text' => false,
		// Default image
		'default-image' => get_template_directory_uri() . '/assets/img/header.jpg',
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

// Registering widgets for the theme.
function docpress_widgets_init() {

	register_sidebar( array(
		'name'		  => __( 'Sidebar', 'docpress' ),
		'id'			=> 'sidebar-widgets',
		'before_widget' => '<aside id="%1$s" class="row widget docwidget widget %2$s"><div class="widget-wrap">',
		'after_widget'  => '</div></aside>',
		'before_title'  => '<strong class="widget-title">',
		'after_title'   => '</strong>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Footer One', 'docpress' ),
		'id'			=> 'footer-one-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Footer Two', 'docpress' ),
		'id'			=> 'footer-two-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Footer Three', 'docpress' ),
		'id'			=> 'footer-three-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'		  => __( 'Footer Four', 'docpress' ),
		'id'			=> 'footer-four-widgets',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}

add_action( 'widgets_init', 'docpress_widgets_init' );

// Registering and enqueuing scripts/stylesheets to header/footer.
function docpress_scripts() {
	
	wp_enqueue_style( 'docpress_bootstrap_css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
	wp_enqueue_style( 'docpress_font_awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
	wp_enqueue_style( 'docpress_style', get_stylesheet_uri());
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	wp_enqueue_script( 'docpress_bootstrap_js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ),'',true);
	if( is_page_template( 'template-home.php' ) ) wp_enqueue_script( 'docpress_matchheight_js', get_template_directory_uri() . '/assets/js/jquery.matchHeight.js', array( 'jquery' ),'',true);
	if( is_page_template( 'template-home.php' ) ) wp_enqueue_script( 'docpress_scripts_js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ),'',true);
}

add_action( 'wp_enqueue_scripts', 'docpress_scripts' );

// Added footer credits
function docpress_footer_credits() {
	echo '<span><a rel="nofollow" href="http://www.hardeepasrani.com/portfolio/docpress/">DocPress</a> - '.__('Proudly powered by','docpress').' WordPress</span>';
}
add_action( 'docpress_credits', 'docpress_footer_credits' );

// Custom comments style
function docpress_comment($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;

	switch ( $comment->comment_type ) :
		case 'pingback' :
	
	
		case 'trackback' :
		?>
			<li class="post pingback">
				<p><?php _e( 'Pingback:', 'docpress' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( '(Edit)', 'docpress' ), ' ' ); ?></p>
		<?php
		break;

	
		default :
		?>
			<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
				<article id="comment-<?php comment_ID(); ?>" class="comment-body">
					<footer>
						<div class="comment-author vcard" >
							<?php echo get_avatar( $comment, $args['avatar_size'] ); ?>
							<?php printf( __( '<span>%s </span><span class="says">says:</span>', 'docpress' ), sprintf( '<b class="fn">%s</b>', get_comment_author_link() ) ); ?>
						</div>
						<?php if ( $comment->comment_approved == '0' ) : ?>
							<em><?php _e( 'Your comment is awaiting moderation.', 'docpress' ); ?></em>
							<br />
						<?php endif; ?>
						<div class="comment-metadata">
							<a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>" class="comment-permalink">
								<time class="comment-published" datetime="<?php comment_time( 'Y-m-d\TH:i:sP' ); ?>" title="<?php comment_time( _x( 'l, F j, Y, g:i a', 'comment time format', 'docpress' ) ); ?>" itemprop="commentTime">
									<?php printf( __( '%1$s at %2$s', 'docpress' ), get_comment_date(), get_comment_time() ); ?>
								</time>
							</a>
							<?php edit_comment_link( __( '(Edit)', 'docpress' ), ' ' );?>
						</div>
					</footer>

					<div class="comment-content"><?php comment_text(); ?></div>

					<div class="reply">
						<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
					</div>
				</article>

<?php
		break;
	
	endswitch;
}
?>
