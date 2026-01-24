<?php get_template_part('partials/header'); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <article class="entry">
            <div class="entry-header">
                <div class="container">
                    <nav class="breadcrumb" aria-label="Breadcrumb">
                        <a href="<?php echo home_url(); ?>">Home</a>
                        <span class="breadcrumb__separator">&gt;&gt;</span>
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) :
                            $category = $categories[0];
                        ?>
                            <a href="<?php echo get_category_link($category->term_id); ?>"><?php echo esc_html($category->name); ?></a>
                            <span class="breadcrumb__separator">&gt;&gt;</span>
                        <?php endif; ?>
                        <span class="breadcrumb__current"><?php the_title(); ?></span>
                    </nav>
                    <h1 class="entry__title"><?php the_title(); ?></h1>
                    <div class="entry__disclaimer">
                        We might earn a commission based on product recommendatations at no extra cost to you. <a class="link-muted" href="/affiliate-disclaimer/">Learn More</a>
                    </div>
                    <div class="post-meta">
                        <div class="post-meta__info">
                            <div class="post-meta__author">
                                <div class="post-meta__avatar">
                                    <?php echo get_avatar(get_the_author_meta('ID'), 48); ?>
                                </div>
                                <div class="post-meta__text">
                                    <span class="post-meta__label">Written By</span>
                                    <span class="post-meta__value"><?php the_author(); ?></span>
                                </div>
                            </div>
                            <div class="post-meta__date">
                                <span class="post-meta__label">Last Updated:</span>
                                <span class="post-meta__value"><?php echo get_the_modified_date('F j, Y'); ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container" style="max-width: 840px;">
                <?php the_content(); ?>
                <!-- Author Bio -->
                <div class="author-bio">
                    <h3 class="author-bio__heading">About the author</h3>
                    <div class="author-bio__content">
                        <div class="author-bio__avatar">
                            <?php echo get_avatar(get_the_author_meta('ID'), 80); ?>
                        </div>
                        <div>
                            <p class="author-bio__name"><?php the_author(); ?></p>
                            <p class="author-bio__description"><?php echo get_the_author_meta('description'); ?></p>
                        </div>

                    </div>
                </div>
            </div>
        </article>
<?php
    endwhile;
endif;
?>

<?php get_template_part('partials/footer'); ?>