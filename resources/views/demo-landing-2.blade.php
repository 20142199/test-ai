<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ShadePro - Professional design and development services">
    <title>ShadePro - Professional Design & Development</title>
    
    {{-- Include main CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    {{-- Meta tags for SEO --}}
    <meta property="og:title" content="ShadePro - Professional Design & Development">
    <meta property="og:description" content="Transform your business with our professional design and development services">
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="ShadePro - Professional Design & Development">
    <meta name="twitter:description" content="Transform your business with our professional design and development services">
    <meta name="twitter:image" content="{{ asset('images/twitter-image.jpg') }}">
</head>
<body>
    {{-- Header --}}
    @include('common.header', [
        'menu' => [
            [
                'text' => 'Collect',
                'url' => '/collect',
                'icon' => 'arrow-right'
            ],
            [
                'text' => 'Collect',
                'url' => '/collect',
                'icon' => 'arrow-right'
            ]
        ],
        'currentLanguage' => 'vn',
        'languages' => [
            'vn' => [
                'flag' => 'vn',
                'text' => 'Tiếng Việt',
                'code' => 'vn'
            ],
            'en' => [
                'flag' => 'en',
                'text' => 'Tiếng Anh',
                'code' => 'en'
            ]
        ],
        'sticky' => true,
        'variant' => 'transparent'
    ])

    {{-- Hero Section --}}
    <section class="demo-hero animate-fade-in-up" role="region" aria-labelledby="demo-hero-heading">
        <div class="demo-hero__container">
            <div class="demo-hero__content">
                <div class="demo-hero__text">
                    <h1 class="demo-hero__heading" id="demo-hero-heading">
                        Let's shift your business
                    </h1>
                    <p class="demo-hero__subheading">
                        With lots of unique blocks, you can easily build a page without coding.
                    </p>
                    <a href="/collect" class="demo-hero__button">
                        <span class="demo-hero__button-text">Collect</span>
                        <svg class="demo-hero__button-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.1875 10.0001L17.8125 10.0001M17.8125 10.0001L11.25 3.43762M17.8125 10.0001L11.25 16.5626" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
                <div class="demo-hero__image">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=800&h=600&fit=crop" alt="Hero Image" class="demo-hero__img">
                </div>
            </div>
        </div>
    </section>

    {{-- Features Section --}}
    <section class="demo-features animate-fade-in-up" role="region" aria-labelledby="demo-features-heading">
        <div class="demo-features__container">
            <div class="demo-features__header">
                <h2 class="demo-features__heading" id="demo-features-heading">
                    Everything you need to build amazing websites
                </h2>
                <p class="demo-features__subheading">
                    Professional design and development services for your business
                </p>
            </div>
            <div class="demo-features__grid">
                <div class="demo-feature">
                    <div class="demo-feature__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L30.09 15.26L42 18L30.09 20.74L24 32L17.91 20.74L6 18L17.91 15.26L24 4Z" fill="RGB(126, 34, 206)"/>
                        </svg>
                    </div>
                    <h3 class="demo-feature__title">Professional Design</h3>
                    <p class="demo-feature__description">
                        Beautiful, modern designs that convert visitors into customers
                    </p>
                </div>
                <div class="demo-feature">
                    <div class="demo-feature__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L30.09 15.26L42 18L30.09 20.74L24 32L17.91 20.74L6 18L17.91 15.26L24 4Z" fill="RGB(126, 34, 206)"/>
                        </svg>
                    </div>
                    <h3 class="demo-feature__title">Fast Development</h3>
                    <p class="demo-feature__description">
                        Lightning-fast websites built with the latest technologies
                    </p>
                </div>
                <div class="demo-feature">
                    <div class="demo-feature__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L30.09 15.26L42 18L30.09 20.74L24 32L17.91 20.74L6 18L17.91 15.26L24 4Z" fill="RGB(126, 34, 206)"/>
                        </svg>
                    </div>
                    <h3 class="demo-feature__title">24/7 Support</h3>
                    <p class="demo-feature__description">
                        Round-the-clock support to help you succeed
                    </p>
                </div>
                <div class="demo-feature">
                    <div class="demo-feature__icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 4L30.09 15.26L42 18L30.09 20.74L24 32L17.91 20.74L6 18L17.91 15.26L24 4Z" fill="RGB(126, 34, 206)"/>
                        </svg>
                    </div>
                    <h3 class="demo-feature__title">Advanced Analytics</h3>
                    <p class="demo-feature__description">
                        Comprehensive insights to optimize your performance
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="demo-footer" role="contentinfo">
        <div class="demo-footer__container">
            <div class="demo-footer__content">
                <div class="demo-footer__logo">
                    @include('common.logo', ['size' => 'default', 'variant' => 'default'])
                </div>
                <div class="demo-footer__text">
                    <p>&copy; 2024 ShadePro. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // JavaScript for scroll animations and other interactive elements
        document.addEventListener('DOMContentLoaded', () => {
            const animateOnScroll = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            };

            const observer = new IntersectionObserver(animateOnScroll, {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            });

            document.querySelectorAll('.animate-fade-in-up').forEach(element => {
                observer.observe(element);
            });

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });

            // Sticky header effect
            const header = document.querySelector('.header');
            if (header && header.classList.contains('header--sticky')) {
                let lastScrollTop = 0;
                window.addEventListener('scroll', () => {
                    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    if (scrollTop > lastScrollTop && scrollTop > header.offsetHeight) {
                        header.classList.add('header--hidden');
                    } else {
                        header.classList.remove('header--hidden');
                    }
                    lastScrollTop = scrollTop;

                    if (scrollTop > 50) {
                        header.classList.add('header--scrolled');
                    } else {
                        header.classList.remove('header--scrolled');
                    }
                });
            }
        });
    </script>
</body>
</html>
