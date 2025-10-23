{{--
    Reusable Button Component
    
    @param string $type - Button type: 'primary', 'outline', 'large-primary', 'large-outline'
    @param string $text - Button text
    @param string $href - Link URL (default: '#')
    @param string $class - Additional CSS classes (optional)
--}}

@php
    $classes = match($type ?? 'primary') {
        'primary' => 'btn btn-primary btn-medium',
        'outline' => 'btn btn-outline btn-medium',
        'large-primary' => 'btn btn-primary btn-large',
        'large-outline' => 'btn btn-outline btn-large',
        default => 'btn btn-primary btn-medium'
    };
    
    $classes .= isset($class) ? ' ' . $class : '';
@endphp

<a href="{{ $href ?? '#' }}" class="{{ $classes }}">
    {{ $text }}
</a>
