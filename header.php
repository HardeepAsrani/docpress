<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#docpress-navbar-collapse">
					<span class="sr-only"><?php _e( 'Toggle navigation', 'docpress' ) ?></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
			</div>

			<div class="collapse navbar-collapse" id="docpress-navbar-collapse">
			<?php
				wp_nav_menu( array(
					'menu'			  => 'main_menu',
					'theme_location'	=> 'main_menu',
					'menu_class'		=> 'nav navbar-nav navbar-right',
					'fallback_cb'	   => 'wp_bootstrap_navwalker::fallback',
					'walker'			=> new wp_bootstrap_navwalker())
				);
			?>
			</div>
		</div>
	</nav>

	<header class="jumbotron" style="background: transparent url('<?php header_image(); ?>') no-repeat scroll center center / cover;">
		<div class="container text-center">
		<?php
			$docpress_header_title = get_theme_mod('docpress_header_title',__( 'Need Help? Try me!', 'docpress' ));
			$docpress_header_subtitle = get_theme_mod('docpress_header_subtitle',__( 'Your answer is just one search away!', 'docpress' ));
			$docpress_header_search_display = get_theme_mod('docpress_header_search_display');
		?>
		<?php if(!empty($docpress_header_title)) : ?>
			<h2><?php echo esc_html($docpress_header_title); ?></h2>
		<?php else: ?>
			<h2><?php bloginfo( 'description' ); ?></h2>
		<?php endif; ?>
		<?php if(!empty($docpress_header_subtitle)) : ?>
			<h3><?php echo esc_html($docpress_header_subtitle); ?></h3>
		<?php endif; ?>
		<?php if( isset($docpress_header_search_display) && $docpress_header_search_display != 1 ): ?>
			<?php get_search_form(); ?>
		<?php endif; ?>
		</div>
	</header>
