<?php
/**
 * The template for displaying all pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

get_header();
?>

    <section class="page">
        <div class="container">
            <div class="page__wrapper">

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; ?>
                
            </div>
        </div>
    </section>

<?php
get_footer();
