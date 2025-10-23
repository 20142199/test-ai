<style>
    .block-1-wrapper {
        width: 100%;
        max-width: 1920px;
        margin: 0 auto;
        padding: 0 240px;
        min-height: 662px;
        display: flex;
        gap: 64px;
        align-items: center;
    }

    .block-1-left {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 42px;
        padding: 135px 0;
    }

    .block-1-content {
        display: flex;
        flex-direction: column;
        gap: 24px;
    }

    .block-1-heading {
        font-size: 68px;
        font-weight: 700;
        line-height: 68px;
        color: #14A39A;
        margin: 0;
    }

    .block-1-description {
        font-size: 20px;
        font-weight: 400;
        line-height: 30px;
        color: #3F515C;
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
        font-size: 20px;
        font-weight: 500;
        line-height: 30px;
        color: #14A39A;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .btn-learn-more {
        padding: 16px 24px;
        background: #14A39A;
        border: none;
        border-radius: 4px;
        font-size: 20px;
        font-weight: 500;
        line-height: 30px;
        color: #FFFFFF;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
    }

    .block-1-right {
        flex: 1;
        background: #FFFFFF;
        border: 1px solid #D8DCE0;
        border-radius: 16px;
        overflow: hidden;
        margin: 64px 0;
    }

    .crypto-table-header {
        padding: 16px 24px;
        background: #FFFFFF;
        border-bottom: 1px solid #D8DCE0;
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        color: #3F515C;
    }

    .crypto-table-row {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        padding: 24px;
        border-bottom: 1px solid #D8DCE0;
        align-items: center;
        background: #FFFFFF;
    }

    .crypto-table-row:last-child {
        border-bottom: none;
    }

    .crypto-info {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .crypto-icon {
        width: 32px;
        height: 32px;
        object-fit: contain;
    }

    .crypto-symbol {
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        color: #3F515C;
    }

    .crypto-name {
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        color: #788590;
    }

    .crypto-price {
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        color: #3F515C;
        text-align: center;
    }

    .crypto-change {
        font-size: 16px;
        font-weight: 500;
        line-height: 22px;
        text-align: right;
    }

    .crypto-change.positive {
        color: #2EBD85;
    }

    .crypto-change.negative {
        color: #E33B54;
    }

    /* Responsive */
    @media (max-width: 1440px) {
        .block-1-wrapper {
            padding: 0 120px;
        }
    }

    @media (max-width: 1024px) {
        .block-1-wrapper {
            padding: 0 40px;
            flex-direction: column;
            gap: 40px;
        }

        .block-1-left {
            padding: 60px 0 0 0;
        }

        .block-1-right {
            margin: 0 0 60px 0;
            width: 100%;
        }

        .block-1-heading {
            font-size: 48px;
            line-height: 52px;
        }
    }

    @media (max-width: 768px) {
        .block-1-wrapper {
            padding: 0 20px;
        }

        .block-1-heading {
            font-size: 36px;
            line-height: 40px;
        }

        .block-1-description {
            font-size: 16px;
            line-height: 24px;
        }

        .block-1-buttons {
            flex-direction: column;
        }

        .btn-register,
        .btn-learn-more {
            width: 100%;
            text-align: center;
        }

        .crypto-table-row {
            grid-template-columns: 1fr;
            gap: 12px;
        }

        .crypto-price,
        .crypto-change {
            text-align: left;
        }
    }
</style>

<div class="block-1-wrapper">
    <div class="block-1-left">
        <div class="block-1-content">
            <h1 class="block-1-heading">VietGates Sàn giao dịch tài sản số dành cho người Việt</h1>
            <p class="block-1-description">Mua bán crypto nhanh chóng, an toàn và thân thiện – hỗ trợ trực tiếp VND và nhiều phương thức thanh toán.</p>
        </div>
        <div class="block-1-buttons">
            <a href="#" class="btn-register">Đăng ký ngay</a>
            <a href="#" class="btn-learn-more">Tìm hiểu thêm</a>
        </div>
    </div>

    <div class="block-1-right">
        <div class="crypto-table-header">
            Giá crypto hôm nay
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/1.png') }}" alt="BTC" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">BTC</div>
                    <div class="crypto-name">Bitcoin</div>
                </div>
            </div>
            <div class="crypto-price">$43,180.00</div>
            <div class="crypto-change positive">+2.45%</div>
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/2.png') }}" alt="ETH" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">ETH</div>
                    <div class="crypto-name">Ethereum</div>
                </div>
            </div>
            <div class="crypto-price">$2,280.50</div>
            <div class="crypto-change negative">-1.23%</div>
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/3.png') }}" alt="BNB" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">BNB</div>
                    <div class="crypto-name">Binance Coin</div>
                </div>
            </div>
            <div class="crypto-price">$315.20</div>
            <div class="crypto-change positive">+3.67%</div>
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/4.png') }}" alt="ADA" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">ADA</div>
                    <div class="crypto-name">Cardano</div>
                </div>
            </div>
            <div class="crypto-price">$0.58</div>
            <div class="crypto-change negative">-0.89%</div>
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/1.png') }}" alt="SOL" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">SOL</div>
                    <div class="crypto-name">Solana</div>
                </div>
            </div>
            <div class="crypto-price">$98.45</div>
            <div class="crypto-change positive">+5.12%</div>
        </div>
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/2.png') }}" alt="XRP" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">XRP</div>
                    <div class="crypto-name">Ripple</div>
                </div>
            </div>
            <div class="crypto-price">$0.62</div>
            <div class="crypto-change negative">-2.34%</div>
        </div>
    </div>
</div>
