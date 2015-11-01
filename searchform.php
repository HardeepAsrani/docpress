<?php
    $docpress_header_search_label = get_theme_mod('docpress_header_search_label',__( 'Search...', 'docpress' ));
    $docpress_header_search_button = get_theme_mod('docpress_header_search_button',__( 'Search', 'docpress' ));
?>
    
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="<?php if(!empty($docpress_header_search_label)) : echo $docpress_header_search_label; endif; ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo __( 'Search for:', 'docpress' ) ?>" />
	<input type="submit" class="search-submit" value="<?php if(!empty($docpress_header_search_button)) : echo $docpress_header_search_button; endif; ?>" />
</form>