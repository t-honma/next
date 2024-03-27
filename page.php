<?php get_header(); ?>
<!-- page.php -->

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
			
			<?php remove_filter ('the_content', 'wpautop'); ?>
			<?php the_content(); ?>

		<?php endwhile; ?>

		<?php else : ?>

			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	<?php if ( is_page(array(2898,2903,2906)) ) : ?>
	<?php get_template_part('location'); ?>
	<?php endif; ?>

<?php get_footer(); ?>