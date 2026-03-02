<?php
/*
Template Name: Security Match Quiz
*/
get_template_part('partials/quiz-header');
?>

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

            <form id="security-quiz" action="<?php echo get_template_directory_uri(); ?>/form-handler.php" method="POST">
                <input type="hidden" name="fbclid" id="fbclid" value="">

                <!-- Step 1: Property Type -->
                <div class="quiz-step quiz-step--active" data-step="1">
                    <h1 class="quiz-step__heading">What are you protecting?</h1>
                    <p class="quiz-step__subheading">Find the right security company in under 60 seconds</p>
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
                        <div class="quiz-zip-wrap">
                            <input type="text" id="zip_code" name="zip_code" class="quiz-input" placeholder="e.g. 90210" maxlength="5" pattern="[0-9]{5}" inputmode="numeric" required>
                            <div class="quiz-zip-meta">
                                <span class="quiz-zip-location"></span>
                                <svg class="quiz-zip-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z"></path>
                                </svg>
                            </div>
                        </div>
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
                    <p class="quiz-step__subheading">Ready for your results?</p>
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
                        <input type="tel" id="phone" name="phone" pattern="((\+\d{1,3}(-|.| )?\(?\d\)?(-| |.)?\d{1,5})|(\(?\d{2,6}\)?))(-|.| )?(\d{3,4})(-|.| )?(\d{4})(( x| ext)\d{1,5}){0,1}$"
                            class="quiz-input" placeholder="(555) 123-4567" required>
                    </div>
                    <p class="quiz-disclaimer">By submitting this form, I authorize SecureLiving.com to share my information with its partners, including Vivint and Secure24, an Authorized ADT Dealer, who may contact me via phone calls, text messages, or artificial or prerecorded messages using automated dialing technology at the phone number I provided. I understand that SecureLiving.com is not a home security company and that I am not required to make a purchase. Consent is not a condition of purchase. Message & data rates may apply. Text STOP to opt out. View our <a class="link-muted" href="/privacy-policy/">Privacy Policy</a>.</p>
                    <div class="quiz-nav">
                        <button type="submit" class="btn quiz-submit">Get My Quotes</button>
                        <button type="button" class="quiz-prev quiz-back">Previous</button>
                    </div>
                </div>


            </form>
        </div>

    </div>

    <section class="brands-section">
        <div class="container">
            <h2 style="text-align: center;">Featuring Brands Like:</h2>
            <div class="brands-logos">
                <img src="https://secureliving.com/wp-content/uploads/2026/02/vivint-logo.png" alt="Vivint logo">
                <img src="https://secureliving.com/wp-content/uploads/2026/02/adt-logo.png" alt="ADT logo">
                <img src="https://secureliving.com/wp-content/uploads/2026/02/cove-logo.png" alt="Cove logo">
                <img src="https://secureliving.com/wp-content/uploads/2026/02/brinks-logo.png" alt="Brinks logo">
                <img src="https://secureliving.com/wp-content/uploads/2026/02/simplisafe-logo.png" alt="SimpliSafe logo">
            </div>
        </div>
    </section>

    <section class="how-it-works">
        <div class="container">
            <h2 style="text-align: center;">How It Works</h2>
            <div class="row">
                <div class="col-md-6 how-it-works-steps">
                    <div class="how-it-works-step">
                        <span class="step-number">1</span>
                        <div class="step-content">
                            <h3>Answer a Few Quick Questions</h3>
                            <p>It takes less than 60 seconds</p>
                        </div>
                    </div>
                    <div class="how-it-works-step">
                        <span class="step-number">2</span>
                        <div class="step-content">
                            <h3>We'll Give you Personalized Recommendations</h3>
                            <p>Based on your answers, we'll give you tailored recommendations</p>
                        </div>
                    </div>
                    <div class="how-it-works-step">
                        <span class="step-number">3</span>
                        <div class="step-content">
                            <h3>Find the Right Match</h3>
                            <p>Find the perfect system for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 how-it-works-mockup">
                    <img src="https://secureliving.com/wp-content/uploads/2026/02/mockup.png" alt="Security Match quiz mockup">
                </div>
            </div>
        </div>
    </section>

    <section class="quiz-qa my-12">
        <div class="container">
            <h2>Why do I need a home security system?</h2>
            <p>Investing in a home security system is an affordable and effective strategy to enhance the safety and security of your residence. Offering substantial protection, a system can cater to the needs of both homeowners and renters, delivering peace of mind by ensuring the well-being of your home and loved ones. Far from being merely a deterrent, a dependable home security system contributes to an overall sense of security and comfort, enriching your daily living experience.</p>

            <h2>What are the benefits of home security systems?</h2>
            <p>Investing in the best home security systems provides much more than deterring potential intruders; it plays a pivotal role in ensuring the overall safety and well-being of your family. These systems deliver comprehensive protection, shielding against a variety of threats such as burglary, fire, and environmental risks like floods. The invaluable peace of mind you gain with a state-of-the-art security system is particularly reassuring when you are away, knowing your home is well-protected.</p>

            <h2>What features should I look for in a home security system?</h2>
            <p>There are home security systems for every budget, and how much you pay is linked to the set of features that come with your system. Here are some of the most common home security features: remote access, 24/7 professional monitoring, wireless connection, cameras, fire and flood monitoring, and smart doors and locks.</p>

            <h2>Enhanced safety with advanced technology</h2>
            <p>The best home security systems seamlessly integrate advanced technologies to provide superior protection. With AI-driven analytics, they offer smarter surveillance capabilities, and the use of sensitive smart sensors leads to more accurate detections. The addition of smart doorbells enhances perimeter security, alerting you to activity at your doorstep. Complementing these features, user-friendly apps deliver instant alerts to your mobile device, keeping you informed in real-time. These innovations not only improve the precision and responsiveness of the best home security systems but also significantly reduce false alarms and ensure swift action during emergencies.</p>

            <h2>Choosing the right home security system</h2>
            <p>When it comes to picking the right security system for your home, it's essential to assess your specific needs. Consider factors such as your living situation, the size of your property, and the level of security you require. Tailoring the system to your unique requirements ensures optimal protection.</p>

            <h2>Key features to consider</h2>
            <p>When navigating the choices of the best home security systems, it's important to consider key features that cater to your needs. Evaluate the ease of installation, which varies from comprehensive, professionally installed systems to easy do-it-yourself (DIY) options. Assess scalability, ensuring the system can adapt to your evolving security needs. Compatibility with other smart home devices is also essential for a cohesive and efficient home security setup. Prioritize systems with robust encryption and privacy controls to protect your personal data. Additionally, features like environmental monitoring and emergency response services can significantly enhance the overall efficacy and responsiveness of your security system.</p>

            <h2>Smart integration for a connected home</h2>
            <p>The best home security systems often support smart home integration, allowing you to connect and control various devices seamlessly. This integration can include everything from smart thermostats to lighting and voice-activated controls, offering a more connected and secure home environment.</p>

            <h2>Find the security system that's right for you</h2>
            <p>Discovering the right home security system for your specific needs is key to ensuring your peace of mind and safety. Our interactive quiz is designed to guide you through a personalized selection process, taking into account your unique lifestyle and security preferences. By answering a few targeted questions, you'll be directed to a security solution that meets your requirements and can enhance your living experience with a safer home.</p>
        </div>
    </section>

</main>

<!-- TrustedForm -->
<script type="text/javascript">
    (function() {
        var tf = document.createElement('script');
        tf.type = 'text/javascript';
        tf.async = true;
        tf.src = ("https:" == document.location.protocol ? 'https' : 'http') +
            '://api.trustedform.com/trustedform.js?field=xxTrustedFormCertUrl&use_tagged_consent=true&l=' +
            new Date().getTime() + Math.random();
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(tf, s);
    })();
</script>
<noscript>
    <img src='https://api.trustedform.com/ns.gif' />
</noscript>
<!-- End TrustedForm -->

<?php get_template_part('partials/footer'); ?>