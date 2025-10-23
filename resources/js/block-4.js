// Block 4 - Feature Accordion
document.addEventListener('DOMContentLoaded', function() {
    const featureItems = document.querySelectorAll('.feature-item-header');
    
    featureItems.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const wasExpanded = item.classList.contains('expanded');
            
            // Close all items
            document.querySelectorAll('.feature-item').forEach(el => {
                el.classList.remove('expanded');
            });
            
            // Toggle current item
            if (!wasExpanded) {
                item.classList.add('expanded');
            }
        });
    });
});
