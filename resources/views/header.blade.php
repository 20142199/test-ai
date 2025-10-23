<header class="header">
    <div class="header-container">
        <!-- Left Section: Logo and Navigation -->
        <div class="header-left">
            @include('components.logo')
            
            <!-- Navigation Menu -->
            <nav class="nav-menu">
                @include('components.nav-link', ['text' => 'Trang chủ'])
            </nav>
        </div>
        
        <!-- Right Section: Access Button and Language -->
        <div class="header-right">
            @include('components.button')
                Truy cập
            @endinclude
            
            <div class="separator"></div>
            
            @include('components.globe-icon')
        </div>
    </div>
</header>
