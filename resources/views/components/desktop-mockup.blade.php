@props([
    'image' => '',
    'addressBarText' => 'feature'
])

<div class="desktop-screen">
    <div class="top-bar">
        <div class="circles">
            <div class="circle circle-red"></div>
            <div class="circle circle-yellow"></div>
            <div class="circle circle-green"></div>
        </div>
        <div class="address-bar">{{ $addressBarText }}</div>
        <div class="arrows">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M8.343 5.355L8.343 18.669L16.012 12.012L8.343 5.355Z" fill="#94a3b8"/>
            </svg>
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M8.083 5.426L8.083 18.715L15.727 12.071L8.083 5.426Z" fill="#47556a"/>
            </svg>
        </div>
    </div>
    <img src="{{ $image }}" alt="Desktop Application" class="desktop-image">
</div>
