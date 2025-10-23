<header style="background: transparent; padding: 16px; max-width: 1920px; margin: 0 auto;">
    <div style="
        background: #FFFFFF;
        border: 1px solid #D8DCDF;
        border-radius: 8px;
        box-shadow: 0 4px 4px rgba(0, 0, 0, 0.25);
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 12px 24px;
        height: 62px;
        max-width: 1888px;
        margin: 0 auto;
    ">
        <!-- Left Section: Logo and Navigation -->
        <div style="display: flex; align-items: center; gap: 24px;">
            <!-- Logo and Brand -->
            <div style="display: flex; align-items: center; gap: 8px;">
                <div style="width: 32px; height: 32px;">
                    <img src="{{ asset('images/logo.png') }}" alt="VietGates Logo" style="width: 100%; height: 100%; object-fit: contain;">
                </div>
                <span style="
                    font-family: Arial, sans-serif;
                    font-size: 20px;
                    font-weight: 700;
                    color: #3F515C;
                    line-height: 30px;
                ">VIETGATES</span>
            </div>
            
            <!-- Navigation Menu -->
            <nav style="display: flex; align-items: center;">
                <div style="padding: 8px 16px;">
                    <a href="#" style="
                        font-family: Arial, sans-serif;
                        font-size: 16px;
                        font-weight: 400;
                        color: #14A39A;
                        text-decoration: none;
                        line-height: 22px;
                    ">Trang chủ</a>
                </div>
            </nav>
        </div>
        
        <!-- Right Section: Access Button and Language -->
        <div style="display: flex; align-items: center; gap: 24px;">
            <!-- Access Button -->
            <button style="
                background: #14A39A;
                border: none;
                border-radius: 4px;
                padding: 8px 16px;
                height: 36px;
                cursor: pointer;
                font-family: Arial, sans-serif;
                font-size: 16px;
                font-weight: 400;
                color: #FFFFFF;
                line-height: 20px;
            ">Truy cập</button>
            
            <!-- Separator -->
            <div style="
                width: 1px;
                height: 36px;
                background: #D8DCDF;
            "></div>
            
            <!-- Language/Globe Icon -->
            <div style="width: 24px; height: 24px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#14A39A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2 12H22" stroke="#14A39A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22C9.49872 19.2616 8.07725 15.708 8 12C8.07725 8.29203 9.49872 4.73835 12 2Z" stroke="#14A39A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</header>

<style>
    /* Responsive adjustments */
    @media (max-width: 1440px) {
        header {
            padding: 16px;
        }
    }
    
    @media (max-width: 768px) {
        header > div {
            flex-direction: column;
            height: auto;
            gap: 16px;
            padding: 16px;
        }
        
        header > div > div:first-child {
            width: 100%;
            flex-direction: column;
            align-items: flex-start;
        }
        
        header > div > div:last-child {
            width: 100%;
            justify-content: space-between;
        }
    }
</style>
