{{-- Block 3 Component - Testimonial Section --}}
{{-- Usage: @include('common.block-3', $data) --}}

<section class="block-3 {{ isset($variant) ? "block-3--{$variant}" : '' }}">
    <div class="block-3__container">
        <div class="block-3__testimonial">
            {{-- Main Content --}}
            <div class="block-3__content">
                {{-- Profile Image --}}
                <div class="block-3__image">
                    @if(isset($author) && isset($author['image']))
                        <img 
                            src="{{ $author['image'] }}" 
                            alt="{{ $author['name'] ?? 'Testimonial Author' }}" 
                            class="block-3__img"
                        >
                    @else
                        <div class="block-3__img" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); display: flex; align-items: center; justify-content: center; color: white; font-size: 3rem; font-weight: bold;">
                            {{ substr(($author['name'] ?? 'U'), 0, 1) }}
                        </div>
                    @endif
                </div>

                {{-- Testimonial Content --}}
                <div class="block-3__text-content">
                    {{-- Star Rating --}}
                    @if(isset($rating) && $rating > 0)
                        <div class="block-3__stars">
                            @for($i = 1; $i <= 5; $i++)
                                <div class="block-3__star">
                                    <svg viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                    </svg>
                                </div>
                            @endfor
                        </div>
                    @endif

                    {{-- Testimonial Quote --}}
                    @if(isset($quote) && $quote)
                        <blockquote class="block-3__quote">
                            {{ $quote }}
                        </blockquote>
                    @endif

                    {{-- Author Information --}}
                    @if(isset($author) && $author)
                        <div class="block-3__author">
                            @if(isset($author['name']))
                                <h4 class="block-3__author-name">{{ $author['name'] }}</h4>
                            @endif
                            @if(isset($author['title']))
                                <p class="block-3__author-title">{{ $author['title'] }}</p>
                            @endif
                        </div>
                    @endif
                </div>
            </div>

            {{-- Bottom Border --}}
            @if(isset($showBorder) && $showBorder !== false)
                <hr class="block-3__border">
            @endif
        </div>
    </div>
</section>
