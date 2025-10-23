<div class="block-1-container">
    <div class="block-1-inner">
        <div class="block-1-left">
            <div class="block-1-content">
                <h2 class="block-1-title">VietGates<br>Sàn giao dịch tài sản số<br>dành cho người Việt</h2>
                <p class="block-1-description">Mua bán crypto nhanh chóng, an toàn và thân thiện – hỗ trợ trực tiếp VND và nhiều phương thức thanh toán.</p>
            </div>
            <div class="block-1-buttons">
                @include('common.button', ['type' => 'large-outline', 'text' => 'Đăng ký ngay'])
                @include('common.button', ['type' => 'large-primary', 'text' => 'Tìm hiểu thêm'])
            </div>
        </div>
        <div class="block-1-right">
            <div class="crypto-table-header">
                <p class="crypto-table-header-text">Giao dịch hàng đầu</p>
            </div>
            @include('common.crypto-row', [
                'icon' => 'images/block-1/1.png',
                'symbol' => 'BTC',
                'name' => 'Bitcoin',
                'price' => '$67,291.09',
                'change' => '+0.78%',
                'changeType' => 'positive'
            ])
            @include('common.crypto-row', [
                'icon' => 'images/block-1/2.png',
                'symbol' => 'ETH',
                'name' => 'Ethereum',
                'price' => '$2,625.27',
                'change' => '-1.32%',
                'changeType' => 'negative'
            ])
            @include('common.crypto-row', [
                'icon' => 'images/block-1/3.png',
                'symbol' => 'SOL',
                'name' => 'Solana',
                'price' => '$177.82',
                'change' => '+2.15%',
                'changeType' => 'positive'
            ])
            @include('common.crypto-row', [
                'icon' => 'images/block-1/4.png',
                'symbol' => 'BNB',
                'name' => 'Binance Coin',
                'price' => '$591.43',
                'change' => '-0.89%',
                'changeType' => 'negative'
            ])
            @include('common.crypto-row', [
                'icon' => 'images/block-1/1.png',
                'symbol' => 'XRP',
                'name' => 'Ripple',
                'price' => '$0.5234',
                'change' => '+1.67%',
                'changeType' => 'positive'
            ])
            @include('common.crypto-row', [
                'icon' => 'images/block-1/2.png',
                'symbol' => 'ADA',
                'name' => 'Cardano',
                'price' => '$0.3521',
                'change' => '-2.45%',
                'changeType' => 'negative'
            ])
        </div>
    </div>
</div>
