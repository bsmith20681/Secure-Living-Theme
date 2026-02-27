<?php
/*
Template Name: Security Match Quiz
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="affiliate-banner">
        <div class="container">
            <p>We might earn a commission based on product recommendations at no extra cost to you. <a href="#" class="affiliate-banner__link">Advertising Disclosure</a></p>
        </div>
    </div>

    <!-- Affiliate Disclaimer Modal -->
    <div class="affiliate-modal" aria-hidden="true">
        <div class="affiliate-modal__overlay"></div>
        <div class="affiliate-modal__content">
            <button class="affiliate-modal__close" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#363636" viewBox="0 0 256 256">
                    <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                </svg>
            </button>
            <div class="affiliate-modal__body">
                <h2>Affiliate Disclaimer</h2>
                <p>SecureLiving.com is a free online resource that strives to offer helpful content and comparison features to our visitors. Some of our links are affiliate links, which means that if you click on a link and make a purchase, we may earn a commission at no additional cost to you.</p>
                <p>We accept advertising compensation from companies that appear on the site, which may impact the location, order, and score assigned to products and services presented. Company listings on this site do not imply endorsement. We do not feature all providers on the market.</p>
                <p>We only recommend products and services that we believe provide value to our visitors. However, we are not responsible for the quality, accuracy, or performance of any third-party products or services.</p>
                <p>The information, including pricing, which appears on this site is subject to change at any time. Except as expressly set forth in our Terms of Use, all representations and warranties regarding the information presented on this site are disclaimed.</p>
                <p>Your support through these purchases helps us maintain and grow SecureLiving.com, and we sincerely appreciate it.</p>
            </div>
        </div>
    </div>

    <header class="site-header">
        <div class="container">
            <div class="quiz-header-inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo quiz-header-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/secureliving-logo-md-300x54.png" alt="<?php bloginfo('name'); ?>">
                </a>
                <div class="call-specialist">
                    <button class="call-specialist__btn" aria-expanded="false" aria-haspopup="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#fafafa" viewBox="0 0 256 256">
                            <path d="M222.37,158.46l-47.11-21.11-.13-.06a16,16,0,0,0-15.17,1.4,8.12,8.12,0,0,0-.75.56L134.87,160c-15.42-7.49-31.34-23.29-38.83-38.51l20.78-24.71c.2-.25.39-.5.57-.77a16,16,0,0,0,1.32-15.06l0-.12L97.54,33.64a16,16,0,0,0-16.62-9.52A56.26,56.26,0,0,0,32,80c0,79.4,64.6,144,144,144a56.26,56.26,0,0,0,55.88-48.92A16,16,0,0,0,222.37,158.46ZM176,208A128.14,128.14,0,0,1,48,80,40.2,40.2,0,0,1,82.87,40a.61.61,0,0,0,0,.12l21,47L83.2,111.86a6.13,6.13,0,0,0-.57.77,16,16,0,0,0-1,15.7c9.06,18.53,27.73,37.06,46.46,46.11a16,16,0,0,0,15.75-1.14,8.44,8.44,0,0,0,.74-.56L168.89,152l47,21.05h0s.08,0,.11,0A40.21,40.21,0,0,1,176,208Z"></path>
                        </svg>
                        <span>Call a Specialist</span>
                    </button>
                    <div class="call-specialist__dropdown" role="dialog" aria-label="Call Centers">
                        <button class="call-specialist__close" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="#363636" viewBox="0 0 256 256">
                                <path d="M205.66,194.34a8,8,0,0,1-11.32,11.32L128,139.31,61.66,205.66a8,8,0,0,1-11.32-11.32L116.69,128,50.34,61.66A8,8,0,0,1,61.66,50.34L128,116.69l66.34-66.35a8,8,0,0,1,11.32,11.32L139.31,128Z"></path>
                            </svg>
                        </button>
                        <div class="call-specialist__header">
                            <div class="call-specialist__header-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#363636" viewBox="0 0 256 256">
                                    <path d="M201.89,54.66A103.43,103.43,0,0,0,128.79,24H128A104,104,0,0,0,24,128v56a24,24,0,0,0,24,24H64a24,24,0,0,0,24-24V144a24,24,0,0,0-24-24H40.36A88.12,88.12,0,0,1,190.54,65.93,87.39,87.39,0,0,1,215.65,120H192a24,24,0,0,0-24,24v40a24,24,0,0,0,24,24h24a24,24,0,0,1-24,24H136a8,8,0,0,0,0,16h56a40,40,0,0,0,40-40V128A103.41,103.41,0,0,0,201.89,54.66ZM64,136a8,8,0,0,1,8,8v40a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V136Zm128,56a8,8,0,0,1-8-8V144a8,8,0,0,1,8-8h24v56Z"></path>
                                </svg>
                                <span class="glowing-dot"></span>
                            </div>

                            <div>
                                <h3>Agents Are Currently Available</h3>
                                <p>Get all your questions answered by a real person</p>
                            </div>
                        </div>
                        <div class="call-specialist__list">
                            <a href="tel:18332247221" class="call-specialist__company">
                                <div class="call-specialist__logo">
                                    <img src="http://secureliving.com/wp-content/uploads/2026/02/adt-logo-sm.png" alt="adt logo">
                                </div>
                                <div class="call-specialist__info">
                                    <strong>ADT</strong>
                                    <span>24/7 US-Monitoring</span>
                                </div>
                                <div class="btn gap-x-2 underline-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    (833) 224-7221
                                </div>
                            </a>
                            <a href="tel:18336062573" class="call-specialist__company">
                                <div class="call-specialist__logo">
                                    <img src="http://secureliving.com/wp-content/uploads/2026/02/vivint-logo-sm.png" alt="vivint logo">
                                </div>
                                <div class="call-specialist__info">
                                    <strong>Vivint</strong>
                                    <span>Smart Home Tech</span>
                                </div>
                                <div class="btn gap-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                    </svg>
                                    (833) 606-2573
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="quiz-page">
        <div class="call-specialist__overlay"></div>
        <div class="container">
            <div class="quiz-wrap">

                <!-- Progress Bar -->
                <div class="quiz-progress mb-6">
                    <div class="quiz-progress__fill" style="width: 16.66%;"></div>
                </div>
                <!--
            <p class="quiz-progress__label">Step <span id="quiz-step-current">1</span> of 6</p>
-->

                <form id="security-quiz">

                    <!-- Step 1: Property Type -->
                    <div class="quiz-step quiz-step--active" data-step="1">
                        <h2 class="quiz-step__heading">What are you protecting?</h2>
                        <div class="quiz-options">
                            <label class="quiz-option">
                                <input type="radio" name="property_type" value="House" required>
                                <span class="quiz-option__inner">
                                    <svg class="quiz-option__icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M216,116.69V216H152V152H104v64H40V116.69l82.34-82.35a8,8,0,0,1,11.32,0Z" opacity="0.2"></path>
                                        <path d="M240,208H224V136l2.34,2.34A8,8,0,0,0,237.66,127L139.31,28.68a16,16,0,0,0-22.62,0L18.34,127a8,8,0,0,0,11.32,11.31L32,136v72H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM48,120l80-80,80,80v88H160V152a8,8,0,0,0-8-8H104a8,8,0,0,0-8,8v56H48Zm96,88H112V160h32Z"></path>
                                    </svg>
                                    <span class="quiz-option__label">House</span>
                                </span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="property_type" value="Apartment">
                                <span class="quiz-option__inner">
                                    <svg class="quiz-option__icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M224,72V216H144V168H112v48H32V104H80V40h96V72Z" opacity="0.2"></path>
                                        <path d="M240,208h-8V72a8,8,0,0,0-8-8H184V40a8,8,0,0,0-8-8H80a8,8,0,0,0-8,8V96H32a8,8,0,0,0-8,8V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM40,112H80a8,8,0,0,0,8-8V48h80V72a8,8,0,0,0,8,8h40V208H152V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40H40Zm96,96H120V176h16ZM112,72a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,72Zm0,32a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,104Zm56,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,104ZM88,136a8,8,0,0,1-8,8H64a8,8,0,0,1,0-16H80A8,8,0,0,1,88,136Zm0,32a8,8,0,0,1-8,8H64a8,8,0,0,1,0-16H80A8,8,0,0,1,88,168Zm24-32a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H120A8,8,0,0,1,112,136Zm56,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,136Zm0,32a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H176A8,8,0,0,1,168,168Z"></path>
                                    </svg>
                                    <span class="quiz-option__label">Apartment</span>
                                </span>
                            </label>
                            <label class="quiz-option">
                                <input type="radio" name="property_type" value="Business">
                                <span class="quiz-option__inner">
                                    <svg class="quiz-option__icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M176,40V216H136V160H88v56H48V40Z" opacity="0.2"></path>
                                        <path d="M248,208H232V96a8,8,0,0,0,0-16H184V48a8,8,0,0,0,0-16H40a8,8,0,0,0,0,16V208H24a8,8,0,0,0,0,16H248a8,8,0,0,0,0-16ZM216,96V208H184V96ZM56,48H168V208H144V160a8,8,0,0,0-8-8H88a8,8,0,0,0-8,8v48H56Zm72,160H96V168h32ZM72,80a8,8,0,0,1,8-8H96a8,8,0,0,1,0,16H80A8,8,0,0,1,72,80Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H128A8,8,0,0,1,120,80ZM72,120a8,8,0,0,1,8-8H96a8,8,0,0,1,0,16H80A8,8,0,0,1,72,120Zm48,0a8,8,0,0,1,8-8h16a8,8,0,0,1,0,16H128A8,8,0,0,1,120,120Z"></path>
                                    </svg>
                                    <span class="quiz-option__label">Business</span>
                                </span>
                            </label>
                        </div>
                        <div class="quiz-nav">
                            <div></div>
                        </div>
                    </div>

                    <!-- Step 2: Security Cameras -->
                    <div class="quiz-step" data-step="2">
                        <h2 class="quiz-step__heading">Are you interested in security cameras?</h2>
                        <div class="quiz-toggle-group quiz-toggle-group--stacked">
                            <label class="quiz-toggle">
                                <input type="radio" name="cameras" value="Yes" required>
                                <span class="quiz-toggle__btn">Yes</span>
                            </label>
                            <label class="quiz-toggle">
                                <input type="radio" name="cameras" value="No">
                                <span class="quiz-toggle__btn">No</span>
                            </label>
                        </div>
                        <div class="quiz-nav">
                            <button type="button" class="quiz-prev quiz-back">Previous</button>
                        </div>
                    </div>

                    <!-- Step 3: Professional Monitoring -->
                    <div class="quiz-step" data-step="3">
                        <h2 class="quiz-step__heading">Are you interested in professional monitoring?</h2>
                        <div class="quiz-toggle-group quiz-toggle-group--stacked">
                            <label class="quiz-toggle">
                                <input type="radio" name="monitoring" value="Yes" required>
                                <span class="quiz-toggle__btn">Yes</span>
                            </label>
                            <label class="quiz-toggle">
                                <input type="radio" name="monitoring" value="No">
                                <span class="quiz-toggle__btn">No</span>
                            </label>
                        </div>
                        <div class="quiz-nav">
                            <button type="button" class="quiz-prev quiz-back">Previous</button>
                        </div>
                    </div>

                    <!-- Step 4: Zip Code -->
                    <div class="quiz-step" data-step="4">
                        <h2 class="quiz-step__heading">Let's see what offers are in your area</h2>
                        <div class="quiz-field-group">
                            <label class="quiz-field-label" for="zip_code">Enter your zip code</label>
                            <input type="text" id="zip_code" name="zip_code" class="quiz-input" placeholder="e.g. 90210" maxlength="5" pattern="[0-9]{5}" required>
                        </div>
                        <div class="quiz-nav">
                            <button type="button" class="btn quiz-next">Next</button>
                            <button type="button" class="quiz-prev quiz-back">Previous</button>
                        </div>
                    </div>

                    <!-- Step 5: Email -->
                    <div class="quiz-step" data-step="5">
                        <h2 class="quiz-step__heading">Where should we send your quote(s) to?</h2>
                        <div class="quiz-field-group">
                            <label class="quiz-field-label" for="email">Enter your email</label>
                            <input type="email" id="email" name="email" class="quiz-input" placeholder="you@example.com" required>
                        </div>
                        <div class="quiz-nav">
                            <button type="button" class="btn quiz-next">Next</button>
                            <button type="button" class="quiz-prev quiz-back">Previous</button>
                        </div>
                    </div>

                    <!-- Step 6: Contact Info -->
                    <div class="quiz-step" data-step="6">
                        <h2 class="quiz-step__heading">Final Step</h2>
                        <div class="quiz-field-row">
                            <div class="quiz-field-group">
                                <label class="quiz-field-label" for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="quiz-input" required>
                            </div>
                            <div class="quiz-field-group">
                                <label class="quiz-field-label" for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="quiz-input" required>
                            </div>
                        </div>
                        <div class="quiz-field-group">
                            <label class="quiz-field-label" for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone" class="quiz-input" placeholder="(555) 123-4567" required>
                        </div>
                        <p class="quiz-disclaimer">By submitting this form, you agree to be contacted by our partners regarding security system offers. Your information will not be shared with unrelated third parties.</p>
                        <div class="quiz-nav">
                            <button type="submit" class="btn quiz-submit">Get My Quotes</button>
                            <button type="button" class="quiz-prev quiz-back">Previous</button>
                        </div>
                    </div>

                    <!-- Thank You Screen -->
                    <div class="quiz-step quiz-thankyou" data-step="thankyou">
                        <div class="quiz-thankyou__inner">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="var(--primary-600)" viewBox="0 0 256 256">
                                <path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z"></path>
                            </svg>
                            <h2>Thank you!</h2>
                            <p>We're finding the best security offers in your area. Check your email for personalized quotes.</p>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </main>

    <?php get_template_part('partials/footer'); ?>