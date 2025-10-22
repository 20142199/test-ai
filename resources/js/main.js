// Main JavaScript file for Bekisoft JSC

// Language selector functionality
document.addEventListener('DOMContentLoaded', function() {
    const languageSelector = document.querySelector('.language-selector');
    
    if (languageSelector) {
        languageSelector.addEventListener('click', function() {
            // Add language switching logic here
            console.log('Language selector clicked');
        });
    }

    // Smooth scroll for CTA button
    const ctaButtons = document.querySelectorAll('.cta-button');
    
    ctaButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Add CTA button logic here
            console.log('CTA button clicked');
        });
    });

    // Add smooth animations on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('fade-in');
            }
        });
    }, observerOptions);

    // Observe elements for scroll animations
    const animatedElements = document.querySelectorAll('.content-box, .device-mockup');
    animatedElements.forEach(el => observer.observe(el));
});

// Export functions for use in other modules
export { };
