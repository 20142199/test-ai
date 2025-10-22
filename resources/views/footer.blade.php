<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .footer {
            width: 100%;
            max-width: 1440px;
            margin: 0 auto;
            background: #FFFFFF;
            border-top: 1px solid #FABC43;
            padding-top: 100px;
        }

        .footer-main {
            display: flex;
            justify-content: space-between;
            padding: 0 80px;
            margin-bottom: 100px;
        }

        .footer-left {
            width: 460px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .footer-logo {
            width: 181.99px;
            height: 50px;
        }

        .footer-logo img {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }

        .footer-slogan {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            color: #38383D;
        }

        .footer-right {
            width: 460px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .footer-company-name {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 14px;
            font-weight: 600;
            line-height: 21px;
            color: #38383D;
        }

        .footer-contact {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .footer-contact-item {
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }

        .footer-contact-icon {
            width: 16px;
            height: 16px;
            flex-shrink: 0;
            margin-top: 2.5px;
        }

        .footer-contact-text {
            flex: 1;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 14px;
            line-height: 21px;
            color: #64646D;
        }

        .footer-social {
            display: flex;
            gap: 24px;
            margin-top: 20px;
        }

        .footer-social-icon {
            width: 32px;
            height: 32px;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .footer-social-icon:hover {
            opacity: 0.8;
        }

        .footer-bottom {
            border-top: 1px solid #EBEBF0;
            height: 58px;
            display: flex;
            align-items: center;
            padding: 0 80px;
        }

        .footer-copyright {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            font-size: 14px;
            line-height: 18px;
            color: #38383D;
        }

        /* Responsive design */
        @media (max-width: 1440px) {
            .footer-main {
                padding: 0 40px;
            }

            .footer-bottom {
                padding: 0 40px;
            }
        }

        @media (max-width: 1024px) {
            .footer-main {
                flex-direction: column;
                gap: 60px;
                padding: 0 40px;
            }

            .footer-left,
            .footer-right {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .footer {
                padding-top: 60px;
            }

            .footer-main {
                margin-bottom: 60px;
                padding: 0 20px;
            }

            .footer-bottom {
                padding: 0 20px;
                height: auto;
                min-height: 58px;
                padding-top: 20px;
                padding-bottom: 20px;
            }

            .footer-left,
            .footer-right {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="footer-main">
            <div class="footer-left">
                <div class="footer-logo">
                    <img src="{{ asset('images/logo.png') }}" alt="NEXS Logo">
                </div>
                <p class="footer-slogan">Cùng NEXS dẫn đầu cuộc cách mạng số hóa ngành xây dựng!</p>
            </div>

            <div class="footer-right">
                <h3 class="footer-company-name">Công Ty Cổ Phần Công Nghệ Và Giải Pháp Nhân Lực Xây Dựng NEXS</h3>
                
                <div class="footer-contact">
                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 8.5C9.10457 8.5 10 7.60457 10 6.5C10 5.39543 9.10457 4.5 8 4.5C6.89543 4.5 6 5.39543 6 6.5C6 7.60457 6.89543 8.5 8 8.5Z" stroke="#0B489D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.5 6.5C13.5 11 8 15 8 15C8 15 2.5 11 2.5 6.5C2.5 5.04131 3.07946 3.64236 4.11091 2.61091C5.14236 1.57946 6.54131 1 8 1C9.45869 1 10.8576 1.57946 11.8891 2.61091C12.9205 3.64236 13.5 5.04131 13.5 6.5Z" stroke="#0B489D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="footer-contact-text">Tầng 5, Toà nhà SME Hoàng Gia, phố Cầu Đơ, Phường Hà Đông, Thành phố Hà Nội, Việt Nam</p>
                    </div>

                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.5 3.5H13.5C14.0523 3.5 14.5 3.94772 14.5 4.5V11.5C14.5 12.0523 14.0523 12.5 13.5 12.5H2.5C1.94772 12.5 1.5 12.0523 1.5 11.5V4.5C1.5 3.94772 1.94772 3.5 2.5 3.5Z" stroke="#0B489D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M14.5 4.5L8 8.75L1.5 4.5" stroke="#0B489D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="footer-contact-text">lienhe@nexs.vn</p>
                    </div>

                    <div class="footer-contact-item">
                        <svg class="footer-contact-icon" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14.5 11.2V13.2C14.5001 13.3857 14.4565 13.5687 14.3725 13.7346C14.2885 13.9004 14.1665 14.0445 14.0162 14.1546C13.866 14.2646 13.6919 14.3375 13.5078 14.3672C13.3238 14.397 13.1352 14.3828 12.9575 14.3256C10.9531 13.7484 9.10953 12.7083 7.5625 11.2831C6.1335 9.96909 4.98656 8.3793 4.19375 6.61187C2.70625 3.24062 3.61062 1.64 4.19375 1.17438C4.30383 1.024 4.44793 0.902009 4.61376 0.816206C4.77959 0.730403 4.96265 0.682859 5.14875 0.676876C6.22937 0.676876 7.05 1.49625 7.05 2.57687V3.82687C7.05 4.36812 6.61125 4.80687 6.07 4.80687C5.52875 4.80687 5.09 5.24562 5.09 5.78687V7.03687C5.09 7.57812 5.52875 8.01687 6.07 8.01687H9.93C10.4713 8.01687 10.91 7.57812 10.91 7.03687V5.78687C10.91 5.24562 10.4713 4.80687 9.93 4.80687C9.38875 4.80687 8.95 4.36812 8.95 3.82687V2.57687C8.95 1.49625 9.77062 0.676876 10.8512 0.676876C11.0373 0.682859 11.2204 0.730403 11.3862 0.816206C11.5521 0.902009 11.6962 1.024 11.8062 1.17438C12.3894 1.64 13.2937 3.24062 11.8062 6.61187C11.0134 8.3793 9.8665 9.96909 8.4375 11.2831C6.89047 12.7083 5.04687 13.7484 3.0425 14.3256C2.86484 14.3828 2.67625 14.397 2.49219 14.3672C2.30813 14.3375 2.13398 14.2646 1.98375 14.1546C1.83352 14.0445 1.71148 13.9004 1.62748 13.7346C1.54348 13.5687 1.49994 13.3857 1.5 13.2V11.2C1.5 10.6477 1.94772 10.2 2.5 10.2H5C5.55228 10.2 6 10.6477 6 11.2C6 11.7523 6.44772 12.2 7 12.2H9C9.55228 12.2 10 11.7523 10 11.2C10 10.6477 10.4477 10.2 11 10.2H13.5C14.0523 10.2 14.5 10.6477 14.5 11.2Z" stroke="#0B489D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="footer-contact-text">0913288177</p>
                    </div>
                </div>

                <div class="footer-social">
                    <a href="#" class="footer-social-icon" aria-label="Facebook">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="16" cy="16" r="15.5" fill="#0B489D"/>
                            <path d="M18.667 17.333L19.2 14.133H16.133V12.067C16.133 11.2 16.533 10.4 17.867 10.4H19.333V7.733C19.333 7.733 18.133 7.533 16.933 7.533C14.4 7.533 12.8 8.933 12.8 11.733V14.133H10V17.333H12.8V24.4H16.133V17.333H18.667Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="#" class="footer-social-icon" aria-label="Zalo">
                        <svg viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="32" height="32" rx="16" fill="#0B489D"/>
                            <path d="M16 8C11.589 8 8 11.589 8 16C8 18.419 9.124 20.584 10.9 22.013V25.5L14.227 23.641C14.801 23.773 15.393 23.85 16 23.85C20.411 23.85 24 20.261 24 15.85C24 11.439 20.411 8 16 8ZM18.5 17.5H13.5V16H18.5V17.5ZM18.5 15H13.5V13.5H18.5V15Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <p class="footer-copyright">© 2025 NEXS. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
