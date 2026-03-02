(function() {
    const toggle = document.querySelector('.mobile-menu-toggle');
    const nav = document.querySelector('.primary-nav');
    const overlay = document.querySelector('.mobile-menu-overlay');

    if (toggle && nav && overlay) {
        toggle.addEventListener('click', function() {
            const isOpen = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', !isOpen);
            nav.classList.toggle('is-open');
            overlay.classList.toggle('is-visible');
            document.body.style.overflow = isOpen ? '' : 'hidden';
        });

        overlay.addEventListener('click', function() {
            toggle.setAttribute('aria-expanded', 'false');
            nav.classList.remove('is-open');
            overlay.classList.remove('is-visible');
            document.body.style.overflow = '';
        });
    }
})();

/* ========================================
   Call a Specialist Dropdown
   ======================================== */
(function() {
    var wrapper = document.querySelector('.call-specialist');
    if (!wrapper) return;

    var btn = wrapper.querySelector('.call-specialist__btn');
    var closeBtn = wrapper.querySelector('.call-specialist__close');
    var overlay = document.querySelector('.call-specialist__overlay');

    function open() {
        wrapper.classList.add('call-specialist--open');
        btn.setAttribute('aria-expanded', 'true');
        if (overlay) overlay.classList.add('is-visible');
    }

    function close() {
        wrapper.classList.remove('call-specialist--open');
        btn.setAttribute('aria-expanded', 'false');
        if (overlay) overlay.classList.remove('is-visible');
    }

    btn.addEventListener('click', function() {
        var isOpen = wrapper.classList.contains('call-specialist--open');
        isOpen ? close() : open();
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', close);
    }

    if (overlay) {
        overlay.addEventListener('click', close);
    }
})();

/* ========================================
   Affiliate Disclaimer Modal
   ======================================== */
(function() {
    var link = document.querySelector('.affiliate-banner__link');
    var modal = document.querySelector('.affiliate-modal');
    if (!link || !modal) return;

    var closeBtn = modal.querySelector('.affiliate-modal__close');
    var overlay = modal.querySelector('.affiliate-modal__overlay');

    function openModal(e) {
        e.preventDefault();
        modal.classList.add('is-open');
        modal.setAttribute('aria-hidden', 'false');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('is-open');
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
    }

    link.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);
    overlay.addEventListener('click', closeModal);
})();

/* ========================================
   Security Match Quiz
   ======================================== */
