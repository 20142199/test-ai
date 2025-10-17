{{-- Block 1 Component - Section 1 Based on Figma Design --}}
{{-- Usage: @include('common.block-1', $data) --}}

@php
    $caption = $caption ?? 'Caption text here';
    $mainHeadline = $mainHeadline ?? 'Main Headline';
    $secondaryHeadline = $secondaryHeadline ?? 'Secondary Headline';
    $buttonText = $buttonText ?? 'Collect';
    $buttonUrl = $buttonUrl ?? '/collect';
    $desktopImage = $desktopImage ?? 'https://images.unsplash.com/photo-1551650975-87deedd944c3?w=977&h=667&fit=crop';
    $mobileImage = $mobileImage ?? 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=350&h=750&fit=crop';
    $contentBoxes = $contentBoxes ?? [
        [
            'icon' => 'three-stars',
            'title' => 'Content Title',
            'category' => 'Category'
        ]
    ];
@endphp

<section class="block-1 {{ isset($variant) ? "block-1--{$variant}" : '' }}">
    {{-- Section Text --}}
    <div class="block-1__section-text">
        <div class="block-1__top">
            @if(isset($caption) && $caption)
                <p class="block-1__caption">{{ $caption }}</p>
            @endif
            
            @if(isset($mainHeadline) && $mainHeadline)
                <h1 class="block-1__main-headline">{{ $mainHeadline }}</h1>
            @endif
            
            @if(isset($secondaryHeadline) && $secondaryHeadline)
                <h2 class="block-1__secondary-headline">{{ $secondaryHeadline }}</h2>
            @endif
        </div>
        
        @if(isset($buttonText) && $buttonText)
            <a href="{{ $buttonUrl }}" class="block-1__button">
                <svg class="block-1__button-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.187 3.434L17.814 16.563" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span class="block-1__button-text">{{ $buttonText }}</span>
                <svg class="block-1__button-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.187 3.434L17.814 16.563" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        @endif
    </div>

    {{-- Mockup Section --}}
    <div class="block-1__mockup-section">
        {{-- Desktop Mockup --}}
        <div class="block-1__desktop">
            <div class="block-1__topbar">
                <div class="block-1__circles">
                    <div class="block-1__circle block-1__circle--red"></div>
                    <div class="block-1__circle block-1__circle--yellow"></div>
                    <div class="block-1__circle block-1__circle--green"></div>
                </div>
                
                <div class="block-1__address-bar">
                    feature
                </div>
                
                <div class="block-1__arrows">
                    <svg class="block-1__arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.343 5.355L16.012 18.669" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="block-1__arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.083 5.426L15.728 18.715" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            
            <div class="block-1__desktop-content">
                @if(isset($desktopImage) && $desktopImage)
                    <img src="{{ $desktopImage }}" alt="Desktop App Screenshot" class="block-1__desktop-image">
                @else
                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, RGB(99, 102, 241) 0%, RGB(168, 85, 247) 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem; font-weight: 600;">
                        Desktop App
                    </div>
                @endif
            </div>
        </div>

        {{-- Content Boxes --}}
        @if(isset($contentBoxes) && is_array($contentBoxes))
            <div class="block-1__content-boxes">
                @foreach($contentBoxes as $box)
                    <div class="block-1__content-box">
                        <div class="block-1__content-icon">
                            @if(isset($box['icon']) && $box['icon'] === 'three-stars')
                                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.333 32L26.666 32L26.666 53.333" stroke="RGB(126, 34, 206)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M37.333 32L58.666 32L58.666 53.333" stroke="RGB(126, 34, 206)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M21.333 8L42.666 8L42.666 29.333" stroke="RGB(126, 34, 206)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            @else
                                <div style="width: 64px; height: 64px; background: RGB(126, 34, 206); border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">📱</div>
                            @endif
                        </div>
                        
                        @if(isset($box['category']) && $box['category'])
                            <p class="block-1__content-category">{{ $box['category'] }}</p>
                        @endif
                        
                        @if(isset($box['title']) && $box['title'])
                            <h3 class="block-1__content-title">{{ $box['title'] }}</h3>
                        @endif
                    </div>
                @endforeach
            </div>
        @endif

        {{-- Mobile Mockup --}}
        <div class="block-1__mobile">
            <div class="block-1__mobile-content">
                @if(isset($mobileImage) && $mobileImage)
                    <img src="{{ $mobileImage }}" alt="Mobile App Screenshot" class="block-1__mobile-image">
                @else
                    <div style="width: 100%; height: 100%; background: linear-gradient(135deg, RGB(34, 197, 94) 0%, RGB(16, 185, 129) 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 1.25rem; font-weight: 600;">
                        Mobile App
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- JavaScript for Block-1 Interactions --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const block1 = document.querySelector('.block-1');
    
    if (!block1) return;
    
    // Intersection Observer for animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });
    
    // Observe elements for animation
    const animatedElements = block1.querySelectorAll('.block-1__section-text, .block-1__mockup-section');
    animatedElements.forEach(element => {
        observer.observe(element);
    });
    
    // Button interactions
    const button = block1.querySelector('.block-1__button');
    if (button) {
        button.addEventListener('click', function(e) {
            // Add button click functionality here
            console.log('Block-1 button clicked:', this.href);
        });
    }
    
    // Mockup hover effects
    const mockups = block1.querySelectorAll('.block-1__desktop, .block-1__mobile, .block-1__content-box');
    mockups.forEach(mockup => {
        mockup.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-5px)';
        });
        
        mockup.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Parallax effect for mockups (optional)
    if (window.innerWidth > 768) {
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const mockupSection = block1.querySelector('.block-1__mockup-section');
            
            if (mockupSection) {
                const rect = mockupSection.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom > 0) {
                    const parallaxSpeed = 0.5;
                    const yPos = -(scrolled * parallaxSpeed);
                    mockupSection.style.transform = `translateY(${yPos}px)`;
                }
            }
        });
    }
    
    // Reduced motion support
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const animatedElements = block1.querySelectorAll('*');
        animatedElements.forEach(element => {
            element.style.animation = 'none';
            element.style.transition = 'none';
        });
    }
    
    console.log('Block-1 component initialized');
});
</script>