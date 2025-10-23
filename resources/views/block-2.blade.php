<style>
    .block-2-wrapper {
        width: 100%;
        min-height: 914px;
        background: #FFFFFF;
        position: relative;
        overflow: hidden;
        padding: 80px 0;
    }

    .block-2-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 1657px;
        height: 914px;
        pointer-events: none;
        opacity: 0.15;
    }

    .concentric-circles {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .circle {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid #18867E;
        border-radius: 50%;
    }

    .circle:nth-child(1) { width: 375px; height: 315px; }
    .circle:nth-child(2) { width: 454px; height: 381px; }
    .circle:nth-child(3) { width: 546px; height: 458px; }
    .circle:nth-child(4) { width: 626px; height: 527px; }
    .circle:nth-child(5) { width: 723px; height: 608px; }
    .circle:nth-child(6) { width: 833px; height: 701px; }
    .circle:nth-child(7) { width: 972px; height: 817px; }
    .circle:nth-child(8) { width: 1103px; height: 928px; }
    .circle:nth-child(9) { width: 1269px; height: 1067px; }
    .circle:nth-child(10) { width: 1425px; height: 1198px; }
    .circle:nth-child(11) { width: 1584px; height: 1330px; }
    .circle:nth-child(12) { width: 1747px; height: 1468px; }

    .block-2-container {
        max-width: 1920px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        padding: 0 240px;
    }

    .block-2-heading {
        text-align: center;
        margin: 0 auto 120px;
        max-width: 480px;
    }

    .block-2-heading h2 {
        font-size: 48px;
        font-weight: 700;
        line-height: 54px;
        color: #14A39A;
        margin: 0;
        background: linear-gradient(180deg, #14A39A 0%, #0C6B67 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .block-2-grid {
        position: relative;
        min-height: 600px;
    }

    .feature-card {
        position: absolute;
        width: 363px;
        background: rgba(20, 163, 154, 0.04);
        border: 2px solid #14A39A;
        border-radius: 29px;
        padding: 24px;
        backdrop-filter: blur(45.79px);
        -webkit-backdrop-filter: blur(45.79px);
    }

    .feature-card.large {
        width: 379px;
    }

    .feature-card-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        width: 42px;
        height: 42px;
    }

    .feature-card-icon svg {
        width: 42px;
        height: 42px;
        fill: none;
        stroke: #14A39A;
    }

    .feature-card-icon .fill-icon {
        fill: #14A39A;
        stroke: none;
    }

    .feature-card-content {
        text-align: center;
    }

    .feature-card-title {
        font-size: 16px;
        font-weight: 600;
        line-height: 22px;
        color: #14A39A;
        margin: 0 0 4px 0;
    }

    .feature-card-description {
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        color: #3F515C;
        margin: 0;
    }

    /* Positioning */
    .feature-card-1 {
        top: -90px;
        left: 147px;
    }

    .feature-card-2 {
        top: 0;
        right: 218px;
    }

    .feature-card-3 {
        top: 193px;
        left: 0;
    }

    .feature-card-4 {
        top: 241px;
        right: 128px;
    }

    .feature-card-5 {
        bottom: -30px;
        left: 510px;
    }

    /* Decorative logo elements */
    .floating-logo {
        position: absolute;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .floating-logo-1 {
        top: 67px;
        right: 1067px;
        width: 48px;
        height: 48px;
    }

    .floating-logo-2 {
        bottom: 114px;
        left: 410px;
        width: 32px;
        height: 32px;
        transform: rotate(-21.5deg);
    }

    .logo-circle {
        width: 100%;
        height: 100%;
        border-radius: 50%;
        background: linear-gradient(180deg, #025A54 0%, #006BAC 100%);
        border: 2px solid;
        border-image: linear-gradient(180deg, #9BD3F2 0%, #217F7E 100%) 1;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .block-2-container {
            padding: 0 120px;
        }

        .feature-card {
            position: static !important;
            margin: 20px auto;
        }

        .block-2-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
            min-height: auto;
        }

        .floating-logo {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        .block-2-container {
            padding: 0 40px;
        }

        .block-2-heading h2 {
            font-size: 36px;
            line-height: 42px;
        }
    }

    @media (max-width: 768px) {
        .block-2-wrapper {
            padding: 60px 0;
        }

        .block-2-container {
            padding: 0 20px;
        }

        .block-2-heading {
            margin-bottom: 60px;
        }

        .block-2-heading h2 {
            font-size: 28px;
            line-height: 34px;
        }

        .block-2-grid {
            grid-template-columns: 1fr;
        }

        .feature-card,
        .feature-card.large {
            width: 100%;
        }
    }
</style>

<div class="block-2-wrapper">
    <div class="block-2-background">
        <div class="concentric-circles">
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div>

    <div class="block-2-container">
        <div class="block-2-heading">
            <h2>Điểm nổi bật của VietGates</h2>
        </div>

        <div class="block-2-grid">
            <!-- Floating Logos -->
            <div class="floating-logo floating-logo-1">
                <div class="logo-circle">
                    <svg width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.6 2.56L24.61 0L32 8.99L24.74 11.55L16.6 2.56Z" fill="url(#gradient1)"/>
                        <path d="M16.74 2.64L24.49 11.47L15.04 14.08L7.99 5.33L16.74 2.64Z" fill="url(#gradient2)"/>
                        <path d="M8.38 5.33L0.24 2.56L8 14.08L15.14 11.16L8.38 5.33Z" fill="url(#gradient3)"/>
                        <path d="M0 2.56L7.99 5.33L15.04 23.75L8 26.88L0 2.56Z" fill="url(#gradient4)"/>
                        <path d="M24.61 0L32 8.99L24.49 23.75L16.98 26.49L24.61 0Z" fill="url(#gradient5)"/>
                        <defs>
                            <linearGradient id="gradient1" x1="16.6" y1="0" x2="32" y2="11.55" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient2" x1="16.74" y1="2.64" x2="24.49" y2="14.08" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient3" x1="0.24" y1="2.56" x2="15.14" y2="14.08" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient4" x1="0" y1="2.56" x2="15.04" y2="26.88" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4EB8FD"/>
                                <stop offset="0.5" stop-color="#57C4FD"/>
                                <stop offset="1" stop-color="#6AD9FA"/>
                            </linearGradient>
                            <linearGradient id="gradient5" x1="16.98" y1="0" x2="32" y2="26.49" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4EB8FD"/>
                                <stop offset="0.5" stop-color="#57C4FD"/>
                                <stop offset="1" stop-color="#6AD9FA"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>

            <div class="floating-logo floating-logo-2">
                <div class="logo-circle">
                    <svg width="21" height="18" viewBox="0 0 21 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.07 1.71L16.41 0L21.33 6L16.49 7.7L11.07 1.71Z" fill="url(#gradient1b)"/>
                        <path d="M11.16 1.76L16.33 7.65L10.03 9.39L5.33 3.56L11.16 1.76Z" fill="url(#gradient2b)"/>
                        <path d="M5.59 3.56L0.16 1.71L5.33 9.39L10.1 7.44L5.59 3.56Z" fill="url(#gradient3b)"/>
                        <path d="M0 1.71L5.33 3.56L10.03 15.83L5.33 17.92L0 1.71Z" fill="url(#gradient4b)"/>
                        <path d="M16.41 0L21.33 6L16.33 15.83L11.32 17.66L16.41 0Z" fill="url(#gradient5b)"/>
                        <defs>
                            <linearGradient id="gradient1b" x1="11.07" y1="0" x2="21.33" y2="7.7" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient2b" x1="11.16" y1="1.76" x2="16.33" y2="9.39" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient3b" x1="0.16" y1="1.71" x2="10.1" y2="9.39" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#14A39A"/>
                                <stop offset="0.5" stop-color="#49FFED"/>
                                <stop offset="1" stop-color="#0CB79E"/>
                            </linearGradient>
                            <linearGradient id="gradient4b" x1="0" y1="1.71" x2="10.03" y2="17.92" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4EB8FD"/>
                                <stop offset="0.5" stop-color="#57C4FD"/>
                                <stop offset="1" stop-color="#6AD9FA"/>
                            </linearGradient>
                            <linearGradient id="gradient5b" x1="11.32" y1="0" x2="21.33" y2="17.66" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4EB8FD"/>
                                <stop offset="0.5" stop-color="#57C4FD"/>
                                <stop offset="1" stop-color="#6AD9FA"/>
                            </linearGradient>
                        </defs>
                    </svg>
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
