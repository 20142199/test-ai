<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    
    .header {
        width: 100%;
        height: 116px;
        border-bottom: 1px solid rgb(250, 188, 67);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .header-content {
        width: 100%;
        max-width: 1440px;
        height: 50px;
        padding: 0 130px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    
    .header-logo {
        width: 181.99px;
        height: 50px;
    }
    
    .header-logo img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    
    .header-menu {
        display: flex;
        align-items: center;
        gap: 60px;
        height: 32px;
    }
    
    .menu-button {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 6px 12px;
        height: 28px;
        border-radius: 999px;
        background: transparent;
        border: none;
        cursor: pointer;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 16px;
        color: #ffffff;
    }
    
    .menu-button:hover {
        background: rgba(255, 255, 255, 0.1);
    }
    
    .language-selector {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 7px 12px;
        height: 32px;
        border-radius: 999px;
        background: transparent;
        border: none;
        cursor: pointer;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: rgb(56, 56, 61);
    }
    
    .language-selector:hover {
        background: rgba(0, 0, 0, 0.05);
    }
    
    .flag-icon {
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }
    
    .caret-icon {
        width: 16px;
        height: 16px;
        fill: rgb(56, 56, 61);
    }
    
    .arrow-icon {
        width: 14px;
        height: 14px;
        fill: #ffffff;
    }
    
    /* Responsive styles */
    @media (max-width: 1440px) {
        .header-content {
            padding: 0 calc(130px * 100vw / 1440);
        }
    }
    
    @media (max-width: 768px) {
        .header {
            height: auto;
            min-height: 80px;
        }
        
        .header-content {
            padding: 0 20px;
            height: auto;
            min-height: 50px;
            flex-wrap: wrap;
            gap: 15px;
        }
        
        .header-logo {
            width: 140px;
            height: 38px;
        }
        
        .header-menu {
            gap: 20px;
        }
        
        .menu-button {
            font-size: 12px;
            padding: 4px 8px;
        }
    }
</style>

<header class="header">
    <div class="header-content">
        <div class="header-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Beki Solutions Intelligence Logo">
        </div>
        
        <nav class="header-menu">
            <button class="menu-button">
                <svg class="arrow-icon" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.53125 7L12.4706 7M12.4706 7L7.87563 2.40401M12.4706 7L7.87563 11.594" stroke="currentColor" stroke-width="1.3125" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Collect</span>
            </button>
            
            <button class="menu-button">
                <svg class="arrow-icon" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1.53125 7L12.4706 7M12.4706 7L7.87563 2.40401M12.4706 7L7.87563 11.594" stroke="currentColor" stroke-width="1.3125" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Contact Us</span>
            </button>
            
            <button class="language-selector">
                <svg class="flag-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10" r="9.38" fill="#DA0822"/>
                    <path d="M10 5.51L11.62 9.59H15.93L12.65 11.91L14.27 16L10 13.67L5.73 16L7.35 11.91L4.07 9.59H8.38L10 5.51Z" fill="#FFDA44"/>
                </svg>
                <span>Tiếng Việt</span>
                <svg class="caret-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.24805 5.24745L8 11.7512L13.752 5.24745" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </nav>
    </div>
</header>
