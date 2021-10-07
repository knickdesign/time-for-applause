<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php if ( has_nav_menu( 'primary' ) ) : ?>
	
	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
	<div id="menu-trigger" class="menu-trigger" onclick="toggleMenu()">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hamburger-menu.svg">
	</div>
	<div id="menu-wrapper" class="menu-wrapper menu-closed">
		<div class="multi-menu-wrapper">
		<?php
		wp_nav_menu(
			array(
				'theme_location'  => 'primary',
				'menu_class'      => 'menu-wrapper__menu-list',
				'container_class' => 'primary-menu-container',
				'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
				'fallback_cb'     => false,
			)
		);
		?>
		<ul class="footer-navigation-wrapper">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'items_wrap'     => '%3$s',
							'container'      => false,
							'depth'          => 1,
							'link_before'    => '<span class="site-description">',
							'link_after'     => '</span>',
							'fallback_cb'    => false,
						)
					);
					?>
				</ul><!-- .footer-navigation-wrapper -->
		</div>
	</div>
	<div>
		
	</div>
	</nav><!-- #site-navigation -->
	<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/tfa-custom.js"></script>
<?php endif; ?>
