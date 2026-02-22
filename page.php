<?php get_template_part('partials/header'); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <main class="container">
            <h1 class=""><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </main>
<?php
    endwhile;
endif;
?>

<?php get_template_part('partials/footer'); ?>