<section class="block-2">
    <div class="block-2-container">
        <div class="block-2-header">
            <h2 class="block-2-title">Why Choose Us</h2>
            <p class="block-2-description">We deliver exceptional value through innovation, expertise, and dedication to your success</p>
        </div>
        
        <div class="block-2-content">
            <div class="block-2-feature">
                <div class="block-2-feature-image">
                    <img src="{{ asset('images/block-2/1.png') }}" alt="Feature 1" class="feature-img">
                </div>
                <div class="block-2-feature-text">
                    <h3 class="feature-title">Advanced Technology</h3>
                    <p class="feature-description">Leverage cutting-edge solutions powered by the latest technology to stay ahead of the competition. Our innovative approach ensures your business thrives in the digital age.</p>
                    <ul class="feature-list">
                        <li class="feature-list-item">Cloud-based infrastructure</li>
                        <li class="feature-list-item">AI-powered analytics</li>
                        <li class="feature-list-item">Real-time monitoring</li>
                    </ul>
                </div>
            </div>
            
            <div class="block-2-feature block-2-feature-reverse">
                <div class="block-2-feature-image">
                    <img src="{{ asset('images/block-2/2.png') }}" alt="Feature 2" class="feature-img">
                </div>
                <div class="block-2-feature-text">
                    <h3 class="feature-title">Expert Team</h3>
                    <p class="feature-description">Work with seasoned professionals who bring years of experience and deep industry knowledge to every project. Our team is committed to your success.</p>
                    <ul class="feature-list">
                        <li class="feature-list-item">Certified specialists</li>
                        <li class="feature-list-item">Continuous training</li>
                        <li class="feature-list-item">Industry recognition</li>
                    </ul>
                </div>
            </div>
            
            <div class="block-2-feature">
                <div class="block-2-feature-image">
                    <img src="{{ asset('images/block-2/3.png') }}" alt="Feature 3" class="feature-img">
                </div>
                <div class="block-2-feature-text">
                    <h3 class="feature-title">Proven Results</h3>
                    <p class="feature-description">Track record of delivering measurable outcomes that exceed expectations. Our data-driven approach ensures transparency and accountability at every step.</p>
                    <ul class="feature-list">
                        <li class="feature-list-item">150+ successful projects</li>
                        <li class="feature-list-item">98% client satisfaction</li>
                        <li class="feature-list-item">Award-winning service</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .block-2 {
        width: 100%;
        background-color: #ffffff;
        padding: 100px 0;
    }

    .block-2-container {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .block-2-header {
        text-align: center;
        margin-bottom: 80px;
    }

    .block-2-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
        letter-spacing: -1px;
        line-height: 1.2;
    }

    .block-2-description {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #666666;
        line-height: 1.6;
        max-width: 800px;
        margin: 0 auto;
    }

    .block-2-content {
        display: flex;
        flex-direction: column;
        gap: 80px;
    }

    .block-2-feature {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
    }

    .block-2-feature-reverse {
        direction: rtl;
    }

    .block-2-feature-reverse > * {
        direction: ltr;
    }

    .block-2-feature-image {
        width: 100%;
        height: 400px;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.12);
        background-color: #f0f0f0;
    }

    .feature-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .block-2-feature:hover .feature-img {
        transform: scale(1.05);
    }

    .block-2-feature-text {
        padding: 20px 0;
    }

    .feature-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 36px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 24px;
        line-height: 1.2;
        letter-spacing: -0.5px;
    }

    .feature-description {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #555555;
        line-height: 1.7;
        margin-bottom: 28px;
    }

    .feature-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .feature-list-item {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #666666;
        padding: 12px 0;
        padding-left: 32px;
        position: relative;
        line-height: 1.5;
    }

    .feature-list-item::before {
        content: "✓";
        position: absolute;
        left: 0;
        color: #27ae60;
        font-weight: 700;
        font-size: 18px;
    }

    /* Responsive Design */
    @media screen and (max-width: 1200px) {
        .block-2-container {
            padding: 0 32px;
        }

        .block-2-feature {
            gap: 40px;
        }

        .block-2-title {
            font-size: 40px;
        }

        .feature-title {
            font-size: 32px;
        }

        .feature-description {
            font-size: 16px;
        }
    }

    @media screen and (max-width: 968px) {
        .block-2 {
            padding: 80px 0;
        }

        .block-2-header {
            margin-bottom: 60px;
        }

        .block-2-content {
            gap: 60px;
        }

        .block-2-feature,
        .block-2-feature-reverse {
            grid-template-columns: 1fr;
            gap: 32px;
            direction: ltr;
        }

        .block-2-feature-image {
            height: 320px;
        }

        .feature-title {
            font-size: 28px;
        }
    }

    @media screen and (max-width: 768px) {
        .block-2 {
            padding: 60px 0;
        }

        .block-2-container {
            padding: 0 24px;
        }

        .block-2-header {
            margin-bottom: 48px;
        }

        .block-2-title {
            font-size: 32px;
        }

        .block-2-description {
            font-size: 16px;
        }

        .block-2-content {
            gap: 48px;
        }

        .block-2-feature-image {
            height: 280px;
        }

        .feature-title {
            font-size: 24px;
            margin-bottom: 16px;
        }

        .feature-description {
            font-size: 15px;
            margin-bottom: 20px;
        }

        .feature-list-item {
            font-size: 14px;
            padding: 10px 0;
        }
    }

    @media screen and (max-width: 480px) {
        .block-2 {
            padding: 40px 0;
        }

        .block-2-container {
            padding: 0 16px;
        }

        .block-2-title {
            font-size: 28px;
        }

        .block-2-description {
            font-size: 14px;
        }

        .block-2-feature-image {
            height: 240px;
        }

        .feature-title {
            font-size: 22px;
        }

        .feature-description {
            font-size: 14px;
        }
    }
</style>
