@extends('layout.app')

@section('title', 'Home Page')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-500 to-teal-500 text-white py-20">
    <div class="container mx-auto px-6 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-bold mb-4">Selamat Datang di Layanan Kami</h1>
        <p class="text-lg md:text-xl mb-8">Kami menyediakan solusi terbaik untuk kebutuhan Anda dengan teknologi mutakhir.</p>
        <a href="#services" class="bg-white text-blue-500 py-3 px-6 rounded-lg font-semibold hover:bg-gray-200 transition duration-300">
            Mulai Sekarang
        </a>
    </div>
</section>
<!-- Features Section -->
<section id="services" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Fitur Unggulan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <h3 class="text-2xl font-semibold mb-2">Cepat dan Responsif</h3>
                <p class="text-gray-600">Akses layanan kami dengan cepat dan dapatkan hasil instan.</p>
            </div>
            <!-- Feature 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <h3 class="text-2xl font-semibold mb-2">Aman dan Terpercaya</h3>
                <p class="text-gray-600">Data Anda aman bersama kami, dilindungi dengan enkripsi terbaru.</p>
            </div>
            <!-- Feature 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <svg class="w-12 h-12 text-blue-500 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path d="M12 8v4l3 3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                </svg>
                <h3 class="text-2xl font-semibold mb-2">Dukungan Pelanggan</h3>
                <p class="text-gray-600">Tim kami selalu siap membantu Anda 24/7.</p>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials Section -->
<section id="testimonials" class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-8">Apa Kata Pelanggan Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="p-6 border rounded-lg shadow-lg">
                <p class="text-gray-600 mb-4">"Layanan ini sangat membantu dan mudah digunakan. Sangat direkomendasikan!"</p>
                <h4 class="text-xl font-semibold">- Andi, CEO Perusahaan A</h4>
            </div>
            <!-- Testimonial 2 -->
            <div class="p-6 border rounded-lg shadow-lg">
                <p class="text-gray-600 mb-4">"Tim supportnya luar biasa cepat dan sangat membantu!"</p>
                <h4 class="text-xl font-semibold">- Budi, Pengusaha</h4>
            </div>
            <!-- Testimonial 3 -->
            <div class="p-6 border rounded-lg shadow-lg">
                <p class="text-gray-600 mb-4">"Saya merasa aman dengan layanan yang diberikan. Hasilnya pun memuaskan."</p>
                <h4 class="text-xl font-semibold">- Siti, Manager IT</h4>
            </div>
        </div>
    </div>
</section>

@endsection