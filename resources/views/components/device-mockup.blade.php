@props(['type' => 'desktop', 'image' => '', 'url' => ''])

@if($type === 'desktop')
<div class="desktop-screen device-mockup">
    <div class="top-bar">
        <div class="circles">
            <div class="circle red"></div>
            <div class="circle yellow"></div>
            <div class="circle green"></div>
        </div>
        <div class="address-bar">
            <span class="url-text">{{ $url ?: 'bekisoft.com/feature' }}</span>
        </div>
        <div class="arrows">
            <svg class="arrow-left" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M15 18L9 12L15 6" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <svg class="arrow-right" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M9 18L15 12L9 6" stroke="#47556A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>
    <div class="desktop-content">
        @if($slot->isEmpty())
            <img src="{{ $image }}" alt="Desktop Screenshot">
        @else
            {{ $slot }}
        @endif
    </div>
</div>
@elseif($type === 'mobile')
<div class="mobile-screen device-mockup">
    @if($slot->isEmpty())
        <img src="{{ $image }}" alt="Mobile Screenshot">
    @else
        {{ $slot }}
    @endif
</div>
@endif
