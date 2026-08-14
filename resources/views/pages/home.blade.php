@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="text-center py-28 bg-gradient-to-br from-violet-950 via-violet-800 to-violet-500 text-white">
    <p class="uppercase tracking-widest text-violet-300 text-sm mb-4">Technology Partner for Growing Businesses</p>
    <h1 class="text-5xl font-extrabold tracking-tight">Building Technology <br> That Moves You Forward</h1>
    <p class="mt-4 text-lg text-violet-100 max-w-xl mx-auto">We turn ambitious ideas into reliable software — from web platforms to cloud infrastructure.</p>
    <a href="/contact" class="mt-8 inline-block bg-white text-violet-700 px-8 py-3 rounded-full font-semibold shadow-lg hover:bg-violet-100 hover:scale-105 transition">
        Start a Project
    </a>
</section>

<section class="p-14 max-w-4xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4 text-violet-800">About Nexora</h2>
    <p class="text-slate-600 leading-relaxed">
        Nexora is a technology partner for businesses ready to grow. We combine strategy, design,
        and engineering to build products that don't just launch — they keep working, scale with you,
        and earn the trust of the people who use them.
    </p>
</section>

<section class="p-14 bg-violet-50">
    <h2 class="text-3xl font-bold mb-10 text-center text-violet-800">Featured Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">💻</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Web Development</h3>
            <p class="text-slate-500 text-sm">Fast, responsive websites and platforms built around how your business actually works.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">📱</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Mobile Development</h3>
            <p class="text-slate-500 text-sm">Native and cross-platform apps designed for real people on real devices.</p>
        </div>

        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100 text-center hover:shadow-lg hover:-translate-y-1 transition">
            <div class="w-14 h-14 mx-auto mb-4 rounded-full bg-violet-100 flex items-center justify-center text-2xl">☁️</div>
            <h3 class="font-semibold text-lg mb-2 text-violet-700">Cloud Solutions</h3>
            <p class="text-slate-500 text-sm">Infrastructure that scales quietly in the background so you don't have to think about it.</p>
        </div>

    </div>
</section>

@endsection