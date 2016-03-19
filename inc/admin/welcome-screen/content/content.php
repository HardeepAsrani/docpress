<?php
$docpress = wp_get_theme( 'docpress' );

?>
<div class="col one-col" style="overflow: hidden;">
	<div class="col">
		<div class="boxed enrich">
			<h1 class="docpress-title"><?php echo '<strong>' . esc_attr( $docpress['Name'] ) . '</strong> <sup class="version">' . esc_attr( $docpress['Version'] ) . '</sup>'; ?></h1>
			<img src="<?php echo esc_url( get_template_directory_uri() ) . '/inc/admin/welcome-screen/img/DocPress.png'; ?>" alt="<?php esc_html_e( 'DocPress', 'docpress' ); ?>" class="image-docpress" />
			<p><?php echo esc_html( $docpress['Description'] ); ?></p>
			<p>
				<a href="<?php echo esc_url( self_admin_url( 'customize.php' ) ); ?>" class="button button-primary"><?php esc_html_e('Visit Customizer', 'docpress' ); ?></a>
				<a href="http://www.hardeepasrani.com/portfolio/docpress/" class="button button-primary" target="_blank"><?php esc_html_e( 'More Info', 'docpress' ); ?></a>
			</p>
		</div>
	</div>
</div>

<div class="col two-col" style="overflow: hidden;">
	<div class="col">
		<div class="boxed whatsnew">
			<h2><?php printf( esc_html__( 'What\'s new in %s?', 'docpress' ), esc_attr( $docpress['Version'] ) ); ?></h2>
			<p><?php printf( esc_html__( 'Take a look at everything that\'s new in the latest version:', 'docpress' ) ); ?></p>
			<ul>
				<li><?php printf( __('<strong>New Homepage:</strong> A new homepage which makes DocPress look truly like a documentation theme.', 'docpress') ); ?></li>
				<li><?php printf( __('<strong>Welcome Panel:</strong> This version adds a Welcome Panel to the theme which tells you everything that you need to know about the theme.', 'docpress') ); ?></li>
			</ul>
		</div>
	</div>
	<div class="col">
		<?php if (defined('DOCPRESS_FOOTER_EXTENSION')) : ?>
			<div class="boxed downloaded">
				<h2><?php esc_html_e( 'Footer Credits Extension', 'docpress' ); ?> <sup class="activated"><?php esc_html_e( 'Activated', 'docpress' ); ?></sup></h2>
				<p><?php printf( esc_html__( 'DocPress Footer Extension allows you to edit the footer credits of your DocPress theme straight from the Customizer, without touching a line of code.', 'docpress' ) ); ?></p>
				<p><a href="<?php echo esc_url( self_admin_url( 'customize.php?autofocus[control]=docpress_footer_credits' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Customize', 'docpress' ); ?></a></p>
			</div>
		<?php else: ?>
			<div class="boxed extension">
				<h2><?php esc_html_e( 'Get the Footer Credits Extension', 'docpress' ); ?></h2>
				<p><?php printf( esc_html__( 'DocPress Footer Extension allows you to edit the footer credits of your DocPress theme straight from the Customizer, without touching a line of code.', 'docpress' ) ); ?></p>
				<p><a href="https://goo.gl/ySDdIw" class="button button-primary" target="_blank"><?php esc_html_e( 'Purchase ($5)', 'docpress' ); ?></a></p>
			</div>
		<?php endif;?>
	</div>
</div>

<div class="col two-col" style="overflow: hidden;">
	<div class="col">
		<div class="boxed support">
			<h2><?php esc_html_e( 'Need support?', 'docpress' ); ?></h2>
			<p><?php printf( __('Found an issue with the theme? You can get support <a href="https://wordpress.org/support/theme/docpress" target="_blank">at this link</a>. Or would you like to translate DocPress into your language? <a href="https://translate.wordpress.org/projects/wp-themes/docpress" target="_blank">Get involved</a>! Also, don\'t forget to <a href="https://wordpress.org/support/view/theme-reviews/docpress" target="_blank">leave a review</a>.', 'docpress') ); ?></p>
		</div>
	</div>
	<div class="col">
		<div class="boxed donate">
			<h2><?php esc_html_e( 'Donate', 'docpress' ); ?></h2>
			<p><?php printf( __('If you like this theme and if it helped you with your business then please consider supporting the development <a target="_blank" href="http://www.hardeepasrani.com/donate/">by donating some money</a>. <a target="_blank" href="http://www.hardeepasrani.com/donate/">Any amount, even $1.00, is appreciated :)</a>', 'docpress') ); ?></p>
		</div>
	</div>
</div>
