	<div class="footer">
		<div class="container">
			<div class="row">
			<?php if ( is_active_sidebar( 'footer-one-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-3 col-lg-3">
					<?php dynamic_sidebar( 'footer-one-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-two-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-3 col-lg-3">
					<?php dynamic_sidebar( 'footer-two-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-three-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-3 col-lg-3">
					<?php dynamic_sidebar( 'footer-three-widgets' ); ?>
				</div>
			<?php endif; ?>
			<?php if ( is_active_sidebar( 'footer-four-widgets' ) ) : ?>
				<div class="col-xs-12 col-sm-3 col-lg-3">
					<?php dynamic_sidebar( 'footer-four-widgets' ); ?>
				</div>
			<?php endif; ?>
				<div class="col-xs-12 col-sm-12 col-lg-12">
					<div class="footer-credits text-center">
						<?php echo '<p>' . __( '<a target="_blank" href="http://www.hardeepasrani.com/portfolio/docpress/">DocPress</a><br/>Proudly powered by WordPress', 'docpress' ) . '</p>'; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php wp_footer(); ?>
	
</body>