@props(['variant' => 'primary', 'type' => 'button', 'icon' => null])

@php
    $variantClasses = [
        'primary' => 'btn-primary',
        'secondary' => 'btn-secondary',
        'cta' => 'btn-cta',
    ];
    $buttonClass = $variantClasses[$variant] ?? 'btn-primary';
@endphp

<button type="{{ $type }}" class="btn {{ $buttonClass }} {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @if($icon)
        {!! $icon !!}
    @endif
    <span>{{ $slot }}</span>
</button>
