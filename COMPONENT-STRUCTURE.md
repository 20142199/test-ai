# Component-Based Structure Documentation

This document outlines the modular component structure created for the Beige Food website, making it easier to manage, maintain, and scale.

## 📁 Directory Structure

```
/workspace/public/
├── components/
│   ├── css/
│   │   ├── base/
│   │   │   ├── variables.css      # CSS custom properties & design tokens
│   │   │   ├── reset.css          # CSS reset & base styles
│   │   │   └── typography.css     # Typography & accessibility styles
│   │   ├── layout/
│   │   │   └── container.css      # Layout containers & grid systems
│   │   ├── components/
│   │   │   ├── header.css         # Header & navigation styles
│   │   │   ├── hero.css           # Hero section styles
│   │   │   ├── featured.css       # Featured dishes section
│   │   │   ├── about.css          # About section styles
│   │   │   ├── menu.css           # Menu preview styles
│   │   │   ├── contact.css        # Contact section & forms
│   │   │   ├── footer.css         # Footer styles
│   │   │   └── buttons.css        # Button components
│   │   ├── utilities/
│   │   │   ├── animations.css     # Keyframes & animations
│   │   │   ├── responsive.css     # Media queries & responsive design
│   │   │   └── print.css          # Print-specific styles
│   │   └── main.css               # Main CSS file (imports all modules)
│   ├── html/
│   │   ├── partials/
│   │   │   └── head.html          # HTML head section
│   │   └── sections/
│   │       ├── header.html        # Header component
│   │       ├── hero.html          # Hero section component
│   │       ├── featured.html      # Featured dishes component
│   │       ├── about.html         # About section component
│   │       ├── menu.html          # Menu preview component
│   │       ├── contact.html       # Contact section component
│   │       └── footer.html        # Footer component
│   └── js/
│       ├── main.js                # Main JavaScript functionality
│       └── component-loader.js    # Dynamic component loading utility
├── components-demo.html           # Static HTML with embedded components
├── components-demo.php            # PHP version with server-side includes
├── components-dynamic.html        # Dynamic client-side component loading
├── figma-design.html             # Original monolithic version
└── figma-design.css              # Original monolithic CSS
```

## 🎯 Component Architecture

### CSS Architecture (ITCSS-inspired)

The CSS is organized following ITCSS (Inverted Triangle CSS) principles:

1. **Base Layer** (`base/`)
   - Variables and design tokens
   - CSS reset and normalization
   - Base typography and accessibility

2. **Layout Layer** (`layout/`)
   - Container systems
   - Grid layouts
   - Structural components

3. **Components Layer** (`components/`)
   - Individual UI components
   - Self-contained styling
   - Component-specific interactions

4. **Utilities Layer** (`utilities/`)
   - Helper classes
   - Responsive utilities
   - Animation definitions

### HTML Components

Each HTML component is:
- **Self-contained**: Includes all necessary markup
- **Reusable**: Can be used in different contexts
- **Semantic**: Uses proper HTML5 semantic elements
- **Accessible**: Includes ARIA attributes where needed

### JavaScript Modules

- **main.js**: Core functionality (navigation, smooth scrolling)
- **component-loader.js**: Dynamic component loading utility

## 🚀 Usage Methods

### Method 1: Static HTML (Recommended for simple sites)

Use `components-demo.html` - all components are embedded directly:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Head content -->
    <link rel="stylesheet" href="components/css/main.css">
</head>
<body>
    <!-- All components embedded directly -->
    <header class="header">...</header>
    <section class="hero">...</section>
    <!-- ... other components ... -->
    <script src="components/js/main.js"></script>
</body>
</html>
```

**Pros:**
- Single file deployment
- No server requirements
- Fast loading
- SEO-friendly

**Cons:**
- Harder to maintain
- Code duplication if multiple pages

### Method 2: Server-Side Includes (Recommended for PHP/server environments)

Use `components-demo.php` with PHP includes:

```php
<!DOCTYPE html>
<html lang="en">
<?php include 'components/html/partials/head.html'; ?>
<body>
    <?php include 'components/html/sections/header.html'; ?>
    <?php include 'components/html/sections/hero.html'; ?>
    <!-- ... other includes ... -->
    <script src="components/js/main.js"></script>
</body>
</html>
```

**Pros:**
- True component reusability
- Easy maintenance
- Single source of truth
- Server-side rendering (SEO-friendly)

**Cons:**
- Requires server with PHP
- Additional server requests

### Method 3: Dynamic Client-Side Loading

Use `components-dynamic.html` with JavaScript loading:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="components/css/main.css">
</head>
<body>
    <div id="header-component"></div>
    <div id="hero-component"></div>
    <!-- ... other placeholders ... -->
    <script src="components/js/component-loader.js"></script>
</body>
</html>
```

