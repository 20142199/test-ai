{{-- Block 5 Component - Facts/Stats Section --}}
{{-- Usage: @include('common.block-5', $data) --}}

<section class="block-5 {{ isset($variant) ? "block-5--{$variant}" : '' }}">
    <div class="block-5__container">
        <div class="block-5__facts">
            @if(isset($stats) && is_array($stats))
                @foreach($stats as $index => $stat)
                    <div class="block-5__stat {{ isset($stat['icon']) ? 'block-5__stat--with-icon' : '' }}">
                        {{-- Optional Icon --}}
                        @if(isset($stat['icon']))
                            <div class="block-5__icon">
                                @if(is_string($stat['icon']))
                                    {{ $stat['icon'] }}
                                @else
                                    <i class="{{ $stat['icon'] }}"></i>
                                @endif
                            </div>
                        @endif

                        {{-- Stat Number --}}
                        @if(isset($stat['number']))
                            <h3 class="block-5__number {{ isset($stat['animate']) && $stat['animate'] ? 'counter-animation' : '' }}">
                                {{ $stat['number'] }}
                            </h3>
                        @endif

                        {{-- Stat Description --}}
                        @if(isset($stat['description']))
                            <p class="block-5__description">{{ $stat['description'] }}</p>
                        @endif
                    </div>
                @endforeach
            @else
                {{-- Default Stats (based on Figma design) --}}
                <div class="block-5__stat">
                    <h3 class="block-5__number">1M+</h3>
                    <p class="block-5__description">Customers visit Omega every month to get their service done.</p>
                </div>
                
                <div class="block-5__stat">
                    <h3 class="block-5__number">92%</h3>
                    <p class="block-5__description">Satisfaction rate comes from our awesome customers.</p>
                </div>
                
                <div class="block-5__stat">
                    <h3 class="block-5__number">4.9/5.0</h3>
                    <p class="block-5__description">Average customer ratings we have got all over internet.</p>
                </div>
            @endif
        </div>
    </div>
</section>
