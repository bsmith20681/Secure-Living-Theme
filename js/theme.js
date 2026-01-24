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
