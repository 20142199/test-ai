// Component Loader - Dynamically loads HTML components
class ComponentLoader {
    constructor() {
        this.componentCache = new Map();
    }

    // Load a component from a file
    async loadComponent(componentPath) {
        if (this.componentCache.has(componentPath)) {
            return this.componentCache.get(componentPath);
        }

        try {
            const response = await fetch(componentPath);
            if (!response.ok) {
                throw new Error(`Failed to load component: ${componentPath}`);
            }
            const html = await response.text();
            this.componentCache.set(componentPath, html);
            return html;
        } catch (error) {
            console.error('Error loading component:', error);
            return '';
        }
    }

    // Load and inject a component into a target element
    async injectComponent(targetSelector, componentPath) {
        const target = document.querySelector(targetSelector);
        if (!target) {
            console.error(`Target element not found: ${targetSelector}`);
            return;
        }

        const html = await this.loadComponent(componentPath);
        target.innerHTML = html;
    }

    // Load multiple components
    async loadComponents(components) {
        const promises = components.map(({ selector, path }) => 
            this.injectComponent(selector, path)
        );
        
        await Promise.all(promises);
    }
}

// Initialize component loader when DOM is ready
document.addEventListener('DOMContentLoaded', async function() {
    const loader = new ComponentLoader();
    
    // Define components to load
    const components = [
        { selector: '#header-component', path: 'components/html/sections/header.html' },
        { selector: '#hero-component', path: 'components/html/sections/hero.html' },
        { selector: '#featured-component', path: 'components/html/sections/featured.html' },
        { selector: '#about-component', path: 'components/html/sections/about.html' },
        { selector: '#menu-component', path: 'components/html/sections/menu.html' },
        { selector: '#contact-component', path: 'components/html/sections/contact.html' },
        { selector: '#footer-component', path: 'components/html/sections/footer.html' }
    ];

    // Load all components
    await loader.loadComponents(components);
    
    // Initialize main functionality after components are loaded
    if (typeof window.initializeMainJS === 'function') {
        window.initializeMainJS();
    }
});