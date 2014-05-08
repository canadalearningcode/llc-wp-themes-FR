<?php get_header(); ?>
<div class="left">

	<h1><?php printf( __( 'Category Archives: %s', 'twentyten' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
	<?php
		$category_description = category_description();
		if ( ! empty( $category_description ) )
			echo '' . $category_description . '';
	
	get_template_part( 'loop', 'category' ); ?>
	
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>