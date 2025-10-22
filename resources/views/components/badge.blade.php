@props([
    'type' => 'default',
    'text' => '',
    'showIcon' => true
])

@php
    $classes = match($type) {
        'blue' => 'badge-blue',
        'green' => 'badge',
        default => 'badge'
    };
    
    $circleClass = match($type) {
        'blue' => 'badge-blue-circle',
        'green' => 'badge-circle',
        default => 'badge-circle'
    };
@endphp

<div class="{{ $classes }} {{ $attributes->get('class') }}">
    @if($showIcon)
        <div class="{{ $circleClass }}"></div>
    @endif
    <span>{{ $text }}</span>
</div>
