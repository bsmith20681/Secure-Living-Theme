<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('spacing', get_template_directory_uri() . '/css/spacing-utilties.css');
    wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/css/flexboxgrid.css');

    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', [], '1.0', true);
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'secure-living-theme'),
        'footer'  => __('Footer Menu', 'secure-living-theme'),
    ]);

    add_theme_support('post-thumbnails');
});


/**
add_filter('theme_post_templates', function ($templates) {
    $templates['single-review.php'] = 'Review Post';
    return $templates;
});
 */

add_filter('nav_menu_link_attributes', function ($atts, $item, $args) {
    if ($args->theme_location === 'primary') {
        $atts['class'] = isset($atts['class']) ? $atts['class'] . ' link-muted' : 'link-muted';
    }
    return $atts;
}, 10, 3);