**Pros:**
- Dynamic loading
- Component caching
- No server requirements
- Flexible component management

**Cons:**
- JavaScript dependency
- SEO challenges
- Loading delays
- More complex debugging

## 🎨 Customization Guide

### Adding New Components

1. **Create CSS file:**
   ```bash
   touch /workspace/public/components/css/components/new-component.css
   ```

2. **Add styles:**
   ```css
   /* components/css/components/new-component.css */
   .new-component {
       /* Component styles */
   }
   ```

3. **Import in main.css:**
   ```css
   @import url('./components/new-component.css');
   ```

4. **Create HTML component:**
   ```bash
   touch /workspace/public/components/html/sections/new-component.html
   ```

5. **Add HTML structure:**
   ```html
   <!-- components/html/sections/new-component.html -->
   <section class="new-component">
       <!-- Component markup -->
   </section>
   ```

### Modifying Existing Components

1. **CSS Changes**: Edit the specific component CSS file
2. **HTML Changes**: Edit the component HTML file
3. **Global Changes**: Modify variables in `base/variables.css`

### Design Token System

All design tokens are centralized in `base/variables.css`:

```css
:root {
    /* Colors */
    --primary-color: #F5F1EB;
    --accent-color: #D4B896;
    
    /* Typography */
    --font-primary: 'EB Garamond', serif;
    
    /* Spacing */
    --section-padding: 80px 0;
    
    /* Transitions */
    --transition: all 0.3s ease;
}
```

## 🔧 Development Workflow

### Local Development

1. **Edit components** in their respective files
2. **Test changes** using any of the three methods
3. **Validate** CSS and HTML
4. **Test responsiveness** across devices

### Build Process (Optional)

For production, consider:

1. **CSS Minification**: Combine and minify CSS files
2. **HTML Optimization**: Inline critical CSS
3. **JavaScript Bundling**: Combine JS files
4. **Asset Optimization**: Compress images and fonts

### Version Control

Recommended Git structure:
```
components/
├── css/           # Track all CSS modules
├── html/          # Track all HTML components  
├── js/            # Track JavaScript modules
└── README.md      # Component documentation
```

## 📱 Responsive Design

Responsive breakpoints are defined in `utilities/responsive.css`:

- **Desktop**: > 768px
- **Tablet**: 768px and below
- **Mobile**: 480px and below

Each component includes responsive styles within its own CSS file.

## ♿ Accessibility Features

- Semantic HTML structure
- ARIA attributes where needed
- Focus management
- Color contrast compliance
- Screen reader friendly
- Keyboard navigation support

## 🚀 Performance Considerations

### CSS Performance
- Modular loading reduces unused CSS
- CSS custom properties for theming
- Efficient selectors and minimal specificity

### HTML Performance
- Semantic markup reduces DOM complexity
- Component reusability reduces code duplication
- Clean separation of concerns

### JavaScript Performance
- Minimal JavaScript footprint
- Event delegation where appropriate
- Component caching in dynamic loader

## 🔍 Browser Support

- **Modern Browsers**: Chrome 60+, Firefox 55+, Safari 12+, Edge 79+
- **CSS Features**: CSS Grid, Flexbox, Custom Properties
- **JavaScript Features**: ES6+, Fetch API, DOM manipulation

## 📋 Maintenance Checklist

### Regular Maintenance
- [ ] Update design tokens in variables.css
- [ ] Validate HTML components
- [ ] Test responsive breakpoints
- [ ] Check accessibility compliance
- [ ] Update component documentation

### Before Deployment
- [ ] Test all three loading methods
- [ ] Validate CSS and HTML
- [ ] Test cross-browser compatibility
- [ ] Optimize assets for production
- [ ] Update version numbers

## 🆘 Troubleshooting

### Common Issues

1. **Components not loading**
   - Check file paths in includes/imports
   - Verify server configuration for PHP includes
   - Check browser console for JavaScript errors

2. **Styles not applying**
   - Verify CSS import order in main.css
   - Check for CSS specificity conflicts
   - Validate CSS syntax

3. **JavaScript not working**
   - Ensure components are loaded before JS execution
   - Check for DOM ready state
   - Verify event listeners are properly attached

### Debug Tools

- Browser Developer Tools
- CSS validation: W3C CSS Validator
- HTML validation: W3C Markup Validator
- Accessibility: axe DevTools

---

**Created**: October 2024  
**Version**: 1.0  
**Maintainer**: Development Team