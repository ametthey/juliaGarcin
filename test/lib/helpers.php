
<!-- custom function for meta information -->
<?php function test_post_meta() { ?>
		Posted on <a href="<?php echo esc_url( get_permalink() ) ?>"
			<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date() ) ?></time>
			</a>
<?php } ?>


<!-- custom function for read more -->
<?php function test_read_more() { ?>
	<a href="<?php echo esc_url( the_permalink() ) ?>" title="<?php the_title_attribute(); ?>">
	Read more
	</a>
<?php } ?>
