<style>
    .block-1-container {
        width: 100%;
        padding: 0 16px;
        margin: 0 auto;
    }

    .block-1-inner {
        max-width: 1920px;
        margin: 0 auto;
        min-height: 662px;
        display: flex;
        align-items: center;
        gap: 64px;
        padding: 64px 240px;
    }

    .block-1-left {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 42px;
    }

    .block-1-content {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .block-1-title {
        font-size: 68px;
        font-weight: 700;
        color: #14A39A;
        line-height: 1.2;
        margin: 0;
    }

    .block-1-description {
        font-size: 20px;
        font-weight: 400;
        color: #3F515C;
        line-height: 1.5;
        margin: 0;
    }

    .block-1-buttons {
        display: flex;
        gap: 16px;
    }

    .btn-register {
        padding: 16px 24px;
        background: transparent;
        border: 1px solid #14A39A;
        border-radius: 4px;
        font-size: 26.67px;
        font-weight: 400;
        color: #14A39A;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        line-height: 30px;
    }

    .btn-learn-more {
        padding: 16px 24px;
        background: #14A39A;
        border: none;
        border-radius: 4px;
        font-size: 26.67px;
        font-weight: 400;
        color: #FFFFFF;
        text-decoration: none;
        display: inline-block;
        cursor: pointer;
        line-height: 30px;
    }

    .block-1-right {
        flex: 1;
        background: #FFFFFF;
        border: 1px solid #D8DCDE;
        border-radius: 16px;
        overflow: hidden;
    }

    .crypto-table-header {
        padding: 16px 24px;
        border-bottom: 1px solid #D8DCDE;
        background: #FFFFFF;
    }

    .crypto-table-header-text {
        font-size: 18.69px;
        font-weight: 400;
        color: #3F515C;
        margin: 0;
        line-height: 22px;
    }

    .crypto-table-row {
        display: flex;
        align-items: center;
        padding: 24px;
        border-bottom: 1px solid #D8DCDE;
        background: #FFFFFF;
    }

    .crypto-table-row:last-child {
        border-bottom: none;
    }

    .crypto-info {
        display: flex;
        align-items: center;
        gap: 16px;
        flex: 1;
    }

    .crypto-icon {
        width: 32px;
        height: 32px;
        object-fit: contain;
    }

    .crypto-symbol {
        font-size: 18.69px;
        font-weight: 400;
        color: #3F515C;
        margin: 0;
        line-height: 22px;
    }

    .crypto-name {
        font-size: 17.69px;
        font-weight: 400;
        color: #788588;
        margin: 0;
        line-height: 22px;
        margin-left: 16px;
    }

    .crypto-price {
        font-size: 18.69px;
        font-weight: 400;
        color: #3F515C;
        margin: 0;
        flex: 1;
        text-align: left;
        padding-left: 0;
        line-height: 22px;
    }

    .crypto-change {
        font-size: 18.69px;
        font-weight: 400;
        margin: 0;
        flex: 1;
        text-align: left;
        line-height: 22px;
    }

    .crypto-change.positive {
        color: #2EBD85;
    }

    .crypto-change.negative {
        color: #E33B54;
    }

    @media (max-width: 1440px) {
        .block-1-inner {
            padding: 64px 120px;
        }
    }

    @media (max-width: 1024px) {
        .block-1-inner {
            padding: 40px 60px;
            gap: 40px;
            flex-direction: column;
        }

        .block-1-title {
            font-size: 48px;
        }

        .block-1-description {
            font-size: 18px;
        }

        .btn-register,
        .btn-learn-more {
            font-size: 20px;
            padding: 12px 20px;
        }
    }

    @media (max-width: 768px) {
        .block-1-inner {
            padding: 32px 16px;
            gap: 32px;
        }

        .block-1-title {
            font-size: 36px;
        }

        .block-1-description {
            font-size: 16px;
        }

        .block-1-buttons {
            flex-direction: column;
        }

        .btn-register,
        .btn-learn-more {
            font-size: 18px;
            padding: 12px 16px;
            text-align: center;
        }

        .crypto-table-row {
            padding: 16px;
            flex-wrap: wrap;
        }

        .crypto-info {
            width: 100%;
        }

        .crypto-price,
        .crypto-change {
            width: 50%;
            padding-left: 48px;
        }
    }
</style>

<div class="block-1-container">
    <div class="block-1-inner">
        <div class="block-1-left">
            <div class="block-1-content">
                <h2 class="block-1-title">VietGates<br>Sàn giao dịch tài sản số<br>dành cho người Việt</h2>
                <p class="block-1-description">Mua bán crypto nhanh chóng, an toàn và thân thiện – hỗ trợ trực tiếp VND và nhiều phương thức thanh toán.</p>
            </div>
            <div class="block-1-buttons">
                <a href="#" class="btn-register">Đăng ký ngay</a>
                <a href="#" class="btn-learn-more">Tìm hiểu thêm</a>
            </div>
        </div>
        <div class="block-1-right">
            <div class="crypto-table-header">
                <p class="crypto-table-header-text">Giao dịch hàng đầu</p>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/1.png') }}" alt="BTC" class="crypto-icon">
                    <span class="crypto-symbol">BTC</span>
                    <span class="crypto-name">Bitcoin</span>
                </div>
                <span class="crypto-price">$67,291.09</span>
                <span class="crypto-change positive">+0.78%</span>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/2.png') }}" alt="ETH" class="crypto-icon">
                    <span class="crypto-symbol">ETH</span>
                    <span class="crypto-name">Ethereum</span>
                </div>
                <span class="crypto-price">$2,625.27</span>
                <span class="crypto-change negative">-1.32%</span>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/3.png') }}" alt="SOL" class="crypto-icon">
                    <span class="crypto-symbol">SOL</span>
                    <span class="crypto-name">Solana</span>
                </div>
                <span class="crypto-price">$177.82</span>
                <span class="crypto-change positive">+2.15%</span>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/4.png') }}" alt="BNB" class="crypto-icon">
                    <span class="crypto-symbol">BNB</span>
                    <span class="crypto-name">Binance Coin</span>
                </div>
                <span class="crypto-price">$591.43</span>
                <span class="crypto-change negative">-0.89%</span>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/1.png') }}" alt="XRP" class="crypto-icon">
                    <span class="crypto-symbol">XRP</span>
                    <span class="crypto-name">Ripple</span>
                </div>
                <span class="crypto-price">$0.5234</span>
                <span class="crypto-change positive">+1.67%</span>
            </div>
            <div class="crypto-table-row">
                <div class="crypto-info">
                    <img src="{{ asset('images/block-1/2.png') }}" alt="ADA" class="crypto-icon">
                    <span class="crypto-symbol">ADA</span>
                    <span class="crypto-name">Cardano</span>
                </div>
                <span class="crypto-price">$0.3521</span>
                <span class="crypto-change negative">-2.45%</span>
            </div>
        </div>
    </div>
</div>
