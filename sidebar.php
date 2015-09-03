<div class="sidebar widget-area col-sm-4 col-md-4">
    <?php if ( is_active_sidebar( 'sidebar' ) ) : // If the sidebar has widgets. ?>
		<?php dynamic_sidebar( 'sidebar' ); ?>
    <?php endif; // End widgets check. ?>
</div>