<?php
/**
 * Sample implementation of the Custom Header feature
 * Simple Header Menu -- Option 2
 *
 * @package Distillery_base_theme
 */

$settings=[
    'type'=>'container',   //container-fluid or container
];

$settingsObject = (object) $settings;
?>


<header id="masthead" class="site-header">
	  <div class="<?php echo $settingsObject->type; ?>">
	   <div class="row">
	    <div class="col-lg-11 col-md-11 col-sm-11 col-11">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$distillery_base_theme_description = get_bloginfo( 'description', 'display' );
			if ( $distillery_base_theme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $distillery_base_theme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
        </div>
		<div class="col-lg-1 col-md-1 col-sm-1 col-1">
            <a href="#menu" class="menu-link">&#9776;</a>
		</div>
		</div>
		</div>
	  </div>	
	</header><!-- #masthead -->
    <div class="nav-menu-2">		
		<div id="menu" class="main-navigation panel" role="navigation">
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'option-2',
                    'items_wrap'      => '<ul class="mainmenu">%3$s</ul>'
				)
			);
			?>
		</div><!-- #site-navigation -->
        <script>
    jQuery(document).ready(function() {
        console.log("Hello");
        jQuery('.menu-link').bigSlide();
    });
</script>        