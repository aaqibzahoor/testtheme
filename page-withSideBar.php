<?php

/**
 * Template Name: Page with Side Bar
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Distillery_base_theme
 */

get_header();
?>
<div class="container">
	<div class="col-lg-8 col-md-8 col-12">
		<main id="primary" class="site-main">

			<?php
			while (have_posts()) :
				the_post();

				get_template_part('template-parts/content', 'page');

				// If comments are open or we have at least one comment, load up the comment template.
				if (comments_open() || get_comments_number()) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div>
	<div class="col-lg-4 col-md-4 col-12">
		<?php get_sidebar(); ?>
	</div>
</div>
<?php

get_footer();
