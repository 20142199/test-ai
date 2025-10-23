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
                    @php
                        $features = [
                            ['title' => 'Thiết kế cho người Việt', 'description' => 'VietGates được xây dựng với mục tiêu phục vụ cộng đồng Việt Nam. Giao diện hoàn toàn bằng tiếng Việt, hỗ trợ VND và các phương thức thanh toán nội địa quen thuộc, giúp mọi người dễ dàng tiếp cận và sử dụng.', 'expanded' => true],
                            ['title' => 'An toàn & bảo mật hàng đầu', 'description' => 'Hệ thống bảo mật đa lớp với công nghệ mã hóa tiên tiến, xác thực hai yếu tố (2FA), và ví lạnh để bảo vệ tài sản của bạn.', 'expanded' => false],
                            ['title' => 'Nhanh chóng & tiện lợi', 'description' => 'Giao dịch được xử lý nhanh chóng với công nghệ khớp lệnh tức thời. Nạp rút tiền chỉ trong vài phút.', 'expanded' => false],
                            ['title' => 'Đa dạng cách giao dịch', 'description' => 'Hỗ trợ nhiều hình thức giao dịch: Spot Trading, P2P, Futures, và nhiều sản phẩm đầu tư khác.', 'expanded' => false],
                            ['title' => 'Hỗ trợ tận tình 24/7', 'description' => 'Đội ngũ chăm sóc khách hàng chuyên nghiệp luôn sẵn sàng hỗ trợ bạn mọi lúc, mọi nơi qua nhiều kênh liên lạc.', 'expanded' => false],
                            ['title' => 'Cộng đồng đang phát triển mạnh mẽ', 'description' => 'Tham gia cộng đồng trader Việt Nam đông đảo, chia sẻ kinh nghiệm và cùng nhau phát triển.', 'expanded' => false],
                        ];
                    @endphp
                    @foreach($features as $feature)
                    <div class="feature-item {{ $feature['expanded'] ? 'expanded' : '' }}">
                        <div class="feature-header" onclick="toggleFeature(this)">
                            <h3 class="feature-title">{{ $feature['title'] }}</h3>
                            <div class="feature-icon">
                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 18L15 12L9 6" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </div>
                        <p class="feature-description">{{ $feature['description'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
