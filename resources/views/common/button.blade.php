{{--
    Button Component
    Usage: @include('common.button', [
        'text' => 'Button Text',
        'type' => 'button',
        'variant' => 'primary',
        'size' => 'medium',
        'icon' => 'check',
        'iconPosition' => 'left',
        'disabled' => false,
        'loading' => false,
        'block' => false,
        'outline' => false,
        'class' => '',
        'id' => '',
        'onclick' => ''
    ])
--}}

@php
    $type = $type ?? 'button';
    $variant = $variant ?? 'primary';
    $size = $size ?? 'medium';
    $text = $text ?? 'Button';
    $icon = $icon ?? '';
    $iconPosition = $iconPosition ?? 'left';
    $disabled = $disabled ?? false;
    $loading = $loading ?? false;
    $block = $block ?? false;
    $outline = $outline ?? false;
    $class = $class ?? '';
    $id = $id ?? '';
    $onclick = $onclick ?? '';
    
    $buttonClasses = [
        'btn',
        'btn-' . $variant,
        'btn-' . $size,
        $outline ? 'btn-outline' : '',
        $block ? 'btn-block' : '',
        $disabled ? 'btn-disabled' : '',
        $loading ? 'btn-loading' : '',
        $class
    ];
    
    $buttonClass = implode(' ', array_filter($buttonClasses));
@endphp

<button 
    type="{{ $type }}"
    class="{{ $buttonClass }}"
    @if($id) id="{{ $id }}" @endif
    @if($disabled || $loading) disabled @endif
    @if($onclick) onclick="{{ $onclick }}" @endif
>
    @if($loading)
        <span class="btn-spinner"></span>
    @endif
    
    @if($icon && $iconPosition === 'left' && !$loading)
        <span class="btn-icon btn-icon-left">
            @include('common.icon', ['name' => $icon, 'size' => 'small'])
        </span>
    @endif
    
    <span class="btn-text">{{ $text }}</span>
    
    @if($icon && $iconPosition === 'right' && !$loading)
        <span class="btn-icon btn-icon-right">
            @include('common.icon', ['name' => $icon, 'size' => 'small'])
        </span>
    @endif
</button>
