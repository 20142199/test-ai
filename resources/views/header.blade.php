<header class="site-header">
    <div class="header-container">
        <div class="header-content">
            <div class="logo-section">
                <img src="{{ asset('images/logo.png') }}" alt="Bekisoft JSC Logo" class="logo">
                <span class="company-name">Bekisoft JSC</span>
            </div>
            <nav class="main-navigation">
                <ul class="nav-menu">
                    <li class="nav-item"><a href="#home" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#services" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                </ul>
            </nav>
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
        background-color: #ffffff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .header-container {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .header-content {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 0;
    }

    .logo-section {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .logo {
        height: 48px;
        width: auto;
        object-fit: contain;
    }

    .company-name {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 24px;
        font-weight: 600;
        color: #2c3e50;
        letter-spacing: -0.5px;
    }

    .main-navigation {
        display: flex;
        align-items: center;
    }

    .nav-menu {
        display: flex;
        list-style: none;
        gap: 40px;
        margin: 0;
        padding: 0;
    }

    .nav-item {
        display: inline-block;
    }

    .nav-link {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #555555;
        text-decoration: none;
        transition: color 0.3s ease;
        padding: 8px 12px;
    }

    .nav-link:hover {
        color: #2c3e50;
    }

    /* Responsive Design */
    @media screen and (max-width: 1024px) {
        .header-container {
            padding: 0 24px;
        }

        .nav-menu {
            gap: 24px;
        }

        .company-name {
            font-size: 20px;
        }

        .nav-link {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 768px) {
        .header-container {
            padding: 0 16px;
        }

        .header-content {
            padding: 16px 0;
        }

        .logo {
            height: 40px;
        }

        .company-name {
            font-size: 18px;
        }

        .nav-menu {
            gap: 16px;
        }

        .nav-link {
            font-size: 14px;
            padding: 6px 8px;
        }
    }

    @media screen and (max-width: 480px) {
        .header-content {
            flex-direction: column;
            gap: 16px;
        }

        .nav-menu {
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
        }

        .company-name {
            display: none;
        }
    }
</style>
