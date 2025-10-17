{{-- Block 4 Component - About Section --}}
{{-- Usage: @include('common.block-4', $data) --}}

<section class="block-4 {{ isset($variant) ? "block-4--{$variant}" : '' }}">
    <div class="block-4__container">
        <div class="block-4__about">
            {{-- Title Section --}}
            <div class="block-4__title">
                @if(isset($subtitle) && $subtitle)
                    <p class="block-4__subtitle">{{ $subtitle }}</p>
                @endif
                
                @if(isset($heading) && $heading)
                    <h2 class="block-4__heading">{{ $heading }}</h2>
                @endif
            </div>

            {{-- Images Section --}}
            <div class="block-4__images">
                {{-- Large Main Image --}}
                @if(isset($images) && isset($images['main']))
                    <div class="block-4__image-1">
                        <img 
                            src="{{ $images['main']['src'] }}" 
                            alt="{{ $images['main']['alt'] ?? 'Main Image' }}" 
                            class="block-4__img-1"
                        >
                    </div>
                @endif

                {{-- Medium Image --}}
                @if(isset($images) && isset($images['medium']))
                    <div class="block-4__image-2">
                        <img 
                            src="{{ $images['medium']['src'] }}" 
                            alt="{{ $images['medium']['alt'] ?? 'Medium Image' }}" 
                            class="block-4__img-2"
                        >
                    </div>
                @endif

                {{-- Small Image --}}
                @if(isset($images) && isset($images['small']))
                    <div class="block-4__image-3">
                        <img 
                            src="{{ $images['small']['src'] }}" 
                            alt="{{ $images['small']['alt'] ?? 'Small Image' }}" 
                            class="block-4__img-3"
                        >
                    </div>
                @endif

                {{-- Decorative Element --}}
                @if(isset($decoration) && $decoration !== false)
                    <div class="block-4__decoration"></div>
                @endif
            </div>

            {{-- Bottom Text --}}
            @if(isset($bottomText) && $bottomText)
                <p class="block-4__bottom-text">{{ $bottomText }}</p>
            @endif
        </div>
    </div>
</section>
