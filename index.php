<?php get_template_part('partials/header'); ?>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
            the_content();
        endwhile;
    endif;
    ?>

<?php get_template_part('partials/footer'); ?>
