<?php get_header(); ?>
<div class="left">
<?php if ( have_posts() ) while ( have_posts() ) : the_post();  // <-- This is the start of the loop! ?>
<?php /* =====================		Safe Zone Starts!		========================== */ ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<div class="entry-meta">
			<p>Posted on <?php the_date(); ?></p>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(); ?>
		</div><!-- .entry-content -->


		<div class="entry-utility">
			<p><?php the_tags(); ?></p>
			<p>Categories: <?php the_category(',');?></p>
			<p>Date: <?php the_date(); ?></p>
			<p>Author: <?php the_author(); ?></p>

			<?php /* =====================		Social Media Zone Starts!		========================== */ ?>


			<?php /* =====================		Social Media Zone Ends!			========================== */ ?>
		
		</div><!-- .entry-utility -->
	</div><!-- #post-## -->


	<?php comments_template( '', true ); ?>

<?php /* =====================		Safe Zone Ends!		========================== */ ?>
<?php endwhile; // <-- This is the end of the loop! ?>

</div><!--/left-->	
<?php get_sidebar(); ?>
<?php get_footer(); ?>