{{-- Logo Component --}}
{{-- Usage: @include('common.logo', ['size' => 'default', 'variant' => 'default']) --}}

@php
    $size = $size ?? 'default';
    $variant = $variant ?? 'default';
    $class = "logo logo--{$size} logo--{$variant}";
@endphp

<div class="{{ $class }}">
    <svg class="logo__icon" viewBox="0 0 182 50" fill="none" xmlns="http://www.w3.org/2000/svg">
        {{-- Main logo icon with gradients --}}
        <g class="logo__main-icon">
            {{-- Orange/Yellow gradient shapes --}}
            <path d="M9.205 23.961L42.061 48.765C42.061 48.765 42.061 48.765 42.061 48.765" 
                  fill="url(#orangeGradient1)" 
                  stroke="none"/>
            <path d="M11.033 30.307L42.061 48.765C42.061 48.765 42.061 48.765 42.061 48.765" 
                  fill="url(#orangeGradient2)" 
                  stroke="none"/>
            
            {{-- Blue gradient shapes --}}
            <path d="M0 5.65L22.86 43.017C22.86 43.017 22.86 43.017 22.86 43.017" 
                  fill="url(#blueGradient1)" 
                  stroke="none"/>
            <path d="M9.996 0.355L42.061 30.31C42.061 30.31 42.061 30.31 42.061 30.31" 
                  fill="url(#blueGradient2)" 
                  stroke="none"/>
            <path d="M15.513 0.355L42.061 26.675C42.061 26.675 42.061 26.675 42.061 26.675" 
                  fill="url(#blueGradient3)" 
                  stroke="none"/>
            <path d="M0 6.717L14.694 39.836C14.694 39.836 14.694 39.836 14.694 39.836" 
                  fill="url(#blueGradient4)" 
                  stroke="none"/>
        </g>
        
        {{-- Small orange dots pattern --}}
        <g class="logo__dots">
            <circle cx="17.361" cy="21.037" r="1.468" fill="#FBAE1D"/>
            <circle cx="21.765" cy="21.037" r="1.468" fill="#FBAE1D"/>
            <circle cx="17.361" cy="25.147" r="1.468" fill="#FBAE1D"/>
            <circle cx="21.765" cy="25.147" r="1.468" fill="#FBAE1D"/>
        </g>
        
        {{-- Text "shadepro" --}}
        <g class="logo__text">
            {{-- Letter shapes for "shadepro" --}}
            <path d="M51.143 41.265L54.685 48.998" fill="#FBAE1D"/>
            <path d="M54.977 42.015L58.915 48.68" fill="#FBAE1D"/>
            <path d="M59.257 43.265L63.096 48.679" fill="#FBAE1D"/>
            <path d="M65.264 43.266L68.329 48.68" fill="#FBAE1D"/>
            <path d="M68.704 43.265L72.143 48.679" fill="#FBAE1D"/>
            <path d="M72.736 42.657L76.978 48.766" fill="#FBAE1D"/>
            <path d="M76.766 42.657L80.505 48.766" fill="#FBAE1D"/>
            <path d="M80.795 43.265L84.634 48.679" fill="#FBAE1D"/>
            <path d="M85.225 43.18L88.664 48.767" fill="#FBAE1D"/>
            <path d="M91.087 43.265L96.064 48.679" fill="#FBAE1D"/>
            <path d="M96.447 43.26L100.384 50.0" fill="#FBAE1D"/>
            <path d="M100.768 43.265L102.104 48.679" fill="#FBAE1D"/>
            <path d="M104.263 43.26L108.0 48.679" fill="#FBAE1D"/>
            <path d="M108.612 43.265L109.947 48.679" fill="#FBAE1D"/>
            <path d="M110.584 42.015L113.615 50.0" fill="#FBAE1D"/>
            <path d="M114.211 43.265L118.05 48.679" fill="#FBAE1D"/>
            <path d="M120.219 43.266L123.283 48.68" fill="#FBAE1D"/>
            <path d="M123.66 41.265L127.902 48.766" fill="#FBAE1D"/>
            <path d="M129.489 43.265L133.328 48.679" fill="#FBAE1D"/>
            <path d="M133.919 43.18L137.357 48.767" fill="#FBAE1D"/>
            <path d="M137.7 42.015L141.638 48.68" fill="#FBAE1D"/>
            <path d="M141.978 43.265L145.818 48.679" fill="#FBAE1D"/>
            <path d="M146.408 43.265L149.847 48.679" fill="#FBAE1D"/>
            <path d="M152.011 43.265L155.901 48.679" fill="#FBAE1D"/>
            <path d="M156.018 42.015L159.956 48.68" fill="#FBAE1D"/>
            <path d="M160.057 43.266L163.565 48.679" fill="#FBAE1D"/>
            <path d="M165.723 43.265L169.162 48.679" fill="#FBAE1D"/>
            <path d="M169.755 42.657L173.996 50.0" fill="#FBAE1D"/>
            <path d="M173.783 43.265L177.622 48.679" fill="#FBAE1D"/>
            <path d="M178.214 43.18L181.653 48.767" fill="#FBAE1D"/>
        </g>
        
        {{-- Star icon --}}
        <g class="logo__star">
            <path d="M135.737 20.803L152.834 38.999" fill="#FBAE1D"/>
        </g>
        
        {{-- Gradient definitions --}}
        <defs>
            <linearGradient id="orangeGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#FBAE1D;stop-opacity:1" />
                <stop offset="22%" style="stop-color:#FBB319;stop-opacity:1" />
                <stop offset="58%" style="stop-color:#FCCC0F;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#FFF100;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="orangeGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#FBAE1D;stop-opacity:1" />
                <stop offset="22%" style="stop-color:#FBB319;stop-opacity:1" />
                <stop offset="58%" style="stop-color:#FCCC0F;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#FFF100;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="blueGradient1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#02118C;stop-opacity:1" />
                <stop offset="15%" style="stop-color:#0539A2;stop-opacity:1" />
                <stop offset="43%" style="stop-color:#0C6BC6;stop-opacity:1" />
                <stop offset="68%" style="stop-color:#1190E0;stop-opacity:1" />
                <stop offset="87%" style="stop-color:#13A6F1;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#15AFF7;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="blueGradient2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#212B63;stop-opacity:1" />
                <stop offset="29%" style="stop-color:#232D6B;stop-opacity:1" />
                <stop offset="77%" style="stop-color:#2A2F84;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#2E3192;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="blueGradient3" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#212B63;stop-opacity:1" />
                <stop offset="29%" style="stop-color:#232D6B;stop-opacity:1" />
                <stop offset="77%" style="stop-color:#2A2F84;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#2E3192;stop-opacity:1" />
            </linearGradient>
            <linearGradient id="blueGradient4" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#02118C;stop-opacity:1" />
                <stop offset="15%" style="stop-color:#0539A2;stop-opacity:1" />
                <stop offset="43%" style="stop-color:#0C6BC6;stop-opacity:1" />
                <stop offset="68%" style="stop-color:#1190E0;stop-opacity:1" />
                <stop offset="87%" style="stop-color:#13A6F1;stop-opacity:1" />
                <stop offset="100%" style="stop-color:#15AFF7;stop-opacity:1" />
            </linearGradient>
        </defs>
    </svg>
    
    <span class="logo__text-fallback">shadepro</span>
</div>
