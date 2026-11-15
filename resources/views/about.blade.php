@extends('layouts.app')

@section('content')

<section class="about">

    <h1>About Ben & Bean Cafe</h1>

    <p>
        Ben & Bean Cafe is dedicated to delivering quality coffee and excellent customer service.
    </p>

    <p id="extraText" style="display:none;">
        Started as a small local coffee shop, Ben & Bean Cafe grew into a favorite destination for coffee lovers.
        We focus on creating a welcoming environment where customers can relax, study, and enjoy handcrafted beverages.
    </p>

    <button id="readBtn">
        Read More
    </button>

    <h2>Mission</h2>

    <p>
        To serve exceptional coffee and create memorable experiences for every customer.
    </p>

    <h2>Vision</h2>

    <p>
        To become the leading neighborhood cafe known for quality products and outstanding hospitality.
    </p>

    <div class="team">

        <div class="staff">
            <h3>Benjamin Cruz</h3>
            <p>Founder</p>
        </div>

        <div class="staff">
            <h3>Sophia Reyes</h3>
            <p>Manager</p>
        </div>

        <div class="staff">
            <h3>Daniel Santos</h3>
            <p>Head Barista</p>
        </div>

    </div>

</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/about.js') }}"></script>
@endpush