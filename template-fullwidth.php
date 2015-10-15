<?php
/**
 * Template Name: Full Width Page Template
 */
 get_header(); ?>
<section>
  <div class="container row">
    <div class="col-sm-12 col-md-12">
    	<?php if ( have_posts() ) : ?> 	
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; ?>
        <?php comments_template(); ?>
		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
    </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>