{{-- Block 7 Component - Portfolio/Works Section --}}
{{-- Usage: @include('common.block-7', $data) --}}

<section class="block-7 {{ isset($variant) ? "block-7--{$variant}" : '' }}">
    <div class="block-7__container">
        <div class="block-7__works">
            {{-- Title Section --}}
            <div class="block-7__title">
                @if(isset($subtitle) && $subtitle)
                    <p class="block-7__subtitle">{{ $subtitle }}</p>
                @endif
                
                @if(isset($heading) && $heading)
                    <h2 class="block-7__heading">{{ $heading }}</h2>
                @endif
            </div>

            {{-- Portfolio Grid --}}
            <div class="block-7__portfolio-grid">
                @if(isset($portfolio) && is_array($portfolio))
                    @foreach($portfolio as $index => $item)
                        <div class="block-7__portfolio-item">
                            {{-- Portfolio Image --}}
                            @if(isset($item['image']))
                                <div class="block-7__portfolio-image">
                                    <img 
                                        src="{{ $item['image']['src'] }}" 
                                        alt="{{ $item['image']['alt'] ?? $item['title'] ?? 'Portfolio Item' }}" 
                                        class="block-7__portfolio-img"
                                    >
                                </div>
                            @endif

                            {{-- Portfolio Content --}}
                            <div class="block-7__portfolio-content">
                                @if(isset($item['category']))
                                    <p class="block-7__portfolio-category">{{ $item['category'] }}</p>
                                @endif
                                
                                @if(isset($item['title']))
                                    <h3 class="block-7__portfolio-title">{{ $item['title'] }}</h3>
                                @endif
                            </div>
                        </div>
                    @endforeach
                @else
                    {{-- Default Portfolio Items (based on Figma design) --}}
                    <div class="block-7__portfolio-item">
                        <div class="block-7__portfolio-image">
                            <img 
                                src="https://images.unsplash.com/photo-1558655146-d09347e92766?w=500&h=540&fit=crop" 
                                alt="Aura Branding Design" 
                                class="block-7__portfolio-img"
                            >
                        </div>
                        <div class="block-7__portfolio-content">
                            <p class="block-7__portfolio-category">Graphic Design</p>
                            <h3 class="block-7__portfolio-title">Aura Branding Design</h3>
                        </div>
                    </div>
                    
                    <div class="block-7__portfolio-item">
                        <div class="block-7__portfolio-image">
                            <img 
                                src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=346&fit=crop" 
                                alt="Gradient Website Dev" 
                                class="block-7__portfolio-img"
                            >
                        </div>
                        <div class="block-7__portfolio-content">
                            <p class="block-7__portfolio-category">Web Development</p>
                            <h3 class="block-7__portfolio-title">Gradient Website Dev</h3>
                        </div>
                    </div>
                    
                    <div class="block-7__portfolio-item">
                        <div class="block-7__portfolio-image">
                            <img 
                                src="https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=500&h=342&fit=crop" 
                                alt="AB.S Snack Packaging" 
                                class="block-7__portfolio-img"
                            >
                        </div>
                        <div class="block-7__portfolio-content">
                            <p class="block-7__portfolio-category">Graphic Design</p>
                            <h3 class="block-7__portfolio-title">AB.S Snack Packaging</h3>
                        </div>
                    </div>
                    
                    <div class="block-7__portfolio-item">
                        <div class="block-7__portfolio-image">
                            <img 
                                src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=500&h=540&fit=crop" 
                                alt="Magazine Content Writing" 
                                class="block-7__portfolio-img"
                            >
                        </div>
                        <div class="block-7__portfolio-content">
                            <p class="block-7__portfolio-category">Content Writing</p>
                            <h3 class="block-7__portfolio-title">Magazine Content Writing</h3>
                        </div>
                    </div>
                @endif
            </div>

            {{-- View All Button --}}
            @if(isset($viewAll) && $viewAll !== false)
                <div class="block-7__view-all">
                    <a href="{{ $viewAll['url'] ?? '/portfolio' }}" class="block-7__view-all-button">
                        {{ $viewAll['text'] ?? 'View all' }}
                        <svg class="block-7__view-all-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </div>
</section>
