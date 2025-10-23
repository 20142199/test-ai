{{-- Reusable Logo Component --}}
<div class="logo-section">
    <img src="{{ asset('images/logo.png') }}" alt="{{ $alt ?? 'Bekisoft JSC Logo' }}" class="{{ $class ?? 'logo' }}">
    @if(!isset($hideText) || !$hideText)
        <span class="{{ $nameClass ?? 'company-name' }}">Bekisoft JSC</span>
    @endif
</div>
