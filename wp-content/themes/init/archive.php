<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package init
 */

get_header();
?>

<section class="archive">
    <div class="container">
        <div class="archive__wrapper">

            <div class="archive__headline headline">
                <?php
                    the_archive_title( '<h1 class="headline__title">', '</h1>' );
                    the_archive_description( '<div class="headline__description">', '</div>' );
                ?>
            </div>

            <?php if ( have_posts() ) : ?>

                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', get_post_type() ); ?>

                <?php endwhile; ?>

                <?php the_posts_navigation(); ?>

            <?php else : ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>
        
        </div>
    </div>
</section>

<?php
get_footer();
