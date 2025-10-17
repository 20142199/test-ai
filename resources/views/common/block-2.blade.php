{{-- Block 2 Component - Hero Section with Centered Content --}}
{{-- Usage: @include('common.block-2', $data) --}}

<section class="block-2">
    <div class="block-2__container">
        {{-- Main Content --}}
        <div class="block-2__content">
            {{-- Subheading --}}
            @if(isset($subheading) && $subheading)
                <p class="block-2__subheading">{{ $subheading }}</p>
            @endif

            {{-- Main Heading --}}
            @if(isset($heading) && $heading)
                <h1 class="block-2__heading">{{ $heading }}</h1>
            @endif

            {{-- Body Text --}}
            @if(isset($body) && $body)
                <p class="block-2__body">{{ $body }}</p>
            @endif

            {{-- Button --}}
            @if(isset($button) && $button)
                <div class="block-2__button-wrapper">
                    <a href="{{ $button['url'] ?? '#' }}" class="block-2__button">
                        {{ $button['text'] ?? 'Get Started' }}
                        @if(isset($button['icon']) && $button['icon'])
                            <span class="block-2__button-icon">
                                @if($button['icon'] === 'arrow-right')
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M6 4L10 8L6 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                @elseif($button['icon'] === 'arrow-left')
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10 4L6 8L10 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                @else
                                    {{ $button['icon'] }}
                                @endif
                            </span>
                        @endif
                    </a>
                </div>
            @endif
        </div>

        {{-- Image/Visual Element --}}
        @if(isset($image) && $image)
            <div class="block-2__image">
                @if(is_string($image))
                    <img src="{{ $image }}" alt="{{ $heading ?? 'Hero Image' }}" class="block-2__img">
                @else
                    {{ $image }}
                @endif
            </div>
        @endif

        {{-- Decorative Elements --}}
        @if(isset($decorations) && $decorations)
            <div class="block-2__decorations">
                {{-- Green Circle --}}
                <div class="block-2__decoration block-2__decoration--green"></div>
                
                {{-- Purple Shape --}}
                <div class="block-2__decoration block-2__decoration--purple"></div>
                
                {{-- Red Waves --}}
                <div class="block-2__decoration block-2__decoration--red"></div>
            </div>
        @endif
    </div>
</section>
