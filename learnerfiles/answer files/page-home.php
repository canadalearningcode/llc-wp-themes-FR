<?php /* Template Name: Home Page */ ?>
<?php get_header();  ?>
	<div class="home">
		<?php if(have_posts()) while(have_posts()) : the_post(); ?>
			<div class="homeBlurb"><?php the_content(); ?></div>
		<?php endwhile; ?>

		<div class="homeColumn">
			<h3>Tag Cloud</h3>
			<?php wp_tag_cloud(); ?>
		</div>

		<div class="homeColumn">
			<h3>Latest Posts</h3>
			<ul><?php wp_get_archives('type=postbypost&limit=10'); ?></ul>
		</div>

		<div class="homeColumn">
			<h3>Categories</h3>
			<ul><?php wp_list_categories('title_li='); ?></ul>
		</div>

	</div>
<?php get_footer(); ?>