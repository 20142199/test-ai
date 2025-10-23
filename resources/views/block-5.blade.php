<div class="block-5-container">
    <div class="block-5-inner">
        <!-- Left Section -->
        <div class="block-5-left">
            <h2 class="block-5-title">Bắt đầu giao dịch cùng cộng đồng VietGates ngay hôm nay</h2>
            
            <p class="block-5-description">
                Tham gia VietGates để trải nghiệm sàn giao dịch tài sản số an toàn, tiện lợi và thân thiện nhất dành cho người Việt. Chỉ mất vài phút để đăng ký, bạn đã có thể mua bán crypto bằng VND một cách nhanh chóng và minh bạch.
            </p>

            <div class="block-5-buttons">
                @include('common.button', ['type' => 'outline', 'text' => 'Đăng ký ngay'])
                @include('common.button', ['type' => 'primary', 'text' => 'Tìm hiểu thêm'])
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
