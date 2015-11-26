<?php get_header(); ?>

    <div class="doc-main">
        <div class="container">
            <div class="row">
				<?php get_sidebar(); ?>
                <div class="content-area col-sm-8 col-md-8">
                    <div class="main-content single">
					<?php if ( have_posts() ) : ?> 	
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'single' ); ?>
							<?php endwhile; ?>
							<div class="pagination">
								<div class="clearfix">
									<span class="left"><?php previous_post_link(); ?></span>
									<span class="right"><?php next_post_link(); ?></span>
								</div>
							</div>
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