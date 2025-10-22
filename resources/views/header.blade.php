<header class="header">
    <div class="header-content">
        <div class="header-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Beki Solutions Intelligence Logo">
        </div>
        
        <nav class="header-menu">
            <x-buttons.menu-button text="Collect" />
            
            <x-buttons.menu-button text="Contact Us" />
            
            <button class="language-selector">
                <x-icons.flag-vn />
                <span>Tiếng Việt</span>
                <x-icons.caret-down />
            </button>
        </nav>
    </div>
</header>
