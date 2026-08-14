@extends('layouts.app')

@section('title', 'Contact')

@section('content')

<section class="text-center py-24 bg-gradient-to-br from-violet-900 via-violet-700 to-violet-500 text-white">
    <h1 class="text-4xl font-extrabold">Contact Us</h1>
    <p class="mt-3 text-violet-100">We'd love to hear from you. Reach out anytime.</p>
</section>

<section class="p-14 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12">

    <div>
        <h2 class="text-2xl font-bold mb-6 text-violet-800">Send us a Message</h2>
        <form class="space-y-5">
            <div>
                <label class="block mb-1 font-medium text-slate-700">Name</label>
                <input type="text" placeholder="Your name"
                    class="w-full border border-violet-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500">
            </div>

            <div>
                <label class="block mb-1 font-medium text-slate-700">Email</label>
                <input type="email" placeholder="you@example.com"
                    class="w-full border border-violet-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500">
            </div>

            <div>
                <label class="block mb-1 font-medium text-slate-700">Message</label>
                <textarea rows="5" placeholder="Write your message here..."
                    class="w-full border border-violet-200 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-violet-500"></textarea>
            </div>

            <button type="submit"
                class="bg-violet-700 hover:bg-violet-800 text-white px-6 py-3 rounded-lg font-semibold transition">
                Send Message
            </button>
        </form>
    </div>

    <div>
        <h2 class="text-2xl font-bold mb-6 text-violet-800">Get in Touch</h2>

        <p class="mb-4 text-slate-600">
            <span class="font-semibold text-violet-700">Address:</span> 123 Main Street, Makati City, Philippines
        </p>

        <p class="mb-4 text-slate-600">
            <span class="font-semibold text-violet-700">Email:</span> info@mycompany.com
        </p>

        <p class="mb-6 text-slate-600">
            <span class="font-semibold text-violet-700">Phone:</span> 0912-345-6789
        </p>

        <div class="rounded-xl overflow-hidden border border-violet-100 shadow-sm">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9!2d121.02!3d14.5547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTTCsDMzJzE2LjkiTiAxMjHCsDAxJzEyLjAiRQ!5e0!3m2!1sen!2sph!4v1700000000000"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
            </iframe>
        </div>

        <div class="flex gap-4 mt-6">
            <a href="#" class="text-violet-700 hover:text-violet-900 font-medium">Facebook</a>
            <a href="#" class="text-violet-700 hover:text-violet-900 font-medium">Instagram</a>
            <a href="#" class="text-violet-700 hover:text-violet-900 font-medium">LinkedIn</a>
        </div>
    </div>

</section>

@endsection