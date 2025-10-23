<div class="block-1-wrapper">
    <div class="block-1-left">
        <div class="block-1-content">
            <h1 class="block-1-heading">VietGates Sàn giao dịch tài sản số dành cho người Việt</h1>
            <p class="block-1-description">Mua bán crypto nhanh chóng, an toàn và thân thiện – hỗ trợ trực tiếp VND và nhiều phương thức thanh toán.</p>
        </div>
        <div class="block-1-buttons">
            @component('components.button', ['variant' => 'outline', 'size' => 'lg', 'class' => 'btn-register'])
                Đăng ký ngay
            @endcomponent
            @component('components.button', ['variant' => 'primary', 'size' => 'lg', 'class' => 'btn-learn-more'])
                Tìm hiểu thêm
            @endcomponent
        </div>
    </div>

    <div class="block-1-right">
        <div class="crypto-table-header">
            Giá crypto hôm nay
        </div>
        @php
            $cryptoData = [
                ['icon' => '1.png', 'symbol' => 'BTC', 'name' => 'Bitcoin', 'price' => '$43,180.00', 'change' => '+2.45%', 'positive' => true],
                ['icon' => '2.png', 'symbol' => 'ETH', 'name' => 'Ethereum', 'price' => '$2,280.50', 'change' => '-1.23%', 'positive' => false],
                ['icon' => '3.png', 'symbol' => 'BNB', 'name' => 'Binance Coin', 'price' => '$315.20', 'change' => '+3.67%', 'positive' => true],
                ['icon' => '4.png', 'symbol' => 'ADA', 'name' => 'Cardano', 'price' => '$0.58', 'change' => '-0.89%', 'positive' => false],
                ['icon' => '1.png', 'symbol' => 'SOL', 'name' => 'Solana', 'price' => '$98.45', 'change' => '+5.12%', 'positive' => true],
                ['icon' => '2.png', 'symbol' => 'XRP', 'name' => 'Ripple', 'price' => '$0.62', 'change' => '-2.34%', 'positive' => false],
            ];
        @endphp
        @foreach($cryptoData as $crypto)
        <div class="crypto-table-row">
            <div class="crypto-info">
                <img src="{{ asset('images/block-1/' . $crypto['icon']) }}" alt="{{ $crypto['symbol'] }}" class="crypto-icon">
                <div>
                    <div class="crypto-symbol">{{ $crypto['symbol'] }}</div>
                    <div class="crypto-name">{{ $crypto['name'] }}</div>
                </div>
            </div>
            <div class="crypto-price">{{ $crypto['price'] }}</div>
            <div class="crypto-change {{ $crypto['positive'] ? 'positive' : 'negative' }}">{{ $crypto['change'] }}</div>
        </div>
        @endforeach
    </div>
</div>
