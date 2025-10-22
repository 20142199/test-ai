<style>
    .section-1 {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 100px 80px;
        display: flex;
        flex-direction: column;
        gap: 80px;
    }
    
    .section-text {
        max-width: 959px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 24px;
    }
    
    .section-top {
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 8px;
        text-align: center;
    }
    
    .caption {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 16px;
        font-weight: 400;
        line-height: 20px;
        color: rgb(71, 85, 105);
        margin: 0;
    }
    
    .main-headline {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 62px;
        background: linear-gradient(180deg, rgb(192, 38, 211) 0%, rgb(112, 26, 117) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin: 0;
        display: inline-block;
    }
    
    .secondary-headline {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 62px;
        color: rgb(25, 26, 21);
        margin: 0;
    }
    
    .cta-button {
        display: flex;
        align-items: center;
        gap: 4px;
        padding: 15px 24px;
        height: 48px;
        background: rgb(252, 172, 16);
        border: none;
        border-radius: 999px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        font-size: 16px;
        font-weight: 500;
        line-height: 18px;
        color: #ffffff;
        cursor: pointer;
        transition: transform 0.2s;
    }
    
    .cta-button:hover {
        transform: scale(1.05);
    }
    
    .arrow-icon-btn {
        width: 20px;
        height: 20px;
        fill: #ffffff;
    }
    
    .content-frame {
        position: relative;
        width: 100%;
        max-width: 1280px;
        height: 830px;
        margin: 0 auto;
    }
    
    .desktop-screen {
        position: absolute;
        left: 158px;
        top: -1px;
        width: 977px;
        height: 667px;
        background: #ffffff;
        border: 2px solid rgb(15, 23, 42);
        border-radius: 20px;
        box-shadow: 12px 12px 0px rgb(15, 23, 42);
        overflow: hidden;
    }
    
    .top-bar {
        width: 100%;
        height: 41px;
        background: rgb(31, 41, 86);
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
        background: rgb(225, 29, 72);
    }
    
    .circle-yellow {
        background: rgb(251, 191, 36);
    }
    
    .circle-green {
        background: rgb(34, 197, 94);
    }
    
    .address-bar {
        flex: 1;
        height: 25px;
        background: rgb(241, 245, 249);
        border-radius: 5px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 12px;
        color: rgb(148, 163, 184);
    }
    
    .nav-arrows {
        display: flex;
        gap: 5px;
    }
    
    .desktop-content {
        width: 100%;
        height: 626px;
        background-size: cover;
        background-position: center;
    }
    
    .content-col {
        position: absolute;
        left: 0;
        top: 336px;
        width: 345px;
        display: flex;
        flex-direction: column;
        gap: 24px;
    }
    
    .content-box-small {
        width: 256px;
        height: 80px;
        background: #ffffff;
        border: 2px solid rgb(15, 23, 42);
        border-radius: 10px;
        box-shadow: 12px 12px 0px rgb(15, 23, 42);
        background-size: cover;
        background-position: center;
    }
    
    .content-box-large {
        width: 345px;
        height: 300px;
        background: #ffffff;
        border: 2px solid rgb(15, 23, 42);
        border-radius: 10px;
        box-shadow: 12px 12px 0px rgb(15, 23, 42);
        background-size: cover;
        background-position: center;
    }
    
    .mobile-screen {
        position: absolute;
        right: 0;
        top: 80px;
        width: 350px;
        height: 750px;
        background: #ffffff;
        border: 2px solid rgb(15, 23, 42);
        border-radius: 20px;
        box-shadow: 12px 12px 0px rgb(15, 23, 42);
        overflow: hidden;
    }
    
    .mobile-content {
        width: 100%;
        height: 100%;
        background-size: cover;
        background-position: center;
        border-radius: 18px;
    }
    
    /* Responsive styles */
    @media (max-width: 1440px) {
        .section-1 {
            padding: 80px 60px;
        }
        
        .content-frame {
            height: auto;
            min-height: 830px;
        }
    }
    
    @media (max-width: 1200px) {
        .section-1 {
            padding: 60px 40px;
        }
        
        .main-headline,
        .secondary-headline {
            font-size: 42px;
            line-height: 48px;
        }
        
        .desktop-screen {
            left: 80px;
            width: 800px;
            height: 550px;
        }
        
        .desktop-content {
            height: 509px;
        }
        
        .mobile-screen {
            width: 280px;
            height: 600px;
        }
        
        .content-col {
            top: 280px;
        }
    }
    
    @media (max-width: 768px) {
        .section-1 {
            padding: 40px 20px;
            gap: 60px;
        }
        
        .main-headline,
        .secondary-headline {
            font-size: 32px;
            line-height: 38px;
        }
        
        .caption {
            font-size: 14px;
        }
        
        .content-frame {
            position: relative;
            height: auto;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        
        .desktop-screen {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            max-width: 500px;
            height: auto;
            aspect-ratio: 16/10;
            margin: 0 auto;
        }
        
        .desktop-content {
            height: auto;
            aspect-ratio: 16/9;
        }
        
        .mobile-screen {
            position: relative;
            right: 0;
            top: 0;
            width: 100%;
            max-width: 300px;
            height: auto;
            aspect-ratio: 9/19;
            margin: 0 auto;
        }
        
        .content-col {
            position: relative;
            left: 0;
            top: 0;
            width: 100%;
            max-width: 345px;
            margin: 0 auto;
        }
    }
</style>

<section class="section-1">
    <div class="section-text">
        <div class="section-top">
            <p class="caption">Streamline your workflow and boost your productivity</p>
            <h1>
                <span class="secondary-headline">Unleash the power of </span>
                <span class="main-headline">automation</span>
            </h1>
        </div>
        <button class="cta-button">
            <svg class="arrow-icon-btn" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.1875 10L17.8152 10M17.8152 10L12.2188 3.43429M17.8152 10L12.2188 16.563" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>Learn more</span>
        </button>
    </div>
    
    <div class="content-frame">
        <div class="desktop-screen">
            <div class="top-bar">
                <div class="circles">
                    <div class="circle circle-red"></div>
                    <div class="circle circle-yellow"></div>
                    <div class="circle circle-green"></div>
                </div>
                <div class="nav-arrows">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M8.343 5.355L2 12.012L8.343 18.669" stroke="rgb(148, 163, 184)" stroke-width="1.5"/>
                    </svg>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M15.083 5.426L21.728 12.012L15.083 18.715" stroke="rgb(71, 85, 105)" stroke-width="1.5"/>
                    </svg>
                </div>
                <div class="address-bar">feature</div>
            </div>
            <div class="desktop-content" style="background-image: url('{{ asset('images/block-1/1.png') }}');"></div>
        </div>
        
        <div class="content-col">
            <div class="content-box-small" style="background-image: url('{{ asset('images/block-1/2.png') }}');"></div>
            <div class="content-box-large" style="background-image: url('{{ asset('images/block-1/3.png') }}');"></div>
        </div>
        
        <div class="mobile-screen">
            <div class="mobile-content" style="background-image: url('{{ asset('images/block-1/4.png') }}');"></div>
        </div>
    </div>
</section>
