<?php get_header(); ?>


<?php
	if ( have_posts() ) :
		while ( have_posts() ) : the_post(); ?>

		<h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title() ?></a></h2>

		<div>

		<?php test_post_meta() ?>

		</div>
		By  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID') ) ?>"><?php echo get_the_author() ?></a>

		<div>
			<?php the_excerpt(); ?>
		</div>

		<?php test_read_more() ?>

		<p><?php the_posts_pagination() ?></p>
	<?php endwhile;
endif;
?>

<?php get_footer(); ?>
