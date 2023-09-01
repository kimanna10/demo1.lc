<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package init
 */

get_header();
?>

    <section class="error-404 not-found">
        <div class="container">
            <div class="not-found__wrapper article">

                <div class="not-found__headline headline">
                    <h1 class="headline__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'init' ); ?></h1>
                </div>

                <div class="not-found__content article">

                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'init' ); ?></p>

                    <?php get_search_form(); ?>

                </div>

            </div>
        </div>
    </section>

<?php
get_footer();
