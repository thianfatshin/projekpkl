<!-- resources/views/landing.blade.php -->
@extends('layout.app')

@section('title', 'Welcome to Our Website')

@section('content')
<div class="bg-white">
    <div class="container mx-auto px-6 py-16 text-center">
        <h1 class="text-5xl font-bold text-gray-800">Welcome to Our Website</h1>
        <p class="text-gray-600 mt-4">Discover our amazing services and products tailored just for you.</p>
        <a href="#services" class="mt-8 inline-block bg-blue-500 text-white py-3 px-6 rounded-full hover:bg-blue-400">
            Get Started
        </a>
    </div>
</div>

<div id="about" class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold text-gray-800">About Us</h2>
    <p class="text-gray-600 mt-4">We are a team dedicated to providing the best solutions for your needs.</p>
</div>

<div id="services" class="bg-gray-100 py-16">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold text-gray-800">Our Services</h2>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold">Service One</h3>
                <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <!-- Service 2 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold">Service Two</h3>
                <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <!-- Service 3 -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold">Service Three</h3>
                <p class="mt-4 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>
</div>

<div id="contact" class="container mx-auto px-6 py-16 text-center">
    <h2 class="text-3xl font-bold text-gray-800">Contact Us</h2>
    <p class="text-gray-600 mt-4">Feel free to reach out for any inquiries or questions.</p>
    <a href="mailto:contact@website.com" class="mt-8 inline-block bg-blue-500 text-white py-3 px-6 rounded-full hover:bg-blue-400">
        Contact Us
    </a>
</div>
@endsection
