<svg width="{{ $width ?? 32 }}" height="{{ $height ?? 27 }}" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.6 2.56L24.61 0L32 8.99L24.74 11.55L16.6 2.56Z" fill="url(#{{ $id ?? 'gradient' }}1)"/>
    <path d="M16.74 2.64L24.49 11.47L15.04 14.08L7.99 5.33L16.74 2.64Z" fill="url(#{{ $id ?? 'gradient' }}2)"/>
    <path d="M8.38 5.33L0.24 2.56L8 14.08L15.14 11.16L8.38 5.33Z" fill="url(#{{ $id ?? 'gradient' }}3)"/>
    <path d="M0 2.56L7.99 5.33L15.04 23.75L8 26.88L0 2.56Z" fill="url(#{{ $id ?? 'gradient' }}4)"/>
    <path d="M24.61 0L32 8.99L24.49 23.75L16.98 26.49L24.61 0Z" fill="url(#{{ $id ?? 'gradient' }}5)"/>
    <defs>
        <linearGradient id="{{ $id ?? 'gradient' }}1" x1="16.6" y1="0" x2="32" y2="11.55" gradientUnits="userSpaceOnUse">
            <stop stop-color="#14A39A"/>
            <stop offset="0.5" stop-color="#49FFED"/>
            <stop offset="1" stop-color="#0CB79E"/>
        </linearGradient>
        <linearGradient id="{{ $id ?? 'gradient' }}2" x1="16.74" y1="2.64" x2="24.49" y2="14.08" gradientUnits="userSpaceOnUse">
            <stop stop-color="#14A39A"/>
            <stop offset="0.5" stop-color="#49FFED"/>
            <stop offset="1" stop-color="#0CB79E"/>
        </linearGradient>
        <linearGradient id="{{ $id ?? 'gradient' }}3" x1="0.24" y1="2.56" x2="15.14" y2="14.08" gradientUnits="userSpaceOnUse">
            <stop stop-color="#14A39A"/>
            <stop offset="0.5" stop-color="#49FFED"/>
            <stop offset="1" stop-color="#0CB79E"/>
        </linearGradient>
        <linearGradient id="{{ $id ?? 'gradient' }}4" x1="0" y1="2.56" x2="15.04" y2="26.88" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4EB8FD"/>
            <stop offset="0.5" stop-color="#57C4FD"/>
            <stop offset="1" stop-color="#6AD9FA"/>
        </linearGradient>
        <linearGradient id="{{ $id ?? 'gradient' }}5" x1="16.98" y1="0" x2="32" y2="26.49" gradientUnits="userSpaceOnUse">
            <stop stop-color="#4EB8FD"/>
            <stop offset="0.5" stop-color="#57C4FD"/>
            <stop offset="1" stop-color="#6AD9FA"/>
        </linearGradient>
    </defs>
</svg>
