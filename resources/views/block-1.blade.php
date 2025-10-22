<section class="section-1">
    <div class="section-text">
        <div class="top-content">
            <p class="caption">Chào mừng bạn đến với nền tảng phát triển sáng tạo</p>
            <h1 class="main-headline">Kiến tạo <span class="gradient-text">tương lai</span> cùng chúng tôi</h1>
            <h2 class="secondary-headline">Giải pháp công nghệ toàn diện cho doanh nghiệp của bạn</h2>
        </div>
        <div class="cta-button-container">
            <button class="cta-button">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.1875 3.43429L17.8152 13.1290L2.1875 16.5633" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <span>Khám phá ngay</span>
            </button>
        </div>
    </div>

    <div class="content-frame">
        <!-- Desktop Browser Mockup -->
        <div class="desktop-screen">
            <div class="top-bar">
                <div class="circles">
                    <div class="circle red"></div>
                    <div class="circle yellow"></div>
                    <div class="circle green"></div>
                </div>
                <div class="address-bar">
                    <span class="url-text">bekisoft.com/feature</span>
                </div>
                <div class="arrows">
                    <svg class="arrow-left" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15 18L9 12L15 6" stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="arrow-right" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M9 18L15 12L9 6" stroke="#47556A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="desktop-content">
                <img src="{{ asset('images/block-1/desktop-screenshot.png') }}" alt="Desktop Screenshot">
            </div>
        </div>

        <!-- Left Column Content Boxes -->
        <div class="left-column">
            <div class="content-box box-1">
                <div class="box-icon">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16 53.3333L21.3333 37.3333L5.33333 32L21.3333 26.6667L26.6667 10.6667L32 26.6667L48 32L32 37.3333L26.6667 53.3333" stroke="#7E22CE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M48 53.3333L53.3333 37.3333L37.3333 32L53.3333 26.6667L58.6667 10.6667L64 26.6667L80 32L64 37.3333L58.6667 53.3333" stroke="#7E22CE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 29.3333L37.3333 13.3333L21.3333 8L37.3333 2.66667L42.6667 -13.3333L48 2.66667L64 8L48 13.3333L42.6667 29.3333" stroke="#7E22CE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="box-content">
                    <div class="title-category">
                        <p class="category">Tính năng mới</p>
                        <div class="title-container">
                            <h3 class="title">Công nghệ AI tiên tiến</h3>
                            <div class="badge green-badge">
                                <div class="badge-circle"></div>
                                <span>Đang hoạt động</span>
                            </div>
                            <svg class="edit-icon" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25z" fill="#47556A"/>
                            </svg>
                        </div>
                    </div>
                    <div class="box-image">
                        <img src="{{ asset('images/block-1/content-1.png') }}" alt="Content 1">
                    </div>
                    <p class="box-paragraph">Khám phá sức mạnh của trí tuệ nhân tạo trong việc tối ưu hóa quy trình làm việc và nâng cao hiệu suất kinh doanh của bạn.</p>
                </div>
                <div class="badge blue-badge">
                    <div class="badge-circle blue"></div>
                    <span>Mới</span>
                </div>
                <div class="user-thumb">
                    <img src="{{ asset('images/block-1/user-avatar.png') }}" alt="User Avatar">
                </div>
            </div>

            <div class="content-box box-2">
                <img src="{{ asset('images/block-1/content-2.png') }}" alt="Content 2">
            </div>
        </div>

        <!-- Mobile App Mockup -->
        <div class="mobile-screen">
            <img src="{{ asset('images/block-1/mobile-screenshot.png') }}" alt="Mobile Screenshot">
        </div>
    </div>
</section>

