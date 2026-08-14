@extends('layouts.app')

@section('title', 'Our Services')

@section('content')

    <section class="text-center py-16 bg-blue-600 text-white">
        <h1 class="text-4xl font-bold">Our Services</h1>
        <p class="mt-4">Comprehensive IT solutions tailored to your business needs.</p>
    </section>

    <section class="p-10 max-w-6xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">💻</div>
                <h3 class="font-semibold text-lg mb-2">Web Development</h3>
                <p class="text-gray-600 text-sm">
                    We build fast, responsive, and scalable websites tailored to your business goals.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">📱</div>
                <h3 class="font-semibold text-lg mb-2">Mobile Development</h3>
                <p class="text-gray-600 text-sm">
                    Native and cross-platform mobile apps designed for a seamless user experience.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">🎨</div>
                <h3 class="font-semibold text-lg mb-2">UI/UX Design</h3>
                <p class="text-gray-600 text-sm">
                    Clean, intuitive, and user-centered designs that elevate your product experience.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">☁️</div>
                <h3 class="font-semibold text-lg mb-2">Cloud Solutions</h3>
                <p class="text-gray-600 text-sm">
                    Scalable and secure cloud infrastructure to support your growing business.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="font-semibold text-lg mb-2">Cybersecurity</h3>
                <p class="text-gray-600 text-sm">
                    Protect your data and systems with our comprehensive security solutions.
                </p>
            </div>

            <div class="bg-white p-6 rounded shadow text-center">
                <div class="text-4xl mb-4">📊</div>
                <h3 class="font-semibold text-lg mb-2">IT Consulting</h3>
                <p class="text-gray-600 text-sm">
                    Expert guidance to help you make smart, strategic technology decisions.
                </p>
            </div>

        </div>
    </section>

@endsection