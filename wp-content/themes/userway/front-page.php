<?php
	get_header(); ?>

	<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part('template-parts/flexible-content');

		endwhile; // end of the loop.
		?>

	</main><!-- #main -->

<?php
	get_footer();
?>
