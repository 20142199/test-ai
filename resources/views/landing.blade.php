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
</head>
<body>
    {{-- Header --}}
    @include('common.header', [
        'logo' => 'shadepro',
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
        'language' => [
            'flag' => 'vn',
            'text' => 'Tiếng Việt',
            'url' => '/language'
        ],
        'sticky' => true,
        'variant' => 'transparent'
    ])

    {{-- Hero Section (Block 1) --}}
    @include('common.block-1', [
        'subheading' => 'Let\'s shift your bus',
        'heading' => 'Shift your business',
        'body' => 'With lots of unique blocks, you can easily build a page without coding.',
        'button' => [
            'text' => 'Get Started',
            'url' => '/get-started',
            'icon' => 'arrow-right'
        ],
        'decorations' => true,
        'animation' => true
    ])

    {{-- About Section (Block 2) --}}
    @include('common.block-2', [
        'subheading' => 'Our Story',
        'heading' => 'We know how everything works and why your business is failing over and over again.',
        'body' => 'We share common trends and strategies for improving your rental income and making sure you stay in a high-demand area.',
        'button' => [
            'text' => 'Learn More',
            'url' => '/about',
            'icon' => 'arrow-right'
        ],
        'decorations' => true,
        'animation' => true
    ])

    {{-- Testimonial Section (Block 3) --}}
    @include('common.block-3', [
        'rating' => 5,
        'quote' => 'OMG! I cannot believe how easy it is to create amazing designs with this tool.',
        'author' => [
            'name' => 'John Doe',
            'title' => 'Graphic Designer',
            'image' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face'
        ]
    ])

    {{-- About Section with Images (Block 4) --}}
    @include('common.block-4', [
        'subtitle' => 'Our Story',
        'heading' => 'We know how everything works and why your business is failing over and over again.',
        'images' => [
            'main' => [
                'src' => 'https://images.unsplash.com/photo-1560472354-b33ff0c44a43?w=400&h=300&fit=crop',
                'alt' => 'Main office image'
            ],
            'medium' => [
                'src' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=300&h=200&fit=crop',
                'alt' => 'Team collaboration'
            ],
            'small' => [
                'src' => 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=200&h=150&fit=crop',
                'alt' => 'Meeting room'
            ]
        ],
        'bottomText' => 'We share common trends and strategies for improving your rental income.',
        'decoration' => true
    ])

    {{-- Stats Section (Block 5) --}}
    @include('common.block-5', [
        'stats' => [
            [
                'number' => '500K+',
                'description' => 'Active users worldwide trust our platform',
                'animate' => true
            ],
            [
                'number' => '99.9%',
                'description' => 'Uptime guarantee for maximum reliability',
                'animate' => true
            ],
            [
                'number' => '24/7',
                'description' => 'Customer support available around the clock',
                'animate' => true
            ]
        ]
    ])

    {{-- Features Section (Block 6) --}}
    @include('common.block-6', [
        'subtitle' => 'Features',
        'heading' => 'Everything you need to build amazing websites',
        'features' => [
            [
                'icon' => 'layers',
                'title' => 'Professional Design',
                'description' => 'Beautiful, modern designs that convert visitors into customers'
            ],
            [
                'icon' => 'contact',
                'title' => 'Fast Development',
                'description' => 'Lightning-fast websites built with the latest technologies'
            ],
            [
                'icon' => 'chat',
                'title' => '24/7 Support',
                'description' => 'Round-the-clock support to help you succeed'
            ],
            [
                'icon' => 'clock',
                'title' => 'Advanced Analytics',
                'description' => 'Comprehensive insights to optimize your performance'
            ]
        ],
        'cta' => [
            'heading' => 'Ready to get started?',
            'description' => 'Join thousands of satisfied customers',
            'button' => [
                'text' => 'Start Free Trial',
                'url' => '/trial'
            ]
        ]
    ])

    {{-- Portfolio Section (Block 7) --}}
    @include('common.block-7', [
        'subtitle' => 'Case studies',
        'heading' => 'Our works describe what we do',
        'portfolio' => [
            [
                'image' => [
                    'src' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?w=500&h=540&fit=crop',
                    'alt' => 'Aura Branding Design'
                ],
                'category' => 'Graphic Design',
                'title' => 'Aura Branding Design'
            ],
            [
                'image' => [
                    'src' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=500&h=346&fit=crop',
                    'alt' => 'Gradient Website Dev'
                ],
                'category' => 'Web Development',
                'title' => 'Gradient Website Dev'
            ],
            [
                'image' => [
                    'src' => 'https://images.unsplash.com/photo-1586953208448-b95a79798f07?w=500&h=342&fit=crop',
                    'alt' => 'AB.S Snack Packaging'
                ],
                'category' => 'Graphic Design',
                'title' => 'AB.S Snack Packaging'
            ],
            [
                'image' => [
                    'src' => 'https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=500&h=540&fit=crop',
                    'alt' => 'Magazine Content Writing'
                ],
                'category' => 'Content Writing',
                'title' => 'Magazine Content Writing'
            ]
        ],
        'viewAll' => [
            'text' => 'View all',
            'url' => '/portfolio'
        ]
    ])

    {{-- Footer Testimonial --}}
    @include('common.footer', [
        'subtitle' => 'Testimonial',
        'testimonial' => 'Simply the best. Better than all the rest.',
        'author' => [
            'image' => [
                'src' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=76&h=76&fit=crop&crop=face',
                'alt' => 'Ian Klein'
            ],
            'name' => 'Ian Klein',
            'title' => 'Digital Marketer'
        ]
    ])

    {{-- JavaScript for animations and interactions --}}
    <script>
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-in');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.addEventListener('DOMContentLoaded', () => {
            const animateElements = document.querySelectorAll('.block-1, .block-2, .block-3, .block-4, .block-5, .block-6, .block-7, .footer');
            animateElements.forEach(el => observer.observe(el));
        });

        // Header scroll effect
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.classList.add('header--scrolled');
            } else {
                header.classList.remove('header--scrolled');
            }
        });
    </script>
</body>
</html>
