<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="container">
        <?php the_title( '<h1 class="title">', '</h1>' ); ?>
        <div class="content">
            <?php the_content(); ?>
        </div>
        <div class="entry-footer">
			<p class="entry-meta">
				<?php wp_link_pages('before=<spam id="page-links">' . __( 'Pages:', 'docpress' ) . ' &after=</spam>'); ?>
			</p>
		</div>
    </div>
</article>