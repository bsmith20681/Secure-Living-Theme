<?php

/**
 * Company profile card partial.
 *
 * Expects these variables to be set before including:
 *   $rank    — int, the display rank (1, 2, 3...)
 *   $company — array, a single company entry from company-data.php
 */
$full_stars  = floor($company['stars']);
$has_half    = ($company['stars'] - $full_stars) >= 0.5;
$empty_stars = 5 - $full_stars - ($has_half ? 1 : 0);
$phone_digits = preg_replace('/[^0-9]/', '', $company['phone']);
?>
<div class="company-card">
    <div class="company-card__topbar">
        <div class="company-card__rank"><?php echo esc_html($rank); ?></div>
        <?php if (!empty($company['banner'])) : ?>
            <span class="company-card__banner"><?php echo esc_html($company['banner']); ?></span>
        <?php endif; ?>
    </div>
    <div class="company-card__body">
        <div class="company-card__logo-col">
            <div class="company-card__logo">
                <img src="<?php echo esc_url($company['logo']); ?>" alt="<?php echo esc_attr($company['name']); ?>">
            </div>
            <div class="company-card__rating">
                <span class="company-card__score"><?php echo esc_html($company['score']); ?></span>
                <div>
                    <div class="company-card__stars">
                        <?php for ($i = 0; $i < $full_stars; $i++) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f59e0b" viewBox="0 0 256 256">
                                <path d="M234.29,114.85l-45,38.83L203,211.75a16.4,16.4,0,0,1-24.5,17.82L128,198.49,77.47,229.57A16.4,16.4,0,0,1,53,211.75l13.76-58.07-45-38.83A16.46,16.46,0,0,1,31.08,86l59-4.76,22.76-55.08a16.36,16.36,0,0,1,30.27,0l22.75,55.08,59,4.76a16.46,16.46,0,0,1,9.37,28.86Z"></path>
                            </svg>
                        <?php endfor; ?>
                        <?php if ($has_half) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f59e0b" viewBox="0 0 256 256">
                                <path d="M239.18,97.26A16.38,16.38,0,0,0,224.92,86l-59-4.76L143.14,26.15a16.36,16.36,0,0,0-30.27,0L90.11,81.23,31.08,86a16.46,16.46,0,0,0-9.37,28.86l45,38.83L53,211.75a16.4,16.4,0,0,0,24.5,17.82L128,198.49l50.53,31.08A16.4,16.4,0,0,0,203,211.75l-13.76-58.07,45-38.83A16.43,16.43,0,0,0,239.18,97.26Zm-15.34,5.47-48.7,42a8,8,0,0,0-2.56,7.91l14.88,62.8a.37.37,0,0,1-.17.48c-.18.14-.23.11-.38,0l-54.72-33.65A8,8,0,0,0,128,181.1V32c.24,0,.27.08.35.26L153,91.86a8,8,0,0,0,6.75,4.92l63.91,5.16c.16,0,.25,0,.34.29S224,102.63,223.84,102.73Z"></path>
                            </svg>
                        <?php endif; ?>
                        <?php for ($i = 0; $i < $empty_stars; $i++) : ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#f59e0b" viewBox="0 0 256 256">
                                <path d="M243,96a20.33,20.33,0,0,0-17.74-14l-56.59-4.57L146.83,24.62a20.36,20.36,0,0,0-37.66,0L87.35,77.44,30.76,82A20.45,20.45,0,0,0,19.1,117.88l43.18,37.24-13.2,55.7A20.37,20.37,0,0,0,79.57,233L128,203.19,176.43,233a20.39,20.39,0,0,0,30.49-22.15l-13.2-55.7,43.18-37.24A20.43,20.43,0,0,0,243,96ZM172.53,141.7a12,12,0,0,0-3.84,11.86L181.58,208l-47.29-29.08a12,12,0,0,0-12.58,0L74.42,208l12.89-54.4a12,12,0,0,0-3.84-11.86L41.2,105.24l55.4-4.47a12,12,0,0,0,10.13-7.38L128,41.89l21.27,51.5a12,12,0,0,0,10.13,7.38l55.4,4.47Z"></path>
                            </svg>
                        <?php endfor; ?>
                    </div>
                    <span class="company-card__rating-label"><?php echo esc_html($company['rating_label']); ?></span>
                </div>
            </div>
        </div>
        <div class="company-card__details">
            <ul class="company-card__features">
                <?php foreach ($company['features'] as $feature) : ?>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="var(--primary-600)" viewBox="0 0 256 256">
                            <path d="M229.66,77.66l-128,128a8,8,0,0,1-11.32,0l-56-56a8,8,0,0,1,11.32-11.32L96,188.69,218.34,66.34a8,8,0,0,1,11.32,11.32Z"></path>
                        </svg>
                        <?php echo esc_html($feature); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="company-card__actions">
            <a href="<?php echo esc_url($company['visit_url']); ?>" class="company-card__visit-btn" target="_blank" rel="nofollow noopener">Visit Site &rarr;</a>
            <?php if (!empty($company['phone'])) : ?>
                <a href="tel:<?php echo esc_attr($phone_digits); ?>" class="company-card__phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 256 256">
                        <path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46Z"></path>
                    </svg>
                    <?php echo esc_html($company['phone']); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
    <?php if (!empty($company['disclaimer'])) : ?>
        <div class="company-card__disclaimer">
            <?php echo esc_html($company['disclaimer']); ?>
        </div>
    <?php endif; ?>
</div>