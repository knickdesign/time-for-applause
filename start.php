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
<div class="big-container header-logo-container--big flex">
    <div class="logo-wrapper">
        <a href="<?php echo home_url(); ?>">
            <img class="logo" src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>">
        </a>
    </div>
</div>
<div class="intro-text-frontPage">
    <div class="intro-text-frontPage__helper">
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
</div>


<div class="content-frontpage">
    <?php
    while (have_posts()) :
        the_post();
        the_content();

    endwhile; ?>
    <div class="linked-pages">
        <?php
        $featured_posts = get_field('schnelleinstiege');
        if ($featured_posts) : ?>
            <?php foreach ($featured_posts as $post) :

                // Setup this post for WP functions (variable must be named $post).
                setup_postdata($post); ?>
                <div class="linked-page flex">
                    <div class="linked-page__inner linked-page__inner--text">
                        <h2 href="<?php the_permalink(); ?>"><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                    <div class="linked-page__inner flex">
                        <div class="linked-page__inner__img-wrap">
                            <div class="header-hr" style="background-color: <?php the_field('farbe'); ?>"></div>
                            <img src="<?php the_field('vorschaubild'); ?>">
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php
            // Reset the global post object so that the rest of the page works correctly.
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</div>
</div>

<?php get_footer();
