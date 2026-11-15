@extends('layouts.app')

@section('content')

<section class="hero">

    <h1>Welcome to Ben & Bean Cafe</h1>

    <p>
        Brewing happiness one cup at a time.
    </p>

    <button id="themeBtn">
        Toggle Dark Mode
    </button>

</section>

<section class="features">

    <div class="card">
        <h2>Premium Coffee</h2>
        <p>Made from quality coffee beans.</p>
    </div>

    <div class="card">
        <h2>Fresh Pastries</h2>
        <p>Freshly baked every day.</p>
    </div>

    <div class="card">
        <h2>Cozy Atmosphere</h2>
        <p>Perfect for studying and meetings.</p>
    </div>

</section>

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endpush

@push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush