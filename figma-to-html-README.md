# Figma to HTML Conversion - Beige Food Website

This project contains the HTML and CSS files converted from the Figma design at https://beige-food-67809974.figma.site/

## Files Created

- `public/figma-design.html` - Main HTML file with complete website structure
- `public/figma-design.css` - Comprehensive CSS styling with responsive design
- `figma-to-html-README.md` - This documentation file

## Design Features

### Typography
The design uses three carefully selected Google Fonts that match the original Figma design:
- **EB Garamond** - Primary serif font for headings and elegant text
- **Zen Kaku Gothic New** - Secondary sans-serif font for body text
- **Zen Old Mincho** - Accent serif font for special elements and branding

### Color Palette
- **Primary**: #F5F1EB (Warm beige)
- **Secondary**: #E8DDD4 (Light beige)
- **Accent**: #D4B896 (Golden beige)
- **Text Dark**: #2C2C2C
- **Text Medium**: #666666
- **Text Light**: #999999

### Layout Sections
1. **Header** - Fixed navigation with smooth scrolling
2. **Hero Section** - Large title with call-to-action
3. **Featured Dishes** - Grid layout showcasing menu highlights
4. **About Section** - Restaurant story and information
5. **Menu Preview** - Sample menu items with pricing
6. **Contact Section** - Location info and reservation form
7. **Footer** - Links and social media

### Responsive Design
- Mobile-first approach
- Breakpoints at 768px and 480px
- Collapsible mobile navigation
- Flexible grid layouts
- Optimized typography scaling

### Interactive Features
- Smooth scrolling navigation
- Mobile hamburger menu
- Hover effects on buttons and cards
- Form validation ready
- Accessibility-focused design

## How to Use

1. **Local Development**: Open `public/figma-design.html` in any modern web browser
2. **Web Server**: Place files in your web server's public directory
3. **Laravel Integration**: Files are already in the Laravel public folder

## Browser Compatibility

- Chrome 60+
- Firefox 55+
- Safari 12+
- Edge 79+

## Customization

### Colors
Update the CSS custom properties in `:root` to change the color scheme:

```css
:root {
    --primary-color: #F5F1EB;
    --secondary-color: #E8DDD4;
    --accent-color: #D4B896;
    /* ... */
}
```

### Typography
Change font families by updating the CSS variables:

```css
:root {
    --font-primary: 'EB Garamond', serif;
    --font-secondary: 'Zen Kaku Gothic New', sans-serif;
    --font-accent: 'Zen Old Mincho', serif;
}
```

### Content
Edit the HTML file to update:
- Restaurant name and branding
- Menu items and pricing
- Contact information
- About section content

## Performance Optimizations

- Google Fonts loaded with `preconnect` for faster loading
- CSS uses efficient selectors and minimal specificity
- Responsive images with placeholder styling
- Smooth animations with CSS transitions
- Print-friendly styles included

## Accessibility Features

- Semantic HTML structure
- Proper heading hierarchy
- Focus indicators for keyboard navigation
- Alt text ready for images
- Color contrast compliant
- Screen reader friendly

## Future Enhancements

Consider adding:
- Real images for food items and restaurant
- JavaScript for form submission
- Image lazy loading
- Advanced animations
- CMS integration
- Online ordering system

---

**Created**: October 2024  
**Based on**: Figma design from beige-food-67809974.figma.site  
**Framework**: Vanilla HTML/CSS with modern features