<?php

/**
 * Template Name: Unterseite
 */

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();?>

<div class="big-container header-logo-container--small flex">
<div class="logo-wrapper header-logo-container--small__inner">
<a href="<?php echo home_url(); ?>">
	<img class="logo" src="<?php echo esc_url( wp_get_attachment_url( get_theme_mod( 'custom_logo' ) ) );?>">
</a>
<h1 class="h2"><?php echo esc_html( get_the_title() );?></h1>
</div>
<div class="header-logo-container--small__inner">
	<div class="hr header-hr" style="background-color: <?php the_field('farbe');?>"></div>
	<div class="header-logo-container--small__inner__img-container">
		<img src="<?php the_field('vorschaubild'); ?>">
	</div>
</div>
</div>
<div class="content-subpage">
	<?php
while ( have_posts() ) :
	the_post();
	the_content();

endwhile; ?>
</div>
<?php
get_footer();
