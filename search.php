<?php get_header(); ?>
<section>
  <div class="container row">
    <?php get_sidebar(); ?>
    <div class="col-sm-8 col-md-8">
    	<?php if ( have_posts() ) : ?>
            <h2><?php _e( 'Search results for:', 'docpress' ); ?> <?php echo get_search_query(); ?></h2>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content' ); ?>
			<?php endwhile; ?>
				<div class="pagination">
					<div class="container clearfix">
						<span class="left"><?php previous_posts_link(); ?></span>
						<span class="right"><?php next_posts_link(); ?></span>
					</div>
				</div>
		<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
    </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>