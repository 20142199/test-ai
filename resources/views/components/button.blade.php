<a href="{{ $href ?? '#' }}" 
   class="btn {{ $variant === 'primary' ? 'btn-primary' : 'btn-outline' }} {{ $size === 'lg' ? 'btn-lg' : 'btn-sm' }} {{ $class ?? '' }}">
    {{ $slot }}
</a>
