{{--
    Primary Button Component - Based on Figma Design
    Node ID: 11153:3658 - Button-brand/Solid/Default/Small/Off
    
    Figma Specifications:
    - Size: 61×32px (Small)
    - Background: RGB(104, 128, 246) - Brand Color
    - Text Color: RGB(252, 252, 252) - White
    - Border Radius: 8px
    - Layout: Horizontal with 8px spacing
    - Icons: UserCircle 20×20px (both sides)
    
    Hover State:
    - Background: RGB(82, 101, 194) - Exact Figma hover color
    - Transform: translateY(-1px) for subtle lift effect
    - Shadow: Enhanced shadow for depth
    
    Active State:
    - Background: RGB(93, 114, 219) - Exact Figma active color
    - Transform: translateY(0) - Reset position
    - Shadow: Inset shadow for pressed effect
    
    Disabled State:
    - Background: RGB(104, 128, 246) - Same as normal state
    - Opacity: 0.5 - Reduced opacity for disabled appearance
    - No hover effects or interactions
    
    Usage:
    @include('common.buttons.button-primary', [
        'text' => 'Button',
        'type' => 'button', // button, submit, reset
        'iconLeft' => true, // show left icon
        'iconRight' => true, // show right icon
        'disabled' => false,
        'loading' => false,
        'href' => '', // if provided, renders as link
        'target' => '_self',
        'class' => '', // additional classes
        'id' => '',
        'onclick' => '',
        'attributes' => [] // additional attributes
    ])
--}}

@php
    $text = $text ?? 'Button';
    $type = $type ?? 'button';
    $iconLeft = $iconLeft ?? true;
    $iconRight = $iconRight ?? true;
    $disabled = $disabled ?? false;
    $loading = $loading ?? false;
    $href = $href ?? null;
    $target = $target ?? '_self';
    $class = $class ?? '';
    $id = $id ?? '';
    $onclick = $onclick ?? '';
    $attributes = $attributes ?? [];
    
    // Build CSS classes
    $classes = [
        'btn-primary',
        $loading ? 'btn-loading' : '',
        $disabled ? 'disabled' : '',
        $class
    ];
    
    $classString = implode(' ', array_filter($classes));
    
    // Build attributes string
    $attributeString = '';
    foreach ($attributes as $key => $value) {
        $attributeString .= ' ' . $key . '="' . htmlspecialchars($value) . '"';
    }
@endphp

<style>
/* Primary Button Styles - Exact Figma Specifications */
.btn-primary {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    width: 61px;
    height: 32px;
    padding: 6px 8px;
    background-color: rgb(104, 128, 246); /* Figma brand color */
    color: rgb(252, 252, 252); /* Figma white color */
    border: none;
    border-radius: 8px;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    font-weight: 600;
    font-size: 14px;
    line-height: 1.4;
    text-decoration: none;
    text-align: center;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
    position: relative;
    overflow: hidden;
    white-space: nowrap;
    user-select: none;
    box-sizing: border-box;
}

.btn-primary:hover:not(:disabled):not(.disabled) {
    background-color: rgb(82, 101, 194); /* Exact Figma hover color */
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(104, 128, 246, 0.3);
}

.btn-primary:active {
    background-color: rgb(93, 114, 219); /* Exact Figma active color */
    transform: translateY(0);
    box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
}

.btn-primary:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(104, 128, 246, 0.25);
}

/* Disabled State - Based on Figma Design */
.btn-primary:disabled,
.btn-primary.disabled {
    background-color: rgb(104, 128, 246); /* Same as normal state */
    color: rgb(252, 252, 252); /* Same text color */
    opacity: 0.5; /* Reduced opacity for disabled appearance */
    cursor: not-allowed;
    transform: none !important;
    box-shadow: none !important;
    pointer-events: none;
}

/* Ensure disabled state overrides hover */
.btn-primary:disabled:hover,
.btn-primary.disabled:hover {
    background-color: rgb(104, 128, 246) !important;
    transform: none !important;
    box-shadow: none !important;
    opacity: 0.5 !important;
}

/* Loading State */
.btn-primary.btn-loading {
    pointer-events: none;
}

.btn-primary.btn-loading .btn-text {
    opacity: 0.7;
}

/* Loading Spinner */
.btn-primary .btn-spinner {
    width: 16px;
    height: 16px;
    border: 2px solid transparent;
    border-top: 2px solid currentColor;
    border-radius: 50%;
    animation: btn-spin 1s linear infinite;
}

@keyframes btn-spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

/* Icons - Figma Specs: 20×20px */
.btn-primary .btn-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    flex-shrink: 0;
}

/* Text styling */
.btn-primary .btn-text {
    font-weight: 600;
    letter-spacing: 0.025em;
    flex: 1;
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .btn-primary {
        min-width: 61px;
    }
}

/* High contrast mode support */
@media (prefers-contrast: high) {
    .btn-primary {
        border: 2px solid currentColor;
    }
}

/* Reduced motion support */
@media (prefers-reduced-motion: reduce) {
    .btn-primary {
        transition: none;
    }
    
    .btn-primary .btn-spinner {
        animation: none;
    }
}
</style>

@if($href)
    <a href="{{ $href }}" 
       target="{{ $target }}"
       class="{{ $classString }}"
       @if($id) id="{{ $id }}" @endif
       @if($onclick) onclick="{{ $onclick }}" @endif
       {!! $attributeString !!}>
        
        @if($loading)
            <span class="btn-spinner"></span>
        @endif
        
        @if($iconLeft && !$loading)
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
        
        <span class="btn-text">{{ $text }}</span>
        
        @if($iconRight && !$loading)
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
    </a>
@else
    <button type="{{ $type }}"
            class="{{ $classString }}"
            @if($disabled || $loading) disabled @endif
            @if($id) id="{{ $id }}" @endif
            @if($onclick) onclick="{{ $onclick }}" @endif
            {!! $attributeString !!}>
        
        @if($loading)
            <span class="btn-spinner"></span>
        @endif
        
        @if($iconLeft && !$loading)
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
        
        <span class="btn-text">{{ $text }}</span>
        
        @if($iconRight && !$loading)
            <svg class="btn-icon" width="20" height="20" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
    </button>
@endif
