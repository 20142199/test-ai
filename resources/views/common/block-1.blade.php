{{-- Block-1 Component - Hero Section Based on Figma Design --}}
{{-- 
    Usage:
    @include('common.block-1', [
        'subheading' => 'Let\'s shift your bus',
        'heading' => 'Shift your business',
        'body' => 'With lots of unique blocks, you can easily build a page without coding. Build your next website fast.',
        'button' => [
            'text' => 'Get Started',
            'url' => '/get-started',
            'icon' => 'arrow-right'
        ],
        'image' => '/path/to/image.jpg',
        'decorations' => true,
        'animation' => true
    ])
--}}

@php
    // Default values based on Figma design
    $subheading = $subheading ?? 'Let\'s shift your bus';
    $heading = $heading ?? 'Shift your business';
    $body = $body ?? 'With lots of unique blocks, you can easily build a page without coding. Build your next website fast.';
    $button = $button ?? [
        'text' => 'Get Started',
        'url' => '/get-started',
        'icon' => null
    ];
    $image = $image ?? null;
    $decorations = $decorations ?? true;
    $animation = $animation ?? true;
    $variant = $variant ?? 'default';
@endphp

<section class="block-1 block-1--{{ $variant }}" role="banner">
    {{-- Background Elements --}}
    <div class="block-1__bg"></div>
    @if($image)
        <div class="block-1__bg-image" style="background-image: url('{{ $image }}');"></div>
    @endif

    {{-- Decorative Elements --}}
    @if($decorations)
        <div class="block-1__decorations">
            <div class="block-1__decoration-1"></div>
            <div class="block-1__decoration-2"></div>
            <div class="block-1__decoration-3"></div>
        </div>
    @endif

    {{-- Main Container --}}
    <div class="block-1__container">
        {{-- Content Section --}}
        <div class="block-1__content">
            @if($subheading)
                <p class="block-1__subheading">{{ $subheading }}</p>
            @endif
            
            @if($heading)
                <h1 class="block-1__heading">{{ $heading }}</h1>
            @endif
            
            @if($body)
                <p class="block-1__body">{{ $body }}</p>
            @endif
            
            @if($button)
                <a href="{{ $button['url'] }}" 
                   class="block-1__button"
                   @if(isset($button['target'])) target="{{ $button['target'] }}" @endif
                   @if(isset($button['aria-label'])) aria-label="{{ $button['aria-label'] }}" @endif>
                    @if(isset($button['icon']) && $button['icon'])
                        <svg class="block-1__button-icon" viewBox="0 0 20 20" aria-hidden="true">
                            @if($button['icon'] === 'arrow-right')
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            @elseif($button['icon'] === 'play')
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                            @elseif($button['icon'] === 'download')
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"/>
                            @elseif($button['icon'] === 'external-link')
                                <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h4a1 1 0 010 2H6.414l2.293 2.293a1 1 0 11-1.414 1.414L5 6.414V8a1 1 0 01-2 0V4zm9 1a1 1 0 010-2h4a1 1 0 011 1v4a1 1 0 01-2 0V6.414l-2.293 2.293a1 1 0 11-1.414-1.414L13.586 5H12z" clip-rule="evenodd"/>
                            @else
                                <path d="{{ $button['icon'] }}"/>
                            @endif
                        </svg>
                    @endif
                    <span>{{ $button['text'] }}</span>
                </a>
            @endif
        </div>

        {{-- Image Section --}}
        <div class="block-1__image">
            <div class="block-1__image-main">
                @if($image)
                    <img src="{{ $image }}" 
                         alt="{{ $heading ?? 'Hero Image' }}" 
                         class="block-1__image-img"
                         loading="lazy">
                @else
                    <div class="block-1__image-placeholder">
                        <svg width="80" height="80" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

{{-- JavaScript for Block-1 Functionality --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const block1 = document.querySelector('.block-1');
    
    if (!block1) return;
    
    // Intersection Observer for animation triggers
    if (window.IntersectionObserver && {{ $animation ? 'true' : 'false' }}) {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);
        
        observer.observe(block1);
    }
    
    // Parallax effect for decorative elements
    if ({{ $decorations ? 'true' : 'false' }}) {
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const decorations = block1.querySelectorAll('.block-1__decoration-1, .block-1__decoration-2, .block-1__decoration-3');
            
            decorations.forEach((decoration, index) => {
                const speed = 0.5 + (index * 0.1);
                const yPos = -(scrolled * speed);
                decoration.style.transform = `translateY(${yPos}px)`;
            });
            
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    }
    
    // Button click tracking (if analytics is needed)
    const button = block1.querySelector('.block-1__button');
    if (button) {
        button.addEventListener('click', function(e) {
            // Add analytics tracking here if needed
            console.log('Block-1 button clicked:', this.href);
        });
    }
    
    // Image lazy loading fallback
    const image = block1.querySelector('.block-1__image-img');
    if (image) {
        image.addEventListener('load', function() {
            this.classList.add('loaded');
        });
        
        image.addEventListener('error', function() {
            this.style.display = 'none';
            const placeholder = block1.querySelector('.block-1__image-placeholder');
            if (placeholder) {
                placeholder.style.display = 'flex';
            }
        });
    }
    
    // Keyboard navigation for accessibility
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            const focusedElement = document.activeElement;
            if (focusedElement && focusedElement.classList.contains('block-1__button')) {
                e.preventDefault();
                focusedElement.click();
            }
        }
    });
    
    // Reduced motion support
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const animatedElements = block1.querySelectorAll('[class*="animation"], [class*="decoration"]');
        animatedElements.forEach(element => {
            element.style.animation = 'none';
            element.style.transform = 'none';
        });
    }
    
    console.log('Block-1 component initialized');
});
</script>
