@extends('layouts.app')

@section('title', 'FOKSA Garda Nusantara - Jasa Keamanan Profesional')

@section('content')
    <!-- Hero Section with Background Image -->
    <section id="home" class="relative min-h-screen pt-32 pb-24 flex items-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/team-hero.webp') }}" alt="Tim Keamanan Profesional FOKSA Garda" class="w-full h-full object-cover filter blur-sm">
            <div class="absolute inset-0 bg-gradient-to-r from-black/20 via-black/45 to-black/70"></div>
        </div>
        
        <!-- Content -->
        <div class="relative z-10 max-w-7xl mx-auto px-6 w-full">
            <!-- Text Container with Subtle Background -->
            <div class="max-w-3xl bg-black/35 backdrop-blur-md rounded-2xl p-6 md:p-10 border border-[#DA6B4D]/60 shadow-2xl animate-fade-in-up animation-fill-both">
                <div class="mb-4 md:mb-6 flex items-center space-x-3">
                    <div class="h-1 w-8 md:w-12 bg-[#DA6B4D] animate-scale-in animation-fill-both"></div>
                    <span class="text-[#FF8860] font-semibold text-xs md:text-sm uppercase tracking-wide drop-shadow-lg animate-fade-in-up delay-100 animation-fill-both">Keamanan Profesional</span>
                </div>
                
                <h1 class="text-4xl md:text-5xl lg:text-7xl font-bold text-white mb-4 md:mb-6 leading-tight drop-shadow-xl animate-fade-in-up delay-200 animation-fill-both">
                    Lindungi Aset Berharga Anda
                </h1>
                
                <p class="text-base md:text-lg lg:text-xl text-white mb-6 md:mb-8 leading-relaxed drop-shadow-lg animate-fade-in-up delay-300 animation-fill-both">
                    FOKSA Garda Nusantara menyediakan solusi keamanan profesional yang dapat diandalkan untuk melindungi bisnis dan aset Anda dengan standar nasional.
                </p>

            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-[#fffaf7]">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Section Header -->
            <div class="mb-12 text-center"> 
                <div class="flex justify-center items-center space-x-4 mb-4">
                    <div class="h-[2px] w-10 bg-gradient-to-r from-transparent to-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-bold text-lg uppercase tracking-[0.4em] drop-shadow-sm">
                        Tentang Kami
                    </span>
                    <div class="h-[2px] w-10 bg-gradient-to-l from-transparent to-[#DA6B4D]"></div>
                </div>
            </div>

            <!-- Tentang Kami + Motto -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-16 items-start">

                <!-- Deskripsi Perusahaan -->
                <div class="lg:col-span-2">
                    <p class="text-gray-600 leading-relaxed text-justify text-base">
                        PT. FOKSA GARDA NUSANTARA (SAGARA) lahir dan berdiri pada tahun 2021 di DKI Jakarta merupakan perusahaan di bidang pelayanan jasa keamanan / pengamanan dan penyediaan tenaga kerja khususnya tenaga <em>security</em> atau jasa pengamanan dan tenaga <em>outsourcing</em> lainnya dalam rangka memenuhi kebutuhan tenaga kerja dari perusahaan-perusahaan di seluruh Indonesia. Sebagai perusahaan jasa keamanan yang terpercaya, kami mengkhususkan diri dalam pelayanan petugas keamanan berkualitas tinggi yang mengutamakan kepuasan klien kami.
                    </p>
                </div>

                <!-- Motto -->
                <div class="flex flex-col justify-center items-center lg:items-start">
                    <div class="w-full bg-[#DA6B4D] rounded-xl px-8 py-7 text-center shadow-md">
                        <p class="text-xs font-semibold text-white/70 uppercase tracking-widest mb-2">Motto</p>
                        <p class="text-white font-bold text-xl leading-snug tracking-wide">
                            MENJADI YANG TERDEPAN<br>DAN TERBAIK
                        </p>
                    </div>
                </div>
            </div>

            <!-- Visi & Misi -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <!-- Visi -->
                <div class="border-l-4 border-[#DA6B4D] bg-white rounded-xl px-8 py-7 shadow-sm">
                    <h4 class="text-sm font-bold text-[#DA6B4D] uppercase tracking-widest mb-3">Visi</h4>
                    <p class="text-gray-700 leading-relaxed text-base font-medium">
                        Menjadi perusahaan industri jasa pengamanan terbaik di Indonesia dan selalu unggul dalam jaminan keamanan.
                    </p>
                </div>

                <!-- Misi -->
                <div class="border-l-4 border-[#2D8B6F] bg-white rounded-xl px-8 py-7 shadow-sm">
                    <h4 class="text-sm font-bold text-[#2D8B6F] uppercase tracking-widest mb-3">Misi</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3 text-gray-700 leading-relaxed text-base">
                            <span class="mt-1.5 flex-shrink-0 h-2 w-2 rounded-full bg-[#2D8B6F]"></span>
                            Menjadi salah satu jasa keamanan tangguh dalam industri jasa pengamanan Republik Indonesia.
                        </li>
                        <li class="flex items-start gap-3 text-gray-700 leading-relaxed text-base">
                            <span class="mt-1.5 flex-shrink-0 h-2 w-2 rounded-full bg-[#2D8B6F]"></span>
                            Meningkatkan daya saing perusahaan di industri jasa pengamanan.
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-24 bg-[#faf7f5]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-12">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">Layanan Kami</span>
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                </div>
                <p class="text-lg text-gray-600 mb-12 font-medium leading-relaxed">
                    Menghadirkan layanan pengamanan dengan standar operasional tinggi dan personel ahli.
                </p>
            </div>

            <!-- Main Product Card -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Product Images -->
                <div id="productGallery">
                    <!-- Main Image with Navigation -->
                    <div class="bg-gray-200 rounded-xl overflow-hidden shadow-lg mb-6 aspect-video flex items-center justify-center relative group">
                        <img id="mainImage" 
                            src="{{ asset('images/gallery/security-1.webp') }}" 
                            alt="Foto Utama Layanan"
                            class="w-full h-full object-cover transition-opacity duration-300">
                        
                        <!-- Left Arrow Button -->
                        <button id="prevBtn" 
                            class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-[#DA6B4D] rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300 opacity-0 group-hover:opacity-100 z-10 hover:scale-110 shadow-lg"
                            aria-label="Foto sebelumnya">
                            <i class="fas fa-chevron-left text-xl font-bold"></i>
                        </button>

                        <!-- Right Arrow Button -->
                        <button id="nextBtn" 
                            class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/80 hover:bg-white text-[#DA6B4D] rounded-full w-12 h-12 flex items-center justify-center transition-all duration-300 opacity-0 group-hover:opacity-100 z-10 hover:scale-110 shadow-lg"
                            aria-label="Foto berikutnya">
                            <i class="fas fa-chevron-right text-xl font-bold"></i>
                        </button>

                        <!-- Image Counter -->
                        <div class="absolute bottom-4 right-4 bg-black/60 text-white px-3 py-1.5 rounded-full text-sm font-medium">
                            <span id="currentIndex">1</span> / <span id="totalImages">4</span>
                        </div>
                    </div>
                    
                    <!-- Thumbnail Gallery -->
                    <div class="grid grid-cols-4 gap-4">
                        <div class="thumbnail-item bg-gray-200 rounded-lg overflow-hidden cursor-pointer hover:ring-2 hover:ring-[#DA6B4D] transition aspect-square flex items-center justify-center active" 
                            data-image="{{ asset('images/gallery/security-1.webp') }}"
                            data-alt="Foto Layanan 1"
                            role="button"
                            tabindex="0">
                            <img src="{{ asset('images/gallery/security-1.webp') }}" 
                                alt="Thumbnail 1"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="thumbnail-item bg-gray-200 rounded-lg overflow-hidden cursor-pointer hover:ring-2 hover:ring-[#DA6B4D] transition aspect-square flex items-center justify-center" 
                            data-image="{{ asset('images/gallery/security-2.webp') }}"
                            data-alt="Foto Layanan 2"
                            role="button"
                            tabindex="0">
                            <img src="{{ asset('images/gallery/security-2.webp') }}" 
                                alt="Thumbnail 2"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="thumbnail-item bg-gray-200 rounded-lg overflow-hidden cursor-pointer hover:ring-2 hover:ring-[#DA6B4D] transition aspect-square flex items-center justify-center" 
                            data-image="{{ asset('images/gallery/security-3.webp') }}"
                            data-alt="Foto Layanan 3"
                            role="button"
                            tabindex="0">
                            <img src="{{ asset('images/gallery/security-3.webp') }}" 
                                alt="Thumbnail 3"
                                class="w-full h-full object-cover">
                        </div>
                        <div class="thumbnail-item bg-gray-200 rounded-lg overflow-hidden cursor-pointer hover:ring-2 hover:ring-[#DA6B4D] transition aspect-square flex items-center justify-center" 
                            data-image="{{ asset('images/gallery/security-4.webp') }}"
                            data-alt="Foto Layanan 4"
                            role="button"
                            tabindex="0">
                            <img src="{{ asset('images/gallery/security-4.webp') }}" 
                                alt="Thumbnail 4"
                                class="w-full h-full object-cover">
                        </div>
                    </div>
                </div>

                <!-- Product Details -->
                <div>
                    <div class="mb-6">
                        <h3 class="text-4xl font-bold text-gray-900 mb-4">Jasa Pengamanan Profesional</h3>
                        <p class="text-lg text-gray-600 leading-relaxed mb-6">
                            Layanan pengamanan komprehensif yang dirancang khusus untuk memenuhi kebutuhan keamanan bisnis Anda dengan personel terlatih.
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-16">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Tipe Layanan Keamanan</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Variant 1 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-8 hover:border-[#DA6B4D] transition duration-300">
                        <div class="text-5xl text-[#DA6B4D] mb-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Keamanan Kantor</h4>
                        <p class="text-gray-600 text-sm mb-4">Penjagaan profesional untuk area kantor dengan pemeriksaan tamu dan monitoring 24/7.</p>
                    </div>

                    <!-- Variant 2 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-8 hover:border-[#2D8B6F] transition duration-300">
                        <div class="text-5xl text-[#2D8B6F] mb-4">
                            <i class="fas fa-warehouse"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Keamanan Pabrik</h4>
                        <p class="text-gray-600 text-sm mb-4">Keamanan industri dengan pengawasan gudang dan penjagaan malam intensif.</p>
                    </div>

                    <!-- Variant 3 -->
                    <div class="bg-white rounded-xl border border-gray-200 p-8 hover:border-[#DA6B4D] transition duration-300">
                        <div class="text-5xl text-[#DA6B4D] mb-4">
                            <i class="fas fa-home"></i>
                        </div>
                        <h4 class="text-lg font-bold text-gray-900 mb-3">Keamanan Perumahan</h4>
                        <p class="text-gray-600 text-sm mb-4">Penjagaan lingkungan hunian dengan patroli rutin dan respons cepat.</p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Legalitas Section -->
    <section id="legalitas" class="py-24 bg-[#fffaf7]">
        <div class="max-w-7xl mx-auto px-6">
            
            <div class="mb-16 text-center">
                <div class="flex justify-center items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">Legalitas Perusahaan</span>
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4 font-display">Izin & Sertifikasi Resmi</h2>
            </div>

            <div class="flex flex-wrap justify-center gap-8" id="legalitasGallery">
                @foreach(range(1, 7) as $index)
                <div class="group relative w-full sm:w-[calc(50%-2rem)] lg:w-[calc(25%-2rem)] perspective-1000 cursor-pointer legality-item" data-image="{{ asset('images/legalitas/dokumen-' . $index . '.jpg') }}" data-index="{{ $index }}">
                    <div class="relative overflow-hidden rounded-xl bg-white shadow-lg border border-gray-200 transition-all duration-500 transform group-hover:-translate-y-2 group-hover:shadow-2xl">
                        
                        <div class="absolute inset-0 opacity-10 pointer-events-none bg-[url('https://www.transparenttextures.com/patterns/paper-fibers.png')]"></div>

                        <div class="aspect-[3/4] overflow-hidden">
                            <img src="{{ asset('images/legalitas/dokumen-' . $index . '.jpg') }}" 
                                alt="Legalitas {{ $index }}" 
                                class="w-full h-full object-contain p-4 bg-gray-50 group-hover:scale-105 transition-transform duration-700">
                        </div>

                        <div class="absolute inset-0 bg-[#DA6B4D]/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                            <div class="bg-white p-3 rounded-full shadow-xl transform translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-[#DA6B4D]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                                </svg>
                            </div>
                        </div>

                        <div class="h-1.5 w-0 bg-[#DA6B4D] group-hover:w-full transition-all duration-500"></div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Zoom Modal Lightbox -->
            <div id="legalitasModal" class="fixed inset-0 z-50 hidden bg-black/70 backdrop-blur-sm flex items-center justify-center p-4 animate-fade-in" style="animation: fadeIn 0.3s ease-out;">
                <div class="relative w-full max-w-4xl max-h-[90vh] bg-white rounded-2xl shadow-2xl overflow-hidden animate-zoom-in" style="animation: zoomIn 0.3s ease-out;">
                    
                    <!-- Close Button -->
                    <button id="closeModal" class="absolute top-4 right-4 z-10 bg-white/90 hover:bg-white text-gray-900 p-2 rounded-full shadow-lg transition-all duration-200 hover:scale-110" aria-label="Tutup modal">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Image Container -->
                    <div class="relative bg-gray-900 flex items-center justify-center min-h-[70vh]">
                        <img id="modalImage" src="" alt="Legalitas zoom" class="max-h-[70vh] max-w-full object-contain">
                    </div>

                    <!-- Navigation -->
                    <div class="bg-white px-6 py-4 flex items-center justify-between">
                        <!-- Left Arrow -->
                        <button id="prevModalBtn" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-[#DA6B4D] text-[#DA6B4D] hover:bg-[#DA6B4D] hover:text-white transition-all duration-200" aria-label="Foto sebelumnya">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>

                        <!-- Counter -->
                        <div class="text-gray-600 font-semibold text-sm">
                            <span id="modalCurrentIndex">1</span> / <span id="modalTotalIndex">7</span>
                        </div>

                        <!-- Right Arrow -->
                        <button id="nextModalBtn" class="flex items-center justify-center w-10 h-10 rounded-full border-2 border-[#DA6B4D] text-[#DA6B4D] hover:bg-[#DA6B4D] hover:text-white transition-all duration-200" aria-label="Foto berikutnya">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Perlengkapan & Peralatan Section -->
    <section class="py-24 bg-[#faf7f5]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 text-center">
                <div class="flex justify-center items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">Equipment</span>
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Perlengkapan & Peralatan</h2>
                <p class="text-lg text-gray-600 mb-12 font-medium leading-relaxed">Dilengkapi dengan equipment modern dan standar keamanan internasional</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <!-- Equipment Card 1 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/stand-inspection.webp') }}" 
                            alt="Stand Inspection" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Stand Inspection</h3>
                        <p class="text-gray-600 text-sm mb-4">
                            Alat inspeksi bawah kendaraan digunakan untuk memeriksa area kolong mobil secara mudah dan aman, tersedia dalam bentuk tongkat dengan kaca cembung maupun kamera.
                        </p>
                    </div>
                </div>

                <!-- Equipment Card 2 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/explosive-detector.webp') }}" 
                            alt="Explosive Detector" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Explosive Detector</h3>
                        <p class="text-gray-600 text-sm mb-4">Merupakan alat deteksi yang digunakan untuk mendeteksi bahan peledak maupun barang berbahaya lainnya guna membantu menjaga keamanan.</p>
                    </div>
                </div>

                <!-- Equipment Card 3 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/laser-gun.webp') }}" 
                            alt="Laser Gun" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Laser Gun</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat pertahanan diri yang menggunakan aliran listrik bertegangan tinggi untuk membantu melumpuhkan sasaran secara cepat dan efektif.</p>
                    </div>
                </div>

                <!-- Equipment Card 4 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/ballistic.webp') }}" 
                            alt="Ballistic Anti Peluru" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Ballistic Anti Peluru</h3>
                        <p class="text-gray-600 text-sm mb-4">Rompi antipeluru dirancang untuk mengurangi energi kinetik peluru dengan menggunakan lapisan kevlar yang menyerap energi benturan.</p>
                    </div>
                </div>

                <!-- Equipment Card 5 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/k9-unit.webp') }}" 
                            alt="K9 Unit" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">K9 Unit</h3>
                        <p class="text-gray-600 text-sm mb-4">Digunakan dalam situasi khusus seperti melacak tersangka, mencari orang hilang, serta mendeteksi narkotika maupun bahan peledak.</p>
                    </div>
                </div>

                <!-- Equipment Card 6 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/helmet.webp') }}" 
                            alt="Helmet Tactical" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Helmet Tactical</h3>
                        <p class="text-gray-600 text-sm mb-4">Helm pelindung yang dirancang untuk melindungi kepala dari benturan dan risiko cedera saat bertugas di lapangan.</p>
                    </div>
                </div>

                <!-- Equipment Card 7 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/handy-talkie.webp') }}" 
                            alt="Handy Talkie" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Handy Talkie</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat komunikasi portabel yang digunakan untuk menjaga kontak dengan rekan tim dalam situasi operasional.</p>
                    </div>
                </div>

                <!-- Equipment Card 8 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/water-checking.webp') }}" 
                            alt="Water Checking" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Water Checking</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat uji cepat kontaminasi zat kimia berbahaya pada makanan dan minuman yang efisien untuk mendukung kegiatan pengamanan dan memastikan keamanan pangan.</p>
                    </div>
                </div>

                <!-- Equipment Card 9 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/rescue-boat.webp') }}" 
                            alt="Rescue Boat" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Rescue Boat</h3>
                        <p class="text-gray-600 text-sm mb-4">Berfungsi untuk membantu proses penyelamatan saat terjadi banjir maupun kondisi genangan air lainnya.</p>
                    </div>
                </div>

                <!-- Equipment Card 10 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/lampu-lalin.webp') }}" 
                            alt="Lampu Lalin" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Lampu Lalin</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat ini digunakan untuk mengatur lalu lintas pada malam hari guna mengurangi risiko kecelakaan akibat kondisi minim pencahayaan.</p>
                    </div>
                </div>

                <!-- Equipment Card 11 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/borgol.webp') }}" 
                            alt="Borgol" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Borgol</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat untuk membelenggu tangan pelaku tindak kejahatan yang telah tertangkap guna mencegah tindakan yang dapat membahayakan personel pengamanan, sebelum selanjutnya diserahkan kepada pihak penegak hukum.</p>
                    </div>
                </div>

                <!-- Equipment Card 12 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#2D8B6F] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/patrol-car.webp') }}" 
                            alt="Patrol Car" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Patrol Car</h3>
                        <p class="text-gray-600 text-sm mb-4">Kendaraan yang digunakan untuk mendukung kegiatan pengawasan dan patroli keamanan di area operasional.</p>
                    </div>
                </div>

                <!-- Equipment Card 13 -->
                <div class="group bg-white rounded-xl border border-gray-200 overflow-hidden hover:border-[#DA6B4D] transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="aspect-video overflow-hidden">
                        <img src="{{ asset('images/perlengkapan/pentungan.webp') }}" 
                            alt="Pentungan" 
                            class="w-full h-full object-contain bg-gray-100 group-hover:scale-110 transition duration-500">
                    </div>
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-gray-900 mb-2">Pentungan</h3>
                        <p class="text-gray-600 text-sm mb-4">Alat yang digunakan sebagai sarana pertahanan diri sekaligus untuk melumpuhkan pelaku tindak kejahatan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Mitra Kami -->
    <section class="py-24 bg-[#fffaf7]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 text-center">
                <div class="flex justify-center items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">Partnership</span>
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Mitra & Afiliasi Kami</h2>
                <p class="text-lg text-gray-600 mb-12 font-medium leading-relaxed">Bermitra dengan perusahaan dan institusi terkemuka di Indonesia untuk menciptakan ekosistem keamanan yang terintegrasi</p>
            </div>

            <div class="partner-slider-container" data-partner-marquee aria-label="Daftar mitra dan afiliasi">
                <div class="partner-slider-track" data-partner-track>
                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/abujapi.webp') }}" alt="Abujapi" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/kkp.webp') }}" alt="KKP" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/siti-abadi-karya.webp') }}" alt="Siti Abadi Karya" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/galih-jaya-furniture.webp') }}" alt="Galih Jaya Furniture" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/kose.webp') }}" alt="KOSE" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/ligantara.webp') }}" alt="Ligantara" class="partner-logo">
                    </div>

                    <div class="partner-logo-item">
                        <img src="{{ asset('images/mitra/multi-plasindo.webp') }}" alt="Multi Plasindo" class="partner-logo">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-24 bg-[#fffaf7]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16 text-center">
                <div class="flex justify-center items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">Struktur Organisasi</span>
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                </div>
                <h2 class="text-4xl font-extrabold text-gray-900 mb-4">Tim Manajemen</h2>
                <p class="text-lg text-gray-600 mb-12 font-medium leading-relaxed">Tim berpengalaman yang siap memimpin dan memberikan yang terbaik</p>
            </div>

            <!-- Organizational Chart Container -->
            <div class="flex justify-center">
                <div class="w-full max-w-4xl">
                    
                    <!-- Organizational Tree Layout -->
                    <div class="mb-8">
                        <!-- Level 1: Komisaris Utama -->
                        <div class="flex justify-center mb-24 animate-fade-in-up animation-fill-both">
                            <div class="relative w-72">
                                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-lg hover:shadow-xl hover:border-[#DA6B4D] transition-all duration-300 hover:-translate-y-2 relative z-10">
                                    <div class="h-44 bg-gradient-to-br from-[#DA6B4D] to-[#C75838] flex items-center justify-center relative overflow-hidden">
                                        <div class="absolute inset-0 opacity-10 pattern"></div>
                                        <div class="relative w-24 h-24">
                                            <img src="{{ asset('images/pejabat/kasan.webp') }}" alt="Kasan Risyanto" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                                        </div>
                                    </div>
                                    <div class="p-6 text-center">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2">Kasan Risyanto</h3>
                                        <span class="inline-block px-4 py-1.5 bg-[#DA6B4D] bg-opacity-10 text-[#DA6B4D] font-bold text-xs rounded-full">Komisaris Utama</span>
                                    </div>
                                </div>
                                <div class="absolute left-1/2 top-full w-1 h-24 bg-gray-300 transform -translate-x-1/2 -z-0"></div>
                            </div>
                        </div>

                        <!-- Level 2: Direktur Utama -->
                        <div class="flex justify-center mb-24 animate-fade-in-up animation-fill-both delay-100">
                            <div class="relative w-72">
                                <div class="bg-white rounded-2xl border border-gray-200 overflow-hidden shadow-lg hover:shadow-xl hover:border-[#2D8B6F] transition-all duration-300 hover:-translate-y-2 relative z-10">
                                    <div class="h-44 bg-gradient-to-br from-[#2D8B6F] to-[#235F52] flex items-center justify-center relative overflow-hidden">
                                        <div class="absolute inset-0 opacity-10 pattern"></div>
                                        <div class="relative w-24 h-24">
                                            <img src="{{ asset('images/pejabat/roswati.webp') }}" alt="Roswati" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                                        </div>
                                    </div>
                                    <div class="p-6 text-center">
                                        <h3 class="text-lg font-bold text-gray-900 mb-2">Roswati</h3>
                                        <span class="inline-block px-4 py-1.5 bg-[#2D8B6F] bg-opacity-10 text-[#2D8B6F] font-bold text-xs rounded-full">Direktur Utama</span>
                                    </div>
                                </div>
                                <div class="absolute left-1/2 top-full w-1 h-28 bg-gray-300 transform -translate-x-1/2 -z-0"></div>
                            </div>
                        </div>

                        <!-- Horizontal Connector & Level 3: Three Directors -->
                        <div class="relative pt-12">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                                
                                <!-- Director 1: Operasional -->
                                <div class="relative">
                                    <div class="absolute -top-12 left-1/2 w-1 h-12 bg-gray-300 transform -translate-x-1/2"></div>
                                    <div class="hidden md:block absolute -top-12 left-1/2 right-[-1rem] h-1 bg-gray-300"></div>
                                    
                                    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-md hover:shadow-lg hover:border-[#DA6B4D] transition-all duration-300 hover:-translate-y-2 group">
                                        <div class="h-40 flex items-center justify-center bg-gradient-to-br from-[#DA6B4D] to-[#C75838] relative overflow-hidden">
                                            <div class="absolute inset-0 opacity-10 pattern"></div>
                                            <div class="relative w-20 h-20">
                                                <img src="{{ asset('images/pejabat/mansurna.webp') }}" alt="Mansurna" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                                            </div>
                                        </div>
                                        <div class="p-4 text-center">
                                            <h3 class="text-sm font-bold text-gray-900 mb-2">Mansurna</h3>
                                            <span class="inline-block px-3 py-1 bg-[#DA6B4D] bg-opacity-10 text-[#DA6B4D] font-semibold text-xs rounded-full">Direktur Operasional</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director 2: Keuangan -->
                                <div class="relative">
                                    <div class="absolute -top-12 left-1/2 w-1 h-12 bg-gray-300 transform -translate-x-1/2"></div>
                                    <div class="hidden md:block absolute -top-12 left-[-1rem] right-[-1rem] h-1 bg-gray-300"></div>
                                    
                                    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-md hover:shadow-lg hover:border-[#2D8B6F] transition-all duration-300 hover:-translate-y-2 group">
                                        <div class="h-40 flex items-center justify-center bg-gradient-to-br from-[#2D8B6F] to-[#235F52] relative overflow-hidden">
                                            <div class="absolute inset-0 opacity-10 pattern"></div>
                                            <div class="relative w-20 h-20">
                                                <img src="{{ asset('images/pejabat/profile.webp') }}" alt="Direktur Keuangan" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                                            </div>
                                        </div>
                                        <div class="p-4 text-center">
                                            <h3 class="text-sm font-bold text-gray-900 mb-2">Direktur Keuangan</h3>
                                            <span class="inline-block px-3 py-1 bg-[#2D8B6F] bg-opacity-10 text-[#2D8B6F] font-semibold text-xs rounded-full">Direktur Keuangan</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- Director 3: SDM -->
                                <div class="relative">
                                    <div class="absolute -top-12 left-1/2 w-1 h-12 bg-gray-300 transform -translate-x-1/2"></div>
                                    <div class="hidden md:block absolute -top-12 left-[-1rem] right-1/2 h-1 bg-gray-300"></div>
                                    
                                    <div class="bg-white rounded-xl border border-gray-200 overflow-hidden shadow-md hover:shadow-lg hover:border-[#DA6B4D] transition-all duration-300 hover:-translate-y-2 group">
                                        <div class="h-40 flex items-center justify-center bg-gradient-to-br from-[#DA6B4D] to-[#C75838] relative overflow-hidden">
                                            <div class="absolute inset-0 opacity-10 pattern"></div>
                                            <div class="relative w-20 h-20">
                                                <img src="{{ asset('images/pejabat/syafrijal.webp') }}" alt="Syafrijal Adnan" class="w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                                            </div>
                                        </div>
                                        <div class="p-4 text-center">
                                            <h3 class="text-sm font-bold text-gray-900 mb-2">Syafrijal Adnan</h3>
                                            <span class="inline-block px-3 py-1 bg-[#DA6B4D] bg-opacity-10 text-[#DA6B4D] font-semibold text-xs rounded-full">Direktur SDM</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-[#faf7f5] overflow-hidden">
        <div class="max-w-7xl mx-auto px-6">

            <!-- Heading -->
            <div class="mb-16">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="h-1 w-12 bg-[#DA6B4D]"></div>
                    <span class="text-[#DA6B4D] font-semibold text-sm uppercase tracking-wide">
                        Hubungi Kami
                    </span>
                </div>

                <h2 class="text-4xl font-extrabold text-gray-900 mb-4 mb-4">
                    Mari Diskusikan Kebutuhan Anda
                </h2>

                <p class="text-lg text-gray-600 mb-12 font-medium leading-relaxed max-w-2xl">
                    Tim kami siap membantu memberikan solusi keamanan yang sesuai dengan kebutuhan Anda.
                </p>
            </div>

            <!-- Contact Method -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-20">

                <!-- WhatsApp -->
                <div class="group bg-white rounded-3xl border border-gray-200 p-8 transition-all duration-300 hover:shadow-lg hover:border-[#DA6B4D]/40">
                    
                    <div class="flex items-start justify-between mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-[#25D366]/10 flex items-center justify-center">
                            <i class="fab fa-whatsapp text-3xl text-[#25D366]"></i>
                        </div>

                    </div>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            WhatsApp & Telepon
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-5">
                            Konsultasi cepat mengenai kebutuhan keamanan,
                            penawaran harga, maupun survey lokasi.
                        </p>

                        <p class="text-2xl font-bold text-gray-900 tracking-wide">
                            +62 813 8527 3936
                        </p>
                    </div>

                    <div class="flex flex-col sm:flex-row gap-3">
                        <a href="https://wa.me/6281385273936"
                            class="flex-1 inline-flex items-center justify-center bg-[#25D366] hover:bg-[#1ebe5d] text-white font-semibold py-3.5 px-5 rounded-xl transition-all duration-300">
                            <i class="fab fa-whatsapp mr-2 text-lg"></i>
                            Chat WhatsApp
                        </a>

                        <a href="tel:+6281385273936"
                            class="flex-1 inline-flex items-center justify-center border border-gray-300 hover:border-[#DA6B4D] hover:text-[#DA6B4D] text-gray-700 font-semibold py-3.5 px-5 rounded-xl transition-all duration-300">
                            <i class="fas fa-phone-alt mr-2 text-sm"></i>
                            Telepon
                        </a>
                    </div>
                </div>

                <!-- Email -->
                <div class="group bg-white rounded-3xl border border-gray-200 p-8 transition-all duration-300 hover:shadow-lg hover:border-[#2D8B6F]/40">

                    <div class="flex items-start justify-between mb-8">
                        <div class="w-14 h-14 rounded-2xl bg-[#2D8B6F]/10 flex items-center justify-center">
                            <i class="fas fa-envelope text-2xl text-[#2D8B6F]"></i>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-gray-900 mb-3">
                            Email
                        </h3>

                        <p class="text-gray-600 leading-relaxed mb-5">
                            Untuk kebutuhan penawaran formal, kerja sama,
                            maupun pengajuan dokumen perusahaan.
                        </p>

                        <p class="text-xl font-bold text-gray-900 break-all">
                            ptsagara@gmail.com
                        </p>
                    </div>

                    <div class="flex flex-col gap-3">
                        <a href="mailto:ptsagara@gmail.com"
                            class="inline-flex items-center justify-center bg-[#2D8B6F] hover:bg-[#235F52] text-white font-semibold py-3.5 px-5 rounded-xl transition-all duration-300">
                            <i class="fas fa-paper-plane mr-2 text-sm"></i>
                            Kirim Email
                        </a>

                        <div class="flex items-center text-sm text-gray-500">
                            <i class="far fa-clock mr-2"></i>
                            Estimasi balasan maksimal 1 jam kerja
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office Section -->
            <div class="border-t border-gray-200 pt-16">
                <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6 mb-6">
                    <div>
                        <h3 class="text-3xl font-bold text-gray-900 mb-3">
                            Lokasi Kantor
                        </h3>
                    </div>
                </div>

                <!-- Office Cards -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                    <!-- HQ -->
                    <div class="bg-white rounded-3xl border border-gray-200 p-8 hover:shadow-lg transition-all duration-300">

                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-[#DA6B4D]/10 flex items-center justify-center">
                                        <i class="fas fa-building text-[#DA6B4D]"></i>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">
                                            Kantor Pusat
                                        </h4>

                                        <p class="text-sm text-gray-500">
                                            Jakarta Timur
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <span class="text-xs font-semibold bg-orange-100 text-orange-700 px-3 py-1 rounded-full">
                                Head Office
                            </span>
                        </div>

                        <div class="space-y-2 text-gray-700 leading-relaxed mb-8">
                            <p>JL. RA Fadillah No 26</p>
                            <p>RT/RW 002/008, Cijantung I</p>
                            <p>Pasar Rebo, Jakarta Timur, Indonesia</p>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <div class="text-sm text-gray-600 flex items-center">
                                <i class="fas fa-phone-alt mr-3 text-[#DA6B4D]"></i>
                                <a href="https://wa.me/6281385273936" target="_blank" class="hover:text-[#25D366] transition-colors duration-0 hover:underline">
                                    +62 813 8527 3936
                                </a>
                            </div>

                            <a href="https://maps.google.com" target="_blank"
                                class="inline-flex items-center text-[#DA6B4D] font-semibold hover:gap-3 gap-2 transition-all">
                                Maps
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Branch -->
                    <div class="bg-white rounded-3xl border border-gray-200 p-8 hover:shadow-lg transition-all duration-300">

                        <div class="flex items-start justify-between mb-6">
                            <div>
                                <div class="flex items-center gap-3 mb-3">
                                    <div class="w-12 h-12 rounded-xl bg-[#2D8B6F]/10 flex items-center justify-center">
                                        <i class="fas fa-building text-[#2D8B6F]"></i>
                                    </div>

                                    <div>
                                        <h4 class="text-xl font-bold text-gray-900">
                                            Kantor Cabang
                                        </h4>

                                        <p class="text-sm text-gray-500">
                                            Pasuruan
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <span class="text-xs font-semibold bg-teal-100 text-teal-700 px-3 py-1 rounded-full">
                                Branch Office
                            </span>
                        </div>

                        <div class="space-y-2 text-gray-700 leading-relaxed mb-8">
                            <p>Dsn. Ngipik RT. 01 RW. 12 No. 17</p>
                            <p>Ds. Sumbersuko</p>
                            <p>Kec. Gempol, Kab. Pasuruan, Jawa Timur</p>
                        </div>

                        <div class="flex items-center justify-between pt-6 border-t border-gray-100">
                            <div class="text-sm text-gray-600 flex items-center">
                                <i class="fas fa-phone-alt mr-3 text-[#2D8B6F]"></i>
                                <a href="https://wa.me/6285233476934" target="_blank" class="hover:text-[#25D366] transition-colors duration-0 hover:underline">
                                    +62 852 3347 6934
                                </a>
                            </div>

                            <a href="https://maps.google.com" target="_blank"
                                class="inline-flex items-center text-[#2D8B6F] font-semibold hover:gap-3 gap-2 transition-all">
                                Maps
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Contact Form
            <div class="max-w-2xl mx-auto bg-white rounded-xl border border-gray-200 p-10">
                <h3 class="text-2xl font-bold text-gray-900 mb-8">Kirim Pesan Anda</h3>
                <form class="space-y-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">Nama Lengkap</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#DA6B4D] transition" placeholder="Nama Anda">
                        </div>
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#DA6B4D] transition" placeholder="email@example.com">
                        </div>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Nomor Telepon</label>
                        <input type="tel" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#DA6B4D] transition" placeholder="08xx xxxx xxxx">
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Jenis Layanan</label>
                        <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#DA6B4D] transition">
                            <option>Pilih layanan...</option>
                            <option>Keamanan Kantor</option>
                            <option>Keamanan Pabrik</option>
                            <option>Keamanan Toko</option>
                            <option>Keamanan Event</option>
                            <option>Keamanan Perumahan</option>
                            <option>CCTV & Teknologi</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-gray-700 font-semibold mb-2 text-sm">Pesan</label>
                        <textarea class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#DA6B4D] transition" rows="5" placeholder="Jelaskan kebutuhan keamanan Anda..."></textarea>
                    </div>

                    <button type="submit" class="w-full btn-primary py-4">
                        <i class="fas fa-paper-plane mr-2"></i> Kirim Pesan
                    </button>
                </form>
            </div> -->
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-[#DA6B4D] py-16">
        <div class="max-w-4xl mx-auto px-6 text-center text-white">
            <h2 class="text-4xl font-bold mb-4">Siap Melindungi Aset Anda?</h2>
            <p class="text-lg text-[#f5ddd4] mb-8">
                Hubungi kami untuk konsultasi gratis. Tim kami siap membantu Anda.
            </p>
            <a href="#contact" class="inline-block bg-white text-[#DA6B4D] hover:bg-gray-100 font-semibold py-3 px-10 rounded-lg transition duration-200">
                <i class="fas fa-phone mr-2"></i> Hubungi Sekarang
            </a>
        </div>
    </section>

    <script>
        // Product Gallery Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const thumbnailItems = document.querySelectorAll('.thumbnail-item');
            const mainImage = document.getElementById('mainImage');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const currentIndexSpan = document.getElementById('currentIndex');
            const totalImagesSpan = document.getElementById('totalImages');
            
            let currentIndex = 0;

            // Set total images count
            totalImagesSpan.textContent = thumbnailItems.length;

            // Function to update main image
            function updateMainImage(index) {
                // Handle looping
                if (index < 0) {
                    currentIndex = thumbnailItems.length - 1;
                } else if (index >= thumbnailItems.length) {
                    currentIndex = 0;
                } else {
                    currentIndex = index;
                }

                const thumbnailItem = thumbnailItems[currentIndex];
                const imageUrl = thumbnailItem.getAttribute('data-image');
                const altText = thumbnailItem.getAttribute('data-alt');

                // Fade out effect
                mainImage.style.opacity = '0.7';
                
                // Update image
                mainImage.src = imageUrl;
                mainImage.alt = altText;

                // Fade in effect
                setTimeout(() => {
                    mainImage.style.opacity = '1';
                }, 100);

                // Update counter
                currentIndexSpan.textContent = currentIndex + 1;

                // Update active state
                thumbnailItems.forEach(thumb => thumb.classList.remove('active', 'ring-2', 'ring-[#DA6B4D]'));
                thumbnailItem.classList.add('active', 'ring-2', 'ring-[#DA6B4D]');
            }

            // Add click event listeners to thumbnails
            thumbnailItems.forEach((item, index) => {
                // Click event
                item.addEventListener('click', function() {
                    updateMainImage(index);
                });

                // Keyboard navigation (Enter or Space key)
                item.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        e.preventDefault();
                        updateMainImage(index);
                    }
                });
            });

            // Arrow button event listeners
            prevBtn.addEventListener('click', function() {
                updateMainImage(currentIndex - 1);
            });

            nextBtn.addEventListener('click', function() {
                updateMainImage(currentIndex + 1);
            });

            // Keyboard navigation with arrow keys
            document.addEventListener('keydown', function(e) {
                const gallery = document.getElementById('productGallery');
                if (!gallery) return;
                
                // Check if mouse is over gallery
                const isGalleryHovered = gallery.parentElement.querySelector(':hover') === gallery;
                
                if (e.key === 'ArrowLeft') {
                    updateMainImage(currentIndex - 1);
                } else if (e.key === 'ArrowRight') {
                    updateMainImage(currentIndex + 1);
                }
            });

            // Swipe gesture support for gallery
            let touchStartX = 0;
            let touchEndX = 0;

            const mainImageElement = mainImage.parentElement;
            
            mainImageElement.addEventListener('touchstart', function(e) {
                touchStartX = e.changedTouches[0].screenX;
            }, false);

            mainImageElement.addEventListener('touchend', function(e) {
                touchEndX = e.changedTouches[0].screenX;
                handleSwipe();
            }, false);

            function handleSwipe() {
                const swipeThreshold = 50;
                const diff = touchStartX - touchEndX;
                
                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        // Swiped left - next image
                        updateMainImage(currentIndex + 1);
                    } else {
                        // Swiped right - previous image
                        updateMainImage(currentIndex - 1);
                    }
                }
            }

            // Initialize first thumbnail as active
            if (thumbnailItems.length > 0) {
                updateMainImage(0);
            }
        });

        // Partner logo carousel with pause then push motion
        document.addEventListener('DOMContentLoaded', function() {
            const marquee = document.querySelector('[data-partner-marquee]');
            const track = document.querySelector('[data-partner-track]');

            if (!marquee || !track) {
                return;
            }

            const originalMarkup = track.innerHTML;
            const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
            const pauseDuration = 1600;
            const moveDuration = 650;
            let stepWidth = 0;
            let originalCount = 0;
            let currentIndex = 0;
            let timerId = null;
            let resetId = null;
            let resizeId = null;
            let isRunning = false;
            let isPointerHover = false;

            function clearTimers() {
                if (timerId) {
                    window.clearTimeout(timerId);
                    timerId = null;
                }

                if (resetId) {
                    window.clearTimeout(resetId);
                    resetId = null;
                }
            }

            function buildTrack() {
                track.classList.remove('is-animating');
                track.innerHTML = originalMarkup + originalMarkup;
                originalCount = track.children.length / 2;
                currentIndex = 0;
                stepWidth = measureStepWidth();
                track.style.transform = 'translate3d(0, 0, 0)';
            }

            function measureStepWidth() {
                const firstItem = track.children[0];

                if (!firstItem) {
                    return 0;
                }

                const firstWidth = firstItem.getBoundingClientRect().width;
                const secondItem = track.children[1];

                if (!secondItem) {
                    return firstWidth;
                }

                const secondLeft = secondItem.getBoundingClientRect().left;
                const firstLeft = firstItem.getBoundingClientRect().left;

                return secondLeft - firstLeft;
            }

            function setPosition(index, animate) {
                if (animate) {
                    track.classList.add('is-animating');
                } else {
                    track.classList.remove('is-animating');
                }

                track.style.transform = `translate3d(${-index * stepWidth}px, 0, 0)`;
            }

            function scheduleNext() {
                clearTimers();

                if (!isRunning || prefersReducedMotion.matches || isPointerHover || !stepWidth) {
                    return;
                }

                timerId = window.setTimeout(() => {
                    if (!isRunning || isPointerHover) {
                        return;
                    }

                    currentIndex += 1;
                    setPosition(currentIndex, true);

                    if (currentIndex >= originalCount) {
                        resetId = window.setTimeout(() => {
                            if (!isRunning || isPointerHover) {
                                return;
                            }

                            track.classList.remove('is-animating');
                            currentIndex = 0;
                            setPosition(0, false);
                            window.requestAnimationFrame(() => {
                                scheduleNext();
                            });
                        }, moveDuration + 25);
                    } else {
                        scheduleNext();
                    }
                }, pauseDuration);
            }

            function startCarousel() {
                buildTrack();

                if (prefersReducedMotion.matches) {
                    isRunning = false;
                    track.classList.remove('is-animating');
                    track.style.transform = 'none';
                    return;
                }

                isRunning = true;
                scheduleNext();
            }

            function stopCarousel() {
                isRunning = false;
                clearTimers();
            }

            marquee.addEventListener('mouseenter', function() {
                isPointerHover = true;
                clearTimers();
                track.classList.remove('is-animating');
            });

            marquee.addEventListener('mouseleave', function() {
                isPointerHover = false;

                if (!prefersReducedMotion.matches) {
                    scheduleNext();
                }
            });

            window.addEventListener('resize', function() {
                window.clearTimeout(resizeId);

                resizeId = window.setTimeout(() => {
                    if (prefersReducedMotion.matches) {
                        track.style.transform = 'none';
                        return;
                    }

                    startCarousel();
                }, 150);
            });

            if (typeof prefersReducedMotion.addEventListener === 'function') {
                prefersReducedMotion.addEventListener('change', function() {
                    if (prefersReducedMotion.matches) {
                        stopCarousel();
                        track.classList.remove('is-animating');
                        track.style.transform = 'none';
                    } else {
                        startCarousel();
                    }
                });
            }

            startCarousel();
        });

        // Organizational Structure Tab Switching
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.org-tab-btn');
            const levels = document.querySelectorAll('.org-level');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const targetLevel = this.getAttribute('data-level');

                    // Remove active class from all buttons
                    tabButtons.forEach(btn => {
                        btn.classList.remove('active', 'bg-[#DA6B4D]', 'bg-[#2D8B6F]', 'text-white');
                        btn.classList.add('border-2', 'border-gray-300', 'text-gray-700');
                    });

                    // Add active class to clicked button
                    this.classList.add('active', 'bg-[#DA6B4D]', 'text-white');
                    this.classList.remove('border-2', 'border-gray-300', 'text-gray-700');

                    // Handle color for direktur button
                    if (targetLevel === 'direktur') {
                        this.classList.remove('bg-[#DA6B4D]');
                        this.classList.add('bg-[#2D8B6F]', 'border-[#2D8B6F]');
                    }

                    // Hide all levels
                    levels.forEach(level => {
                        level.classList.remove('active');
                        level.classList.add('hidden');
                    });

                    // Show target level
                    const targetElement = document.getElementById(`level-${targetLevel}`);
                    if (targetElement) {
                        targetElement.classList.remove('hidden');
                        targetElement.classList.add('active');
                        
                        // Re-trigger animation
                        const animatedItems = targetElement.querySelectorAll('[class*="animate-"]');
                        animatedItems.forEach((item, index) => {
                            item.style.animation = 'none';
                            setTimeout(() => {
                                item.style.animation = '';
                            }, 10);
                        });
                    }
                });
            });
        });

        // Legalitas Modal Zoom Functionality
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('legalitasModal');
            const modalImage = document.getElementById('modalImage');
            const closeBtn = document.getElementById('closeModal');
            const prevBtn = document.getElementById('prevModalBtn');
            const nextBtn = document.getElementById('nextModalBtn');
            const currentIndexSpan = document.getElementById('modalCurrentIndex');
            const totalIndexSpan = document.getElementById('modalTotalIndex');
            const legalityItems = document.querySelectorAll('.legality-item');
            
            let currentModalIndex = 0;
            const totalItems = legalityItems.length;
            totalIndexSpan.textContent = totalItems;

            // Add CSS animations if not already in stylesheet
            if (!document.getElementById('zoomAnimations')) {
                const style = document.createElement('style');
                style.id = 'zoomAnimations';
                style.textContent = `
                    @keyframes fadeIn {
                        from {
                            opacity: 0;
                        }
                        to {
                            opacity: 1;
                        }
                    }
                    
                    @keyframes zoomIn {
                        from {
                            transform: scale(0.95);
                            opacity: 0;
                        }
                        to {
                            transform: scale(1);
                            opacity: 1;
                        }
                    }
                    
                    @keyframes fadeOut {
                        from {
                            opacity: 1;
                        }
                        to {
                            opacity: 0;
                        }
                    }
                    
                    @keyframes zoomOut {
                        from {
                            transform: scale(1);
                            opacity: 1;
                        }
                        to {
                            transform: scale(0.95);
                            opacity: 0;
                        }
                    }
                    
                    .animate-fade-in {
                        animation: fadeIn 0.3s ease-out;
                    }
                    
                    .animate-zoom-in {
                        animation: zoomIn 0.3s ease-out;
                    }
                `;
                document.head.appendChild(style);
            }

            // Function to open modal
            function openModal(index) {
                currentModalIndex = index;
                const item = legalityItems[currentModalIndex];
                const imageUrl = item.getAttribute('data-image');
                
                modalImage.src = imageUrl;
                currentIndexSpan.textContent = currentModalIndex + 1;
                
                modal.classList.remove('hidden');
                document.body.style.overflow = 'hidden'; // Prevent scrolling
            }

            // Function to close modal
            function closeModal() {
                modal.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Restore scrolling
            }

            // Function to show next image
            function showNext() {
                currentModalIndex = (currentModalIndex + 1) % totalItems;
                const item = legalityItems[currentModalIndex];
                const imageUrl = item.getAttribute('data-image');
                
                // Fade out effect
                modalImage.style.opacity = '0.5';
                
                setTimeout(() => {
                    modalImage.src = imageUrl;
                    currentIndexSpan.textContent = currentModalIndex + 1;
                    modalImage.style.opacity = '1';
                }, 150);
            }

            // Function to show previous image
            function showPrev() {
                currentModalIndex = (currentModalIndex - 1 + totalItems) % totalItems;
                const item = legalityItems[currentModalIndex];
                const imageUrl = item.getAttribute('data-image');
                
                // Fade out effect
                modalImage.style.opacity = '0.5';
                
                setTimeout(() => {
                    modalImage.src = imageUrl;
                    currentIndexSpan.textContent = currentModalIndex + 1;
                    modalImage.style.opacity = '1';
                }, 150);
            }

            // Event listeners for legality items (click to open modal)
            legalityItems.forEach((item, index) => {
                item.addEventListener('click', function() {
                    openModal(index);
                });
                
                // Also allow keyboard navigation on items
                item.addEventListener('keypress', function(e) {
                    if (e.key === 'Enter' || e.key === ' ') {
                        openModal(index);
                    }
                });
            });

            // Event listener for close button
            closeBtn.addEventListener('click', closeModal);

            // Event listeners for navigation buttons
            prevBtn.addEventListener('click', showPrev);
            nextBtn.addEventListener('click', showNext);

            // Close modal when clicking outside the modal content
            modal.addEventListener('click', function(e) {
                if (e.target === modal) {
                    closeModal();
                }
            });

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (modal.classList.contains('hidden')) {
                    return;
                }
                
                if (e.key === 'Escape') {
                    closeModal();
                } else if (e.key === 'ArrowLeft') {
                    showPrev();
                } else if (e.key === 'ArrowRight') {
                    showNext();
                }
            });

            // Swipe gesture support for modal
            let modalTouchStartX = 0;
            let modalTouchEndX = 0;

            modal.addEventListener('touchstart', function(e) {
                modalTouchStartX = e.changedTouches[0].screenX;
            }, false);

            modal.addEventListener('touchend', function(e) {
                modalTouchEndX = e.changedTouches[0].screenX;
                handleModalSwipe();
            }, false);

            function handleModalSwipe() {
                const swipeThreshold = 50;
                const diff = modalTouchStartX - modalTouchEndX;
                
                if (Math.abs(diff) > swipeThreshold) {
                    if (diff > 0) {
                        // Swiped left - next image
                        showNext();
                    } else {
                        // Swiped right - previous image
                        showPrev();
                    }
                }
            }

            // Prevent image drag
            modalImage.addEventListener('dragstart', function(e) {
                e.preventDefault();
            });
        });
    </script>
@endsection
