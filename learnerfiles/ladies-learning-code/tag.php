<?php get_header(); ?>
<div class="left">
	<h1><?php printf( __( 'Tag Archives: %s', 'twentyten' ), '' . single_tag_title( '', false ) . '' ); ?></h1>
	<?php get_template_part( 'loop', 'tag' ); ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>