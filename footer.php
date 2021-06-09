<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Distillery_base_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			 Copyright <?php echo date('Y'); ?>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'distillery-base-theme' ), 'distillery-base-theme', '<a href="https://thedistillery.co/">The Distillery</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
