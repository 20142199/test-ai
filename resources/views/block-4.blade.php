<style>
    .block-4-wrapper {
        width: 100%;
        background: #FFFFFF;
        padding: 64px 0;
    }

    .block-4-container {
        max-width: 1920px;
        margin: 0 auto;
        padding: 0 160px;
        display: flex;
        flex-direction: column;
        gap: 32px;
    }

    .block-4-heading {
        font-size: 45px;
        font-weight: 700;
        line-height: 45px;
        color: #14A39A;
        text-align: center;
        margin: 0;
        background: linear-gradient(180deg, #14A39A 0%, #0C6B67 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .block-4-content {
        display: flex;
        gap: 48px;
        align-items: center;
    }

    .block-4-left {
        flex: 1;
        position: relative;
        min-height: 518px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .radial-gradient-bg {
        position: absolute;
        top: -108px;
        left: -101px;
        width: 559px;
        height: 559px;
        background: radial-gradient(circle at center, rgba(0, 169, 158, 1) 0%, rgba(0, 255, 237, 0) 100%);
        opacity: 0.3;
        pointer-events: none;
    }

    .dashboard-stats {
        position: relative;
        width: 429px;
        height: 377px;
    }

    .stat-card {
        position: absolute;
        background: #14A39A;
        border: 1px solid #19A491;
        border-radius: 15px;
        padding: 8px 16px;
        backdrop-filter: blur(147.9px);
        box-shadow: inset 0 0 5.6px rgba(51, 255, 233, 1);
    }

    .stat-card-large {
        padding: 8px 16px 10px;
    }

    .stat-card-title {
        font-size: 16px;
        font-weight: 700;
        line-height: 19px;
        color: #FFFFFF;
        margin: 0 0 10px;
    }

    .stat-card-subtitle {
        font-size: 12px;
        font-weight: 400;
        line-height: 14px;
        color: #FFFFFF;
        margin: 0;
    }

    .stat-card-1 {
        top: 32px;
        left: 123px;
        width: 181px;
    }

    .stat-card-2 {
        top: 213px;
        left: 235px;
        width: 139px;
    }

    .stat-card-3 {
        top: 237px;
        left: -43px;
        width: 151px;
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    .chart-preview {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .chart-label {
        font-size: 12px;
        font-weight: 400;
        line-height: 14px;
        color: #FFFFFF;
        margin: 0;
    }

    .chart-value {
        font-size: 16px;
        font-weight: 700;
        line-height: 19px;
        color: #FFFFFF;
        margin: 0;
    }

    .chart-change {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .chart-change-percent {
        font-size: 12px;
        font-weight: 400;
        line-height: 14px;
        color: #FFFFFF;
    }

    .chart-graph {
        position: relative;
        width: 119px;
        height: 53px;
    }

    .chart-date-badge {
        position: absolute;
        top: -14px;
        right: 0;
        background: #FFFFFF;
        padding: 1px 5.5px;
        border-radius: 10px;
    }

    .chart-date-text {
        font-size: 6px;
        font-weight: 500;
        line-height: 7px;
        color: #14A39A;
    }

    .chart-dot {
        position: absolute;
        bottom: -1px;
        right: 37px;
        width: 2px;
        height: 2px;
        border-radius: 50%;
        background: linear-gradient(180deg, #63D1FC 0%, #41F1E0 100%);
    }

    .crypto-icon {
        position: absolute;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        background: linear-gradient(180deg, #14A39A 0%, #19A491 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .crypto-icon-1 {
        top: 107px;
        left: 123px;
    }

    .crypto-icon-2 {
        top: 157px;
        left: 240px;
    }

    .crypto-icon-3 {
        top: 185px;
        left: 13px;
    }

    .crypto-icon img {
        width: 24px;
        height: 24px;
        filter: brightness(0) invert(1);
    }

    .block-4-right {
        flex: 1;
        max-width: 645px;
    }

    .features-list {
        display: flex;
        flex-direction: column;
        gap: 0;
    }

    .feature-item {
        padding: 16px 24px;
        border-top: 2px solid transparent;
        border-bottom: 2px solid transparent;
        border-image: linear-gradient(90deg, rgba(255,255,255,0) 0%, rgba(25,164,145,0.3) 50%, rgba(255,255,255,0) 100%) 1;
        transition: all 0.3s ease;
    }

    .feature-item:first-child {
        border-top: 2px solid transparent;
    }

    .feature-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        padding: 10px 0;
    }

    .feature-title {
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        color: #14A39A;
        margin: 0;
    }

    .feature-icon {
        width: 42px;
        height: 42px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease;
    }

    .feature-icon svg {
        width: 22px;
        height: 22px;
        stroke: #19A491;
        stroke-width: 2.1px;
        fill: none;
    }

    .feature-item.expanded .feature-icon {
        transform: rotate(90deg);
    }

    .feature-description {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        color: #3F515C;
        margin: 0;
        padding-top: 0;
    }

    .feature-item.expanded .feature-description {
        max-height: 200px;
        padding-top: 8px;
    }

    .feature-item.expanded {
        background: rgba(25, 164, 145, 0.02);
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .block-4-container {
            padding: 0 80px;
        }

        .block-4-content {
            flex-direction: column;
        }

        .block-4-right {
            max-width: 100%;
            width: 100%;
        }
    }

    @media (max-width: 1024px) {
        .block-4-container {
            padding: 0 40px;
        }

        .block-4-heading {
            font-size: 36px;
            line-height: 40px;
        }

        .dashboard-stats {
            transform: scale(0.8);
        }
    }

    @media (max-width: 768px) {
        .block-4-wrapper {
            padding: 40px 0;
        }

        .block-4-container {
            padding: 0 20px;
        }

        .block-4-heading {
            font-size: 28px;
            line-height: 34px;
        }

        .block-4-left {
            min-height: 400px;
        }

        .dashboard-stats {
            transform: scale(0.6);
        }

        .feature-title {
            font-size: 14px;
            line-height: 20px;
        }

        .feature-description {
            font-size: 14px;
            line-height: 20px;
        }
    }
</style>

<div class="block-4-wrapper">
    <div class="block-4-container">
        <h2 class="block-4-heading">Tại sao chọn VietGates?</h2>

        <div class="block-4-content">
            <!-- Left: Dashboard Visualization -->
            <div class="block-4-left">
                <div class="radial-gradient-bg"></div>
                
                <div class="dashboard-stats">
                    <!-- Stat Card 1 -->
                    <div class="stat-card stat-card-1">
                        <p class="stat-card-title">| $4,528 USD</p>
                        <p class="stat-card-subtitle">Lợi nhuận giao dịch 30 ngày</p>
                    </div>

                    <!-- Stat Card 2 -->
                    <div class="stat-card stat-card-2">
                        <p class="stat-card-title">| 1,44,528 BTC</p>
                        <p class="stat-card-subtitle">Tổng sở hữu tài sản</p>
                    </div>

                    <!-- Stat Card 3 with Chart -->
                    <div class="stat-card stat-card-3 stat-card-large">
                        <div class="chart-preview">
                            <p class="chart-label">Giá trị trung bình</p>
                            <p class="chart-value">4,528 USD</p>
                            <div class="chart-change">
                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 10.5L6 6L10.5 1.5M10.5 1.5H6M10.5 1.5V6" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span class="chart-change-percent">+45,66%</span>
                            </div>
                        </div>
                        <div class="chart-graph">
                            <svg width="119" height="53" viewBox="0 0 119 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 40C10 35 20 25 30 20C40 15 50 18 60 15C70 12 80 8 90 10C100 12 110 15 119 13" 
                                      stroke="url(#chartGradient)" stroke-width="1" fill="none"/>
                                <path d="M0 53V40C10 35 20 25 30 20C40 15 50 18 60 15C70 12 80 8 90 10C100 12 110 15 119 13V53Z" 
                                      fill="url(#chartFillGradient)"/>
                                <defs>
                                    <linearGradient id="chartGradient" x1="0" y1="0" x2="119" y2="0">
                                        <stop offset="0" stop-color="rgba(255,255,255,0)"/>
                                        <stop offset="0.5" stop-color="rgba(255,255,255,1)"/>
                                        <stop offset="1" stop-color="rgba(255,255,255,0)"/>
                                    </linearGradient>
                                    <linearGradient id="chartFillGradient" x1="0" y1="0" x2="0" y2="53">
                                        <stop offset="0" stop-color="rgba(255,255,255,0)"/>
                                        <stop offset="0.4" stop-color="rgba(255,255,255,0.1)"/>
                                        <stop offset="1" stop-color="rgba(255,255,255,0.4)"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                            <div class="chart-date-badge">
                                <span class="chart-date-text">02/05</span>
                            </div>
                            <div class="chart-dot"></div>
                        </div>
                    </div>

                    <!-- Crypto Icons -->
                    <div class="crypto-icon crypto-icon-1">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 2L14 8L10 10L6 8L10 2ZM10 2L6 8L10 18L14 8L10 2Z" fill="white"/>
                        </svg>
                    </div>
                    <div class="crypto-icon crypto-icon-2">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="10" cy="10" r="8" fill="white"/>
                            <path d="M10 5V15M7 8H11.5C12.3 8 13 8.7 13 9.5S12.3 11 11.5 11H7M7 11H12C12.8 11 13.5 11.7 13.5 12.5S12.8 14 12 14H7" stroke="#14A39A" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="crypto-icon crypto-icon-3">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10 18C14.4 18 18 14.4 18 10S14.4 2 10 2 2 5.6 2 10s3.6 8 8 8z" fill="white"/>
                            <path d="M10 6v8M7 10h6" stroke="#14A39A" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Right: Features List -->
            <div class="block-4-right">
                <div class="features-list">
                    <!-- Feature 1 - Expanded by default -->
                    <div class="feature-item expanded">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">Thiết kế cho người Việt</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">VietGates được xây dựng với mục tiêu phục vụ cộng đồng Việt Nam. Giao diện hoàn toàn bằng tiếng Việt, hỗ trợ VND và các phương thức thanh toán nội địa quen thuộc, giúp mọi người dễ dàng tiếp cận và sử dụng.</p>
                    </div>

                    <!-- Feature 2 -->
                    <div class="feature-item">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">An toàn & bảo mật hàng đầu</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">Hệ thống bảo mật đa lớp với công nghệ mã hóa tiên tiến, xác thực hai yếu tố (2FA), và ví lạnh để bảo vệ tài sản của bạn.</p>
                    </div>

                    <!-- Feature 3 -->
                    <div class="feature-item">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">Nhanh chóng & tiện lợi</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">Giao dịch được xử lý nhanh chóng với công nghệ khớp lệnh tức thời. Nạp rút tiền chỉ trong vài phút.</p>
                    </div>

                    <!-- Feature 4 -->
                    <div class="feature-item">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">Đa dạng cách giao dịch</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">Hỗ trợ nhiều hình thức giao dịch: Spot Trading, P2P, Futures, và nhiều sản phẩm đầu tư khác.</p>
                    </div>

                    <!-- Feature 5 -->
                    <div class="feature-item">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">Hỗ trợ tận tình 24/7</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">Đội ngũ chăm sóc khách hàng chuyên nghiệp luôn sẵn sàng hỗ trợ bạn mọi lúc, mọi nơi qua nhiều kênh liên lạc.</p>
                    </div>

                    <!-- Feature 6 -->
                    <div class="feature-item">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">Cộng đồng đang phát triển mạnh mẽ</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">Tham gia cộng đồng trader Việt Nam đông đảo, chia sẻ kinh nghiệm và cùng nhau phát triển.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function toggleFeature(header) {
    const item = header.parentElement;
    const allItems = document.querySelectorAll('.feature-item');
    
    // Close all other items
    allItems.forEach(i => {
        if (i !== item) {
            i.classList.remove('expanded');
        }
    });
    
    // Toggle current item
    item.classList.toggle('expanded');
}
</script>
