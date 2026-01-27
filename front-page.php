<?php get_template_part('partials/header'); ?>

<main class="homepage">
    <section class="featured-posts">
        <div class="container">
            <?php
            $featured_posts = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post_status' => 'publish',
            ]);

            if ($featured_posts->have_posts()) :
                $count = 0;
            ?>
                <div class="featured-grid">
                    <?php while ($featured_posts->have_posts()) : $featured_posts->the_post();
                        $count++; ?>

                        <a href="<?php the_permalink(); ?>" class="post-card <?= $count == 1 ? 'featured-grid__main' : '' ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-card__image">
                                    <?php the_post_thumbnail('large'); ?>
                                </div>
                            <?php else : ?>
                                <div class="post-card__image post-card__image--placeholder">
                                    <span>No Image</span>
                                </div>
                            <?php endif; ?>

                            <div class="post-card__content <?= $count == 1 ? '' : 'justify-between' ?>">
                                <h2 class="post-card__title"><?php the_title(); ?></h2>

                                <div class="post-card__meta">
                                    <span class="post-card__author"><?php the_author(); ?></span>
                                    <span class="post-card__separator">|</span>
                                    <span class="post-card__date"><?php echo get_the_modified_date('m/d/Y'); ?></span>
                                </div>

                                <?php if ($count === 1) : ?>
                                    <div class="post-card__excerpt">
                                        <?= wp_trim_words(get_the_excerpt(), 50, '...'); ?>
                                    </div>
                                <?php endif; ?>



                            </div>
                        </a>

                    <?php endwhile; ?>

                </div>
            <?php
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_template_part('partials/footer'); ?>