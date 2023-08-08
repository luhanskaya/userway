<?php

/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package unite
 */

get_header(); ?>


<section class="error-404 not-found text-center py-10">
	<div class="container">
		<header class="page-header">
			<h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'unite'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e('It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'unite'); ?></p>

			<?php get_search_form(); ?>

		</div><!-- .page-content -->
	</div>
</section><!-- .error-404 -->



<?php get_footer(); ?>
