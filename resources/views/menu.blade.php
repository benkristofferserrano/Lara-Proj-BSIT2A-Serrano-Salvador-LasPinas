@extends('layouts.app')
@section('title', "Menu | B&B Café")
@push('styles')<link rel="stylesheet" href="{{ asset('css/menu.css') }}">@endpush
@section('content')
<section class="menu-banner"><div><span class="eyebrow light">A CUP FOR EVERY MOOD</span><h1>Find your<br><em>kind of good.</em></h1><p>Explore coffee favorites and little treats made for your day.</p></div></section>
<section class="menu-page section-wrap"><div class="menu-intro"><div><span class="eyebrow">THE B&B MENU</span><h2>What's brewing?</h2></div><label class="menu-search"><span>⌕</span><input id="menuSearch" type="search" placeholder="Search drinks and treats..." aria-label="Search menu"></label></div>
<div class="menu-category"><h3>COFFEE FAVORITES</h3><div class="menu-grid">
<article class="menu-item" data-search="iced latte espresso milk coffee"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Iced Latte</h4><p>Espresso and chilled milk over ice.</p><strong>₱___</strong></div></article>
<article class="menu-item" data-search="cappuccino espresso foam coffee"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Cappuccino</h4><p>Espresso, steamed milk, and soft foam.</p><strong>₱___</strong></div></article>
<article class="menu-item" data-search="americano black coffee espresso"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Americano</h4><p>Espresso with hot water, clean and bold.</p><strong>₱___</strong></div></article>
<article class="menu-item" data-search="mocha chocolate coffee milk"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Café Mocha</h4><p>Espresso and chocolate with creamy milk.</p><strong>₱___</strong></div></article>
</div></div>
<div class="menu-category"><h3>TEA & REFRESHERS</h3><div class="menu-grid"><article class="menu-item" data-search="iced tea lemon refresher"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Iced Tea</h4><p>A refreshing chilled tea favorite.</p><strong>₱___</strong></div></article><article class="menu-item" data-search="matcha green tea latte"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Matcha Latte</h4><p>Earthy matcha blended with creamy milk.</p><strong>₱___</strong></div></article></div></div>
<div class="menu-category"><h3>BAKED TREATS</h3><div class="menu-grid"><article class="menu-item" data-search="croissant pastry baked"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Butter Croissant</h4><p>Flaky, buttery, and freshly baked.</p><strong>₱___</strong></div></article><article class="menu-item" data-search="cookies chocolate dessert"><div class="menu-item-icon" aria-hidden="true">☕</div><div><h4>Chocolate Cookies</h4><p>A sweet bite with chocolate goodness.</p><strong>₱___</strong></div></article></div></div><p class="menu-note">Menu items, descriptions, and sample prices are placeholders. Update them to match your actual café menu.</p><p class="no-results" hidden>No menu items match your search.</p></section>
@endsection
@push('scripts')<script src="{{ asset('js/menu.js') }}" defer></script>@endpush
