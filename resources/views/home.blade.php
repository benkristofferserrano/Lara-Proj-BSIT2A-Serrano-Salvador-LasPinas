@extends('layouts.app')
@section('title', "B&B | Bean & Ben's Café")
@push('styles')<link rel="stylesheet" href="{{ asset('css/home.css') }}">@endpush
@section('content')
<section class="hero-slider" aria-label="Café highlights">
    <div class="hero-slide active" style="--hero-image:url('{{ asset('images/cafe-exterior.jpg') }}')">
        <div class="hero-shade"></div><div class="hero-copy"><span class="eyebrow light">WELCOME TO BEN & BEAN'S CAFÉ</span><h1>From Better Coffee,<br><em>To Better Energy</em></h1><p>Thoughtfully brewed coffee, fresh favorites, and a welcoming place to slow down.</p><a class="button button-light" href="{{ route('menu') }}">Discover the menu <span>→</span></a></div>
    </div>
    <div class="hero-slide" style="--hero-image:url('{{ asset('images/cafe-interior-counter.png') }}')">
        <div class="hero-shade"></div><div class="hero-copy"><span class="eyebrow light">FRESHLY MADE, WARMLY SERVED</span><h1>A warm welcome<br>with <em>every cup.</em></h1><p>Step inside, find your favorite, and make yourself at home.</p><a class="button button-light" href="{{ route('about') }}">Our café story <span>→</span></a></div>
    </div>
    <div class="hero-slide" style="--hero-image:url('{{ asset('images/cafe-interior-seating.png') }}')">
        <div class="hero-shade"></div><div class="hero-copy"><span class="eyebrow light">YOUR PLACE TO PAUSE</span><h1>Stay awhile.<br><em>Enjoy the moment.</em></h1><p>A comfortable corner, good company, and something delicious to sip.</p><a class="button button-light" href="{{ route('contact') }}">Plan your visit <span>→</span></a></div>
    </div>
    <div class="hero-controls"><button class="hero-prev" aria-label="Previous slide">←</button><div class="hero-dots"><button class="active" aria-label="Slide 1"></button><button aria-label="Slide 2"></button><button aria-label="Slide 3"></button></div><button class="hero-next" aria-label="Next slide">→</button></div>
</section>
<section class="welcome-section section-wrap"><div class="welcome-image"><img src="{{ asset('images/cafe-interior-counter.png') }}" alt="Freshly prepared cup of coffee"><span class="image-note">BREWED FOR YOUR MOMENT</span></div><div class="welcome-copy"><span class="eyebrow">WELCOME TO B&B</span><h2>More than coffee.<br><em>It's your kind of place.</em></h2><p>At Bean & Ben's Café, we believe the best moments can start with a simple cup of coffee. Drop by for a familiar favorite, discover something new, and enjoy a little time for yourself.</p><a class="text-link" href="{{ route('about') }}">Get to know us <span>→</span></a></div></section>
<section class="favorites-section"><div class="section-wrap"><div class="section-heading"><div><span class="eyebrow">MADE TO BE YOUR FAVORITE</span><h2>A good day starts <em>here.</em></h2></div><a class="text-link" href="{{ route('menu') }}">View full menu <span>→</span></a></div><div class="favorite-grid"><article class="favorite-card"><img src="https://images.unsplash.com/photo-1461023058943-07fcbe16d735?auto=format&fit=crop&w=800&q=85" alt="Iced latte"><div><span>01 / THE CLASSICS</span><h3>Iced Latte</h3><p>Chilled espresso and smooth milk, made for an easy-going day.</p></div></article><article class="favorite-card"><img src="https://images.unsplash.com/photo-1570968915860-54d5c301fa9f?auto=format&fit=crop&w=800&q=85" alt="Cappuccino"><div><span>02 / THE COMFORTS</span><h3>Classic Cappuccino</h3><p>A balanced blend of espresso, steamed milk, and soft foam.</p></div></article><article class="favorite-card"><img src="https://images.unsplash.com/photo-1555507036-ab1f4038808a?auto=format&fit=crop&w=800&q=85" alt="Fresh pastry"><div><span>03 / THE LITTLE TREATS</span><h3>Freshly Baked</h3><p>A sweet little something to make your coffee break better.</p></div></article></div></div></section>
<section class="quote-band"><p>“A good cup can make an ordinary moment feel special.”</p><span>— THE B&B WAY</span></section>
<section class="visit-strip section-wrap"><div><span class="eyebrow">YOUR TABLE IS WAITING</span><h2>Come on in.<br><em>Stay a little.</em></h2></div><a class="button button-green" href="{{ route('contact') }}">Plan your visit <span>→</span></a></section>
@endsection
@push('scripts')<script src="{{ asset('js/home.js') }}" defer></script>@endpush
