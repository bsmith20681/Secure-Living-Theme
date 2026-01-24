<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/images/secureliving-logo-md-300x54.png" alt="<?php bloginfo('name'); ?>">
            </a>
            <button class="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false">
                <svg class="icon-menu" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <svg class="icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
            <nav class="primary-nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'nav-menu',
                    'fallback_cb' => false,
                ]);
                ?>
            </nav>
        </div>
    </div>
</header>
<div class="mobile-menu-overlay"></div>

<script>
(function() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.primary-nav');
    const overlay = document.querySelector('.mobile-menu-overlay');

    if (toggle && nav && overlay) {
        toggle.addEventListener('click', function() {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', !isOpen);
            nav.classList.toggle('is-open');
            overlay.classList.toggle('is-visible');
            document.body.style.overflow = isOpen ? '' : 'hidden';
        });

        overlay.addEventListener('click', function() {
            toggle.setAttribute('aria-expanded', 'false');
            nav.classList.remove('is-open');
            overlay.classList.remove('is-visible');
            document.body.style.overflow = '';
        });
    }
})();
</script>
