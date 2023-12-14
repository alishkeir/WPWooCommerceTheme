<?php
/**
 * The footer for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fancy Lab
 */

?>

<footer>
    <section class="footer-widgets">

        <div class="container">
            <div class="row">Footer Widgets</div>
        </div>

    </section>
    <section class="copyright">


        <div class="container">
            <div class="row">
                <div class="copyright-text col-12 col-md-6">Copyright</div>
                <div class="footer-menu col-12 col-md-6 text-start text-md-end">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'fancy_lab_footer_menu',
                        )
                    ) ?>
                </div>
            </div>
        </div>


    </section>
</footer>
</div>

<?php wp_footer(); ?>

</body>

</html>