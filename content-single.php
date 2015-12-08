<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>
	<div class="entry-content">
		<?php if ( has_post_thumbnail() ) : ?>
			<p><?php the_post_thumbnail(); ?></p>
		<?php endif; ?>
		<?php the_content(); ?>
		<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'docpress' ) . ' &after=</spam>'); ?>
	</div>
	<footer class="entry-footer">
		<span class="posted-on"><time><?php the_time( get_option( 'date_format' ) ); ?></time></span>
		<span class="byline"><?php  the_author_posts_link(); ?></span>
		<span class="cat-links"><?php the_category(', '); ?></span>
		<?php the_tags( '<span class="tags-links">', ', ', '<span>' ); ?>
	</footer>
</article>