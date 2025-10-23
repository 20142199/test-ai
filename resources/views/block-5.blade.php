<div class="block-5-wrapper">
    <div class="block-5-container">
        <!-- Left Section -->
        <div class="block-5-left">
            <h2 class="block-5-heading">Bắt đầu giao dịch cùng cộng đồng VietGates ngay hôm nay</h2>
            
            <p class="block-5-description">Tham gia VietGates để trải nghiệm sàn giao dịch tài sản số an toàn, tiện lợi và thân thiện nhất dành cho người Việt. Chỉ mất vài phút để đăng ký, bạn đã có thể mua bán crypto bằng VND một cách nhanh chóng và minh bạch.</p>

            <div class="block-5-buttons">
                @component('components.button', ['variant' => 'outline', 'size' => 'sm', 'class' => 'btn-register-large'])
                    Đăng ký ngay
                @endcomponent
                @component('components.button', ['variant' => 'primary', 'size' => 'sm', 'class' => 'btn-learn-large'])
                    Tìm hiểu thêm
                @endcomponent
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
                        <path d="M0 152V60C50 50 100 40 150 35C200 30 250 32 300 28C350 24 400 20 450 22C500 24 550 28 561 30V152Z" 
                              fill="url(#chartAreaGradient)" opacity="0.4"/>
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
