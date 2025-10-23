{{--
    Reusable Crypto Table Row Component
    
    @param string $icon - Path to crypto icon image
    @param string $symbol - Crypto symbol (e.g., 'BTC')
    @param string $name - Crypto full name (e.g., 'Bitcoin')
    @param string $price - Current price (e.g., '$67,291.09')
    @param string $change - Price change percentage (e.g., '+0.78%')
    @param string $changeType - 'positive' or 'negative'
--}}

<div class="crypto-table-row">
    <div class="crypto-info">
        <img src="{{ asset($icon) }}" alt="{{ $symbol }}" class="crypto-icon">
        <span class="crypto-symbol">{{ $symbol }}</span>
        <span class="crypto-name">{{ $name }}</span>
    </div>
    <span class="crypto-price">{{ $price }}</span>
    <span class="crypto-change {{ $changeType }}">{{ $change }}</span>
</div>
