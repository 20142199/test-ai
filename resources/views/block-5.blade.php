<style>
    .block-5-container {
        width: 100%;
        background: #FFFFFF;
        padding: 0;
        overflow: hidden;
    }

    .block-5-inner {
        max-width: 1920px;
        margin: 0 auto;
        min-height: 774px;
        display: flex;
        align-items: center;
        gap: 32px;
        padding: 100px 160px;
        position: relative;
    }

    .block-5-left {
        flex: 0 0 741px;
        z-index: 2;
    }

    .block-5-title {
        font-size: 48px;
        font-weight: 700;
        color: #14A39A;
        line-height: 1.5;
        margin: 0 0 32px 0;
    }

    .block-5-description {
        font-size: 18px;
        font-weight: 400;
        color: #3F515C;
        line-height: 1.5;
        margin: 0 0 32px 0;
    }

    .block-5-buttons {
        display: flex;
        gap: 16px;
        margin-bottom: 32px;
    }

    .btn-outline {
        padding: 16px 24px;
        background: transparent;
        border: 1px solid #14A39A;
        border-radius: 4px;
        font-size: 17px;
        font-weight: 400;
        color: #14A39A;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        line-height: 20px;
    }

    .btn-filled {
        padding: 16px 24px;
        background: #14A39A;
        border: none;
        border-radius: 4px;
        font-size: 17px;
        font-weight: 400;
        color: #FFFFFF;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        line-height: 20px;
    }

    .block-5-app-section {
        margin-top: 52px;
    }

    .app-download-title {
        font-size: 19px;
        font-weight: 600;
        background: linear-gradient(90deg, #14A39A 0%, #49FFED 50%, #0CB89E 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0 0 24px 0;
        opacity: 0.8;
    }

    .app-badges {
        display: flex;
        gap: 12px;
    }

    .app-badge {
        height: 40px;
        display: inline-block;
    }

    .app-badge img {
        height: 100%;
        width: auto;
    }

    .block-5-right {
        flex: 1;
        position: relative;
        height: 551px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chart-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 497px;
        height: 497px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(25, 164, 145, 1) 0%, rgba(25, 164, 145, 0) 100%);
        opacity: 0.3;
    }

    .phone-mockup {
        position: relative;
        width: 264px;
        height: 551px;
        z-index: 2;
    }

    .chart-card {
        position: absolute;
        background: linear-gradient(180deg, rgba(207, 255, 252, 0.7) 0%, rgba(99, 255, 239, 0) 100%);
        border: 1px solid rgba(73, 255, 237, 0.5);
        border-radius: 15px;
        backdrop-filter: blur(6.4px);
        padding: 24px 18px;
        z-index: 3;
    }

    .chart-card-main {
        top: 45px;
        right: -50px;
        width: 650px;
        height: 334px;
    }

    .bitcoin-info {
        position: absolute;
        top: 70px;
        right: 80px;
        display: flex;
        align-items: center;
        gap: 18px;
        z-index: 4;
    }

    .bitcoin-icon {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: linear-gradient(180deg, #F9AA4B 0%, #F7931A 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .bitcoin-details h3 {
        font-size: 27px;
        font-weight: 600;
        color: #14A39A;
        margin: 0;
        line-height: 32px;
    }

    .bitcoin-details .btc-label {
        font-size: 18px;
        color: #CFCFCF;
        margin: 0;
        line-height: 21px;
    }

    .bitcoin-details .btc-value {
        font-size: 16px;
        color: #788588;
        margin: 8px 0 0 0;
        line-height: 19px;
    }

    .bitcoin-details .btc-change {
        font-size: 16px;
        color: #14A39A;
        margin: 4px 0 0 0;
        line-height: 19px;
    }

    .profit-card {
        position: absolute;
        background: linear-gradient(180deg, rgba(87, 255, 245, 1) 0%, rgba(0, 255, 229, 0) 100%);
        border: 1px solid rgba(73, 255, 237, 0.5);
        border-radius: 15px;
        backdrop-filter: blur(6.4px);
        padding: 18px;
        z-index: 4;
    }

    .profit-card-1 {
        bottom: 100px;
        right: -120px;
        width: 200px;
    }

    .profit-card h4 {
        font-size: 24px;
        font-weight: 600;
        color: #3F515C;
        margin: 0 0 8px 0;
        line-height: 32px;
    }

    .profit-card p {
        font-size: 14px;
        color: #3F515C;
        margin: 0 0 16px 0;
        line-height: 21px;
    }

    .profit-card .label {
        font-size: 14px;
        color: #3F515C;
        margin: 0 0 4px 0;
    }

    .profit-change {
        display: flex;
        align-items: center;
        gap: 8px;
        margin-top: 8px;
    }

    .profit-change-value {
        font-size: 27px;
        font-weight: 600;
        color: #3F515C;
        margin: 0;
    }

    .profit-change-percent {
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 27px;
        color: #3F515C;
    }

    .profit-detail {
        margin-top: 8px;
        font-size: 18px;
        color: #3F515C;
    }

    .value-card {
        position: absolute;
        background: linear-gradient(180deg, rgba(87, 255, 245, 1) 0%, rgba(0, 255, 229, 0) 100%);
        border: 1px solid rgba(73, 255, 237, 0.5);
        border-radius: 15px;
        backdrop-filter: blur(6.4px);
        padding: 18px;
        z-index: 4;
        bottom: 80px;
        right: 110px;
        width: 190px;
    }

    .value-card h4 {
        font-size: 27px;
        font-weight: 600;
        color: #3F515C;
        margin: 0 0 4px 0;
    }

    .value-card p {
        font-size: 18px;
        color: #3F515C;
        margin: 0;
    }

    .decorative-line {
        position: absolute;
        bottom: 150px;
        right: 0;
        width: 306px;
        height: 100px;
        z-index: 1;
    }

    .decorative-line svg {
        width: 100%;
        height: 100%;
    }

    @media (max-width: 1440px) {
        .block-5-inner {
            padding: 80px 80px;
        }

        .block-5-left {
            flex: 0 0 600px;
        }

        .chart-card-main {
            width: 550px;
            right: -20px;
        }
    }

    @media (max-width: 1024px) {
        .block-5-inner {
            flex-direction: column;
            padding: 60px 40px;
            min-height: auto;
        }

        .block-5-left {
            flex: none;
            max-width: 100%;
        }

        .block-5-right {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .block-5-inner {
            padding: 40px 16px;
        }

        .block-5-title {
            font-size: 32px;
        }

        .block-5-description {
            font-size: 16px;
        }

        .block-5-buttons {
            flex-direction: column;
        }

        .btn-outline,
        .btn-filled {
            text-align: center;
        }
    }
</style>

<div class="block-5-container">
    <div class="block-5-inner">
        <!-- Left Section -->
        <div class="block-5-left">
            <h2 class="block-5-title">Bắt đầu giao dịch cùng cộng đồng VietGates ngay hôm nay</h2>
            
            <p class="block-5-description">
                Tham gia VietGates để trải nghiệm sàn giao dịch tài sản số an toàn, tiện lợi và thân thiện nhất dành cho người Việt. Chỉ mất vài phút để đăng ký, bạn đã có thể mua bán crypto bằng VND một cách nhanh chóng và minh bạch.
            </p>

            <div class="block-5-buttons">
                <a href="#" class="btn-outline">Đăng ký ngay</a>
                <a href="#" class="btn-filled">Tìm hiểu thêm</a>
            </div>

            <div class="block-5-app-section">
                <h3 class="app-download-title">Tải ứng dụng</h3>
                <div class="app-badges">
                    <a href="#" class="app-badge">
                        <svg width="120" height="40" viewBox="0 0 120 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="120" height="40" rx="5" fill="#A6A6A6"/>
                            <rect x="0.875" y="0.875" width="118.25" height="38.25" rx="4.125" fill="black"/>
                            <path d="M28 20L17 10L17 30L28 20Z" fill="url(#appleGrad1)"/>
                            <path d="M17 20C17 15 20 12 25 10C22 7 17 7 17 10V30C17 33 22 33 25 30C20 28 17 25 17 20Z" fill="url(#appleGrad2)"/>
                            <text x="42" y="13" font-family="Arial, sans-serif" font-size="7" fill="white">Download on the</text>
                            <text x="42" y="27" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">App Store</text>
                            <defs>
                                <linearGradient id="appleGrad1" x1="17" y1="10" x2="28" y2="20">
                                    <stop stop-color="#32A1B8"/>
                                    <stop offset="1" stop-color="#0CB89E"/>
                                </linearGradient>
                                <linearGradient id="appleGrad2" x1="17" y1="7" x2="25" y2="30">
                                    <stop stop-color="#32A1B8"/>
                                    <stop offset="1" stop-color="#0CB89E"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                    <a href="#" class="app-badge">
                        <svg width="135" height="40" viewBox="0 0 135 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="135" height="40" rx="5" fill="black"/>
                            <rect x="0.875" y="0.875" width="133.25" height="38.25" rx="4.125" fill="#A6A6A6"/>
                            <path d="M11 7.5L23 20L11 32.5V7.5Z" fill="url(#playGrad1)"/>
                            <path d="M11 7.5L23 20L27 16L11 7.5Z" fill="url(#playGrad2)"/>
                            <path d="M11 32.5L23 20L27 24L11 32.5Z" fill="url(#playGrad3)"/>
                            <path d="M23 20L27 16L32.5 13L23 20Z" fill="url(#playGrad4)"/>
                            <text x="42" y="13" font-family="Arial, sans-serif" font-size="6.5" fill="white">GET IT ON</text>
                            <text x="42" y="27" font-family="Arial, sans-serif" font-size="14" font-weight="bold" fill="white">Google Play</text>
                            <defs>
                                <linearGradient id="playGrad1" x1="11" y1="7.5" x2="23" y2="32.5">
                                    <stop stop-color="#00A0FF"/>
                                    <stop offset="1" stop-color="#00E3FF"/>
                                </linearGradient>
                                <linearGradient id="playGrad2" x1="11" y1="7.5" x2="27" y2="16">
                                    <stop stop-color="#FFE000"/>
                                    <stop offset="1" stop-color="#FFA800"/>
                                </linearGradient>
                                <linearGradient id="playGrad3" x1="11" y1="32.5" x2="27" y2="24">
                                    <stop stop-color="#FF3A44"/>
                                    <stop offset="1" stop-color="#C31162"/>
                                </linearGradient>
                                <linearGradient id="playGrad4" x1="23" y1="20" x2="32.5" y2="13">
                                    <stop stop-color="#32FFC7"/>
                                    <stop offset="1" stop-color="#00F076"/>
                                </linearGradient>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Section - Chart Visualization -->
        <div class="block-5-right">
            <div class="chart-background"></div>

            <!-- Main Chart Card -->
            <div class="chart-card chart-card-main">
                <svg width="100%" height="100%" viewBox="0 0 650 334" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <!-- Chart area with gradient -->
                    <path d="M0 150C100 140 200 120 300 100C400 80 500 60 650 40V334H0V150Z" fill="url(#chartFill)"/>
                    <path d="M0 150C100 140 200 120 300 100C400 80 500 60 650 40" stroke="url(#chartStroke)" stroke-width="4"/>
                    <defs>
                        <linearGradient id="chartFill" x1="325" y1="40" x2="325" y2="334" gradientUnits="userSpaceOnUse">
                            <stop stop-color="rgba(110, 229, 181, 0.4)"/>
                            <stop offset="1" stop-color="rgba(110, 229, 181, 0)"/>
                        </linearGradient>
                        <linearGradient id="chartStroke" x1="0" y1="100" x2="650" y2="100" gradientUnits="userSpaceOnUse">
                            <stop stop-color="rgba(110, 229, 181, 0.4)"/>
                            <stop offset="0.5" stop-color="rgba(110, 229, 181, 1)"/>
                            <stop offset="1" stop-color="rgba(110, 229, 181, 0)"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <!-- Bitcoin Info -->
            <div class="bitcoin-info">
                <div class="bitcoin-icon">₿</div>
                <div class="bitcoin-details">
                    <h3>Bitcoin</h3>
                    <span class="btc-label">BTC</span>
                    <p class="btc-value">0.00080 BTC</p>
                    <p class="btc-change">+125%</p>
                </div>
            </div>

            <!-- Profit Card -->
            <div class="profit-card profit-card-1">
                <h4>Lợi nhuận giao dịch</h4>
                <div class="profit-change">
                    <span class="profit-change-value">+75%</span>
                    <span class="profit-change-percent">↑</span>
                </div>
                <p class="profit-detail">Lệnh bán SOL</p>
            </div>

            <!-- Value Card -->
            <div class="value-card">
                <h4>$15.32</h4>
                <p>Giá trị</p>
            </div>

            <!-- Phone Mockup (placeholder) -->
            <div class="phone-mockup">
                <!-- Phone visualization would go here -->
            </div>

            <!-- Decorative Line -->
            <div class="decorative-line">
                <svg viewBox="0 0 306 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 50C50 45 100 40 150 35C200 30 250 25 306 20" stroke="url(#lineGrad)" stroke-width="3"/>
                    <defs>
                        <linearGradient id="lineGrad" x1="0" y1="50" x2="306" y2="20">
                            <stop stop-color="rgba(25,164,145,0.3)"/>
                            <stop offset="0.5" stop-color="rgba(25,164,145,1)"/>
                            <stop offset="1" stop-color="rgba(25,164,145,0.3)"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>
        </div>
    </div>
</div>
