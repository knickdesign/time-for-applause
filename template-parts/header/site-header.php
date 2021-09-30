<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
?>

<header id="main-header" class="big-container" role="banner">
<div id="nav-wrapper" class="flex">
	<?php get_template_part( 'template-parts/header/site-branding' ); ?>
	<?php get_template_part( 'template-parts/header/site-nav' ); ?>
</div>
<div class="logo-wrapper">
	<img class="logo" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>">
</div>
</header><!-- #masthead -->
