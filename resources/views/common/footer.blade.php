{{-- Footer Component - Testimonial Footer --}}
{{-- Usage: @include('common.footer', $data) --}}

<footer class="footer {{ isset($variant) ? "footer--{$variant}" : '' }}">
    <div class="footer__container">
        <div class="footer__testimonial">
            {{-- Background Wave Decorations --}}
            @if(!isset($minimal) || !$minimal)
                <div class="footer__bg">
                    <div class="footer__waves">
                        <div class="footer__wave footer__wave--1"></div>
                        <div class="footer__wave footer__wave--2"></div>
                        <div class="footer__wave footer__wave--3"></div>
                        <div class="footer__wave footer__wave--4"></div>
                        <div class="footer__wave footer__wave--5"></div>
                        <div class="footer__wave footer__wave--6"></div>
                        <div class="footer__wave footer__wave--7"></div>
                        <div class="footer__wave footer__wave--8"></div>
                        <div class="footer__wave footer__wave--9"></div>
                        <div class="footer__wave footer__wave--10"></div>
                        <div class="footer__wave footer__wave--11"></div>
                        <div class="footer__wave footer__wave--12"></div>
                        <div class="footer__wave footer__wave--13"></div>
                        <div class="footer__wave footer__wave--14"></div>
                        <div class="footer__wave footer__wave--15"></div>
                        <div class="footer__wave footer__wave--16"></div>
                        <div class="footer__wave footer__wave--17"></div>
                        <div class="footer__wave footer__wave--18"></div>
                        <div class="footer__wave footer__wave--19"></div>
                        <div class="footer__wave footer__wave--20"></div>
                        <div class="footer__wave footer__wave--21"></div>
                        <div class="footer__wave footer__wave--22"></div>
                    </div>
                </div>
            @endif

            {{-- Content Section --}}
            <div class="footer__content">
                {{-- Subtitle --}}
                @if(isset($subtitle) && $subtitle)
                    <p class="footer__subtitle">{{ $subtitle }}</p>
                @endif

                {{-- Testimonial Text --}}
                @if(isset($testimonial) && $testimonial)
                    <blockquote class="footer__testimonial-text">
                        {{ $testimonial }}
                    </blockquote>
                @endif

                {{-- Author Section --}}
                @if(isset($author) && is_array($author))
                    <div class="footer__author">
                        {{-- Author Image --}}
                        @if(isset($author['image']))
                            <div class="footer__author-image">
                                <img 
                                    src="{{ $author['image']['src'] }}" 
                                    alt="{{ $author['image']['alt'] ?? $author['name'] ?? 'Author' }}" 
                                    class="footer__author-img"
                                >
                            </div>
                        @endif

                        {{-- Author Info --}}
                        <div class="footer__author-info">
                            @if(isset($author['name']))
                                <h3 class="footer__author-name">{{ $author['name'] }}</h3>
                            @endif
                            
                            @if(isset($author['title']))
                                <p class="footer__author-title">{{ $author['title'] }}</p>
                            @endif
                        </div>
                    </div>
                @else
                    {{-- Default Author (based on Figma design) --}}
                    <div class="footer__author">
                        <div class="footer__author-image">
                            <img 
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=76&h=76&fit=crop&crop=face" 
                                alt="Ian Klein" 
                                class="footer__author-img"
                            >
                        </div>
                        <div class="footer__author-info">
                            <h3 class="footer__author-name">Ian Klein</h3>
                            <p class="footer__author-title">Digital Marketer</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</footer>