<style>
    .section-1 {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 100px 80px 60px;
        display: flex;
        flex-direction: column;
        gap: 80px;
    }

    /* Section Text */
    .section-text {
        width: 959px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .top-content {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .caption {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        color: #47556A;
        margin: 0;
        text-align: center;
    }

    .main-headline {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 62px;
        color: #191A15;
        margin: 0;
        text-align: center;
    }

    .gradient-text {
        background: linear-gradient(180deg, #C026D3 0%, #701A75 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .secondary-headline {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 48px;
        font-weight: 600;
        line-height: 62px;
        color: #191A15;
        margin: 0;
        text-align: center;
    }

    .cta-button-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .cta-button {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 14px 24px;
        background: #FBAC10;
        border: none;
        border-radius: 999px;
        cursor: pointer;
        transition: all 0.3s;
        height: 48px;
    }

    .cta-button:hover {
        background: #e09d0e;
        transform: translateY(-2px);
    }

    .cta-button span {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 16px;
        font-weight: 600;
        color: #FFFFFF;
        line-height: 18px;
    }

    /* Content Frame */
    .content-frame {
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        position: relative;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        min-height: 830px;
    }

    /* Desktop Screen */
    .desktop-screen {
        position: absolute;
        left: 158px;
        top: -1px;
        width: 977px;
        height: 667px;
        background: #FFFFFF;
        border: 2px solid #0F1729;
        border-radius: 20px;
        box-shadow: 12px 12px 0 0 #0F1729;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .top-bar {
        width: 100%;
        height: 41px;
        background: #1F2956;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 16px;
        gap: 28px;
    }

    .circles {
        display: flex;
        gap: 5px;
        align-items: center;
    }

    .circle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .circle.red {
        background: #E11D48;
    }

    .circle.yellow {
        background: #FBC024;
    }

    .circle.green {
        background: #22C55E;
    }

    .address-bar {
        flex: 1;
        height: 25px;
        background: #F1F5F9;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        max-width: 440px;
    }

    .url-text {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 12px;
        color: #94A3B8;
    }

    .arrows {
        display: flex;
        gap: 5px;
    }

    .desktop-content {
        flex: 1;
        width: 100%;
        overflow: hidden;
    }

    .desktop-content img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Left Column */
    .left-column {
        width: 345px;
        display: flex;
        flex-direction: column;
        gap: 24px;
        margin-top: 336px;
        z-index: 1;
    }

    .content-box {
        position: relative;
        border: 2px solid #0F1729;
        border-radius: 10px;
        box-shadow: 12px 12px 0 0 #0F1729;
        background: #FFFFFF;
        overflow: hidden;
    }

    .box-1 {
        width: 256px;
        height: 80px;
        padding: 24px 16px;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .box-icon {
        width: 64px;
        height: 64px;
    }

    .title-category {
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .category {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 18px;
        color: #0F1729;
        margin: 0;
    }

    .title-container {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .title {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 20px;
        font-weight: 600;
        line-height: 26px;
        color: #0F1729;
        margin: 0;
        flex: 1;
    }

    .badge {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 2px 4px;
        border-radius: 4px;
        height: 24px;
    }

    .green-badge {
        background: #DCFCE7;
    }

    .blue-badge {
        background: #DBEAFE;
        position: absolute;
        top: 16px;
        left: 16px;
    }

    .badge-circle {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #22C55E;
    }

    .badge-circle.blue {
        background: #60A5FA;
    }

    .badge span {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 12px;
        font-weight: 500;
        line-height: 20px;
    }

    .green-badge span {
        color: #166534;
    }

    .blue-badge span {
        color: #1E40AF;
    }

    .edit-icon {
        width: 24px;
        height: 24px;
        cursor: pointer;
    }

    .box-image {
        width: 100%;
        margin-top: 16px;
    }

    .box-image img {
        width: 100%;
        height: auto;
        display: block;
    }

    .box-paragraph {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        color: #0F1729;
        margin: 16px 0 0;
    }

    .user-thumb {
        position: absolute;
        top: 172px;
        left: 80px;
        width: 96px;
        height: 96px;
        border-radius: 100px;
        overflow: hidden;
    }

    .user-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .box-2 {
        width: 345px;
        height: 300px;
        padding: 0;
    }

    .box-2 img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Mobile Screen */
    .mobile-screen {
        position: absolute;
        right: 0;
        top: 80px;
        width: 350px;
        height: 750px;
        border: 2px solid #0F1729;
        border-radius: 20px;
        box-shadow: 12px 12px 0 0 #0F1729;
        overflow: hidden;
    }

    .mobile-screen img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Responsive Design */
    @media screen and (max-width: 1440px) {
        .section-1 {
            padding: 80px 60px 40px;
        }

        .section-text {
            width: 100%;
            max-width: 900px;
        }

        .content-frame {
            max-width: 100%;
        }

        .desktop-screen {
            left: 50%;
            transform: translateX(-50%);
        }
    }

    @media screen and (max-width: 1200px) {
        .section-1 {
            padding: 60px 40px 30px;
            gap: 60px;
        }

        .main-headline {
            font-size: 42px;
            line-height: 48px;
        }

        .secondary-headline {
            font-size: 36px;
            line-height: 44px;
        }

        .content-frame {
            flex-direction: column;
            align-items: center;
            gap: 40px;
            min-height: auto;
        }

        .desktop-screen {
            position: relative;
            left: 0;
            transform: none;
            width: 100%;
            max-width: 800px;
        }

        .left-column {
            margin-top: 0;
            position: relative;
        }

        .mobile-screen {
            position: relative;
            right: 0;
            top: 0;
        }
    }

    @media screen and (max-width: 768px) {
        .section-1 {
            padding: 40px 24px 20px;
            gap: 40px;
        }

        .section-text {
            max-width: 100%;
        }

        .main-headline {
            font-size: 32px;
            line-height: 38px;
        }

        .secondary-headline {
            font-size: 24px;
            line-height: 32px;
        }

        .caption {
            font-size: 14px;
        }

        .desktop-screen {
            max-width: 100%;
            height: auto;
        }

        .left-column,
        .box-2 {
            width: 100%;
            max-width: 100%;
        }

        .mobile-screen {
            width: 100%;
            max-width: 350px;
            height: auto;
            aspect-ratio: 350/750;
        }
    }

    @media screen and (max-width: 480px) {
        .section-1 {
            padding: 30px 16px 15px;
        }

        .main-headline {
            font-size: 28px;
            line-height: 34px;
        }

        .secondary-headline {
            font-size: 20px;
            line-height: 28px;
        }

        .cta-button {
            padding: 12px 20px;
            height: 44px;
        }

        .cta-button span {
            font-size: 14px;
        }
    }
</style>
