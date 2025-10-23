<style>
    .block-3-wrapper {
        width: 100%;
        background: #FFFFFF;
        padding: 64px 0;
    }

    .block-3-container {
        max-width: 1920px;
        margin: 0 auto;
        padding: 0 109.5px;
    }

    .block-3-heading {
        font-size: 48px;
        font-weight: 700;
        line-height: 48px;
        color: #14A39A;
        text-align: center;
        margin: 0 0 48px;
        background: linear-gradient(180deg, #14A39A 0%, #0C6B67 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .block-3-content {
        display: flex;
        gap: 48px;
        align-items: center;
    }

    .block-3-left {
        flex: 1;
        position: relative;
        min-height: 518px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .circles-background {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 617px;
        height: 518px;
        pointer-events: none;
    }

    .circle-guide {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border: 1px solid #18867E;
        border-radius: 50%;
    }

    .circle-guide:nth-child(1) { width: 132px; height: 111px; }
    .circle-guide:nth-child(2) { width: 160px; height: 135px; }
    .circle-guide:nth-child(3) { width: 193px; height: 162px; }
    .circle-guide:nth-child(4) { width: 221px; height: 186px; }
    .circle-guide:nth-child(5) { width: 255px; height: 214px; }
    .circle-guide:nth-child(6) { width: 294px; height: 247px; }
    .circle-guide:nth-child(7) { width: 343px; height: 289px; }
    .circle-guide:nth-child(8) { width: 389px; height: 327px; }
    .circle-guide:nth-child(9) { width: 448px; height: 376px; }
    .circle-guide:nth-child(10) { width: 503px; height: 423px; }
    .circle-guide:nth-child(11) { width: 559px; height: 470px; }
    .circle-guide:nth-child(12) { width: 617px; height: 518px; }

    .laptop-mockup {
        position: relative;
        z-index: 2;
        width: 554px;
        height: 377px;
    }

    .laptop-frame {
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, #1A2A3A 0%, #0D151F 100%);
        border-radius: 12px;
        padding: 12px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
    }

    .laptop-screen {
        width: 100%;
        height: 300px;
        background: #000;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
    }

    .laptop-screen img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .laptop-base {
        width: 100%;
        height: 65px;
        background: linear-gradient(180deg, #2A3A4A 0%, #1A2A3A 100%);
        border-radius: 0 0 12px 12px;
        position: relative;
    }

    .laptop-base::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 80px;
        height: 4px;
        background: #3A4A5A;
        border-radius: 2px;
    }

    /* Floating Badges */
    .floating-badge {
        position: absolute;
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px 20px;
        background: rgba(20, 163, 154, 0.1);
        backdrop-filter: blur(46.35px);
        border-radius: 39px;
        z-index: 3;
    }

    .floating-badge-dark {
        background: rgba(39, 54, 80, 1);
    }

    .badge-logo {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .badge-text {
        font-size: 14px;
        font-weight: 500;
        color: #000;
    }

    .badge-text-light {
        color: #fff;
    }

    .floating-badge-1 {
        bottom: 70px;
        left: -30px;
        transform: rotate(-21.5deg);
    }

    .floating-badge-2 {
        bottom: 140px;
        right: -100px;
        transform: rotate(-21.5deg);
    }

    .floating-badge-3 {
        top: 50px;
        right: -80px;
        transform: rotate(-21.5deg);
    }

    .block-3-right {
        flex: 1;
        max-width: 453px;
    }

    .guide-card {
        background: rgba(20, 163, 154, 0.04);
        border: 2px solid #14A39A;
        border-radius: 29px;
        padding: 20px 24px 24px;
        backdrop-filter: blur(45.79px);
    }

    .guide-card-image {
        width: 100%;
        height: 192px;
        background: #FFFFFF;
        border: 0.5px solid #14A39A;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 16px;
    }

    .guide-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .guide-card-title {
        font-size: 20px;
        font-weight: 600;
        line-height: 25px;
        color: #14A39A;
        margin: 0 0 16px;
    }

    .guide-card-description {
        font-size: 16px;
        font-weight: 400;
        line-height: 22px;
        color: #3F515C;
        margin: 0;
    }

    .pagination-dots {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 4px;
        margin-top: 48px;
    }

    .dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #D9D9D9;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .dot.active {
        background: #41F1E0;
    }

    .dot:hover {
        background: #41F1E0;
        opacity: 0.7;
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .block-3-container {
            padding: 0 60px;
        }

        .block-3-content {
            flex-direction: column;
        }

        .block-3-right {
            max-width: 600px;
        }

        .floating-badge {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        .block-3-container {
            padding: 0 40px;
        }

        .block-3-heading {
            font-size: 36px;
            line-height: 42px;
        }

        .laptop-mockup {
            width: 100%;
            max-width: 500px;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .block-3-wrapper {
            padding: 40px 0;
        }

        .block-3-container {
            padding: 0 20px;
        }

        .block-3-heading {
            font-size: 28px;
            line-height: 34px;
            margin-bottom: 32px;
        }

        .block-3-content {
            gap: 32px;
        }

        .block-3-left {
            min-height: 350px;
        }

        .circles-background {
            transform: translate(-50%, -50%) scale(0.7);
        }

        .laptop-mockup {
            max-width: 100%;
        }

        .guide-card {
            padding: 16px 20px 20px;
        }

        .guide-card-title {
            font-size: 18px;
            line-height: 23px;
        }

        .guide-card-description {
            font-size: 14px;
            line-height: 20px;
        }
    }
</style>

<div class="block-3-wrapper">
    <div class="block-3-container">
        <h2 class="block-3-heading">Hướng dẫn VietGates</h2>

        <div class="block-3-content">
            <!-- Left Section: Laptop Mockup with Circles -->
            <div class="block-3-left">
                <div class="circles-background">
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                    <div class="circle-guide"></div>
                </div>

                <div class="laptop-mockup">
                    <div class="laptop-frame">
                        <div class="laptop-screen">
                            <img src="{{ asset('images/block-3/laptop-screen.png') }}" alt="VietGates Dashboard">
                        </div>
                        <div class="laptop-base"></div>
                    </div>

                    <!-- Floating Badges -->
                    <div class="floating-badge floating-badge-1 floating-badge-dark">
                        <div class="badge-logo">
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

                    <div class="floating-badge floating-badge-2">
                        <div class="badge-logo">
                            <svg width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6 2.56L24.61 0L32 8.99L24.74 11.55L16.6 2.56Z" fill="url(#gradient1b)"/>
                                <path d="M16.74 2.64L24.49 11.47L15.04 14.08L7.99 5.33L16.74 2.64Z" fill="url(#gradient2b)"/>
                                <path d="M8.38 5.33L0.24 2.56L8 14.08L15.14 11.16L8.38 5.33Z" fill="url(#gradient3b)"/>
                                <path d="M0 2.56L7.99 5.33L15.04 23.75L8 26.88L0 2.56Z" fill="url(#gradient4b)"/>
                                <path d="M24.61 0L32 8.99L24.49 23.75L16.98 26.49L24.61 0Z" fill="url(#gradient5b)"/>
                                <defs>
                                    <linearGradient id="gradient1b">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient2b">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient3b">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient4b">
                                        <stop stop-color="#4EB8FD"/>
                                        <stop offset="0.5" stop-color="#57C4FD"/>
                                        <stop offset="1" stop-color="#6AD9FA"/>
                                    </linearGradient>
                                    <linearGradient id="gradient5b">
                                        <stop stop-color="#4EB8FD"/>
                                        <stop offset="0.5" stop-color="#57C4FD"/>
                                        <stop offset="1" stop-color="#6AD9FA"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>

                    <div class="floating-badge floating-badge-3">
                        <div class="badge-logo">
                            <svg width="32" height="27" viewBox="0 0 32 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.6 2.56L24.61 0L32 8.99L24.74 11.55L16.6 2.56Z" fill="url(#gradient1c)"/>
                                <path d="M16.74 2.64L24.49 11.47L15.04 14.08L7.99 5.33L16.74 2.64Z" fill="url(#gradient2c)"/>
                                <path d="M8.38 5.33L0.24 2.56L8 14.08L15.14 11.16L8.38 5.33Z" fill="url(#gradient3c)"/>
                                <path d="M0 2.56L7.99 5.33L15.04 23.75L8 26.88L0 2.56Z" fill="url(#gradient4c)"/>
                                <path d="M24.61 0L32 8.99L24.49 23.75L16.98 26.49L24.61 0Z" fill="url(#gradient5c)"/>
                                <defs>
                                    <linearGradient id="gradient1c">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient2c">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient3c">
                                        <stop stop-color="#14A39A"/>
                                        <stop offset="0.5" stop-color="#49FFED"/>
                                        <stop offset="1" stop-color="#0CB79E"/>
                                    </linearGradient>
                                    <linearGradient id="gradient4c">
                                        <stop stop-color="#4EB8FD"/>
                                        <stop offset="0.5" stop-color="#57C4FD"/>
                                        <stop offset="1" stop-color="#6AD9FA"/>
                                    </linearGradient>
                                    <linearGradient id="gradient5c">
                                        <stop stop-color="#4EB8FD"/>
                                        <stop offset="0.5" stop-color="#57C4FD"/>
                                        <stop offset="1" stop-color="#6AD9FA"/>
                                    </linearGradient>
                                </defs>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Guide Card -->
            <div class="block-3-right">
                <div class="guide-card">
                    <div class="guide-card-image">
                        <img src="{{ asset('images/block-3/step-1.png') }}" alt="Đăng ký & xác minh tài khoản">
                    </div>
                    <h3 class="guide-card-title">Đăng ký & xác minh tài khoản</h3>
                    <p class="guide-card-description">Người dùng tạo tài khoản VietGates chỉ trong vài phút. Sau đó thực hiện xác minh cơ bản (KYC) để bảo đảm an toàn giao dịch và mở khóa các tính năng nạp/rút.</p>
                </div>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="pagination-dots">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
