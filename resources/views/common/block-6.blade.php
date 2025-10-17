{{-- Block 6 Component - Features Section --}}
{{-- Usage: @include('common.block-6', $data) --}}

<section class="block-6 {{ isset($variant) ? "block-6--{$variant}" : '' }}">
    <div class="block-6__container">
        <div class="block-6__features">
            {{-- Background --}}
            <div class="block-6__bg"></div>
            
            {{-- Title Section --}}
            <div class="block-6__title">
                @if(isset($subtitle) && $subtitle)
                    <p class="block-6__subtitle">{{ $subtitle }}</p>
                @endif
                
                @if(isset($heading) && $heading)
                    <h2 class="block-6__heading">{{ $heading }}</h2>
                @endif
            </div>

            {{-- Features Grid --}}
            <div class="block-6__features-grid">
                @if(isset($features) && is_array($features))
                    @foreach($features as $index => $feature)
                        <div class="block-6__feature">
                            {{-- Feature Icon --}}
                            <div class="block-6__feature-icon block-6__feature-icon--{{ $feature['iconColor'] ?? 'purple' }}">
                                @if(isset($feature['icon']))
                                    @if(is_string($feature['icon']))
                                        {{ $feature['icon'] }}
                                    @else
                                        <svg class="block-6__icon" viewBox="0 0 24 24" fill="currentColor">
                                            @if($feature['icon'] === 'layers')
                                                <path d="M12 2l9 4.9v6.2L12 18l-9-4.9V6.9L12 2z"/>
                                                <path d="M12 7l9 4.9v6.2L12 20l-9-4.9v-6.2L12 7z"/>
                                            @elseif($feature['icon'] === 'contact')
                                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                                            @elseif($feature['icon'] === 'chat')
                                                <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                                            @elseif($feature['icon'] === 'clock')
                                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z"/>
                                            @else
                                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                            @endif
                                        </svg>
                                    @endif
                                @endif
                            </div>

                            {{-- Feature Content --}}
                            <div class="block-6__feature-content">
                                @if(isset($feature['title']))
                                    <h3 class="block-6__feature-title">{{ $feature['title'] }}</h3>
                                @endif
                                
                                @if(isset($feature['description']))
                                    <p class="block-6__feature-description">{{ $feature['description'] }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    {{-- Default Features (based on Figma design) --}}
                    <div class="block-6__feature">
                        <div class="block-6__feature-icon block-6__feature-icon--purple">
                            <svg class="block-6__icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                            </svg>
                        </div>
                        <div class="block-6__feature-content">
                            <h3 class="block-6__feature-title">Dedicated project manager</h3>
                            <p class="block-6__feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                        </div>
                    </div>
                    
                    <div class="block-6__feature">
                        <div class="block-6__feature-icon block-6__feature-icon--red">
                            <svg class="block-6__icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l9 4.9v6.2L12 18l-9-4.9V6.9L12 2z"/>
                                <path d="M12 7l9 4.9v6.2L12 20l-9-4.9v-6.2L12 7z"/>
                            </svg>
                        </div>
                        <div class="block-6__feature-content">
                            <h3 class="block-6__feature-title">Organized tasks</h3>
                            <p class="block-6__feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                        </div>
                    </div>
                    
                    <div class="block-6__feature">
                        <div class="block-6__feature-icon block-6__feature-icon--green">
                            <svg class="block-6__icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h4l4 4 4-4h4c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-2 12H6v-2h12v2zm0-3H6V9h12v2zm0-3H6V6h12v2z"/>
                            </svg>
                        </div>
                        <div class="block-6__feature-content">
                            <h3 class="block-6__feature-title">Easy feedback sharing</h3>
                            <p class="block-6__feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                        </div>
                    </div>
                    
                    <div class="block-6__feature">
                        <div class="block-6__feature-icon block-6__feature-icon--dark">
                            <svg class="block-6__icon" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.5 2 2 6.5 2 12s4.5 10 10 10 10-4.5 10-10S17.5 2 12 2zm4.2 14.2L11 13V7h1.5v5.2l4.5 2.7-.8 1.3z"/>
                            </svg>
                        </div>
                        <div class="block-6__feature-content">
                            <h3 class="block-6__feature-title">Never miss deadline</h3>
                            <p class="block-6__feature-description">With lots of unique blocks, you can easily build a page without coding. Build your next landing page.</p>
                        </div>
                    </div>
                @endif
            </div>

            {{-- Border Line --}}
            <div class="block-6__border"></div>

            {{-- CTA Section --}}
            <div class="block-6__cta">
                <div class="block-6__cta-content">
                    @if(isset($cta) && isset($cta['title']))
                        <h3 class="block-6__cta-title">{{ $cta['title'] }}</h3>
                    @endif
                    
                    @if(isset($cta) && isset($cta['description']))
                        <p class="block-6__cta-description">{{ $cta['description'] }}</p>
                    @endif
                </div>

                @if(isset($cta) && isset($cta['button']))
                    <button class="block-6__cta-button" onclick="window.location.href='{{ $cta['button']['url'] ?? '#' }}'">
                        {{ $cta['button']['text'] ?? 'Get Started' }}
                    </button>
                @endif
            </div>

            {{-- Decorative Elements --}}
            @if(isset($decoration) && $decoration !== false)
                <div class="block-6__decoration"></div>
            @endif
        </div>
    </div>
</section>
