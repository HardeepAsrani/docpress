<?php
class DocPress_Welcome {

	public function __construct() {

		add_action( 'admin_menu', array( $this, 'docpress_welcome_register_menu' ) );
		add_action( 'load-themes.php', array( $this, 'docpress_activation_admin_notice' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'docpress_welcome_style' ) );

	} 

	public function docpress_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) { // input var okay
			add_action( 'admin_notices', array( $this, 'docpress_welcome_admin_notice' ), 99 );
		}
	}

	public function docpress_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Thanks for choosing DocPress! You can read hints and tips on how get the most out of your new theme on the %swelcome screen%s.', 'docpress' ), '<a href="' . esc_url( admin_url( 'themes.php?page=docpress-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=docpress-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with DocPress', 'docpress' ); ?></a></p>
			</div>
		<?php
	}

	public function docpress_welcome_style( $hook_suffix ) {
		global $docpress_version;

		if ( 'appearance_page_docpress-welcome' == $hook_suffix ) {
			wp_enqueue_style( 'docpress-welcome-screen', get_template_directory_uri() . '/inc/admin/welcome-screen/css/welcome.css', $docpress_version );
			wp_enqueue_style( 'thickbox' );
			wp_enqueue_script( 'thickbox' );
		}
	}

	public function docpress_welcome_register_menu() {
		add_theme_page( 'DocPress', 'DocPress', 'activate_plugins', 'docpress-welcome', array( $this, 'docpress_welcome_screen' ) );
	}

	public function docpress_welcome_screen() {
		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="wrap about-wrap">

			<?php require_once( get_template_directory() . '/inc/admin/welcome-screen/content/content.php' ); ?>

		</div>
		<?php
	}
}

$GLOBALS['DocPress_Welcome'] = new DocPress_Welcome();
