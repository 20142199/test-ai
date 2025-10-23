<header style="
    width: 100%;
    max-width: 1440px;
    height: 116px;
    margin: 0 auto;
    border-bottom: 1px solid rgb(250, 188, 67);
    box-sizing: border-box;
">
    <div style="
        max-width: 1180px;
        height: 50px;
        margin: 0 auto;
        padding: 33px 130px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-sizing: border-box;
    ">
        <!-- Logo -->
        <div style="width: 181.99px; height: 50px;">
            <img src="{{ asset('images/logo.png') }}" alt="Beki Digital Intelligence" style="width: 100%; height: 100%; object-fit: contain;">
        </div>

        <!-- Menu -->
        <nav style="display: flex; align-items: center; gap: 60px;">
            <!-- Menu Items -->
            <div style="display: flex; gap: 60px; align-items: center;">
                <!-- Button 1 -->
                <a href="#" style="
                    display: flex;
                    align-items: center;
                    gap: 4px;
                    padding: 6px 12px;
                    text-decoration: none;
                    color: #FFFFFF;
                    font-size: 14px;
                    border-radius: 999px;
                    transition: background-color 0.3s;
                ">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.53125 7L12.4706 7M12.4706 7L7.875 2.40401M12.4706 7L7.875 11.5943" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Collect</span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.53125 7L12.4706 7M12.4706 7L7.875 2.40401M12.4706 7L7.875 11.5943" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>

                <!-- Button 2 -->
                <a href="#" style="
                    display: flex;
                    align-items: center;
                    gap: 4px;
                    padding: 6px 12px;
                    text-decoration: none;
                    color: #FFFFFF;
                    font-size: 14px;
                    border-radius: 999px;
                    transition: background-color 0.3s;
                ">
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.53125 7L12.4706 7M12.4706 7L7.875 2.40401M12.4706 7L7.875 11.5943" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Distribute</span>
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.53125 7L12.4706 7M12.4706 7L7.875 2.40401M12.4706 7L7.875 11.5943" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <!-- Language Selector -->
            <div style="
                display: flex;
                align-items: center;
                gap: 4px;
                padding: 7px 12px;
                border-radius: 999px;
                cursor: pointer;
            ">
                <!-- Vietnam Flag Icon -->
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="10" cy="10" r="9" fill="#D80027"/>
                    <path d="M10 6.5L11.545 11.09H16.18L12.318 13.82L13.863 18.41L10 15.68L6.137 18.41L7.682 13.82L3.82 11.09H8.455L10 6.5Z" fill="#FFDA44"/>
                </svg>
                <span style="color: #383D3D; font-size: 14px; line-height: 18px;">Tiếng Việt</span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.24805 5.24745L8 10.7512L13.7519 5.24745" stroke="#383D3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </nav>
    </div>
</header>

<style>
    @media (max-width: 1440px) {
        header > div {
            padding-left: calc(130px * 100vw / 1440px);
            padding-right: calc(130px * 100vw / 1440px);
        }
    }

    @media (max-width: 768px) {
        header {
            height: auto;
            min-height: 80px;
        }
        
        header > div {
            flex-direction: column;
            padding: 20px;
            height: auto;
            gap: 20px;
        }

        nav {
            flex-direction: column;
            gap: 20px !important;
        }

        nav > div {
            flex-direction: column;
            gap: 15px !important;
        }
    }
</style>
