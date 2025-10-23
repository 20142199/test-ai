<section class="block-1">
    <div class="block-1-container">
        <div class="block-1-header">
            <h2 class="block-1-title">Our Services</h2>
            <p class="block-1-description">Discover our comprehensive range of solutions designed to meet your business needs</p>
        </div>
        
        <div class="block-1-grid">
            <div class="block-1-item">
                <div class="block-1-image-wrapper">
                    <img src="{{ asset('images/block-1/1.png') }}" alt="Service 1" class="block-1-image">
                </div>
                <div class="block-1-content">
                    <h3 class="block-1-item-title">Innovation</h3>
                    <p class="block-1-item-text">Cutting-edge technology solutions for modern businesses</p>
                </div>
            </div>
            
            <div class="block-1-item">
                <div class="block-1-image-wrapper">
                    <img src="{{ asset('images/block-1/2.png') }}" alt="Service 2" class="block-1-image">
                </div>
                <div class="block-1-content">
                    <h3 class="block-1-item-title">Excellence</h3>
                    <p class="block-1-item-text">Delivering quality results with precision and care</p>
                </div>
            </div>
            
            <div class="block-1-item">
                <div class="block-1-image-wrapper">
                    <img src="{{ asset('images/block-1/3.png') }}" alt="Service 3" class="block-1-image">
                </div>
                <div class="block-1-content">
                    <h3 class="block-1-item-title">Reliability</h3>
                    <p class="block-1-item-text">Trusted solutions you can depend on every time</p>
                </div>
            </div>
            
            <div class="block-1-item">
                <div class="block-1-image-wrapper">
                    <img src="{{ asset('images/block-1/4.png') }}" alt="Service 4" class="block-1-image">
                </div>
                <div class="block-1-content">
                    <h3 class="block-1-item-title">Support</h3>
                    <p class="block-1-item-text">Dedicated team ready to assist you 24/7</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .block-1 {
        width: 100%;
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .block-1-container {
        width: 100%;
        max-width: 1440px;
        margin: 0 auto;
        padding: 0 40px;
    }

    .block-1-header {
        text-align: center;
        margin-bottom: 60px;
    }

    .block-1-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 48px;
        font-weight: 700;
        color: #2c3e50;
        margin-bottom: 20px;
        letter-spacing: -1px;
        line-height: 1.2;
    }

    .block-1-description {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 18px;
        font-weight: 400;
        color: #666666;
        line-height: 1.6;
        max-width: 700px;
        margin: 0 auto;
    }

    .block-1-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 32px;
    }

    .block-1-item {
        background-color: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
    }

    .block-1-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
    }

    .block-1-image-wrapper {
        width: 100%;
        height: 240px;
        overflow: hidden;
        background-color: #f0f0f0;
    }

    .block-1-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .block-1-item:hover .block-1-image {
        transform: scale(1.05);
    }

    .block-1-content {
        padding: 24px;
    }

    .block-1-item-title {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 24px;
        font-weight: 600;
        color: #2c3e50;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .block-1-item-text {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 16px;
        font-weight: 400;
        color: #666666;
        line-height: 1.5;
        margin: 0;
    }

    /* Responsive Design */
    @media screen and (max-width: 1200px) {
        .block-1-container {
            padding: 0 32px;
        }

        .block-1-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .block-1-title {
            font-size: 40px;
        }

        .block-1-description {
            font-size: 16px;
        }
    }

    @media screen and (max-width: 768px) {
        .block-1 {
            padding: 60px 0;
        }

        .block-1-container {
            padding: 0 24px;
        }

        .block-1-header {
            margin-bottom: 40px;
        }

        .block-1-title {
            font-size: 32px;
        }

        .block-1-description {
            font-size: 15px;
        }

        .block-1-grid {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .block-1-image-wrapper {
            height: 200px;
        }

        .block-1-content {
            padding: 20px;
        }

        .block-1-item-title {
            font-size: 20px;
        }

        .block-1-item-text {
            font-size: 14px;
        }
    }

    @media screen and (max-width: 480px) {
        .block-1 {
            padding: 40px 0;
        }

        .block-1-container {
            padding: 0 16px;
        }

        .block-1-title {
            font-size: 28px;
        }

        .block-1-description {
            font-size: 14px;
        }

        .block-1-image-wrapper {
            height: 180px;
        }
    }
</style>
