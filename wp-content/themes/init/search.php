<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package init
 */

get_header();
?>

<section class="search">
    <div class="container">
        <div class="search__wrapper article-sm">

            <div class="search__headline headline article-sm">
                <?php
                the_archive_title('<h1 class="headline__title">', '</h1>');
                printf(esc_html__('Search Results for: %s', 'init'), '<span>' . get_search_query() . '</span>');
                ?>
            </div>

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <?php get_template_part('template-parts/content', 'search'); ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

        </div>
    </div>
</section>

<?php
get_footer();
