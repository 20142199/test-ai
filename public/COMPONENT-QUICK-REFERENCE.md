# Component Quick Reference Guide

## 🚀 Quick Start

### Option 1: Use Static HTML (Easiest)
```bash
# Open in browser
open components-demo.html
```

### Option 2: Use PHP Includes (Server Required)
```bash
# Start local PHP server
php -S localhost:8000
# Open: http://localhost:8000/components-demo.php
```

### Option 3: Use Dynamic Loading (JavaScript)
```bash
# Serve files (any web server)
python -m http.server 8000
# Open: http://localhost:8000/components-dynamic.html
```

## 📁 File Structure Quick Reference

```
components/
├── css/main.css                 # 👈 Main CSS file (imports all)
├── html/sections/               # 👈 HTML components
│   ├── header.html
│   ├── hero.html
│   ├── featured.html
│   ├── about.html
│   ├── menu.html
│   ├── contact.html
│   └── footer.html
└── js/main.js                   # 👈 Main JavaScript
```

## 🎨 Quick Customization

### Change Colors
Edit `components/css/base/variables.css`:
```css
:root {
    --primary-color: #YOUR_COLOR;
    --accent-color: #YOUR_ACCENT;
}
```

### Edit Content
Edit individual HTML files in `components/html/sections/`

### Modify Styles
Edit specific CSS files in `components/css/components/`

## 🔧 Component Files Map

| Component | HTML File | CSS File |
|-----------|-----------|----------|
| Header/Nav | `sections/header.html` | `components/header.css` |
| Hero | `sections/hero.html` | `components/hero.css` |
| Featured | `sections/featured.html` | `components/featured.css` |
| About | `sections/about.html` | `components/about.css` |
| Menu | `sections/menu.html` | `components/menu.css` |
| Contact | `sections/contact.html` | `components/contact.css` |
| Footer | `sections/footer.html` | `components/footer.css` |
| Buttons | N/A | `components/buttons.css` |

## 🎯 Common Tasks

### Add New Menu Item
Edit `components/html/sections/menu.html`:
```html
<div class="menu-item">
    <span class="item-name">New Dish</span>
    <span class="item-price">$XX</span>
</div>
```

### Change Restaurant Info
Edit `components/html/sections/contact.html` and `components/html/sections/footer.html`

### Update Featured Dishes
Edit `components/html/sections/featured.html`

### Modify Navigation
Edit `components/html/sections/header.html`

## 📱 Responsive Breakpoints

- **Mobile**: 480px and below
- **Tablet**: 768px and below  
- **Desktop**: Above 768px

Responsive styles in: `components/css/utilities/responsive.css`

## 🎨 Design Tokens

All in `components/css/base/variables.css`:

```css
/* Colors */
--primary-color: #F5F1EB;      /* Beige */
--secondary-color: #E8DDD4;    /* Light beige */
--accent-color: #D4B896;       /* Golden beige */

/* Fonts */
--font-primary: 'EB Garamond', serif;
--font-secondary: 'Zen Kaku Gothic New', sans-serif;
--font-accent: 'Zen Old Mincho', serif;

/* Spacing */
--section-padding: 80px 0;
--container-max-width: 1280px;
```

## 🔄 Loading Methods Comparison

| Method | File | Pros | Cons |
|--------|------|------|------|
| Static | `components-demo.html` | Fast, Simple, SEO-friendly | Hard to maintain |
| PHP | `components-demo.php` | Reusable, Maintainable | Needs server |
| Dynamic | `components-dynamic.html` | Flexible, Cacheable | JS dependency |

## 🛠️ Development Commands

```bash
# Create new component CSS
touch components/css/components/new-component.css

# Create new component HTML  
touch components/html/sections/new-component.html

# Add to main.css
echo "@import url('./components/new-component.css');" >> components/css/main.css
```

## 🎯 Best Practices

1. **Always edit components**, not main files
2. **Use design tokens** from variables.css
3. **Test all three loading methods**
4. **Keep components self-contained**
5. **Follow naming conventions**

## 🚨 Troubleshooting

### Styles not working?
- Check `components/css/main.css` imports
- Verify CSS file paths
- Check browser console for errors

### Components not loading?
- Verify file paths in PHP includes
- Check server configuration
- Ensure files exist in correct locations

### JavaScript not working?
- Check browser console for errors
- Verify DOM is loaded before JS runs
- Check event listener attachments

---

**Need help?** Check the full documentation in `COMPONENT-STRUCTURE.md`