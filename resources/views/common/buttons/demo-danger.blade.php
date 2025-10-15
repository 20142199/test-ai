<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danger Button Demo - Figma Design (Filled Tonal Style)</title>
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
            background: linear-gradient(135deg, #F0F2FA 0%, #E2E5F6 100%);
            color: #333;
            padding: 20px;
            border-radius: 12px;
            margin-bottom: 30px;
            border: 1px solid rgb(104, 128, 246);
        }
        
        .figma-specs h2 {
            margin-top: 0;
            color: rgb(104, 128, 246);
        }
        
        .specs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-top: 15px;
        }
        
        .spec-item {
            background: rgba(104, 128, 246, 0.1);
            padding: 10px;
            border-radius: 6px;
            border: 1px solid rgba(104, 128, 246, 0.2);
        }
        
        .states-comparison {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        
        .state-demo {
            text-align: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="figma-specs">
        <h2>🎨 Figma Design Specifications - Danger Button (Filled Tonal Style)</h2>
        <p>Danger Button components created based on Figma designs with "Filled Tonal" style</p>
        <div class="specs-grid">
            <div class="spec-item">
                <strong>Style:</strong> Filled Tonal (Light background)
            </div>
            <div class="spec-item">
                <strong>Size:</strong> 61×32px (Small)
            </div>
            <div class="spec-item">
                <strong>Background:</strong> Light tonal colors
            </div>
            <div class="spec-item">
                <strong>Text Color:</strong> RGB(104, 128, 246)
            </div>
            <div class="spec-item">
                <strong>Border Radius:</strong> 8px
            </div>
            <div class="spec-item">
                <strong>Layout:</strong> Horizontal, 8px spacing
            </div>
            <div class="spec-item">
                <strong>Icon:</strong> UserCircle 20×20px
            </div>
            <div class="spec-item">
                <strong>Padding:</strong> 6px 8px
            </div>
        </div>
    </div>

    <div class="demo-section">
        <h1 class="demo-title">Danger Button Component Demo (Filled Tonal Style)</h1>
        
        <h2 class="demo-subtitle">🎯 Figma Original Design</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Button',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Original Figma Design<br>Filled Tonal Style</div>
            </div>
        </div>
        
        <div class="code-example">
@include('common.buttons.button-danger', [
    'text' => 'Button',
    'iconLeft' => true,
    'iconRight' => true
])
        </div>

        <h2 class="demo-subtitle">🎨 All Button States (Exact Figma Colors)</h2>
        <div class="states-comparison">
            <div class="state-demo">
                <div style="background: rgb(240, 242, 250); color: rgb(104, 128, 246); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Button</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label"><strong>Normal State</strong><br>RGB(240, 242, 250)</div>
            </div>
            
            <div class="state-demo">
                <div style="background: rgb(226, 229, 246); color: rgb(104, 128, 246); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center; transform: translateY(-1px); box-shadow: 0 4px 12px rgba(104, 128, 246, 0.15);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Button</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label"><strong>Hover State</strong><br>RGB(226, 229, 246)</div>
            </div>
            
            <div class="state-demo">
                <div style="background: rgb(202, 209, 246); color: rgb(104, 128, 246); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center; box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.05);">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Button</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label"><strong>Active State</strong><br>RGB(202, 209, 246)</div>
            </div>
            
            <div class="state-demo">
                <div style="background: rgb(240, 242, 250); color: rgb(104, 128, 246); padding: 6px 8px; border-radius: 8px; font-size: 14px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; width: 61px; height: 32px; box-sizing: border-box; justify-content: center; opacity: 0.5;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                    <span>Button</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
                    </svg>
                </div>
                <div class="demo-label"><strong>Disabled State</strong><br>50% opacity</div>
            </div>
        </div>

        <h2 class="demo-subtitle">🎯 Icon Variations</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Button',
                    'iconLeft' => true,
                    'iconRight' => false
                ])
                <div class="demo-label">Left Icon Only</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Button',
                    'iconLeft' => false,
                    'iconRight' => true
                ])
                <div class="demo-label">Right Icon Only</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Button',
                    'iconLeft' => false,
                    'iconRight' => false
                ])
                <div class="demo-label">No Icons</div>
            </div>
        </div>

        <h2 class="demo-subtitle">⚡ Interactive Button States</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Normal',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Normal State</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Loading',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'loading' => true
                ])
                <div class="demo-label">Loading State</div>
            </div>
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Disabled',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'disabled' => true
                ])
                <div class="demo-label">Disabled State</div>
            </div>
        </div>

        <h2 class="demo-subtitle">🔗 As Link</h2>
        <div class="demo-grid">
            <div class="demo-item">
                @include('common.buttons.button-danger', [
                    'text' => 'Link',
                    'iconLeft' => true,
                    'iconRight' => true,
                    'href' => '#',
                    'target' => '_blank'
                ])
                <div class="demo-label">Link Button</div>
            </div>
        </div>

        <h2 class="demo-subtitle">📊 Button Comparison</h2>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin: 20px 0;">
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                @include('common.buttons.button-primary', [
                    'text' => 'Primary',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Primary (Solid)</div>
            </div>
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                @include('common.buttons.button-secondary', [
                    'text' => 'Secondary',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Secondary (Outline)</div>
            </div>
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                @include('common.buttons.button-danger', [
                    'text' => 'Danger',
                    'iconLeft' => true,
                    'iconRight' => true
                ])
                <div class="demo-label">Danger (Tonal)</div>
            </div>
        </div>

        <h2 class="demo-subtitle">📝 Usage Examples</h2>
        <div class="code-example">
// Basic Usage (Figma Original)
@include('common.buttons.button-danger', [
    'text' => 'Button',
    'iconLeft' => true,
    'iconRight' => true
])

// With Custom Text
@include('common.buttons.button-danger', [
    'text' => 'Delete',
    'iconLeft' => false,
    'iconRight' => false
])

// As Link
@include('common.buttons.button-danger', [
    'text' => 'Warning',
    'href' => '/warning',
    'target' => '_blank'
])

// With States
@include('common.buttons.button-danger', [
    'text' => 'Processing',
    'loading' => true,
    'iconLeft' => true
])

// With Custom Attributes
@include('common.buttons.button-danger', [
    'text' => 'Confirm',
    'onclick' => 'confirm("Are you sure?")',
    'id' => 'danger-button',
    'class' => 'custom-danger'
])
        </div>

        <h2 class="demo-subtitle">🎨 Design Notes</h2>
        <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin-top: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
                <li><strong>Style:</strong> Filled Tonal - light background with colored text</li>
                <li><strong>Exact Figma Dimensions:</strong> 61×32px (Small size)</li>
                <li><strong>Normal Background:</strong> RGB(240, 242, 250) - lightest tonal</li>
                <li><strong>Hover Background:</strong> RGB(226, 229, 246) - medium tonal</li>
                <li><strong>Active Background:</strong> RGB(202, 209, 246) - darkest tonal</li>
                <li><strong>Text Color:</strong> RGB(104, 128, 246) - consistent brand color</li>
                <li><strong>Disabled State:</strong> 50% opacity, same colors, no interactions</li>
                <li><strong>Icon Size:</strong> 20×20px UserCircle icons</li>
                <li><strong>Spacing:</strong> 8px gap between elements (horizontal layout)</li>
                <li><strong>Typography:</strong> 14px, font-weight 600</li>
                <li><strong>Border Radius:</strong> 8px rounded corners</li>
                <li><strong>Hover Effect:</strong> Background darkening + slight lift and shadow</li>
                <li><strong>Use Case:</strong> Tertiary actions, subtle emphasis</li>
                <li><strong>Accessibility:</strong> Focus states and reduced motion support</li>
            </ul>
        </div>
    </div>

    <script>
        // Add some interactivity for demo
        document.addEventListener('DOMContentLoaded', function() {
            const buttons = document.querySelectorAll('.btn-danger');
            buttons.forEach(button => {
                if (!button.hasAttribute('href')) {
                    button.addEventListener('click', function(e) {
                        if (!this.disabled && !this.classList.contains('btn-loading')) {
                            console.log('Danger button clicked:', this.textContent.trim());
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>
