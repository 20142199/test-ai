@props(['text'])

<button class="cta-button">
    <svg class="arrow-icon-btn" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M2.1875 10L17.8152 10M17.8152 10L12.2188 3.43429M17.8152 10L12.2188 16.563" stroke="currentColor" stroke-width="1.875" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    <span>{{ $text }}</span>
</button>
