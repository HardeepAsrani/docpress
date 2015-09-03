<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <?php the_title( '<h1 class="title">', '</h1>' ); ?>
        <?php _e( 'Posted on', 'docpress' ); ?> <time class="entry-time"><?php the_time( get_option( 'date_format' ) ); ?></time>
        <span class="entry-author"><?php _e( '- Posted by', 'docpress' ); ?> <?php  the_author_posts_link(); ?></span>
        <div class="content">
            <?php if ( has_post_thumbnail() ) : ?>
    			<p><?php the_post_thumbnail(); ?></p>
			<?php endif; ?>
            <?php the_content(); ?>
        </div>
        <div class="entry-footer">
			<p class="entry-meta">
				<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'docpress' ) . ' &after=</spam>'); ?>
				<span class="entry-categories">Categories <?php the_category(', '); ?></span>
				<span class="entry-tags"><?php the_tags(__( 'Tags: ', 'docpress' ) , ', '); ?> </span>
			</p>
		</div>
    </div>
</article>