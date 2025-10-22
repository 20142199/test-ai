@props(['image' => '', 'width' => 'auto', 'height' => 'auto'])

<div class="content-box {{ $attributes->get('class') }}" {{ $attributes->except('class') }}>
    @if($slot->isEmpty() && $image)
        <img src="{{ $image }}" alt="Content">
    @else
        {{ $slot }}
    @endif
</div>
