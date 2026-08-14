@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

    <section class="text-center py-16 bg-blue-600 text-white">
        <h1 class="text-4xl font-bold">Contact Us</h1>
        <p class="mt-4">We'd love to hear from you. Reach out anytime.</p>
    </section>

    <section class="p-10 max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10">

        <div>
            <h2 class="text-2xl font-bold mb-4">Send us a Message</h2>
            <form class="space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                    <input type="text" placeholder="Your name" class="w-full border border-gray-300 rounded px-4 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" placeholder="you@example.com" class="w-full border border-gray-300 rounded px-4 py-2">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                    <textarea rows="5" placeholder="Write your message here..." class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
                </div>
                <button type="button" class="bg-blue-600 text-white px-6 py-3 rounded font-semibold hover:bg-blue-700">
                    Send Message
                </button>
            </form>
        </div>

        <div>
            <h2 class="text-2xl font-bold mb-4">Get in Touch</h2>
            <div class="space-y-4 text-gray-700">
                <p><strong>Address:</strong> 123 Main Street, Makati City, Philippines</p>
                <p><strong>Email:</strong> info@mycompany.com</p>
                <p><strong>Phone:</strong> 0912-345-6789</p>
            </div>

            <div class="mt-6">
                <iframe
                    src="https://maps.google.com/maps?q=Makati%20City&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    class="w-full h-64 rounded border"
                    loading="lazy">
                </iframe>
            </div>

            <div class="mt-6">
                <h3 class="font-semibold mb-2">Follow Us</h3>
                <p class="text-gray-700">Facebook | Instagram | LinkedIn</p>
            </div>
        </div>

    </section>

@endsection