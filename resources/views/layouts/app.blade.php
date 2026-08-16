<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'FOKSA Garda Nusantara - Jasa Keamanan Profesional')</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        :root {
            --primary: #DA6B4D;
            --secondary: #2D8B6F;
            --accent: #C9A855;
            --dark: #1f2937;
            --light: #f9fafb;
        }
        
        * {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body.mobile-menu-open {
            overflow: hidden;
        }
        
        .btn-primary {
            @apply bg-[#DA6B4D] hover:bg-[#C75838] text-white font-medium py-3 px-8 rounded-md transition duration-200 ease-out;
        }
        
        .btn-secondary {
            @apply bg-[#2D8B6F] hover:bg-[#235F52] text-white font-medium py-3 px-8 rounded-md transition duration-200 ease-out;
        }
        
        .btn-outline {
            @apply border-2 border-[#DA6B4D] text-[#DA6B4D] hover:bg-[#DA6B4D] hover:text-white font-medium py-3 px-8 rounded-md transition duration-200 ease-out;
        }

        /* Organization Tabs */
        .org-tab-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            will-change: transform;
        }

        .org-tab-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .org-tab-btn.active {
            box-shadow: 0 4px 12px rgba(218, 107, 77, 0.3);
        }

        /* Organization Level Content */
        .org-level {
            transition: opacity 0.3s ease-in-out;
        }

        .org-level.hidden {
            display: none;
        }

        .org-level.active {
            animation: fadeIn 0.4s ease-in-out;
        }

        /* Responsive organization tabs */
        @media (max-width: 768px) {
            .org-tab-btn {
                padding: 0.625rem 0.875rem;
                font-size: 0.875rem;
            }

            .org-tab-btn i {
                display: none;
            }
        }
        
        /* .section-title {
            @apply text-5xl font-bold text-gray-900 mb-3 tracking-tight;
        } */
        
        /* .section-subtitle {
            @apply text-lg text-gray-600 mb-12 font-light;
        } */
        
        .card-hover {
            @apply transition duration-300 hover:shadow-lg;
        }

        /* Subtle Entrance Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scaleX(0);
                transform-origin: left;
            }
            to {
                opacity: 1;
                transform: scaleX(1);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes flipFront {
            0% {
                transform: rotateY(0deg);
                opacity: 1;
            }
            49% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                transform: rotateY(-180deg);
                opacity: 0;
            }
        }

        @keyframes flipBack {
            0% {
                transform: rotateY(180deg);
                opacity: 0;
            }
            50% {
                opacity: 0;
            }
            51% {
                opacity: 1;
            }
            100% {
                transform: rotateY(0deg);
                opacity: 1;
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }

        .animate-scale-in {
            animation: scaleIn 0.6s ease-out;
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-out;
        }

        .flip-card-container {
            perspective: 1000px;
        }

        .flip-card-front {
            backface-visibility: hidden;
            transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .flip-card-back {
            backface-visibility: hidden;
            transition: transform 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            transform: rotateY(180deg);
        }

        .flip-card-container:hover .flip-card-front {
            transform: rotateY(-180deg);
        }

        .flip-card-container:hover .flip-card-back {
            transform: rotateY(0deg);
        }

        /* Custom Scrollbar for Card Content */
        /* .scrollable-card-text {
            scrollbar-width: thin;
            scrollbar-color: rgba(218, 107, 77, 0.5) transparent;
        }

        .scrollable-card-text::-webkit-scrollbar {
            width: 6px;
        }

        .scrollable-card-text::-webkit-scrollbar-track {
            background: transparent;
        } */

        /* .scrollable-card-text::-webkit-scrollbar-thumb {
            background: rgba(218, 107, 77, 0.5);
            border-radius: 3px;
        } */

        /* .scrollable-card-text::-webkit-scrollbar-thumb:hover {
            background: rgba(218, 107, 77, 0.8);
        } */

        /* Fade Gradient Overlay */
        /* .fade-gradient-overlay {
            position: relative;
            overflow: hidden;
        }

        .fade-gradient-overlay::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 60px;
            background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.3));
            pointer-events: none;
            border-radius: 0 0 1rem 1rem;
        } */

        .delay-100 {
            animation-delay: 0.1s;
        }

        .delay-200 {
            animation-delay: 0.2s;
        }

        .delay-300 {
            animation-delay: 0.3s;
        }

        .delay-400 {
            animation-delay: 0.4s;
        }

        .animation-fill-both {
            animation-fill-mode: both;
        }

        /* Partner Logo Carousel */
        .partner-slider-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            /* border-radius: 2rem; */
            background: transparent;
            box-shadow: none;
            padding: 0;
        }

        .partner-slider-container::before,
        .partner-slider-container::after {
            content: none;
        }

        .partner-slider-track {
            display: flex;
            align-items: center;
            gap: 1rem;
            width: max-content;
            will-change: transform;
            transform: translate3d(0, 0, 0);
        }

        .partner-slider-track.is-animating {
            transition: transform 650ms cubic-bezier(0.22, 1, 0.36, 1);
        }

        .partner-logo-item {
            flex: 0 0 auto;
            width: 208px;
            height: 112px;
            padding: 0 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 0;
            background: transparent;
            border: 0;
            box-shadow: none;
            transition: transform 0.35s ease;
        }

        .partner-logo-item:hover {
            transform: translateY(-2px);
        }

        .partner-logo {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            opacity: 0.8;
            filter: saturate(0.95);
            transition: transform 0.35s ease, opacity 0.35s ease, filter 0.35s ease;
        }

        .partner-logo-item:hover .partner-logo {
            transform: scale(1.08);
            opacity: 1;
            filter: saturate(1);
        }

        /* Gallery Styles */
        #mainImage {
            transition: opacity 0.5s ease-in-out;
        }

        .thumbnail-item {
            transition: all 0.3s ease-in-out;
            position: relative;
            border: 2px solid transparent;
        }

        .thumbnail-item.active {
            border-color: #DA6B4D;
            box-shadow: 0 0 0 3px rgba(218, 107, 77, 0.2);
        }

        .thumbnail-item:hover img {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .thumbnail-item img {
            transition: transform 0.3s ease-in-out;
        }

        /* Arrow Navigation Buttons */
        #prevBtn, #nextBtn {
            backdrop-filter: blur(4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        #prevBtn:hover, #nextBtn:hover {
            background-color: white !important;
            box-shadow: 0 6px 16px rgba(218, 107, 77, 0.2);
        }

        #prevBtn:active, #nextBtn:active {
            transform: translate(-50%, -50%) scale(0.95) !important;
        }

        /* Counter Display */
        #currentIndex {
            font-weight: 700;
            color: #DA6B4D;
        }

        /* Animasi halus saat scroll */
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .perspective-1000 { perspective: 1000px; }
        #legalitas .group {
            animation: fadeInUp 0.6s ease-out forwards;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .partner-slider-container {
                border-radius: 0;
                padding: 0;
            }

            .partner-logo-item {
                width: 150px;
                height: 96px;
                padding: 0 0.35rem;
            }

            #prevBtn, #nextBtn {
                width: 44px;
                height: 44px;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .partner-slider-track {
                transition: none !important;
                transform: none !important;
            }

            .partner-logo-item,
            .partner-logo {
                transition: none !important;
            }
        }

        /* Mobile Menu Styles */
        .mobile-menu {
            position: fixed;
            top: 80px;
            left: -100%;
            width: 100%;
            height: calc(100vh - 80px);
            background: white;
            transition: left 0.3s ease-in-out;
            z-index: 40;
            overflow-y: auto;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

        .mobile-menu.active {
            left: 0;
        }

        .mobile-menu-item {
            display: block;
            padding: 16px 24px;
            border-bottom: 1px solid #f3f4f6;
            color: #374151;
            text-decoration: none;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .mobile-menu-item:hover,
        .mobile-menu-item:active {
            background-color: #f9fafb;
            color: #DA6B4D;
            padding-left: 32px;
        }

        /* Mobile Menu Toggle Button */
        .mobile-menu-btn {
            cursor: pointer;
            transition: all 0.3s ease;
            padding: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .mobile-menu-btn.active i {
            transform: rotate(90deg);
        }

        /* Touch-friendly interactive elements */
        @media (max-width: 768px) {
            button, a, input, select, textarea {
                min-height: 44px;
                min-width: 44px;
            }

            .thumbnail-item {
                min-height: 60px;
            }

            .mobile-menu-item {
                padding: 18px 24px;
                font-size: 16px;
            }
        }

        /* Improved link hover states */
        a {
            -webkit-tap-highlight-color: transparent;
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        a:focus-visible {
            outline: 2px solid #DA6B4D;
        }

        /* Better button feedback */
        button {
            -webkit-tap-highlight-color: transparent;
            outline: 2px solid transparent;
            outline-offset: 2px;
        }

        button:focus-visible {
            outline: 2px solid #DA6B4D;
        }

        button:active {
            transform: scale(0.98);
        }

        /* Smooth transitions for all interactive elements */
        .transition {
            transition: all 0.2s ease;
        }
    </style>
    @yield('extra-css')
</head>
<body class="bg-[#fffaf7] text-gray-900">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 bg-[#fffaf7] border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex items-center space-x-3">
                    <div class="w-16 h-16 flex items-center justify-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo FOKSA" class="w-full h-full object-contain">
                    </div>
                    <span class="text-2xl font-bold text-gray-900">FOKSA GARDA NUSANTARA</span>
                </div>
                
                <div class="hidden md:flex space-x-1">
                    <a href="#home" class="text-gray-700 hover:text-[#DA6B4D] transition font-medium px-4 py-2 rounded-md">Beranda</a>
                    <a href="#about" class="text-gray-700 hover:text-[#DA6B4D] transition font-medium px-4 py-2 rounded-md">Tentang</a>
                    <a href="#services" class="text-gray-700 hover:text-[#DA6B4D] transition font-medium px-4 py-2 rounded-md">Layanan</a>
                    <a href="#team" class="text-gray-700 hover:text-[#DA6B4D] transition font-medium px-4 py-2 rounded-md">Tim</a>
                </div>
                
                <a href="#contact" class="text-gray-700 hover:text-[#DA6B4D] transition font-medium px-4 py-2 rounded-md hidden md:inline-block">Hubungi Kami</a>
                
                <button class="md:hidden text-gray-700 mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle menu" aria-expanded="false">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="#home" class="mobile-menu-item"><i class="fas fa-home mr-3"></i>Beranda</a>
            <a href="#about" class="mobile-menu-item"><i class="fas fa-info-circle mr-3"></i>Tentang</a>
            <a href="#services" class="mobile-menu-item"><i class="fas fa-concierge-bell mr-3"></i>Layanan</a>
            <a href="#team" class="mobile-menu-item"><i class="fas fa-users mr-3"></i>Tim</a>
            <a href="#contact" class="mobile-menu-item" style="color: #DA6B4D; font-weight: 600;"><i class="fas fa-phone mr-3"></i>Hubungi Kami</a>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-[#3a3430] text-gray-100 py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                <div>
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="w-16 h-16 flex items-center justify-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo FOKSA" class="w-full h-full object-contain">
                        </div>
                        <span class="text-xl font-bold">FOKSA GARDA NUSANTARA</span>
                    </div>
                    <p class="text-gray-400 text-sm leading-relaxed">Jasa keamanan profesional terpercaya untuk melindungi aset berharga Anda.</p>
                </div>
                
                <div>
                    <h4 class="font-semibold text-white mb-4 text-sm uppercase tracking-wide">Navigasi</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#home" class="hover:text-white transition">Beranda</a></li>
                        <li><a href="#about" class="hover:text-white transition">Tentang Kami</a></li>
                        <li><a href="#services" class="hover:text-white transition">Layanan</a></li>
                        <li><a href="#team" class="hover:text-white transition">Tim</a></li>
                        <li><a href="#contact" class="hover:text-white transition">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold text-white mb-4 text-sm uppercase tracking-wide">Kontak</h4>
                    <ul class="space-y-3 text-gray-400 text-sm">
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-phone text-[#DA6B4D] mt-0.5 flex-shrink-0"></i>
                            <span>+62 813 8527 3936</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-envelope text-[#DA6B4D] mt-0.5 flex-shrink-0"></i>
                            <span>ptsagara@gmail.com</span>
                        </li>
                        <li class="flex items-start space-x-3">
                            <i class="fas fa-map-marker-alt text-[#DA6B4D] mt-0.5 flex-shrink-0"></i>
                            <span>Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-700 pt-8 flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                <p>&copy; 2026 FOKSA Garda Nusantara. Semua hak dilindungi.</p>
                <div class="flex space-x-6 mt-6 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-[#DA6B4D] transition">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#DA6B4D] transition">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#DA6B4D] transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-[#DA6B4D] transition">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/interactive.js') }}"></script>
    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const body = document.body;

        if (mobileMenuBtn && mobileMenu) {
            // Toggle menu on button click
            mobileMenuBtn.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
                mobileMenuBtn.classList.toggle('active');
                body.classList.toggle('mobile-menu-open');
                
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
            });

            // Close menu when clicking on a menu item
            const menuItems = mobileMenu.querySelectorAll('.mobile-menu-item');
            menuItems.forEach(item => {
                item.addEventListener('click', function() {
                    mobileMenu.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                    body.classList.remove('mobile-menu-open');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                });
            });

            // Close menu when pressing Escape
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape' && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    mobileMenuBtn.classList.remove('active');
                    body.classList.remove('mobile-menu-open');
                    mobileMenuBtn.setAttribute('aria-expanded', 'false');
                }
            });
        }

        // Smooth scroll enhancement
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href === '#' || !document.querySelector(href)) return;
                
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Better touch feedback for interactive elements
        const touchElements = document.querySelectorAll('button, a, .thumbnail-item, .legality-item, .partner-logo-item');
        touchElements.forEach(element => {
            element.addEventListener('touchstart', function() {
                this.style.opacity = '0.8';
            }, false);
            
            element.addEventListener('touchend', function() {
                this.style.opacity = '1';
            }, false);
        });

        // Add loading state for page
        document.addEventListener('DOMContentLoaded', function() {
            document.body.style.opacity = '1';
        });
    </script>

    @yield('extra-js')
</body>
</html>
