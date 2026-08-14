@extends('layouts.app')

@section('title', 'Services')

@section('content')

<section class="text-center py-24 bg-gradient-to-br from-violet-900 via-violet-700 to-violet-500 text-white">
    <h1 class="text-4xl font-extrabold">Our Services</h1>
    <p class="mt-3 text-violet-100">Comprehensive IT solutions tailored to your business needs.</p>
</section>

<section class="p-14 max-w-5xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">💻</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Web Development</h3>
            <p class="text-slate-500 text-sm">We build fast, responsive, and scalable websites tailored to your business goals.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">📱</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Mobile Development</h3>
            <p class="text-slate-500 text-sm">Native and cross-platform mobile apps designed for a seamless user experience.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">🎨</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">UI/UX Design</h3>
            <p class="text-slate-500 text-sm">Clean, intuitive, and user-centered designs that elevate your product experience.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">☁️</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Cloud Solutions</h3>
            <p class="text-slate-500 text-sm">Scalable and secure cloud infrastructure to support your growing business.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">🔒</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Cybersecurity</h3>
            <p class="text-slate-500 text-sm">Protect your data and systems with our comprehensive security solutions.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">📊</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">IT Consulting</h3>
            <p class="text-slate-500 text-sm">Expert guidance to help you make smart, strategic technology decisions.</p>
        </div>

    </div>
</section>

@endsection