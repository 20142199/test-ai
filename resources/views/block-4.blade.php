<style>
    .block-4-container {
        width: 100%;
        background: #FFFFFF;
        padding: 64px 0;
    }

    .block-4-inner {
        max-width: 1920px;
        margin: 0 auto;
        padding: 0 160px;
    }

    .block-4-title {
        font-size: 38px;
        font-weight: 700;
        color: #14A39A;
        text-align: center;
        margin: 0 0 32px 0;
        line-height: 45px;
    }

    .block-4-content {
        display: flex;
        gap: 18px;
        align-items: center;
    }

    .block-4-left {
        flex: 0 0 429px;
        position: relative;
        height: 518px;
    }

    .block-4-gradient {
        position: absolute;
        top: -108.5px;
        left: -101px;
        width: 559px;
        height: 559px;
        background: radial-gradient(circle, rgba(0, 169, 158, 1) 0%, rgba(0, 255, 237, 0) 100%);
        opacity: 0.3;
        border-radius: 50%;
    }

    .crypto-card {
        position: absolute;
        background: #14A39A;
        border: 1px solid #19A491;
        border-radius: 15px;
        backdrop-filter: blur(147.9px);
        box-shadow: inset 0 0 5.6px rgba(51, 255, 232, 1);
        padding: 8px 16px;
        color: white;
    }

    .crypto-card-1 {
        top: 32.5px;
        left: 123px;
        width: 181px;
    }

    .crypto-card-2 {
        top: 213.5px;
        left: 235px;
        width: 139px;
    }

    .crypto-card-3 {
        top: 237.5px;
        left: -43px;
        width: 151px;
    }

    .crypto-card-value {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 10px 0;
        line-height: 19px;
    }

    .crypto-card-label {
        font-size: 12px;
        font-weight: 400;
        margin: 0;
        line-height: 14px;
        opacity: 0.9;
    }

    .crypto-card-detail {
        margin-top: 8px;
    }

    .crypto-card-detail-label {
        font-size: 12px;
        margin: 0 0 8px 0;
        line-height: 14px;
    }

    .crypto-card-detail-value {
        font-size: 16px;
        font-weight: 600;
        margin: 0 0 8px 0;
        line-height: 19px;
    }

    .crypto-card-change {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        line-height: 14px;
    }

    .crypto-card-chart {
        margin-top: 10px;
        padding-top: 10px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
    }

    .chart-date-badge {
        display: inline-block;
        background: white;
        color: #14A39A;
        padding: 1px 5.5px;
        border-radius: 10px;
        font-size: 6px;
        font-weight: 500;
        line-height: 7px;
        margin-bottom: 4px;
    }

    .crypto-icon {
        position: absolute;
        width: 38px;
        height: 38px;
        border-radius: 50%;
    }

    .crypto-icon-1 {
        top: 107.5px;
        left: 123px;
    }

    .crypto-icon-2 {
        top: 157.5px;
        left: 240px;
    }

    .crypto-icon-3 {
        top: 185.5px;
        left: 13px;
    }

    .crypto-icon img {
        width: 100%;
        height: 100%;
        object-fit: contain;
    }

    .chart-line {
        position: absolute;
        top: 83.5px;
        left: -64px;
        width: 510px;
        height: 122px;
    }

    .chart-line svg {
        width: 100%;
        height: 100%;
    }

    .block-4-right {
        flex: 1;
        max-width: 645px;
    }

    .feature-item {
        border-bottom: 2px solid transparent;
        border-image: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(25,164,145,0.3) 50%, rgba(255,255,255,0) 100%) 1;
        padding: 16px 24px;
    }

    .feature-item-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
    }

    .feature-item-title {
        font-size: 18.69px;
        font-weight: 600;
        color: #14A39A;
        margin: 0;
        line-height: 22px;
    }

    .feature-item-icon {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .feature-item-icon svg {
        width: 13.61px;
        height: 22.27px;
        fill: #19A491;
    }

    .feature-item-content {
        margin-top: 8px;
        font-size: 14px;
        color: #3F515C;
        line-height: 1.57;
        display: none;
    }

    .feature-item.expanded .feature-item-content {
        display: block;
    }

    .feature-item.expanded {
        padding: 16px 24px 24px 24px;
    }

    @media (max-width: 1440px) {
        .block-4-inner {
            padding: 0 80px;
        }

        .block-4-left {
            flex: 0 0 380px;
        }
    }

    @media (max-width: 1024px) {
        .block-4-inner {
            padding: 0 40px;
        }

        .block-4-content {
            flex-direction: column;
        }

        .block-4-left {
            flex: none;
            width: 100%;
            max-width: 429px;
        }

        .block-4-right {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .block-4-inner {
            padding: 0 16px;
        }

        .block-4-title {
            font-size: 28px;
            line-height: 36px;
        }

        .block-4-left {
            display: none;
        }

        .feature-item {
            padding: 12px 16px;
        }

        .feature-item-title {
            font-size: 16px;
        }
    }
</style>

<div class="block-4-container">
    <div class="block-4-inner">
        <h2 class="block-4-title">Tại sao chọn VietGates?</h2>

        <div class="block-4-content">
            <!-- Left Side: Visual Display -->
            <div class="block-4-left">
                <div class="block-4-gradient"></div>

                <!-- Data Cards -->
                <div class="crypto-card crypto-card-1">
                    <p class="crypto-card-value">| $4,528 USD</p>
                    <p class="crypto-card-label">Lợi nhuận giao dịch 30 ngày</p>
                </div>

                <div class="crypto-card crypto-card-2">
                    <p class="crypto-card-value">| 1,44,528 BTC</p>
                    <p class="crypto-card-label">Tổng sở hữu tài sản</p>
                </div>

                <div class="crypto-card crypto-card-3">
                    <div class="crypto-card-detail">
                        <p class="crypto-card-detail-label">Giá trị trung bình</p>
                        <p class="crypto-card-detail-value">4,528 USD</p>
                        <div class="crypto-card-change">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.5 10.5L6 1.5L10.5 10.5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <span>+45,66%</span>
                        </div>
                    </div>
                    <div class="crypto-card-chart">
                        <svg width="119" height="53" viewBox="0 0 119 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 53C15 45 30 35 45 30C60 25 75 28 90 20C105 12 119 0 119 0" stroke="url(#chartGradient)" stroke-width="1" fill="url(#chartFillGradient)"/>
                            <defs>
                                <linearGradient id="chartGradient" x1="0" y1="0" x2="119" y2="0">
                                    <stop offset="0%" stop-color="rgba(255,255,255,0)" />
                                    <stop offset="50%" stop-color="rgba(255,255,255,1)" />
                                    <stop offset="100%" stop-color="rgba(255,255,255,0)" />
                                </linearGradient>
                                <linearGradient id="chartFillGradient" x1="0" y1="0" x2="0" y2="53">
                                    <stop offset="0%" stop-color="rgba(255,255,255,0)" />
                                    <stop offset="40%" stop-color="rgba(255,255,255,0.1)" />
                                    <stop offset="100%" stop-color="rgba(255,255,255,0.4)" />
                                </linearGradient>
                            </defs>
                        </svg>
                        <div style="position: relative; margin-top: -14px; text-align: right; padding-right: 37px;">
                            <span class="chart-date-badge">02/05</span>
                        </div>
                    </div>
                </div>

                <!-- Cryptocurrency Icons -->
                <div class="crypto-icon crypto-icon-1">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19" cy="19" r="19" fill="url(#coinGrad1)"/>
                        <path d="M15 12L23 19L15 16L7 19L15 12Z" fill="white"/>
                        <path d="M15 16L15 27L23 19L15 16Z" fill="white" opacity="0.8"/>
                        <path d="M23 19L15 27L7 19L15 16L23 19Z" fill="white" opacity="0.6"/>
                        <defs>
                            <linearGradient id="coinGrad1" x1="19" y1="0" x2="19" y2="38" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="crypto-icon crypto-icon-2">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19" cy="19" r="19" fill="url(#coinGrad2)"/>
                        <path d="M19 9L19 15L25 19L19 23L19 29L13 19L19 9Z" fill="white"/>
                        <defs>
                            <linearGradient id="coinGrad2" x1="19" y1="0" x2="19" y2="38" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <div class="crypto-icon crypto-icon-3">
                    <svg width="39" height="38" viewBox="0 0 39 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="19.5" cy="19" r="19" fill="url(#coinGrad3)"/>
                        <path d="M19.5 8L16 18H23L19.5 30L23 20H16L19.5 8Z" fill="white"/>
                        <defs>
                            <linearGradient id="coinGrad3" x1="19.5" y1="0" x2="19.5" y2="38" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="1" stop-color="#19A491"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

                <!-- Chart Line -->
                <div class="chart-line">
                    <svg width="510" height="122" viewBox="0 0 510 122" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 60C85 55 170 50 255 45C340 40 425 35 510 30" stroke="url(#lineGradient)" stroke-width="2"/>
                        <defs>
                            <linearGradient id="lineGradient" x1="0" y1="60" x2="510" y2="30">
                                <stop offset="0%" stop-color="rgba(20,163,154,0)" />
                                <stop offset="50%" stop-color="rgba(20,163,154,1)" />
                                <stop offset="100%" stop-color="rgba(20,163,154,0)" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <!-- Right Side: Feature List -->
            <div class="block-4-right">
                <div class="feature-item expanded">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">Thiết kế cho người Việt</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                    <div class="feature-item-content">
                        <p>VietGates được xây dựng với mục tiêu phục vụ cộng đồng Việt Nam. Giao diện hoàn toàn bằng tiếng Việt, hỗ trợ VND và các phương thức thanh toán nội địa quen thuộc, giúp mọi người dễ dàng tiếp cận và sử dụng.</p>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">An toàn & bảo mật hàng đầu</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">Nhanh chóng & tiện lợi</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">Đa dạng cách giao dịch</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">Hỗ trợ tận tình 24/7</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="feature-item">
                    <div class="feature-item-header">
                        <h3 class="feature-item-title">Cộng đồng đang phát triển mạnh mẽ</h3>
                        <div class="feature-item-icon">
                            <svg viewBox="0 0 14 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L12 11.5L1 22" stroke="#19A491" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const featureItems = document.querySelectorAll('.feature-item-header');
    
    featureItems.forEach(header => {
        header.addEventListener('click', function() {
            const item = this.parentElement;
            const wasExpanded = item.classList.contains('expanded');
            
            // Close all items
            document.querySelectorAll('.feature-item').forEach(el => {
                el.classList.remove('expanded');
            });
            
            // Toggle current item
            if (!wasExpanded) {
                item.classList.add('expanded');
            }
        });
    });
});
</script>
