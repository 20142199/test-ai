<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    .header-container {
        width: 100%;
        padding: 16px;
        background: transparent;
    }

    .header-inner {
        max-width: 1888px;
        margin: 0 auto;
        height: 62px;
        background: #FFFFFF;
        border: 1px solid #D8DCDE;
        border-radius: 8px;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 24px;
    }

    .header-left {
        display: flex;
        align-items: center;
        gap: 24px;
    }

    .logo-section {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .logo-icon {
        width: 32px;
        height: 32px;
    }

    .logo-text {
        font-size: 26.67px;
        font-weight: 600;
        color: #3F515C;
        line-height: 30px;
    }

    .nav-section {
        display: flex;
        align-items: center;
    }

    .nav-item {
        padding: 8px 16px;
        font-size: 18.69px;
        font-weight: 400;
        color: #14A39A;
        text-decoration: none;
        line-height: 22px;
    }

    .header-right {
        display: flex;
        align-items: center;
        gap: 24px;
    }

    .access-button {
        padding: 8px 16px;
        background: #14A39A;
        border-radius: 4px;
        border: none;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .access-button-text {
        font-size: 17.69px;
        font-weight: 400;
        color: #FFFFFF;
        line-height: 20px;
    }

    .divider {
        width: 1px;
        height: 36px;
        background: #D8DCDE;
    }

    .icon-frame {
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .icon-frame svg {
        width: 22px;
        height: 22px;
    }

    @media (max-width: 1440px) {
        .header-inner {
            max-width: 1408px;
        }
    }

    @media (max-width: 768px) {
        .header-inner {
            padding: 0 16px;
        }

        .header-left {
            gap: 16px;
        }

        .header-right {
            gap: 16px;
        }

        .logo-text {
            font-size: 20px;
        }

        .nav-item {
            font-size: 14px;
            padding: 6px 12px;
        }

        .access-button {
            padding: 6px 12px;
        }

        .access-button-text {
            font-size: 14px;
        }
    }
</style>

<header class="header-container">
    <div class="header-inner">
        <div class="header-left">
            <div class="logo-section">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo-icon">
                <span class="logo-text">VIETGATES</span>
            </div>
            <nav class="nav-section">
                <a href="#" class="nav-item">Trang chủ</a>
            </nav>
        </div>
        <div class="header-right">
            <a href="#" class="access-button">
                <span class="access-button-text">Truy cập</span>
            </a>
            <div class="divider"></div>
            <div class="icon-frame">
                <svg viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 0C4.925 0 0 4.925 0 11C0 17.075 4.925 22 11 22C17.075 22 22 17.075 22 11C22 4.925 17.075 0 11 0ZM11 4.125C13.0625 4.125 14.7188 5.78125 14.7188 7.84375C14.7188 9.90625 13.0625 11.5625 11 11.5625C8.9375 11.5625 7.28125 9.90625 7.28125 7.84375C7.28125 5.78125 8.9375 4.125 11 4.125ZM11 19.9375C8.25 19.9375 5.775 18.6563 4.125 16.6875C4.15625 14.6563 8.15625 13.5313 11 13.5313C13.8438 13.5313 17.8438 14.6563 17.875 16.6875C16.225 18.6563 13.75 19.9375 11 19.9375Z" fill="#14A39A"/>
                </svg>
            </div>
        </div>
    </div>
</header>
