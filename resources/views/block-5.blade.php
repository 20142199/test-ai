<style>
    .block-5-wrapper {
        width: 100%;
        background: #FFFFFF;
        padding: 0;
        min-height: 774px;
        display: flex;
        align-items: center;
    }

    .block-5-container {
        max-width: 1920px;
        margin: 0 auto;
        width: 100%;
        display: flex;
        gap: 32px;
        padding: 0 160px;
        align-items: center;
    }

    .block-5-left {
        flex: 1;
        max-width: 741px;
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .block-5-heading {
        font-size: 48px;
        font-weight: 700;
        line-height: 45px;
        color: #14A39A;
        margin: 0;
        background: linear-gradient(180deg, #14A39A 0%, #0C6B67 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .block-5-description {
        font-size: 18px;
        font-weight: 400;
        line-height: 24px;
        color: #3F515C;
        margin: 0;
    }

    .block-5-buttons {
        display: flex;
        gap: 16px;
    }

    .btn-register-large {
        padding: 16px 24px;
        background: transparent;
        border: 1px solid #14A39A;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 500;
        line-height: 20px;
        color: #14A39A;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .btn-learn-large {
        padding: 16px 24px;
        background: #14A39A;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 500;
        line-height: 20px;
        color: #FFFFFF;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .download-app-section {
        display: flex;
        flex-direction: column;
        gap: 12px;
    }

    .download-app-title {
        font-size: 20px;
        font-weight: 600;
        line-height: 23px;
        color: #14A39A;
        background: linear-gradient(90deg, #14A39A 0%, #49FFED 50%, #0CB79E 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 0 20px rgba(20, 163, 154, 0.2);
        margin: 0;
    }

    .app-badges {
        display: flex;
        gap: 12px;
    }

    .app-badge {
        height: 40px;
        cursor: pointer;
        transition: transform 0.2s ease;
    }

    .app-badge:hover {
        transform: scale(1.05);
    }

    .app-badge img {
        height: 100%;
        width: auto;
    }

    .block-5-right {
        flex: 1;
        position: relative;
        min-height: 615px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .radial-bg-circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 497px;
        height: 497px;
        border-radius: 50%;
        background: radial-gradient(circle at center, rgba(25, 164, 145, 1) 0%, rgba(25, 164, 145, 0) 100%);
        opacity: 0.15;
        pointer-events: none;
    }

    .phone-mockup-container {
        position: relative;
        width: 264px;
        height: 552px;
        z-index: 2;
    }

    .phone-mockup {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #1A2A3A 0%, #0D151F 100%);
        border-radius: 30px;
        padding: 12px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.25);
        position: relative;
    }

    .phone-screen {
        width: 100%;
        height: 100%;
        background: #000;
        border-radius: 22px;
        overflow: hidden;
        position: relative;
    }

    .phone-screen img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .phone-notch {
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 120px;
        height: 25px;
        background: #000;
        border-radius: 0 0 15px 15px;
        z-index: 3;
    }

    /* Floating Chart Card */
    .floating-chart {
        position: absolute;
        top: 45px;
        left: -44px;
        width: 651px;
        height: 334px;
        background: linear-gradient(180deg, rgba(206, 255, 251, 0.7) 0%, rgba(99, 255, 238, 0) 100%);
        border: 1px solid;
        border-image: linear-gradient(180deg, rgba(44, 153, 142, 0) 0%, rgba(73, 255, 237, 0.5) 100%) 1;
        border-radius: 15px;
        backdrop-filter: blur(6.4px);
        padding: 45px 24px 24px;
        z-index: 1;
    }

    .chart-header {
        display: flex;
        align-items: flex-start;
        gap: 16px;
        margin-bottom: 24px;
    }

    .crypto-badge {
        width: 45px;
        height: 45px;
        background: #C4C4C4;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .crypto-badge img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .chart-info {
        flex: 1;
    }

    .chart-crypto-name {
        font-size: 27px;
        font-weight: 700;
        line-height: 33px;
        color: #14A39A;
        margin: 0 0 4px;
    }

    .chart-crypto-code {
        font-size: 18px;
        font-weight: 400;
        line-height: 21px;
        color: #CFCFCF;
        margin: 0;
    }

    .chart-value-info {
        text-align: right;
    }

    .chart-percentage {
        font-size: 16px;
        font-weight: 600;
        line-height: 19px;
        color: #14A39A;
        margin: 0 0 8px;
    }

    .chart-btc-value {
        font-size: 16px;
        font-weight: 400;
        line-height: 19px;
        color: #788590;
        margin: 0;
    }

    .chart-svg {
        width: 100%;
        height: 152px;
        margin-top: 24px;
    }

    /* Profit Cards */
    .profit-card {
        position: absolute;
        background: linear-gradient(180deg, rgba(87, 255, 244, 1) 0%, rgba(0, 255, 229, 0) 100%);
        border: 1px solid;
        border-image: linear-gradient(180deg, rgba(44, 153, 142, 0) 0%, rgba(73, 255, 237, 0.5) 100%) 1;
        border-radius: 15px;
        backdrop-filter: blur(6.4px);
        padding: 16px;
        z-index: 3;
    }

    .profit-card-1 {
        bottom: 207px;
        left: -74px;
        width: 200px;
    }

    .profit-card-2 {
        bottom: 193px;
        right: -55px;
        width: 190px;
    }

    .profit-title {
        font-size: 22px;
        font-weight: 700;
        line-height: 20px;
        color: #3F515C;
        margin: 0 0 8px;
    }

    .profit-subtitle {
        font-size: 16px;
        font-weight: 400;
        line-height: 19px;
        color: #3F515C;
        margin: 0;
    }

    .profit-label {
        font-size: 18px;
        font-weight: 400;
        line-height: 21px;
        color: #3F515C;
        margin: 0;
    }

    /* Decorative gradient arcs */
    .gradient-arc {
        position: absolute;
        stroke-width: 3.1px;
        fill: none;
        opacity: 0.6;
        z-index: 0;
    }

    .arc-1 {
        bottom: 182px;
        right: 212px;
    }

    .arc-2 {
        bottom: 120px;
        right: 332px;
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .block-5-container {
            padding: 0 80px;
            flex-direction: column;
            gap: 60px;
        }

        .block-5-left {
            max-width: 100%;
            text-align: center;
            align-items: center;
        }

        .block-5-buttons {
            justify-content: center;
        }

        .download-app-section {
            align-items: center;
        }

        .floating-chart,
        .profit-card,
        .gradient-arc {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        .block-5-container {
            padding: 0 40px;
        }

        .block-5-heading {
            font-size: 36px;
            line-height: 40px;
        }

        .block-5-description {
            font-size: 16px;
            line-height: 22px;
        }
    }

    @media (max-width: 768px) {
        .block-5-wrapper {
            padding: 60px 0;
        }

        .block-5-container {
            padding: 0 20px;
            gap: 40px;
        }

        .block-5-heading {
            font-size: 28px;
            line-height: 34px;
        }

        .block-5-description {
            font-size: 14px;
            line-height: 20px;
        }

        .block-5-buttons {
            flex-direction: column;
            width: 100%;
        }

        .btn-register-large,
        .btn-learn-large {
            width: 100%;
            text-align: center;
        }

        .app-badges {
            flex-direction: column;
            align-items: center;
        }

        .phone-mockup-container {
            transform: scale(0.8);
        }
    }
</style>

<div class="block-5-wrapper">
    <div class="block-5-container">
        <!-- Left Section -->
        <div class="block-5-left">
            <h2 class="block-5-heading">Bắt đầu giao dịch cùng cộng đồng VietGates ngay hôm nay</h2>
            
            <p class="block-5-description">Tham gia VietGates để trải nghiệm sàn giao dịch tài sản số an toàn, tiện lợi và thân thiện nhất dành cho người Việt. Chỉ mất vài phút để đăng ký, bạn đã có thể mua bán crypto bằng VND một cách nhanh chóng và minh bạch.</p>

            <div class="block-5-buttons">
                <a href="#" class="btn-register-large">Đăng ký ngay</a>
                <a href="#" class="btn-learn-large">Tìm hiểu thêm</a>
            </div>

            <div class="download-app-section">
                <h3 class="download-app-title">Tải ứng dụng</h3>
                <div class="app-badges">
                    <a href="#" class="app-badge">
                        <img src="{{ asset('images/block-5/google-play.png') }}" alt="Get it on Google Play">
                    </a>
                    <a href="#" class="app-badge">
                        <img src="{{ asset('images/block-5/app-store.png') }}" alt="Download on the App Store">
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="block-5-right">
            <div class="radial-bg-circle"></div>

            <!-- Floating Chart Card -->
            <div class="floating-chart">
                <div class="chart-header">
                    <div class="crypto-badge">
                        <img src="{{ asset('images/block-5/bitcoin-icon.png') }}" alt="Bitcoin">
                    </div>
                    <div class="chart-info">
                        <h4 class="chart-crypto-name">Bitcoin</h4>
                        <p class="chart-crypto-code">BTC</p>
                    </div>
                    <div class="chart-value-info">
                        <p class="chart-percentage">+125%</p>
                        <p class="chart-btc-value">0.00080 BTC</p>
                    </div>
                </div>

                <div class="chart-svg">
                    <svg width="100%" height="152" viewBox="0 0 561 152" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <!-- Chart area fill -->
                        <path d="M0 152V60C50 50 100 40 150 35C200 30 250 32 300 28C350 24 400 20 450 22C500 24 550 28 561 30V152Z" 
                              fill="url(#chartAreaGradient)" opacity="0.4"/>
                        <!-- Chart line -->
                        <path d="M0 60C50 50 100 40 150 35C200 30 250 32 300 28C350 24 400 20 450 22C500 24 550 28 561 30" 
                              stroke="url(#chartLineGradient)" stroke-width="4"/>
                        <defs>
                            <linearGradient id="chartAreaGradient" x1="280.5" y1="0" x2="280.5" y2="152" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#6EDCB6" stop-opacity="0.4"/>
                                <stop offset="1" stop-color="#6EDCB6" stop-opacity="0"/>
                            </linearGradient>
                            <linearGradient id="chartLineGradient" x1="0" y1="30" x2="561" y2="30" gradientUnits="userSpaceOnUse">
                                <stop offset="0" stop-color="#6EDCB6"/>
                                <stop offset="1" stop-color="#6EDCB6" stop-opacity="0.3"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <!-- Profit Card 1 -->
            <div class="profit-card profit-card-1">
                <p class="profit-title">$15.32</p>
                <p class="profit-label">Giá trị</p>
                <div style="margin-top: 8px;">
                    <p class="profit-subtitle">Lợi nhuận giao dịch</p>
                    <p class="profit-subtitle" style="margin-top: 4px;">Lệnh bán SOL</p>
                </div>
                <div style="display: flex; align-items: center; gap: 8px; margin-top: 8px;">
                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6.73 20.19L13.46 13.46L20.19 6.73M20.19 6.73H13.46M20.19 6.73V13.46" stroke="#FD8589" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span style="font-size: 27px; font-weight: 700; color: #3F515C;">+75%</span>
                </div>
            </div>

            <!-- Profit Card 2 -->
            <div class="profit-card profit-card-2">
                <p class="profit-title">| $4,528 USD</p>
                <p class="profit-subtitle">Lợi nhuận giao dịch 30 ngày</p>
            </div>

            <!-- Phone Mockup -->
            <div class="phone-mockup-container">
                <div class="phone-mockup">
                    <div class="phone-notch"></div>
                    <div class="phone-screen">
                        <img src="{{ asset('images/block-5/phone-screen.png') }}" alt="VietGates Mobile App">
                    </div>
                </div>
            </div>

            <!-- Decorative gradient arcs -->
            <svg class="gradient-arc arc-1" width="306" height="100" viewBox="0 0 306 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 50C50 20 100 10 150 8C200 6 250 12 306 30" stroke="url(#arcGradient1)" stroke-width="3.1"/>
                <defs>
                    <linearGradient id="arcGradient1" x1="0" y1="50" x2="306" y2="30" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#19A491"/>
                        <stop offset="1" stop-color="#60E8D9" stop-opacity="0.3"/>
                    </linearGradient>
                </defs>
            </svg>

            <svg class="gradient-arc arc-2" width="510" height="122" viewBox="0 0 510 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 100C100 60 200 30 300 15C400 0 450 8 510 25" stroke="url(#arcGradient2)" stroke-width="2"/>
                <defs>
                    <linearGradient id="arcGradient2" x1="0" y1="100" x2="510" y2="25" gradientUnits="userSpaceOnUse">
                        <stop offset="0" stop-color="#14A39A" stop-opacity="0"/>
                        <stop offset="0.52" stop-color="#14A39A"/>
                        <stop offset="1" stop-color="#14A39A" stop-opacity="0"/>
                    </linearGradient>
                </defs>
            </svg>

            <!-- Crypto icons decorative -->
            <div style="position: absolute; top: 107px; left: 123px; z-index: 4;">
                <div class="crypto-icon" style="width: 38px; height: 38px;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="8" fill="url(#cryptoGrad1)"/>
                        <defs>
                            <linearGradient id="cryptoGrad1" x1="10" y1="2" x2="10" y2="18">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div style="position: absolute; top: 157px; left: 240px; z-index: 4;">
                <div class="crypto-icon" style="width: 38px; height: 38px;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="8" fill="url(#cryptoGrad2)"/>
                        <defs>
                            <linearGradient id="cryptoGrad2" x1="10" y1="2" x2="10" y2="18">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div style="position: absolute; top: 185px; left: 13px; z-index: 4;">
                <div class="crypto-icon" style="width: 39px; height: 38px;">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="10" cy="10" r="8" fill="url(#cryptoGrad3)"/>
                        <defs>
                            <linearGradient id="cryptoGrad3" x1="10" y1="2" x2="10" y2="18">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>
