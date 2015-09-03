<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">   
        <h2><?php _e( 'Nothing found', 'docpress' ); ?></h2>
		<div class="content">
			<p><?php _e( 'The page you were looking for doesn&rsquo;t exist. Sasquatch, on the other hand, just might.', 'docpress' ); ?></p>
			<p><?php _e( 'But hey, you can always use our search form:', 'docpress' ); ?></p>
			<?php get_search_form(); ?>
		</div>
    </div>
</article>