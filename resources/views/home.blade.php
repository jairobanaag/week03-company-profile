@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <section class="text-center py-24 bg-blue-600 text-white">
        <h1 class="text-4xl font-bold">Welcome to MyCompany</h1>
        <p class="mt-4 text-lg">Innovative solutions for your business, built with passion and precision.</p>
        <a href="/contact" class="mt-6 inline-block bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">
            Get Started
        </a>
    </section>

    <section class="p-10 max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-4">About Us</h2>
        <p class="text-gray-700">
            MyCompany is a startup dedicated to delivering top-notch IT solutions to businesses of all sizes.
            We combine creativity, technology, and expertise to help our clients grow and succeed in the digital world.
        </p>
    </section>

    <section class="p-10 bg-gray-100">
        <h2 class="text-2xl font-bold mb-8 text-center">Featured Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Web Development</h3>
                <p class="text-gray-600 text-sm">Custom, responsive websites tailored to your business needs.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Mobile Development</h3>
                <p class="text-gray-600 text-sm">Native and cross-platform mobile apps for iOS and Android.</p>
            </div>
            <div class="bg-white p-6 rounded shadow text-center">
                <h3 class="font-semibold text-lg mb-2">Cloud Solutions</h3>
                <p class="text-gray-600 text-sm">Scalable cloud infrastructure to support your growth.</p>
            </div>
        </div>
    </section>

    <section class="text-center py-16 bg-blue-600 text-white">
        <h2 class="text-2xl font-bold mb-4">Ready to work with us?</h2>
        <a href="/contact" class="inline-block bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">
            Contact Us Today
        </a>
    </section>

@endsection