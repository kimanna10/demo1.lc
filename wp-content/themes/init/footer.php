<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package init
 */

?>
    </main>

	<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">

                <div class="footer__top">
                    <div class="footer__title title">Contacts</div>
                    <div class="footer__text text">Want to know more or just chat?<br>You are welcome!</div>
                    <div class="footer__button">
                        <button class="footer__btn" type="button">Send message</button>
                    </div>
                </div>
                
                <div class="footer__bottom">
                    <div class="footer__row">
                        <div class="footer__column">
                            <div class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <img class="footer__img" src="wp-content/themes/init/img/icons/in.svg">
                                </a>
                            </div>
                        </div>

                        <div class="footer__column">
                            <div class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <img class="footer__social-icon" src="wp-content/themes/init/img/icons/inst.svg">
                                </a>
                            </div>
                        </div>

                        <div class="footer__column">
                            <div class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <img class="footer__img" src="wp-content/themes/init/img/icons/be.svg">
                                </a>
                            </div>
                        </div>

                        <div class="footer__column">
                            <div class="footer__social">
                                <a class="footer__social-link" href="#">
                                    <img class="footer__img" src="wp-content/themes/init/img/icons/site.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="footer__text-bottom">
                        Like me on<br>LinkedIn, Instagram, Behance, Dribble
                    </div>

                </div>

            </div>
        </div>

        <div class="modal-menu">
            <div class="container modal-menu__container">
                    <?php /*
                        wp_nav_menu( [
                            'theme_location' => 'burger',
                            'depth'          => 2,
                            'container'      => false,
                            'fallback_cb'    => false,
                            'echo'           => true,
                            'walker'         => new BEM_Walker_Nav_Menu(),
                            'bem_block'      => 'modal',
                            'items_wrap'     => '<modal class="modal-menu__nav modal" ><ul class="modal__list">%3$s</ul></modal>
                            ',
                        ] );
                    */ ?>

                     <?php
                        wp_nav_menu( [
                            'theme_location' => 'main',
                            'depth'          => 2,
                            'container'      => false,
                            'fallback_cb'    => false,
                            'echo'           => true,
                            'walker'         => new BEM_Walker_Nav_Menu(),
                            'bem_block'      => 'nav',
                            'items_wrap'     => '<nav class="modal-menu__nav nav" ><ul class="nav__list">%3$s</ul></nav>
                            ',
                        ] );
                    ?>
                    
                    <div class="modal-menu__bottom">
                        <div class="modal-menu__lang">RU | ENG</div>
                    </div>
                    
                </div>
        </div>

        

        <?php wp_footer(); ?>
	</footer>

    

</body>
</html>
