<?php
/*
Template Name: Deals Page
*/
get_template_part('partials/header');
?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <main class="mx-4 mb-10">
            <div class="container mb-10">
                <h1 class="mb-3"><?php the_title(); ?></h1>
                <div>Last Updated <?php echo date("m/d/Y"); ?></div>
            </div>


            <?php the_content(); ?>
        </main>
<?php
    endwhile;
endif;
?>

<?php get_template_part('partials/footer'); ?>