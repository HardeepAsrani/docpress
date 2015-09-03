<?php get_header(); ?>
<section>
  <div class="container row">
    <?php get_sidebar(); ?>
    <div class="col-sm-8 col-md-8">
		<?php if ( have_posts() ) : ?> 	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'single' ); ?>
			<?php endwhile; ?>
            <div class="pagination">
				<div class="container clearfix">
					<span class="left"><?php previous_post_link('%link', '&larr; %title', TRUE); ?></span>
					<span class="right"><?php next_post_link('%link', '%title &rarr;', TRUE); ?></span>
				</div>
			</div>
			<?php comments_template(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
    </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>