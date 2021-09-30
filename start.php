<?php

/**
 * Template Name: Startseite
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

get_header();

/* Start the Loop */
?>
<div class="intro-text-frontPage">
<div class="wp-block-columns intro-text-frontPage-helper big-container">
    <div class="wp-block-column"></div>
    <div class="wp-block-column">

        <?php if (get_field('uberschrift')) : ?>
            <h1><?php the_field('uberschrift'); ?></h1>
        <?php endif;
        if (get_field('introtext')) : ?>
            <p><?php the_field('introtext'); ?></p>
        <?php endif; ?>
    <div class="arrow-down-wrapper">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/arrow-down.svg">
    </div>
    </div>
    <div class="wp-block-column"></div>
</div>
</div>


<div class="content-frontpage">
<?php
while (have_posts()) :
    the_post();
    the_content();

endwhile; ?> 
</div>
<?php get_footer();
