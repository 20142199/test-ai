{{-- Header Component - Based on Figma Design --}}
{{-- 
    Usage:
    @include('common.header', [
        'logo' => 'shadepro',
        'navigation' => [
            ['text' => 'Demos', 'url' => '/demos'],
            ['text' => 'Pages', 'url' => '/pages'],
            ['text' => 'Support', 'url' => '/support']
        ],
        'button' => [
            'text' => 'Get Started',
            'url' => '/get-started',
            'icon' => 'arrow-right'
        ],
        'sticky' => true,
        'variant' => 'transparent'
    ])
--}}

@php
    // Default values
    $logo = $logo ?? 'shadepro';
    $navigation = $navigation ?? [
        ['text' => 'Demos', 'url' => '/demos', 'active' => false],
        ['text' => 'Pages', 'url' => '/pages', 'active' => false],
        ['text' => 'Support', 'url' => '/support', 'active' => false]
    ];
    $button = $button ?? [
        'text' => 'Get Started',
        'url' => '/get-started',
        'icon' => null
    ];
    $sticky = $sticky ?? true;
    $variant = $variant ?? 'transparent';
    $mobileMenu = $mobileMenu ?? true;
    $skipLink = $skipLink ?? true;
@endphp

<header class="header header--{{ $variant }} {{ $sticky ? 'header--sticky' : '' }}" role="banner">
    {{-- Skip to content link for accessibility --}}
    @if($skipLink)
        <a href="#main-content" class="header__skip-link">Skip to main content</a>
    @endif

    <div class="container">
        {{-- Logo Section --}}
        <div class="header__brand">
            <a href="{{ url('/') }}" class="header__logo" aria-label="{{ $logo }} - Go to homepage">
                @if(isset($logoIcon))
                    <svg class="header__logo-icon" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z"/>
                    </svg>
                @endif
                <span class="header__logo-text">{{ $logo }}</span>
            </a>
        </div>

        {{-- Desktop Navigation --}}
        <nav class="header__nav" role="navigation" aria-label="Main navigation">
            <ul class="header__nav-list">
                @foreach($navigation as $item)
                    <li class="header__nav-item">
                        @if(isset($item['dropdown']) && is_array($item['dropdown']))
                            {{-- Dropdown Navigation Item --}}
                            <div class="header__nav-dropdown" data-dropdown>
                                <button class="header__nav-link header__nav-dropdown-toggle" 
                                        aria-expanded="false" 
                                        aria-haspopup="true">
                                    {{ $item['text'] }}
                                    <svg class="header__nav-dropdown-icon" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <ul class="header__nav-dropdown-menu" role="menu">
                                    @foreach($item['dropdown'] as $dropdownItem)
                                        <li class="header__nav-dropdown-item" role="none">
                                            <a href="{{ $dropdownItem['url'] }}" 
                                               class="header__nav-dropdown-link" 
                                               role="menuitem">
                                                {{ $dropdownItem['text'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            {{-- Regular Navigation Item --}}
                            <a href="{{ $item['url'] }}" 
                               class="header__nav-link {{ $item['active'] ?? false ? 'active' : '' }}"
                               @if($item['active'] ?? false) aria-current="page" @endif>
                                {{ $item['text'] }}
                                @if(isset($item['icon']))
                                    <svg class="header__nav-icon" viewBox="0 0 20 20" aria-hidden="true">
                                        <path d="{{ $item['icon'] }}"/>
                                    </svg>
                                @endif
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </nav>

        {{-- Action Section --}}
        <div class="header__actions">
            @if(isset($actions) && is_array($actions))
                @foreach($actions as $action)
                    @if($action['type'] === 'button')
                        <a href="{{ $action['url'] }}" 
                           class="header__btn {{ $action['variant'] ?? '' }}"
                           @if(isset($action['target'])) target="{{ $action['target'] }}" @endif>
                            @if(isset($action['icon']))
                                <svg class="header__btn-icon" viewBox="0 0 20 20" aria-hidden="true">
                                    <path d="{{ $action['icon'] }}"/>
                                </svg>
                            @endif
                            <span class="header__btn-text">{{ $action['text'] }}</span>
                        </a>
                    @elseif($action['type'] === 'link')
                        <a href="{{ $action['url'] }}" 
                           class="header__link {{ $action['variant'] ?? '' }}"
                           @if(isset($action['target'])) target="{{ $action['target'] }}" @endif>
                            {{ $action['text'] }}
                        </a>
                    @endif
                @endforeach
            @else
                {{-- Default Button --}}
                <a href="{{ $button['url'] }}" 
                   class="header__btn"
                   @if(isset($button['target'])) target="{{ $button['target'] }}" @endif>
                    @if(isset($button['icon']))
                        <svg class="header__btn-icon" viewBox="0 0 20 20" aria-hidden="true">
                            <path d="{{ $button['icon'] }}"/>
                        </svg>
                    @endif
                    <span class="header__btn-text">{{ $button['text'] }}</span>
                </a>
            @endif

            {{-- Mobile Menu Toggle --}}
            @if($mobileMenu)
                <button class="header__mobile-toggle" 
                        aria-label="Toggle mobile menu" 
                        aria-expanded="false"
                        data-mobile-toggle>
                    <span class="header__mobile-toggle-line"></span>
                    <span class="header__mobile-toggle-line"></span>
                    <span class="header__mobile-toggle-line"></span>
                </button>
            @endif
        </div>
    </div>

    {{-- Mobile Navigation --}}
    @if($mobileMenu)
        <nav class="header__mobile-nav" role="navigation" aria-label="Mobile navigation">
            <ul class="header__mobile-nav-list">
                @foreach($navigation as $item)
                    <li class="header__mobile-nav-item">
                        @if(isset($item['dropdown']) && is_array($item['dropdown']))
                            {{-- Mobile Dropdown Item --}}
                            <div class="header__mobile-nav-dropdown">
                                <button class="header__mobile-nav-link header__mobile-nav-dropdown-toggle">
                                    {{ $item['text'] }}
                                    <svg class="header__mobile-nav-dropdown-icon" viewBox="0 0 20 20" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                    </svg>
                                </button>
                                <ul class="header__mobile-nav-dropdown-menu">
                                    @foreach($item['dropdown'] as $dropdownItem)
                                        <li class="header__mobile-nav-dropdown-item">
                                            <a href="{{ $dropdownItem['url'] }}" class="header__mobile-nav-dropdown-link">
                                                {{ $dropdownItem['text'] }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        @else
                            {{-- Mobile Regular Item --}}
                            <a href="{{ $item['url'] }}" 
                               class="header__mobile-nav-link {{ $item['active'] ?? false ? 'active' : '' }}"
                               @if($item['active'] ?? false) aria-current="page" @endif>
                                {{ $item['text'] }}
                            </a>
                        @endif
                    </li>
                @endforeach
                
                {{-- Mobile Action Button --}}
                <li class="header__mobile-nav-item">
                    <a href="{{ $button['url'] }}" class="header__mobile-nav-link header__mobile-nav-btn">
                        @if(isset($button['icon']))
                            <svg class="header__btn-icon" viewBox="0 0 20 20" aria-hidden="true">
                                <path d="{{ $button['icon'] }}"/>
                            </svg>
                        @endif
                        {{ $button['text'] }}
                    </a>
                </li>
            </ul>
        </nav>
    @endif
</header>

{{-- JavaScript for Header Functionality --}}
<script>
document.addEventListener('DOMContentLoaded', function() {
    const header = document.querySelector('.header');
    const mobileToggle = document.querySelector('[data-mobile-toggle]');
    const mobileNav = document.querySelector('.header__mobile-nav');
    const dropdowns = document.querySelectorAll('[data-dropdown]');
    
    // Mobile menu toggle
    if (mobileToggle && mobileNav) {
        mobileToggle.addEventListener('click', function() {
            const isOpen = mobileToggle.classList.contains('open');
            
            mobileToggle.classList.toggle('open');
            mobileToggle.setAttribute('aria-expanded', !isOpen);
            mobileNav.classList.toggle('open');
            
            // Prevent body scroll when mobile menu is open
            document.body.style.overflow = !isOpen ? 'hidden' : '';
        });
    }
    
    // Dropdown functionality
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.header__nav-dropdown-toggle');
        const menu = dropdown.querySelector('.header__nav-dropdown-menu');
        
        if (toggle && menu) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const isOpen = dropdown.classList.contains('open');
                
                // Close other dropdowns
                dropdowns.forEach(otherDropdown => {
                    if (otherDropdown !== dropdown) {
                        otherDropdown.classList.remove('open');
                        otherDropdown.querySelector('.header__nav-dropdown-toggle').setAttribute('aria-expanded', 'false');
                    }
                });
                
                // Toggle current dropdown
                dropdown.classList.toggle('open');
                toggle.setAttribute('aria-expanded', !isOpen);
            });
        }
    });
    
    // Close dropdowns when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('[data-dropdown]')) {
            dropdowns.forEach(dropdown => {
                dropdown.classList.remove('open');
                dropdown.querySelector('.header__nav-dropdown-toggle').setAttribute('aria-expanded', 'false');
            });
        }
    });
    
    // Sticky header scroll effect
    if (header && header.classList.contains('header--sticky')) {
        let lastScrollY = window.scrollY;
        let ticking = false;
        
        function updateHeader() {
            const scrollY = window.scrollY;
            
            if (scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
            
            lastScrollY = scrollY;
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
    
    // Close mobile menu when clicking on a link
    const mobileNavLinks = document.querySelectorAll('.header__mobile-nav-link');
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (mobileToggle && mobileNav) {
                mobileToggle.classList.remove('open');
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('open');
                document.body.style.overflow = '';
            }
        });
    });
    
    // Keyboard navigation for dropdowns
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.header__nav-dropdown-toggle');
        
        if (toggle) {
            toggle.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    e.preventDefault();
                    toggle.click();
                }
            });
        }
    });
});
</script>
