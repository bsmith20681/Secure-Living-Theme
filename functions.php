<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('spacing', get_template_directory_uri() . '/css/spacing-utilities.css');
    wp_enqueue_style('flexboxgrid', get_template_directory_uri() . '/css/flexboxgrid.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('theme-js', get_template_directory_uri() . '/js/theme.js', ['jquery'], '1.0', true);
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'secure-living-theme'),
        'footer'  => __('Footer Menu', 'secure-living-theme'),
    ]);

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
});

add_action('after_setup_theme', function() {
    add_theme_support('editor-color-palette', [
        ['name' => 'Primary 50', 'slug' => 'primary-50', 'color' => '#eff9ff'],
        ['name' => 'Primary 100', 'slug' => 'primary-100', 'color' => '#dff2ff'],
        ['name' => 'Primary 200', 'slug' => 'primary-200', 'color' => '#b8e6ff'],
        ['name' => 'Primary 300', 'slug' => 'primary-300', 'color' => '#78d4ff'],
        ['name' => 'Primary 400', 'slug' => 'primary-400', 'color' => '#38c0ff'],
        ['name' => 'Primary 500', 'slug' => 'primary-500', 'color' => '#06a6f1'],
        ['name' => 'Primary 600', 'slug' => 'primary-600', 'color' => '#0084ce'],
        ['name' => 'Primary 700', 'slug' => 'primary-700', 'color' => '#0069a7'],
        ['name' => 'Primary 800', 'slug' => 'primary-800', 'color' => '#02598a'],
        ['name' => 'Primary 900', 'slug' => 'primary-900', 'color' => '#084a72'],
        ['name' => 'Primary 950', 'slug' => 'primary-950', 'color' => '#062e4b'],
    ]);
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
