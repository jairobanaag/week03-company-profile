@extends('layouts.app')

@section('title', 'About')

@section('content')

<section class="text-center py-24 bg-gradient-to-br from-violet-950 via-violet-800 to-violet-500 text-white">
    <h1 class="text-4xl font-extrabold">About Nexora</h1>
    <p class="mt-3 text-violet-100">Why we started, and where we're headed.</p>
</section>

<section class="p-14 max-w-4xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-4 text-violet-800">Our History</h2>
    <p class="text-slate-600 leading-relaxed">
        Nexora started as a small team of developers who kept getting asked the same question by
        local business owners: "Can you build something like that for us?" What began as a handful
        of freelance projects grew into a full team, and today we work with startups and established
        companies alike who need software that's built right the first time.
    </p>
</section>

<section class="p-14 bg-violet-50">
    <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">
        <div class="bg-white p-8 rounded-xl shadow-sm border border-violet-100">
            <h3 class="text-xl font-bold mb-2 text-violet-700">Our Mission</h3>
            <p class="text-slate-600">To give growing businesses access to the same quality of technology that larger companies take for granted — without the overhead.</p>
        </div>
        <div class="bg-white p-8 rounded-xl shadow-sm border border-violet-100">
            <h3 class="text-xl font-bold mb-2 text-violet-700">Our Vision</h3>
            <p class="text-slate-600">To be the technology partner businesses come back to — known for work that's reliable, honest, and built to last.</p>
        </div>
    </div>
</section>

<section class="p-14 max-w-5xl mx-auto text-center">
    <h2 class="text-3xl font-bold mb-10 text-violet-800">Our Core Values</h2>
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="p-6 rounded-xl border border-violet-100 hover:shadow-lg hover:-translate-y-1 transition">
            <h4 class="font-semibold text-violet-700 mb-2">Integrity</h4>
            <p class="text-sm text-slate-500">We tell clients the truth, even when it's not what they want to hear.</p>
        </div>
        <div class="p-6 rounded-xl border border-violet-100 hover:shadow-lg hover:-translate-y-1 transition">
            <h4 class="font-semibold text-violet-700 mb-2">Innovation</h4>
            <p class="text-sm text-slate-500">We look for the better way, not just the familiar one.</p>
        </div>
        <div class="p-6 rounded-xl border border-violet-100 hover:shadow-lg hover:-translate-y-1 transition">
            <h4 class="font-semibold text-violet-700 mb-2">Excellence</h4>
            <p class="text-sm text-slate-500">Good enough isn't. We sweat the details clients never see.</p>
        </div>
        <div class="p-6 rounded-xl border border-violet-100 hover:shadow-lg hover:-translate-y-1 transition">
            <h4 class="font-semibold text-violet-700 mb-2">Teamwork</h4>
            <p class="text-sm text-slate-500">The best solutions come from people who actually talk to each other.</p>
        </div>
    </div>
</section>

<section class="p-14 bg-violet-50 text-center">
    <h2 class="text-3xl font-bold mb-10 text-violet-800">Meet the Team</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto">
        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100">
            <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-violet-200"></div>
            <h4 class="font-semibold text-violet-700">Jairo Banaag</h4>
            <p class="text-sm text-slate-500">Founder & Lead Developer</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100">
            <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-violet-200"></div>
            <h4 class="font-semibold text-violet-700">Team Member</h4>
            <p class="text-sm text-slate-500">Product Designer</p>
        </div>
        <div class="bg-white p-6 rounded-xl shadow-sm border border-violet-100">
            <div class="w-20 h-20 mx-auto mb-4 rounded-full bg-violet-200"></div>
            <h4 class="font-semibold text-violet-700">Team Member</h4>
            <p class="text-sm text-slate-500">Project Coordinator</p>
        </div>
    </div>
</section>

@endsection