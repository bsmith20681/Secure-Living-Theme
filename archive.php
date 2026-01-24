<?php get_template_part('partials/header'); ?>

<main class="archive-page">
    <div class="container">

        <h1 class="archive-header"><?php echo get_the_archive_title() ?></h1>

        <?php get_template_part('partials/archive-layout'); ?>

    </div>
</main>

<?php get_template_part('partials/footer'); ?>