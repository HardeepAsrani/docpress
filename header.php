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
<nav class="navbar">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-docpress-navbar">
				<span class="sr-only"><?php _e( 'Toggle Navigation', 'docpress' ); ?></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'title' ); ?></a></h1>
			<?php else: ?>
				<h3 class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'title' ); ?></a></h3>
			<?php endif; ?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-docpress-navbar">
            <?php
                wp_nav_menu( array(
                    'menu'              => 'main_menu',
                    'theme_location'    => 'main_menu',
                    'menu_class'        => 'nav navbar-nav navbar-right',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>
<header class="docs-main" style="background-image: url('<?php header_image(); ?>'); background-position: center;">
	<div class="container docs-header">
    <?php
        $docpress_header_title = get_theme_mod('docpress_header_title',__( 'Need Help? Try me!', 'docpress' ));
        $docpress_header_subtitle = get_theme_mod('docpress_header_subtitle',__( 'Your answer is just one search away!', 'docpress' ));
        $docpress_header_search_display = get_theme_mod('docpress_header_search_display');

    ?>
    <?php if(!empty($docpress_header_title)) : ?>
    	<h2><?php echo $docpress_header_title; ?></h2>
    <?php endif; ?>
    <?php if(!empty($docpress_header_subtitle)) : ?>
        <h4><?php echo $docpress_header_subtitle; ?></h4>
    <?php endif; ?>
    <?php if( isset($docpress_header_search_display) && $docpress_header_search_display != 1 ): ?>
        <?php get_search_form(); ?>
    <?php endif; ?>
	</div>
</header>