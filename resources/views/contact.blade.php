@extends('layouts.app')

@section('content')

<section class="contact">

    <h1>Contact Us</h1>

    <form id="contactForm">

        <input type="text" id="name" placeholder="Full Name">

        <input type="email" id="email" placeholder="Email Address">

        <input type="text" id="subject" placeholder="Subject">

        <textarea id="message" placeholder="Message"></textarea>

        <button type="submit">
            Send Message
        </button>

    </form>

    <p id="result"></p>

    <div class="details">

        <h3>Contact Details</h3>

        <p>📍 Butuan City</p>

        <p>📞 +63 912 345 6789</p>

        <p>✉ benandbean@gmail.com</p>

    </div>

</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush