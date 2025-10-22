<header class="site-header">
    <div class="header-content">
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="BekiSoft" class="logo">
        </div>
        <div class="menu-container">
            <div class="language-selector">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                        <circle cx="10" cy="10" r="9.375" fill="white"/>
                        <circle cx="10" cy="10" r="9.375" fill="#D80027"/>
                        <path d="M10 5.625L11.545 10.455H16.545L12.5 13.295L14.045 18.125L10 15.285L5.955 18.125L7.5 13.295L3.455 10.455H8.455L10 5.625Z" fill="#FFDA44"/>
                    </g>
                    <defs>
                        <clipPath id="clip0">
                            <rect width="20" height="20" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <span class="language-text">Tiếng Việt</span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="caret-down">
                    <path d="M4 6L8 10L12 6" stroke="#383839" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</header>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .site-header {
        width: 100%;
        max-width: 1440px;
        height: 116px;
        margin: 0 auto;
        border-bottom: 1px solid #FABC43;
        background: #fff;
    }

    .header-content {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 100%;
        padding: 33px 130px;
        max-width: 1440px;
        margin: 0 auto;
    }

    .logo-container {
        display: flex;
        align-items: center;
        height: 50px;
    }

    .logo {
        height: 50px;
        width: auto;
        max-width: 182px;
        object-fit: contain;
    }

    .menu-container {
        display: flex;
        align-items: center;
        height: 32px;
    }

    .language-selector {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 6px 12px;
        height: 32px;
        border-radius: 999px;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .language-selector:hover {
        background-color: #f5f5f5;
    }

    .language-text {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #383839;
        margin: 0 4px;
    }

    .caret-down {
        width: 16px;
        height: 16px;
    }

    /* Responsive design */
    @media screen and (max-width: 1440px) {
        .header-content {
            padding: 33px 80px;
        }
    }

    @media screen and (max-width: 1024px) {
        .header-content {
            padding: 33px 40px;
        }
    }

    @media screen and (max-width: 768px) {
        .site-header {
            height: auto;
            min-height: 80px;
        }

        .header-content {
            padding: 20px 24px;
            flex-wrap: wrap;
        }

        .logo {
            height: 40px;
            max-width: 150px;
        }

        .menu-container {
            height: auto;
        }
    }

    @media screen and (max-width: 480px) {
        .header-content {
            padding: 16px 16px;
        }

        .logo {
            height: 32px;
            max-width: 120px;
        }

        .language-selector {
            padding: 4px 8px;
            height: 28px;
        }

        .language-text {
            font-size: 12px;
        }
    }
</style>
