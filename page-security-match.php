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

    <header class="site-header">
        <div class="container">
            <div class="header-inner">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/secureliving-logo-md-300x54.png" alt="<?php bloginfo('name'); ?>">
                </a>
            </div>
        </div>
    </header>

    <main class="quiz-page">
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
                        <h2 class="quiz-step__heading">What are we protecting today?</h2>
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