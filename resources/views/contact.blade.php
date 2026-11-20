@extends('layouts.app')

@section('content')

<section class="contact-hero">

    <div class="hero-content">

        <p class="subtitle">A LITTLE PAUSE, A LOT OF GOOD</p>

        <h1>
            Your daily cup<br>
            of something <em>good.</em>
        </h1>

        <p class="description">
            Have a question or want to share something?
            We'd love to hear from you.
        </p>

        <div class="contact-info">
            <p>📍 Butuan City</p>
            <p>📞 +63 912 345 6789</p>
            <p>✉ benandbean@gmail.com</p>
        </div>

    </div>

    <div class="contact-form-box">

        <h2>Get in Touch</h2>
        <p>We'd love to hear from you.</p>

        
<form id="contactForm">

    <div class="form-group">
        <input type="text" id="name" placeholder="Full Name">
        <small id="nameError" class="error"></small>
    </div>

    <div class="form-group">
        <input type="email" id="email" placeholder="Email Address">
        <small id="emailError" class="error"></small>
    </div>

    <div class="form-group">
        <input type="text" id="subject" placeholder="Subject">
        <small id="subjectError" class="error"></small>
    </div>

    <div class="form-group">
        <textarea id="message" placeholder="Your Message"></textarea>
        <small id="messageError" class="error"></small>
    </div>

    <button type="submit">
        Send Message →
    </button>

</form>

<p id="successMessage" hidden>
    Thank you! Your message has been validated successfully.
</p>

    </div>

</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/contact.js') }}"></script>
@endpush
