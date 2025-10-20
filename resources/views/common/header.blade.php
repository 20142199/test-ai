{{-- Header Component - Based on Figma Design --}}
{{-- Usage: @include('common.header', $data) --}}

@php
    $variant = $variant ?? 'transparent';
    $sticky = $sticky ?? false;
    $currentLanguage = $currentLanguage ?? 'vn';
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
    $languages = $languages ?? [
        'vn' => [
            'flag' => 'vn',
            'text' => 'Tiếng Việt',
            'code' => 'vn'
        ],
        'en' => [
            'flag' => 'en',
            'text' => 'Tiếng Anh',
            'code' => 'en'
        ]
    ];
@endphp

<header class="header header--{{ $variant }} {{ $sticky ? 'header--sticky' : '' }}" role="banner">
    <div class="header__container">
        <div class="header__content">
            {{-- Logo Section --}}
            <div class="header__logo">
                <a href="/" class="header__logo-link">
                    <img src="{{ asset('images/logo.svg') }}" alt="ShadePro Logo" class="header__logo-img">
                    <span class="header__logo-text">shadepro</span>
                </a>
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
                <div class="header__language-selector">
                    <button class="header__language" type="button" aria-label="Select language" id="language-selector">
                        <div class="header__language-flag">
                            @if($currentLanguage === 'vn')
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#DA251D"/>
                                    <path d="M10 4L12.5 8H7.5L10 4Z" fill="#FFCD00"/>
                                </svg>
                            @else
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10" cy="10" r="10" fill="#012169"/>
                                    <path d="M10 0L12.5 4H7.5L10 0Z" fill="#FFFFFF"/>
                                </svg>
                            @endif
                        </div>
                        <span class="header__language-text">{{ $languages[$currentLanguage]['text'] }}</span>
                        <svg class="header__language-arrow" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.248 5.247L13.752 11.751" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                    
                    {{-- Language Dropdown --}}
                    <div class="header__language-dropdown" id="language-dropdown">
                        @foreach($languages as $code => $lang)
                            <button class="header__language-option {{ $code === $currentLanguage ? 'header__language-option--active' : '' }}" 
                                    data-language="{{ $code }}" 
                                    type="button">
                                <div class="header__language-option-flag">
                                    @if($code === 'vn')
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#DA251D"/>
                                            <path d="M10 4L12.5 8H7.5L10 4Z" fill="#FFCD00"/>
                                        </svg>
                                    @else
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="10" cy="10" r="10" fill="#012169"/>
                                            <path d="M10 0L12.5 4H7.5L10 0Z" fill="#FFFFFF"/>
                                        </svg>
                                    @endif
                                </div>
                                <span class="header__language-option-text">{{ $lang['text'] }}</span>
                            </button>
                        @endforeach
                    </div>
                </div>
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
    
    // Language selector functionality
    const languageSelector = header.querySelector('.header__language-selector');
    const languageButton = header.querySelector('.header__language');
    const languageDropdown = header.querySelector('.header__language-dropdown');
    const languageOptions = header.querySelectorAll('.header__language-option');
    
    if (languageSelector && languageButton && languageDropdown) {
        // Toggle dropdown on click
        languageButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            languageDropdown.classList.toggle('header__language-dropdown--open');
        });
        
        // Handle language selection
        languageOptions.forEach(option => {
            option.addEventListener('click', function(e) {
                e.preventDefault();
                const selectedLanguage = this.getAttribute('data-language');
                
                // Update the button text and flag
                const currentLanguage = this.querySelector('.header__language-option-text').textContent;
                const currentFlag = this.querySelector('.header__language-option-flag').innerHTML;
                
                const buttonText = languageButton.querySelector('.header__language-text');
                const buttonFlag = languageButton.querySelector('.header__language-flag');
                
                buttonText.textContent = currentLanguage;
                buttonFlag.innerHTML = currentFlag;
                
                // Update active state
                languageOptions.forEach(opt => opt.classList.remove('header__language-option--active'));
                this.classList.add('header__language-option--active');
                
                // Close dropdown
                languageDropdown.classList.remove('header__language-dropdown--open');
                
                // Store language preference
                localStorage.setItem('selectedLanguage', selectedLanguage);
                
                // Trigger language change event
                window.dispatchEvent(new CustomEvent('languageChanged', {
                    detail: { language: selectedLanguage }
                }));
                
                console.log('Language changed to:', selectedLanguage);
            });
        });
        
        // Close dropdown when clicking outside
        document.addEventListener('click', function(e) {
            if (!languageSelector.contains(e.target)) {
                languageDropdown.classList.remove('header__language-dropdown--open');
            }
        });
        
        // Close dropdown on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                languageDropdown.classList.remove('header__language-dropdown--open');
            }
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