<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
        }

        .header-wrapper {
            width: 100%;
            padding: 16px;
            background: transparent;
        }

        .header-container {
            max-width: 1888px;
            width: 100%;
            margin: 0 auto;
            height: 62px;
            background: #FFFFFF;
            border: 1px solid #D8DCE0;
            border-radius: 8px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        .logo-container {
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-container img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-size: 20px;
            font-weight: 700;
            line-height: 30px;
            color: #3F515C;
            letter-spacing: 0.5px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .nav-item {
            padding: 8px 16px;
            text-decoration: none;
        }

        .nav-link {
            font-size: 16px;
            font-weight: 500;
            line-height: 22px;
            color: #14A39A;
            text-decoration: none;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 24px;
        }

        .access-button {
            background: #14A39A;
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .access-button span {
            font-size: 16px;
            font-weight: 500;
            line-height: 20px;
            color: #FFFFFF;
        }

        .divider {
            width: 1px;
            height: 36px;
            background: #D8DCE0;
        }

        .language-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .language-icon svg {
            width: 22px;
            height: 22px;
            fill: #14A39A;
        }

        /* Responsive adjustments */
        @media (max-width: 1440px) {
            .header-container {
                max-width: calc(100% - 32px);
            }
        }

        @media (max-width: 768px) {
            .header-container {
                padding: 0 16px;
            }

            .brand-name {
                font-size: 16px;
            }

            .nav-link {
                font-size: 14px;
            }

            .header-left {
                gap: 16px;
            }

            .header-right {
                gap: 16px;
            }
        }

        @media (max-width: 480px) {
            .nav-menu {
                display: none;
            }
            
            .brand-name {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="header-wrapper">
        <div class="header-container">
            <div class="header-left">
                <div class="logo-section">
                    <div class="logo-container">
                        <img src="{{ asset('images/logo.png') }}" alt="VietGates Logo">
                    </div>
                    <div class="brand-name">VIETGATES</div>
                </div>
                <div class="nav-menu">
                    <div class="nav-item">
                        <a href="#" class="nav-link">Trang chủ</a>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <button class="access-button">
                    <span>Truy cập</span>
                </button>
                <div class="divider"></div>
                <div class="language-icon">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
