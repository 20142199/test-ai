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
        <x-device-mockup 
            type="desktop" 
            :image="asset('images/block-1/desktop-screenshot.png')"
            url="bekisoft.com/feature"
        />

        <!-- Left Column Content Boxes -->
        <div class="left-column">
            <x-content-box class="box-1">
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
                            <x-badge type="green" text="Đang hoạt động" />
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
                <x-badge type="blue" text="Mới" style="position: absolute; top: 16px; left: 16px;" />
                <div class="user-thumb">
                    <img src="{{ asset('images/block-1/user-avatar.png') }}" alt="User Avatar">
                </div>
            </x-content-box>

            <x-content-box class="box-2" :image="asset('images/block-1/content-2.png')" />
        </div>

        <!-- Mobile App Mockup -->
        <x-device-mockup 
            type="mobile" 
            :image="asset('images/block-1/mobile-screenshot.png')"
        />
    </div>
</section>
