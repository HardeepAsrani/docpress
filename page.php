<?php get_header(); ?>
<section>
  <div class="container row">
    <?php get_sidebar(); ?>
    <div class="col-sm-8 col-md-8">
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