{{-- Block 1 Component - Hero Section --}}
{{-- Usage: @include('common.block-1', $data) --}}

<section class="block-1 {{ isset($variant) ? "block-1--{$variant}" : '' }}">
    <div class="block-1__container">
        <div class="block-1__hero">
            {{-- Background --}}
            <div class="block-1__bg">
                @if(isset($backgroundImage))
                    <img src="{{ $backgroundImage }}" alt="" class="block-1__bg-image">
                @endif
            </div>

            {{-- Content Section --}}
            <div class="block-1__content">
                @if(isset($subheading) && $subheading)
                    <p class="block-1__subheading">{{ $subheading }}</p>
                @endif
                
                @if(isset($heading) && $heading)
                    <h1 class="block-1__heading">{{ $heading }}</h1>
                @endif
                
                @if(isset($body) && $body)
                    <p class="block-1__body">{{ $body }}</p>
                @endif
                
                @if(isset($button) && $button)
                    <a href="{{ $button['url'] }}" class="block-1__button">
                        {{ $button['text'] }}
                    </a>
                @endif
            </div>

            {{-- Image Section --}}
            <div class="block-1__image">
                @if(isset($image) && $image)
                    <img src="{{ $image }}" alt="{{ $heading ?? 'Hero Image' }}" class="block-1__main-image">
                @else
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=463&h=504&fit=crop" alt="Hero Image" class="block-1__main-image">
                @endif
            </div>

            {{-- Decorative Elements --}}
            @if(!isset($decorations) || $decorations !== false)
                <div class="block-1__decorations">
                    <div class="block-1__purple-dots"></div>
                    <div class="block-1__green-circle"></div>
                    <div class="block-1__red-waves"></div>
                </div>
            @endif
        </div>
    </div>
</section>

