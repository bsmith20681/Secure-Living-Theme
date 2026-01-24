<?php get_template_part('partials/header'); ?>

<main class="archive-page">
    <div class="container">

        <h1 class="archive-header"><?php echo get_the_archive_title() ?></h1>

        <?php if (have_posts()) : ?>
            <div class="posts-grid row">
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <a href="<?php the_permalink(); ?>" class="post-card">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-card__image">
                                    <?php the_post_thumbnail('medium_large'); ?>
                                </div>
                            <?php else : ?>
                                <div class="post-card__image post-card__image--placeholder">
                                    <span>No Image</span>
                                </div>
                            <?php endif; ?>

                            <div class="post-card__content">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                ?>
                                    <span class="post-card__category">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </span>
                                <?php endif; ?>

                                <h2 class="post-card__title"><?php the_title(); ?></h2>

                                <div class="post-card__meta">
                                    <span class="post-card__author">By: <?php the_author(); ?></span>
                                    <span class="post-card__separator">|</span>
                                    <span class="post-card__date">Last Updated: <?php echo get_the_modified_date('F j, Y'); ?></span>
                                </div>

                                <div class="post-card__excerpt">
                                    <?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>

            <div class="archive-pagination">
                <?php
                the_posts_pagination([
                    'mid_size' => 2,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                ]);
                ?>
            </div>
        <?php else : ?>
            <p class="no-posts">No posts found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_template_part('partials/footer'); ?>