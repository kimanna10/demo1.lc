<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package init
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header">
        <div class="container">
            <div class="header__wrapper">

            

                <div class="header__main" >

               

                    <?php
                        wp_nav_menu( [
                            'theme_location' => 'main',
                            'depth'          => 2,
                            'container'      => false,
                            'fallback_cb'    => false,
                            'echo'           => true,
                            'walker'         => new BEM_Walker_Nav_Menu(),
                            'bem_block'      => 'nav',
                            'items_wrap'     => '<nav class="header__nav nav" ><ul class="nav__list">%3$s</ul></nav>
                            ',
                        ] );
                    ?>
                    
                    

                    


                    
                </div>


            </div>
        </div>

	</header>

    <main class="main">