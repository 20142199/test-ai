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

        .header {
            width: 100%;
            max-width: 1440px;
            height: 116px;
            margin: 0 auto;
            border-bottom: 1px solid #FABC43;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header-content {
            width: 1180px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 130px;
        }

        .logo-container {
            width: 181.99px;
            height: 50px;
            display: flex;
            align-items: center;
        }

        .logo-container img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .menu {
            display: flex;
            align-items: center;
            gap: 60px;
        }

        .menu-button {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 6px 12px;
            border-radius: 999px;
            background: transparent;
            border: none;
            cursor: pointer;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 14px;
            line-height: 16px;
            color: #FFFFFF;
        }

        .menu-button .icon {
            width: 14px;
            height: 14px;
        }

        .language-selector {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 7px 12px;
            border-radius: 999px;
            background: transparent;
            border: none;
            cursor: pointer;
        }

        .language-selector .flag-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }

        .language-selector .language-text {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 14px;
            line-height: 18px;
            color: #38383D;
            margin: 0 4px;
        }

        .language-selector .caret-icon {
            width: 16px;
            height: 16px;
        }

        /* Responsive design */
        @media (max-width: 1440px) {
            .header-content {
                width: calc(100% - 260px);
                padding: 0 20px;
            }
        }

        @media (max-width: 768px) {
            .header {
                height: auto;
                min-height: 80px;
                padding: 15px 0;
            }

            .header-content {
                width: 100%;
                padding: 0 20px;
                flex-direction: column;
                gap: 15px;
                height: auto;
            }

            .logo-container {
                width: 140px;
                height: 38px;
            }

            .menu {
                gap: 20px;
                flex-wrap: wrap;
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-container">
                <img src="{{ asset('images/logo.png') }}" alt="Bekisoft JSC Logo">
            </div>
            
            <nav class="menu">
                <div class="language-selector">
                    <svg class="flag-icon" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="9.4" fill="#D80027"/>
                        <path d="M10 5.5L11.545 10.455H16.708L12.582 13.345L14.127 18.3L10 15.41L5.873 18.3L7.418 13.345L3.292 10.455H8.455L10 5.5Z" fill="#FFDA44"/>
                    </svg>
                    <span class="language-text">Tiếng Việt</span>
                    <svg class="caret-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.248 5.247L8 11.751L13.752 5.247" stroke="#38383D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </nav>
        </div>
    </header>
</body>
</html>
