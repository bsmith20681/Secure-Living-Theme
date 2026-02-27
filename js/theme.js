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
   Security Match Quiz
   ======================================== */
jQuery(function($) {
    var $quiz = $('#security-quiz');
    if (!$quiz.length) return;

    var ZAPIER_WEBHOOK_URL = 'https://hooks.zapier.com/hooks/catch/XXXXXXX/XXXXXXX/';

    var currentStep = 1;
    var totalSteps = 6;

    function showStep(step) {
        var $current = $quiz.find('.quiz-step--active');
        var $next = $quiz.find('.quiz-step[data-step="' + step + '"]');
        currentStep = step;

        // Update progress bar immediately
        $('.quiz-progress__fill').css('width', (step / totalSteps * 100) + '%');
        $('#quiz-step-current').text(step);
        $('.quiz-progress__label').toggle(step !== 'thankyou');
        $('.quiz-progress').toggle(step !== 'thankyou');

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

    // Form submit
    $quiz.on('submit', function(e) {
        e.preventDefault();
        if (!validateStep(6)) return;

        var $btn = $quiz.find('.quiz-submit');
        $btn.text('Submitting...').prop('disabled', true);

        var data = {
            property_type: $quiz.find('input[name="property_type"]:checked').val(),
            cameras: $quiz.find('input[name="cameras"]:checked').val(),
            monitoring: $quiz.find('input[name="monitoring"]:checked').val(),
            zip_code: $quiz.find('#zip_code').val().trim(),
            email: $quiz.find('#email').val().trim(),
            first_name: $quiz.find('#first_name').val().trim(),
            last_name: $quiz.find('#last_name').val().trim(),
            phone: $quiz.find('#phone').val().trim()
        };

        console.log('Quiz submission data:', data);

        $.ajax({
            url: ZAPIER_WEBHOOK_URL,
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function() {
                showStep('thankyou');
            },
            error: function() {
                showStep('thankyou');
            }
        });
    });

    // Clear error state on input interaction
    $quiz.on('input', '.quiz-input', function() {
        $(this).removeClass('quiz-input--error');
        $(this).closest('.quiz-field-group').find('.quiz-error').remove();
    });
});
