<?php

/**
 * Sample implementation of the Custom Header feature
 * Simple Header Menu - Option 1
 *
 * @package Distillery_base_theme
 */
?>
<header id="masthead" class="site-header">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-sm-12 col-12">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if (is_front_page() && is_home()) :
					?>
						<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
					<?php
					else :
					?>
						<!--<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p> -->
					<?php
					endif;
					$distillery_base_theme_description = get_bloginfo('description', 'display');
					if ($distillery_base_theme_description || is_customize_preview()) :
					?>
						<p class="site-description">
							<?php echo $distillery_base_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
							?>
						</p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-lg-8 col-md-9 col-sm-12 col-12">
				<div class="hamburger-menu">
					<div id="menuToggle">
						<input type="checkbox" />
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="nav-menu">
					<nav id="site-navigation" class="main-navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->

				</div>
				
			</div>
		</div>
	</div>
</header><!-- #masthead -->
<script>
	jQuery(document).ready(function(){
		jQuery('#menuToggle').click(function(){
              jQuery('.nav-menu').toggle();
		});
	})
</script>