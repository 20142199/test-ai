<div class="block-3-wrapper">
    <div class="block-3-container">
        <h2 class="block-3-heading">Hướng dẫn VietGates</h2>

        <div class="block-3-content">
            <!-- Left Section: Laptop Mockup with Circles -->
            <div class="block-3-left">
                <div class="circles-background">
                    @component('components.concentric-circles', ['count' => 12, 'circleClass' => 'circle-guide'])
                    @endcomponent
                </div>

                <div class="laptop-mockup">
                    <div class="laptop-frame">
                        <div class="laptop-screen">
                            <img src="{{ asset('images/block-3/laptop-screen.png') }}" alt="VietGates Dashboard">
                        </div>
                        <div class="laptop-base"></div>
                    </div>

                    <!-- Floating Badges -->
                    <div class="floating-badge floating-badge-1 floating-badge-dark">
                        <div class="badge-logo">
                            @component('components.vietgates-logo', ['id' => 'badge1'])
                            @endcomponent
                        </div>
                    </div>

                    <div class="floating-badge floating-badge-2">
                        <div class="badge-logo">
                            @component('components.vietgates-logo', ['id' => 'badge2'])
                            @endcomponent
                        </div>
                    </div>

                    <div class="floating-badge floating-badge-3">
                        <div class="badge-logo">
                            @component('components.vietgates-logo', ['id' => 'badge3'])
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Section: Guide Card -->
            <div class="block-3-right">
                <div class="guide-card">
                    <div class="guide-card-image">
                        <img src="{{ asset('images/block-3/step-1.png') }}" alt="Đăng ký & xác minh tài khoản">
                    </div>
                    <h3 class="guide-card-title">Đăng ký & xác minh tài khoản</h3>
                    <p class="guide-card-description">Người dùng tạo tài khoản VietGates chỉ trong vài phút. Sau đó thực hiện xác minh cơ bản (KYC) để bảo đảm an toàn giao dịch và mở khóa các tính năng nạp/rút.</p>
                </div>
            </div>
        </div>

        <!-- Pagination Dots -->
        <div class="pagination-dots">
            <div class="dot active"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
        </div>
    </div>
</div>
