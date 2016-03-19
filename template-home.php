<?php
 	/**
	* Template Name: Homepage
	*/

	get_header(); ?>

	<div class="doc-main">
		<div class="container">
			<div class="row">
				<?php
					$categories = get_categories();
					foreach ( $categories as $category ) :
				?>
				<div class="docpress-box col-xs-12 col-sm-4 col-lg-4 text-center">
					<div class="box">
						<div class="box-content">
							<h2 class="doc-title"><?php echo esc_html($category->name); ?></h2>
							<p><?php echo esc_html($category->description); ?></p>
							<a href="<?php echo esc_url( get_category_link( $category->term_id ) ); ?>" class="btn btn-block btn-primary"><?php _e( 'Browse', 'docpress' ); ?></a>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
