<?php

if (is_admin() && isset($_GET['activated'])){

	wp_redirect(admin_url("themes.php?page=docpress"));
}

/** Step 2 (from text above). */
add_action( 'admin_menu', 'docpress_menu' );

/** Step 1. */
function docpress_menu() {
	add_theme_page( __( 'DocPress', 'docpress' ), __( 'DocPress', 'docpress' ), 'manage_options', 'docpress', 'docpress_page' );
}

/** Step 3. */
function docpress_page() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'docpress' ) );
	}
	
	wp_enqueue_style( 'docpress-theme-options', get_template_directory_uri() . '/inc/theme-options.css' );

	echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;"><div class="col-1-1"><h1 style="text-align: center;">';
	printf(__('DocPress - 2.1', 'docpress' ));
	echo "</h1></div><p>";
	printf(__('DocPress is a responsive WordPress theme for documentation sites. If you want a documentation website for your product then this is the best pick, and it also has a search bar on the top section which makes it easier to use search for the content. Apart from that, it\'s built on Bootstrap!', 'docpress' ));
	echo "</p></div>";
	
	echo '<div class="grid grid-pad senswp" style="border-bottom: 1px solid #ccc; padding-bottom: 40px; margin-bottom: 30px;"><div class="col-1-1"><h1 style="padding-bottom: 30px; text-align: center;">';
	printf(__('What\'s new in this version? (IMPORTANT)', 'docpress' )); 
	echo '</h1></div>';
		
	echo '<div class="col-1-1"><p>';
	printf(__('In this version of DocPress, I\'ve completely changed how the theme looked and felt. In all honesty, previous version was more like a lazy job so I worked hard to fix that in this release. And if you liked the older version better then you can download it <a target="_blank" href="https://downloads.wordpress.org/theme/docpress.1.1.2.zip">by clicking here</a>.' , 'docpress' ));
	echo '</p></div></div>';
	
	echo '<div class="grid grid-pad" style="border-bottom: 1px solid #ccc; padding-bottom: 50px; margin-bottom: 30px;"><div class="col-1-1"><a href="'.get_admin_url().'customize.php" target="_blank"><button class="pro">';
	printf(__( 'Start Customizing', 'docpress' )); 
	echo '</button></a></div></div>'; 
	
}
?>