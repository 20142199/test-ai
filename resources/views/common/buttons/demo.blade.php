<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primary Button Demo - Figma Design</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            padding: 40px;
            background-color: #f8f9fa;
            line-height: 1.6;
        }
        
        .demo-section {
            background: white;
            padding: 30px;
            margin-bottom: 30px;
            border-radius: 12px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .demo-title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #333;
        }
        
        .demo-subtitle {
            font-size: 18px;
            font-weight: 600;
            margin: 25px 0 15px 0;
            color: #555;
        }
        
        .demo-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }
        
        .demo-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        
        .demo-label {
            font-size: 12px;
            color: #666;
            text-align: center;
        }
        
        .code-example {
            background: #f1f3f4;
            padding: 15px;
            border-radius: 8px;
            font-family: 'Monaco', 'Menlo', monospace;
            font-size: 12px;
            margin: 15px 0;
            overflow-x: auto;
        }
        
        .figma-specs {
            background: linear-gradient(135deg, #6880F6 0%, #5470E6 100%);
            color: white;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
        }
        
        .figma-specs h2 {
            margin-top: 0;
        }
        
        .specs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .spec-item {
            background: rgba(255,255,255,0.1);
            padding: 10px;
            border-radius: 6px;
        }
    </style>
</head>
<body>
    <div class="figma-specs">
        <h2>🎨 Figma Design Specifications</h2>
        <p>Primary Button component created based on Figma design node-id: 11153:3658</p>
        <div class="specs-grid">
            <div class="spec-item">
                <strong>Component:</strong> Button-brand/Solid/Default/Small/Off
            </div>
            <div class="spec-item">
                <strong>Size:</strong> 61×32px (Small)
            </div>
            <div class="spec-item">
                <strong>Background:</strong> RGB(104, 128, 246)
            </div>
            <div class="spec-item">
                <strong>Border Radius:</strong> 8px
            </div>
            <div class="spec-item">
                <strong>Layout:</strong> Horizontal, 8px spacing
            </div>
            <div class="spec-item">
                <strong>Text Color:</strong> RGB(252, 252, 252)
            </div>
            <div class="spec-item">
                <strong>Icon:</strong> UserCircle 20×20px
            </div>
            <div class="spec-item">
                <strong>Padding:</strong> 6px 8px
            </div>
            <div class="spec-item">
                <strong>Hover Color:</strong> RGB(82, 101, 194)
            </div>
            <div class="spec-item">
                <strong>Active Color:</strong> RGB(93, 114, 219)
            </div>
            <div class="spec-item">
                <strong>Disabled:</strong> 50% opacity, no interactions
            </div>
        </div>
    </div>

    <div class="demo-section">
        <h1 class="demo-title">Primary Button Component Demo</h1>
        
        <h2 class="demo-subtitle">🎯 Figma Original Design</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Button',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Original Figma Design<br>Small/Both Icons</div>
            </div>
        </div>
        
        <div class="code-example">
@include('common.buttons.button-primary', [
    'text' => 'Button',
    'iconLeft' => true,
    'iconRight' => true
])
        </div>

        <h2 class="demo-subtitle">🎯 Icon Variations</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Button',
                    'iconLeft' => true,
                    'iconRight' => false
                ])
                <div class="demo-label">Left Icon Only</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Button',
                    'iconLeft' => false,
                    'iconRight' => true
                ])
                <div class="demo-label">Right Icon Only</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Button',
                    'iconLeft' => false,
                    'iconRight' => false
                ])
                <div class="demo-label">No Icons</div>
            </div>
        </div>

        <h2 class="demo-subtitle">⚡ Button States</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Normal',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Normal State<br>RGB(104, 128, 246)</div>
            </div>
            <div class="demo-item">
                <div style="background: rgb(82, 101, 194); color: rgb(252, 252, 252); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Hover</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label">Hover State<br>RGB(82, 101, 194)</div>
            </div>
            <div class="demo-item">
                <div style="background: rgb(93, 114, 219); color: rgb(252, 252, 252); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Active</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label">Active State<br>RGB(93, 114, 219)</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Loading',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'loading' => true
                ])
                <div class="demo-label">Loading State</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Disabled',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'disabled' => true
                ])
                <div class="demo-label">Disabled State<br>50% opacity</div>
            </div>
        </div>

        <h2 class="demo-subtitle">🔗 As Link</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-primary', [
                    'text' => 'Link',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'href' => '#',
                    'target' => '_blank'
                ])
                <div class="demo-label">Link Button</div>
            </div>
        </div>

        <h2 class="demo-subtitle">📝 Usage Examples</h2>
        <div class="code-example">
// Basic Usage (Figma Original)
@include('common.buttons.button-primary', [
    'text' => 'Button',
    'iconLeft' => true,
    'iconRight' => true
])

// With Custom Text
@include('common.buttons.button-primary', [
    'text' => 'Save',
    'iconLeft' => true,
    'iconRight' => false
])

// As Link
@include('common.buttons.button-primary', [
    'text' => 'Go',
    'href' => '/dashboard',
    'target' => '_blank'
])

// With States
@include('common.buttons.button-primary', [
    'text' => 'Submit',
    'loading' => true,
    'iconLeft' => true
])

// With Custom Attributes
@include('common.buttons.button-primary', [
    'text' => 'Click Me',
    'onclick' => 'alert("Clicked!")',
    'id' => 'my-button',
    'class' => 'custom-class'
])
        </div>

        <h2 class="demo-subtitle">🎨 Design Notes</h2>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Exact Figma Dimensions:</strong> 61×32px (Small size)</li>
                <li><strong>Brand Color:</strong> RGB(104, 128, 246) - matches Figma variable</li>
                <li><strong>Hover Color:</strong> RGB(82, 101, 194) - exact Figma hover state</li>
                <li><strong>Active Color:</strong> RGB(93, 114, 219) - exact Figma active state</li>
                <li><strong>Disabled State:</strong> 50% opacity, same colors, no interactions</li>
                <li><strong>Icon Size:</strong> 20×20px UserCircle icons</li>
                <li><strong>Spacing:</strong> 8px gap between elements (horizontal layout)</li>
                <li><strong>Typography:</strong> 14px, font-weight 600</li>
                <li><strong>Border Radius:</strong> 8px rounded corners</li>
                <li><strong>Hover Effect:</strong> Slight lift and shadow</li>
                <li><strong>Accessibility:</strong> Focus states and reduced motion support</li>
            </ul>
        </div>
    </div>

    <script>
        // Add some interactivity for demo
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-primary');
            buttons.forEach(button => {
                if (!button.hasAttribute('href')) {
                    button.addEventListener('click', function(e) {
                        if (!this.disabled && !this.classList.contains('btn-loading')) {
                            console.log('Primary button clicked:', this.textContent.trim());
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
