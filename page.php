<?php get_header(); ?>

    <div class="doc-main">
        <div class="container">
            <div class="row">
				<?php get_sidebar(); ?>
                <div class="content-area col-sm-8 col-md-8">
                    <div class="main-content page">
					<?php if ( have_posts() ) : ?> 	
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'page' ); ?>
							<?php endwhile; ?>
							<?php
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;
							?>
						<?php else : ?>
							<?php get_template_part( 'content', 'none' ); ?>
					<?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>