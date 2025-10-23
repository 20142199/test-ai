<div class="block-2-wrapper">
    <div class="block-2-background">
        @component('components.concentric-circles', ['count' => 12])
        @endcomponent
    </div>

    <div class="block-2-container">
        <div class="block-2-heading">
            <h2>Điểm nổi bật của VietGates</h2>
        </div>

        <div class="block-2-grid">
            <!-- Floating Logos -->
            <div class="floating-logo floating-logo-1">
                <div class="logo-circle">
                    @component('components.vietgates-logo', ['id' => 'logo1'])
                    @endcomponent
                </div>
            </div>

            <div class="floating-logo floating-logo-2">
                <div class="logo-circle">
                    @component('components.vietgates-logo', ['width' => 21, 'height' => 18, 'id' => 'logo2'])
                    @endcomponent
                </div>
            </div>

            <!-- Feature Card 1: An toàn & minh bạch -->
            <div class="feature-card feature-card-1">
                <div class="feature-card-icon">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 5.25C21 5.25 8.75 10.5 8.75 21C8.75 31.5 21 36.75 21 36.75C21 36.75 33.25 31.5 33.25 21C33.25 10.5 21 5.25 21 5.25Z" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="21" cy="21" r="7" stroke-width="3"/>
                    </svg>
                </div>
                <div class="feature-card-content">
                    <h3 class="feature-card-title">An toàn & minh bạch</h3>
                    <p class="feature-card-description">Giao dịch được bảo vệ bằng hệ thống ký quỹ và bảo mật nhiều lớp. Tài sản luôn minh bạch, loại bỏ rủi ro gian lận.</p>
                </div>
            </div>

            <!-- Feature Card 2: Spot Trading thân thiện -->
            <div class="feature-card feature-card-2">
                <div class="feature-card-icon">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.75 33.25L14 28L19.25 33.25L28 24.5L33.25 19.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.75 12.25L8.75 33.25L29.75 33.25" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <rect x="24.5" y="15.75" width="8.75" height="8.75" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="feature-card-content">
                    <h3 class="feature-card-title">Spot Trading thân thiện</h3>
                    <p class="feature-card-description">Giao diện trực quan, khớp lệnh nhanh, bảng giá minh bạch. Phù hợp cho cả người mới lẫn trader kinh nghiệm.</p>
                </div>
            </div>

            <!-- Feature Card 3: P2P tiện lợi cho người Việt -->
            <div class="feature-card feature-card-3">
                <div class="feature-card-icon">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14 19.25C17.1756 19.25 19.75 16.6756 19.75 13.5C19.75 10.3244 17.1756 7.75 14 7.75C10.8244 7.75 8.25 10.3244 8.25 13.5C8.25 16.6756 10.8244 19.25 14 19.25Z" stroke-width="3"/>
                        <path d="M28 19.25C31.1756 19.25 33.75 16.6756 33.75 13.5C33.75 10.3244 31.1756 7.75 28 7.75C24.8244 7.75 22.25 10.3244 22.25 13.5C22.25 16.6756 24.8244 19.25 28 19.25Z" stroke-width="3"/>
                        <path d="M5.25 34.25V31.5C5.25 27.3579 8.60786 24 12.75 24H15.25C19.3921 24 22.75 27.3579 22.75 31.5V34.25" stroke-width="3" stroke-linecap="round"/>
                        <path d="M19.25 34.25V31.5C19.25 27.3579 22.6079 24 26.75 24H29.25C33.3921 24 36.75 27.3579 36.75 31.5V34.25" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="feature-card-content">
                    <h3 class="feature-card-title">P2P tiện lợi cho người Việt</h3>
                    <p class="feature-card-description">Mua bán trực tiếp bằng VND với cộng đồng trong nước, hỗ trợ nhiều phương thức thanh toán nội địa.</p>
                </div>
            </div>

            <!-- Feature Card 4: Hỗ trợ 24/7 -->
            <div class="feature-card feature-card-4 large">
                <div class="feature-card-icon">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.906 21H12.656M12.656 8.906L7.781 14.031M36.094 21H29.344M29.344 8.906L34.219 14.031M21 6.656V0.656M21 36.094V42.094" stroke-width="2.625" stroke-linecap="round"/>
                        <path d="M0.656 21C0.656 9.954 9.954 0.656 21 0.656C32.046 0.656 41.344 9.954 41.344 21C41.344 32.046 32.046 41.344 21 41.344C9.954 41.344 0.656 32.046 0.656 21Z" stroke-width="2.625"/>
                    </svg>
                </div>
                <div class="feature-card-content">
                    <h3 class="feature-card-title">Hỗ trợ 24/7</h3>
                    <p class="feature-card-description">Chăm sóc khách hàng sẵn sàng hỗ trợ mọi lúc, mọi nơi, mọi thắc mắc.</p>
                </div>
            </div>

            <!-- Feature Card 5: Sàn giao dịch dành cho người Việt -->
            <div class="feature-card feature-card-5">
                <div class="feature-card-icon">
                    <svg width="42" height="42" viewBox="0 0 42 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="21" cy="21" r="15.75" stroke-width="3"/>
                        <path d="M21 5.25V21L28 28" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.75 8.75L12.25 12.25M33.25 8.75L29.75 12.25" stroke-width="3" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="feature-card-content">
                    <h3 class="feature-card-title">Sàn giao dịch dành cho người Việt</h3>
                    <p class="feature-card-description">Giao diện tiếng Việt, phí hợp lý, cộng đồng đông đảo. Cam kết an toàn, thân thiện và tối ưu cho nhu cầu người Việt.</p>
                </div>
            </div>
        </div>
    </div>
</div>
