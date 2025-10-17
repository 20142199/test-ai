<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShadePro - Test Landing Page</title>
    <style>
        body { margin: 0; font-family: Arial, sans-serif; }
        .section { padding: 50px 20px; text-align: center; }
        .hero { background: #f4f7fa; }
        .about { background: white; }
        .testimonial { background: #f8f9fa; }
        .stats { background: #e9ecef; }
        .features { background: #f4f7fa; }
        .portfolio { background: white; }
        .footer { background: #473bef; color: white; }
    </style>
</head>
<body>
    {{-- Header --}}
    <div class="section hero">
        <h1>ShadePro</h1>
        <p>Professional Design & Development</p>
        <button>Get Started</button>
    </div>

    {{-- About --}}
    <div class="section about">
        <h2>Our Story</h2>
        <p>We know how everything works and why your business is failing over and over again.</p>
    </div>

    {{-- Testimonial --}}
    <div class="section testimonial">
        <h3>Testimonial</h3>
        <p>"OMG! I cannot believe how easy it is to create amazing designs with this tool."</p>
        <p><strong>John Doe</strong> - Graphic Designer</p>
    </div>

    {{-- Stats --}}
    <div class="section stats">
        <h2>Our Stats</h2>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h3>500K+</h3>
                <p>Active Users</p>
            </div>
            <div>
                <h3>99.9%</h3>
                <p>Uptime</p>
            </div>
            <div>
                <h3>24/7</h3>
                <p>Support</p>
            </div>
        </div>
    </div>

    {{-- Features --}}
    <div class="section features">
        <h2>Features</h2>
        <p>Everything you need to build amazing websites</p>
    </div>

    {{-- Portfolio --}}
    <div class="section portfolio">
        <h2>Our Works</h2>
        <p>Case studies describe what we do</p>
    </div>

    {{-- Footer --}}
    <div class="section footer">
        <h3>Testimonial</h3>
        <p>"Simply the best. Better than all the rest."</p>
        <p><strong>Ian Klein</strong> - Digital Marketer</p>
    </div>
</body>
</html>
