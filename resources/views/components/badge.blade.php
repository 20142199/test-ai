@props(['type' => 'blue', 'text' => ''])

@php
    $typeClasses = [
        'blue' => 'blue-badge',
        'green' => 'green-badge',
    ];
    $badgeClass = $typeClasses[$type] ?? 'blue-badge';
@endphp

<div class="badge {{ $badgeClass }} {{ $attributes->get('class') }}">
    <div class="badge-circle {{ $type === 'blue' ? 'blue' : '' }}"></div>
    <span>{{ $text ?: $slot }}</span>
</div>
