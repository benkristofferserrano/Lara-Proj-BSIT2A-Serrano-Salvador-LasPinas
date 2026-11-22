@extends('layouts.app')
@section('title', "Menu | B&B CafÃ©")
@push('styles')
<link rel="stylesheet" href="{{ asset('css/menu.css') }}?v=20261122-photo-pairs-dark-text-clean">
@endpush

@section('content')
<section class="menu-banner">
    <div>
        <span class="eyebrow light">A CUP FOR EVERY MOOD</span>
        <h1>Find your<br><em>kind of good.</em></h1>
        <p>Explore coffee favorites and little treats made for your day.</p>
    </div>
</section>

<section class="menu-page section-wrap">
    <div class="menu-intro">
        <div>
            <span class="eyebrow">THE B&amp;B MENU</span>
            <h2>What's brewing?</h2>
            <p class="menu-subtitle">Freshly made favorites, ready to enjoy your way.</p>
        </div>
        <label class="menu-search">
            <span aria-hidden="true">âŒ•</span>
            <input id="menuSearch" type="search" placeholder="Search drinks and treats..." aria-label="Search menu">
        </label>
    </div>

    <div class="menu-category">
        <div class="category-heading"><h3>COFFEE FAVORITES</h3><span>01</span></div>
        <div class="menu-grid">
            <article class="menu-item" data-search="iced latte espresso milk coffee">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in iced latte.jfif') }}" alt="Iced Latte served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out iced latte.jfif') }}" alt="Iced Latte served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">COFFEE Â· ICED</span><h4>Iced Latte</h4><p>Espresso and chilled milk over ice.</p><strong>₱120</strong></div>
            </article>
            <article class="menu-item" data-search="cappuccino espresso foam coffee">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in cappuccino.jfif') }}" alt="Cappuccino served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out cappuccino.jfif') }}" alt="Cappuccino served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">COFFEE Â· HOT</span><h4>Cappuccino</h4><p>Espresso, steamed milk, and soft foam.</p><strong>₱115</strong></div>
            </article>
            <article class="menu-item" data-search="americano black coffee espresso">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine inamericano.jfif') }}" alt="Americano served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out americano.jfif') }}" alt="Americano served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">COFFEE Â· HOT</span><h4>Americano</h4><p>Espresso with hot water, clean and bold.</p><strong>₱95</strong></div>
            </article>
            <article class="menu-item" data-search="mocha chocolate coffee milk cafe">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in cafe mocha.jfif') }}" alt="Cafe Mocha served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out cafe mocha.jfif') }}" alt="Cafe Mocha served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">COFFEE Â· SIGNATURE</span><h4>CafÃ© Mocha</h4><p>Espresso and chocolate with creamy milk.</p><strong>₱130</strong></div>
            </article>
        </div>
    </div>

    <div class="menu-category">
        <div class="category-heading"><h3>TEA &amp; REFRESHERS</h3><span>02</span></div>
        <div class="menu-grid">
            <article class="menu-item" data-search="iced tea lemon refresher tea">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in tea.jfif') }}" alt="Iced Tea served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out tea.jfif') }}" alt="Iced Tea served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">TEA Â· CHILLED</span><h4>Iced Tea</h4><p>A refreshing chilled tea favorite.</p><strong>₱75</strong></div>
            </article>
            <article class="menu-item" data-search="matcha green tea latte">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in matcha.jfif') }}" alt="Matcha Latte served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>GLASS</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out macha.jfif') }}" alt="Matcha Latte served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>PLASTIC</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">TEA Â· LATTE</span><h4>Matcha Latte</h4><p>Earthy matcha blended with creamy milk.</p><strong>₱130</strong></div>
            </article>
        </div>
    </div>

    <div class="menu-category">
        <div class="category-heading"><h3>BAKED TREATS</h3><span>03</span></div>
        <div class="menu-grid">
            <article class="menu-item" data-search="croissant pastry baked butter">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in crossant.jfif') }}" alt="Butter Croissant served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>PLATE</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out crossant.jfif') }}" alt="Butter Croissant served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>BOX</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">BAKED FRESH</span><h4>Butter Croissant</h4><p>Flaky, buttery, and freshly baked.</p><strong>₱85</strong></div>
            </article>
            <article class="menu-item" data-search="cookies chocolate dessert baked">
                <div class="menu-photos">
    <div class="menu-photo-placeholder">
        <img class="menu-photo-image" src="{{ asset('images/menu/dine in cookie.jfif') }}" alt="Chocolate Cookies served dine in" loading="lazy">
        <span class="photo-caption">DINE IN</span>
        <small>PLATE</small>
    </div>
    <div class="menu-photo-placeholder takeaway">
        <img class="menu-photo-image" src="{{ asset('images/menu/take out cookies.jfif') }}" alt="Chocolate Cookies served takeout" loading="lazy">
        <span class="photo-caption">TAKE OUT</span>
        <small>CONTAINER</small>
    </div>
</div>
                <div class="menu-item-copy"><span class="item-kicker">SWEET TREATS</span><h4>Chocolate Cookies</h4><p>A sweet bite with chocolate goodness.</p><strong>₱65</strong></div>
            </article>
        </div>
    </div>

    <p class="no-results" hidden>No menu items match your search. Try another drink or treat.</p>
</section>
@endsection

@push('scripts')
<script src="{{ asset('js/menu.js') }}?v=20261122-photo-pairs-dark-text-clean" defer></script>
@endpush



