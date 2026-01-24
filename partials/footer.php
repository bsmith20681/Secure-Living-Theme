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

            <p class="footer-copyright">&copy; <?php echo date('Y'); ?> secureliving.com. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>