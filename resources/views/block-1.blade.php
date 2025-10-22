<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .section-1 {
        max-width: 1440px;
        margin: 0 auto;
        padding: 100px 0 140px;
        display: flex;
        flex-direction: column;
        gap: 80px;
    }

    .section-text {
        max-width: 959px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .section-top {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .caption {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 14px;
        font-weight: 400;
        line-height: 20px;
        color: #47556a;
        max-width: 708px;
    }

    .main-headline {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 48px;
        font-weight: 700;
        line-height: 62px;
        background: linear-gradient(180deg, #C026D3 0%, #701A75 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        max-width: 435px;
    }

    .secondary-headline {
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 48px;
        font-weight: 700;
        line-height: 62px;
        color: #191a15;
    }

    .collect-button {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 14px 24px;
        background: #fcac10;
        border: none;
        border-radius: 999px;
        font-family: system-ui, -apple-system, sans-serif;
        font-size: 14px;
        font-weight: 600;
        color: white;
        cursor: pointer;
        margin: 0 auto;
        width: 145px;
        height: 48px;
        justify-content: center;
    }

    .collect-button svg {
        width: 20px;
        height: 20px;
        fill: white;
    }

    .frame-47 {
        padding: 0 80px;
        position: relative;
        display: flex;
        height: 830px;
    }

    .desktop-screen {
        position: absolute;
        left: 238px;
        top: -1px;
        width: 977px;
        height: 667px;
        background: white;
        border: 2px solid #0f1742;
        border-radius: 20px;
        box-shadow: 12px 12px 0 #0f1742;
        overflow: hidden;
    }

    .top-bar {
        width: 100%;
        height: 41px;
        background: #1f2956;
        display: flex;
        align-items: center;
        padding: 0 16px;
        gap: 28px;
    }

    .circles {
        display: flex;
        gap: 5px;
    }

    .circle {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .circle-red {
        background: #e11d48;
    }

    .circle-yellow {
        background: #fbbf24;
    }

    .circle-green {
        background: #22c55e;
    }

    .address-bar {
        position: absolute;
        left: 269px;
        width: 439px;
        height: 25px;
        background: #f1f5f9;
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: #94a3b8;
    }

    .arrows {
        position: absolute;
        right: 16px;
        display: flex;
        gap: 5px;
    }

    .desktop-image {
        width: 100%;
        height: 626px;
        object-fit: cover;
    }

    .col-left {
        position: absolute;
        left: 80px;
        top: 336px;
        width: 345px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .content-box-1 {
        width: 256px;
        height: 80px;
        background: url('/images/block-1/2.png') center/cover;
        border: 2px solid #0f1742;
        border-radius: 10px;
        box-shadow: 12px 12px 0 #0f1742;
        position: relative;
        display: flex;
        flex-direction: column;
        padding: 24px 16px;
    }

    .icon-stars {
        width: 64px;
        height: 64px;
    }

    .title-category {
        margin-top: 16px;
        display: flex;
        flex-direction: column;
        gap: 4px;
    }

    .category-text {
        font-size: 14px;
        color: #0f1742;
        font-weight: 500;
    }

    .title-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .title-text {
        font-size: 20px;
        font-weight: 700;
        color: #0f1742;
    }

    .badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 2px 4px;
        background: #dcfce7;
        border-radius: 4px;
        font-size: 12px;
        color: #166534;
    }

    .badge-circle {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #22c55e;
    }

    .content-box-2 {
        width: 345px;
        height: 300px;
        background: url('/images/block-1/3.png') center/cover;
        border: 2px solid #0f1742;
        border-radius: 10px;
        box-shadow: 12px 12px 0 #0f1742;
    }

    .mobile-app {
        position: absolute;
        right: 80px;
        top: 80px;
        width: 350px;
        height: 750px;
        border: 2px solid #0f1742;
        border-radius: 20px;
        box-shadow: 12px 12px 0 #0f1742;
        overflow: hidden;
    }

    .mobile-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 18px;
    }

    .badge-blue {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        padding: 2px 4px;
        background: #dbeafe;
        border-radius: 4px;
        font-size: 12px;
        color: #1e40af;
        position: absolute;
        top: 16px;
        left: 16px;
    }

    .badge-blue-circle {
        width: 16px;
        height: 16px;
        border-radius: 50%;
        background: #60a5fa;
    }

    .user-thumb {
        position: absolute;
        top: 172px;
        left: 80px;
        width: 96px;
        height: 96px;
        border-radius: 100px;
        overflow: hidden;
        background: #e5e7eb;
    }

    @media (max-width: 1440px) {
        .section-1 {
            padding: 80px 40px 100px;
        }

        .frame-47 {
            padding: 0 40px;
        }
    }

    @media (max-width: 1024px) {
        .section-1 {
            padding: 60px 20px 80px;
        }

        .main-headline,
        .secondary-headline {
            font-size: 36px;
            line-height: 44px;
        }

        .frame-47 {
            height: auto;
            padding: 0 20px;
        }

        .desktop-screen,
        .col-left,
        .mobile-app {
            position: relative;
            left: 0;
            right: 0;
            margin: 20px auto;
        }

        .desktop-screen {
            width: 100%;
            max-width: 800px;
        }

        .col-left {
            max-width: 500px;
        }

        .mobile-app {
            max-width: 350px;
        }
    }
</style>

<section class="section-1">
    <div class="section-text">
        <div class="section-top">
            <p class="caption">Tagline</p>
            <h1 class="secondary-headline">Medium length section heading goes here</h1>
        </div>
        <button class="collect-button">
            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.1875 3.43429L2.1875 16.5634L17.8152 9.99887L2.1875 3.43429Z" fill="white"/>
            </svg>
            Collect
            <svg viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.1875 3.43429L2.1875 16.5634L17.8152 9.99887L2.1875 3.43429Z" fill="white"/>
            </svg>
        </button>
    </div>

    <div class="frame-47">
        <div class="desktop-screen">
            <div class="top-bar">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
                <div class="address-bar">feature</div>
                <div class="arrows">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.343 5.355L8.343 18.669L16.012 12.012L8.343 5.355Z" fill="#94a3b8"/>
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.083 5.426L8.083 18.715L15.727 12.071L8.083 5.426Z" fill="#47556a"/>
                    </svg>
                </div>
            </div>
            <img src="/images/block-1/1.png" alt="Desktop Application" class="desktop-image">
        </div>

        <div class="col-left">
            <div class="content-box-1">
                <div class="badge-blue">
                    <div class="badge-blue-circle"></div>
                    <span>Status</span>
                </div>
            </div>

            <div class="content-box-2"></div>
        </div>

        <div class="mobile-app">
            <img src="/images/block-1/4.png" alt="Mobile Application" class="mobile-image">
        </div>
    </div>
</section>
