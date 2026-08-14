@extends('layouts.app')

@section('title', 'About Us')

@section('content')

    <section class="text-center py-16 bg-blue-600 text-white">
        <h1 class="text-4xl font-bold">About MyCompany</h1>
        <p class="mt-4">Get to know who we are and what drives us forward.</p>
    </section>

    <section class="p-10 max-w-4xl mx-auto">
        <h2 class="text-2xl font-bold mb-4">Our History</h2>
        <p class="text-gray-700">
            MyCompany was founded with a simple goal: to help businesses thrive in the digital age.
            What started as a small team of passionate developers has grown into a trusted partner
            for companies looking to build their online presence and streamline their operations.
        </p>
    </section>

    <section class="p-10 bg-gray-100">
        <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                <h2 class="text-2xl font-bold mb-3">Our Mission</h2>
                <p class="text-gray-700">
                    To empower businesses with reliable, innovative, and affordable technology solutions
                    that drive real growth.
                </p>
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-3">Our Vision</h2>
                <p class="text-gray-700">
                    To be a leading technology partner recognized for excellence, integrity,
                    and client-focused innovation.
                </p>
            </div>
        </div>
    </section>

    <section class="p-10 max-w-4xl mx-auto text-center">
        <h2 class="text-2xl font-bold mb-6">Our Core Values</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Integrity</h3>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Innovation</h3>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Excellence</h3>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="font-semibold">Teamwork</h3>
            </div>
        </div>
    </section>

    <section class="p-10 bg-gray-100 text-center">
        <h2 class="text-2xl font-bold mb-6">Meet Our Team</h2>
        <p class="text-gray-700 max-w-2xl mx-auto">
            Our team is made up of dedicated developers, designers, and strategists who work together
            to bring every client's vision to life.
        </p>
    </section>

@endsection