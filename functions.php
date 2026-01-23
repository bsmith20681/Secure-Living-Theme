<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_style('spacing', get_template_directory_uri() . './css/spacing-utilties.css');
    wp_enqueue_style('flexboxgrid', get_template_directory_uri() . './css/flexboxgrid.css');
});

add_action('after_setup_theme', function () {
    register_nav_menus([
        'primary' => __('Primary Menu', 'secure-living-theme'),
    ]);
});


/** 
add_filter('theme_post_templates', function ($templates) {
    $templates['single-review.php'] = 'Review Post';
    return $templates;
});
 */
