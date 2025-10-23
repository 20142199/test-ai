/**
 * VietGates Demo Page JavaScript
 */

// Feature Toggle for Block 4
function toggleFeature(header) {
    const item = header.parentElement;
    const allItems = document.querySelectorAll('.feature-item');
    
    // Close all other items
    allItems.forEach(i => {
        if (i !== item) {
            i.classList.remove('expanded');
        }
    });
    
    // Toggle current item
    item.classList.toggle('expanded');
}

// Pagination dots interaction (for Block 3)
document.addEventListener('DOMContentLoaded', function() {
    const dots = document.querySelectorAll('.pagination-dots .dot');
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', function() {
            // Remove active from all dots
            dots.forEach(d => d.classList.remove('active'));
            // Add active to clicked dot
            this.classList.add('active');
            
            // Here you could add carousel logic if needed
            console.log('Switched to slide:', index + 1);
        });
    });
});

// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
