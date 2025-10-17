{{-- Header Component - Based on Figma Design --}}
{{-- Usage: @include('common.header', $data) --}}

@php
    $variant = $variant ?? 'transparent';
    $sticky = $sticky ?? false;
    $logo = $logo ?? 'shadepro';
    $menu = $menu ?? [
        [
            'text' => 'Collect',
            'url' => '/collect',
            'icon' => 'arrow-right'
        ],
        [
            'text' => 'Collect',
            'url' => '/collect',
            'icon' => 'arrow-right'
        ]
    ];
    $language = $language ?? [
        'flag' => 'vn',
        'text' => 'Tiếng Việt',
        'url' => '/language'
    ];
@endphp

<header class="header header--{{ $variant }} {{ $sticky ? 'header--sticky' : '' }}" role="banner">
    <div class="header__container">
        <div class="header__content">
            {{-- Logo Section --}}
            <div class="header__logo">
                @include('common.logo', ['size' => 'default', 'variant' => 'default'])
            </div>

            {{-- Menu Section --}}
            <div class="header__menu">
                {{-- Menu Buttons --}}
                @if(isset($menu) && is_array($menu))
                    @foreach($menu as $item)
                        <a href="{{ $item['url'] }}" class="header__button">
                            <svg class="header__button-icon header__arrow" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.531 2.404L12.47 11.594" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span class="header__button-text">{{ $item['text'] }}</span>
                            <svg class="header__button-icon header__arrow" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.531 2.404L12.47 11.594" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    @endforeach
                @endif

                {{-- Language Selector --}}
                @if(isset($language))
                    <button class="header__language" type="button" aria-label="Select language">
                        <div class="header__language-flag"></div>
                        <span class="header__language-text">{{ $language['text'] }}</span>
                        <svg class="header__language-arrow" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.248 5.247L13.752 11.751" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                @endif
            </div>
        </div>
    </div>
</header>

{{-- JavaScript for Header Functionality --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    
    if (!header) return;
    
    // Sticky header behavior
    if (header.classList.contains('header--sticky')) {
        let lastScrollTop = 0;
        let ticking = false;
        
        function updateHeader() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > lastScrollTop && scrollTop > header.offsetHeight) {
                header.classList.add('header--hidden');
            } else {
                header.classList.remove('header--hidden');
            }
            
            if (scrollTop > 50) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
            
            lastScrollTop = scrollTop;
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    }
    
    // Language selector dropdown
    const languageButton = header.querySelector('.header__language');
    if (languageButton) {
        languageButton.addEventListener('click', function(e) {
            e.preventDefault();
            // Add language dropdown functionality here
            console.log('Language selector clicked');
        });
    }
    
    // Menu button interactions
    const menuButtons = header.querySelectorAll('.header__button');
    menuButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            // Add menu button functionality here
            console.log('Menu button clicked:', this.href);
        });
    });
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
            const focusedElement = document.activeElement;
            if (focusedElement && (focusedElement.classList.contains('header__button') || focusedElement.classList.contains('header__language'))) {
                e.preventDefault();
                focusedElement.click();
            }
        }
    });
    
    // Reduced motion support
    if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        header.style.transition = 'none';
    }
    
    console.log('Header component initialized');
});
</script>