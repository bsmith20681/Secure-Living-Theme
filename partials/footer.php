<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-xl-300x51.png" alt="<?php bloginfo('name'); ?>">
            </a>

            <?php if (has_nav_menu('footer')) : ?>
                <nav class="footer-nav" aria-label="Footer Navigation">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'menu_class'     => 'footer-menu',
                        'container'      => false,
                        'depth'          => 1,
                    ));
                    ?>
                </nav>
            <?php endif; ?>

            <hr class="footer-divider">
            <div class="footer-disclaimer">
                SecureLiving.com is an independent online resource created to help users make informed decisions about home security systems and related safety services. The information on this site covers a wide range of products and providers. Certain details, including pricing, features, availability, and promotional offers, are supplied directly by our partners and may change at any time without notice. While we strive to ensure accuracy through careful research, the content provided on SecureLiving.com is for informational purposes only and does not constitute legal, financial, or professional advice.
                <br>
                <br>
                Our site free to use and may receive compensation from companies featured on the site. This compensation may affect the placement, ranking, and presentation of providers and their products. Listings on this site do not imply endorsement, and we do not include every provider available in the marketplace. Except as expressly stated in our Terms of Use, all representations and warranties regarding the information on this site are disclaimed. All information, including pricing and availability, is subject to change without notice.
            </div>

            <p class="footer-copyright">&copy; <?php echo date('Y'); ?> secureliving.com. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>