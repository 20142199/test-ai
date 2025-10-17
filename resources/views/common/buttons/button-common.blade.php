{{--
    Common Button Component - Optimized for All Button Types
    
    This component handles all button variants using CSS variables for colors:
    - Brand buttons (primary, secondary, danger)
    - Black/Neutral buttons (solid, outline, ghost)
    - Red/Status buttons (solid, outline, tonal, ghost)
    
    Usage:
    @include('common.buttons.button-common', [
        'text' => 'Button',
        'type' => 'button', // button, submit, reset
        'variant' => 'brand-primary', // brand-primary, brand-secondary, brand-danger, black-solid, black-outline, black-ghost, red-solid, red-outline, red-tonal, red-ghost, green-solid, green-outline, green-tonal, green-ghost
        'size' => 'medium', // small, medium, large
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
    $variant = $variant ?? 'brand-primary';
    $size = $size ?? 'medium';
    $iconLeft = $iconLeft ?? false;
    $iconRight = $iconRight ?? false;
    $disabled = $disabled ?? false;
    $loading = $loading ?? false;
    $href = $href ?? null;
    $target = $target ?? '_self';
    $class = $class ?? '';
    $id = $id ?? '';
    $onclick = $onclick ?? '';
    $attributes = $attributes ?? [];
    
    // Size configurations
    $sizeConfig = [
        'small' => [
            'width' => '61px', 
            'height' => '32px', 
            'padding' => '6px 8px', 
            'iconSize' => '20',
            'fontSize' => '14px'
        ],
        'medium' => [
            'width' => '77px', 
            'height' => '40px', 
            'padding' => '8px 16px', 
            'iconSize' => '20',
            'fontSize' => '14px'
        ],
        'large' => [
            'width' => '99px', 
            'height' => '48px', 
            'padding' => '12px 24px', 
            'iconSize' => '24',
            'fontSize' => '16px'
        ]
    ];
    
    // Ghost buttons have different sizing
    if (str_contains($variant, 'ghost')) {
        $sizeConfig['small']['width'] = 'auto';
        $sizeConfig['small']['height'] = '24px';
        $sizeConfig['small']['padding'] = '0';
        $sizeConfig['medium']['width'] = 'auto';
        $sizeConfig['medium']['height'] = '24px';
        $sizeConfig['medium']['padding'] = '0';
        $sizeConfig['large']['width'] = 'auto';
        $sizeConfig['large']['height'] = '24px';
        $sizeConfig['large']['padding'] = '0';
    }
    
    $currentSize = $sizeConfig[$size] ?? $sizeConfig['medium'];
    
    // Build CSS classes
    $classes = [
        'btn-common',
        'btn-' . $variant,
        'btn-' . $size,
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

{{-- Include CSS file --}}
<link rel="stylesheet" href="{{ asset('resources/css/common/buttons/button-common.css') }}">

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
            <svg class="btn-icon" width="{{ $currentSize['iconSize'] }}" height="{{ $currentSize['iconSize'] }}" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
        
        <span class="btn-text">{{ $text }}</span>
        
        @if($iconRight && !$loading)
            <svg class="btn-icon" width="{{ $currentSize['iconSize'] }}" height="{{ $currentSize['iconSize'] }}" viewBox="0 0 24 24" fill="none">
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
            <svg class="btn-icon" width="{{ $currentSize['iconSize'] }}" height="{{ $currentSize['iconSize'] }}" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
        
        <span class="btn-text">{{ $text }}</span>
        
        @if($iconRight && !$loading)
            <svg class="btn-icon" width="{{ $currentSize['iconSize'] }}" height="{{ $currentSize['iconSize'] }}" viewBox="0 0 24 24" fill="none">
                <path d="M12 2.25C6.615 2.25 2.25 6.615 2.25 12S6.615 21.75 12 21.75 21.75 17.385 21.75 12 17.385 2.25 12 2.25ZM12 6.75C13.657 6.75 15 8.093 15 9.75S13.657 12.75 12 12.75 9 11.407 9 9.75 10.343 6.75 12 6.75ZM12 19.5C9.99 19.5 8.21 18.51 7.125 16.995C7.155 15.45 10.245 14.625 12 14.625S16.845 15.45 16.875 16.995C15.79 18.51 14.01 19.5 12 19.5Z" fill="currentColor"/>
            </svg>
        @endif
    </button>
@endif