jQuery(function($) {
    var $quiz = $('#security-quiz');
    if (!$quiz.length) return;

    // Capture fbclid from URL if present
    var urlParams = new URLSearchParams(window.location.search);
    var fbclid = urlParams.get('fbclid');
    if (fbclid) {
        $('#fbclid').val(fbclid);
    }

    var currentStep = 1;
    var totalSteps = 6;

    var $belowSections = $('.brands-section, .how-it-works, .quiz-qa');

    function showStep(step) {
        var $current = $quiz.find('.quiz-step--active');
        var $next = $quiz.find('.quiz-step[data-step="' + step + '"]');
        currentStep = step;

        // Update progress bar immediately
        $('.quiz-progress__fill').css('width', (step / totalSteps * 100) + '%');
        $('#quiz-step-current').text(step);
        var showProgress = step !== 'thankyou' && step !== 1;
        $('.quiz-progress').toggleClass('quiz-progress--visible', showProgress);
        $('.quiz-progress__label').toggleClass('quiz-progress__label--visible', showProgress);

        // Hide/show sections below the quiz
        if (step >= 2) {
            $belowSections.css('opacity', 0);
            setTimeout(function() {
                $belowSections.css('display', 'none');
            }, 300);
        } else {
            $belowSections.css('display', '');
            $belowSections[0].offsetHeight; // force reflow
            $belowSections.css('opacity', 1);
        }

        // Fade out current step, then fade in next
        if ($current.length && $current.data('step') !== step) {
            $current.css('opacity', 0);
            setTimeout(function() {
                $current.removeClass('quiz-step--active').css('opacity', '');
                $next.addClass('quiz-step--active');
                // Force reflow so the transition triggers
                $next[0].offsetHeight;
                $next.css('opacity', 1);
            }, 300);
        } else {
            $next.addClass('quiz-step--active');
            $next[0].offsetHeight;
            $next.css('opacity', 1);
        }
    }

    function validateStep(step) {
        $quiz.find('.quiz-error').remove();
        $quiz.find('.quiz-input--error').removeClass('quiz-input--error');

        var $step = $quiz.find('.quiz-step[data-step="' + step + '"]');

        if (step === 1) {
            if (!$step.find('input[name="property_type"]:checked').length) {
                $step.find('.quiz-options').after('<p class="quiz-error">Please select a property type.</p>');
                return false;
            }
        }

        if (step === 2) {
            if (!$step.find('input[name="cameras"]:checked').length) {
                $step.find('.quiz-toggle-group').after('<p class="quiz-error">Please select an option.</p>');
                return false;
            }
        }

        if (step === 3) {
            if (!$step.find('input[name="monitoring"]:checked').length) {
                $step.find('.quiz-toggle-group').after('<p class="quiz-error">Please select an option.</p>');
                return false;
            }
        }

        if (step === 4) {
            var zip = $step.find('#zip_code').val().trim();
            if (!zip || !/^[0-9]{5}$/.test(zip)) {
                $step.find('#zip_code').addClass('quiz-input--error');
                $step.find('.quiz-field-group').append('<p class="quiz-error">Please enter a valid 5-digit zip code.</p>');
                return false;
            }
        }

        if (step === 5) {
            var email = $step.find('#email').val().trim();
            if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                $step.find('#email').addClass('quiz-input--error');
                $step.find('.quiz-field-group').append('<p class="quiz-error">Please enter a valid email address.</p>');
                return false;
            }
        }

        if (step === 6) {
            var valid = true;
            var fields = [
                { id: '#first_name', msg: 'Please enter your first name.' },
                { id: '#last_name', msg: 'Please enter your last name.' },
                { id: '#phone', msg: 'Please enter your phone number.' }
            ];
            fields.forEach(function(f) {
                var val = $step.find(f.id).val().trim();
                if (!val) {
                    $step.find(f.id).addClass('quiz-input--error');
                    $step.find(f.id).closest('.quiz-field-group').append('<p class="quiz-error">' + f.msg + '</p>');
                    valid = false;
                }
            });
            return valid;
        }

        return true;
    }

    // Auto-advance on radio selection for steps 1, 2, 3
    $quiz.on('click', 'input[type="radio"]', function() {
        var step = parseInt($(this).closest('.quiz-step').data('step'));
        if (step >= 1 && step <= 3) {
            setTimeout(function() {
                showStep(step + 1);
            }, 300);
        }
    });

    // Next button (for text input steps)
    $quiz.on('click', '.quiz-next', function() {
        if (validateStep(currentStep)) {
            showStep(currentStep + 1);
        }
    });

    // Back button
    $quiz.on('click', '.quiz-back', function() {
        showStep(currentStep - 1);
    });

    // Form submit — validate then allow native POST to form-handler.php
    $quiz.on('submit', function(e) {
        if (!validateStep(6)) {
            e.preventDefault();
            return;
        }

        var $btn = $quiz.find('.quiz-submit');
        $btn.text('Submitting...').prop('disabled', true);
    });

    // Clear error state on input interaction
    $quiz.on('input', '.quiz-input', function() {
        $(this).removeClass('quiz-input--error');
        $(this).closest('.quiz-field-group').find('.quiz-error').remove();
    });

    // Zip code lookup
    var zipData = null;
    var zipSpinnerTimeout = null;

    $quiz.on('input', '#zip_code', function() {
        var digits = $(this).val().replace(/\D/g, '');
        $(this).val(digits);
        var $location = $quiz.find('.quiz-zip-location');
        var $meta = $quiz.find('.quiz-zip-meta');

        clearTimeout(zipSpinnerTimeout);
        $meta.removeClass('quiz-zip-meta--loading');

        if (digits.length < 5) {
            $location.text('');
            return;
        }

        // Show spinner
        $location.text('');
        $meta.addClass('quiz-zip-meta--loading');

        function doLookup() {
            var match = null;
            for (var i = 0; i < zipData.length; i++) {
                if (zipData[i].zip === digits) {
                    match = zipData[i];
                    break;
                }
            }

            zipSpinnerTimeout = setTimeout(function() {
                $meta.removeClass('quiz-zip-meta--loading');
                $location.text(match ? match.city + ', ' + match.state_id : '');
            }, 500);
        }

        if (zipData) {
            doLookup();
        } else {
            $.getJSON(themeData.themeUrl + '/us-zip-codes.json', function(data) {
                zipData = data;
                doLookup();
            });
        }
    });

    // Format phone number as (XXX) XXX-XXXX
    $quiz.on('input', '#phone', function() {
        var digits = $(this).val().replace(/\D/g, '');
        var formatted = '';

        if (digits.length < 4) {
            formatted = digits;
        } else if (digits.length < 7) {
            formatted = '(' + digits.slice(0, 3) + ') ' + digits.slice(3);
        } else {
            formatted = '(' + digits.slice(0, 3) + ') ' + digits.slice(3, 6) + '-' + digits.slice(6, 10);
        }

        $(this).val(formatted);
    });
});
