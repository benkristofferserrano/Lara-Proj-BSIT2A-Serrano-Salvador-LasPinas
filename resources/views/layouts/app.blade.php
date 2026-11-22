<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bean & Ben's Café — thoughtfully brewed coffee, fresh bites, and good moments.">
    <title>@yield('title', "B&B | Bean & Ben's Café")</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=20261122-green">
    @stack('styles')
</head>
<body>
    <header class="site-header">
        <a class="brand" href="{{ route('home') }}" aria-label="B&B home">
            <img class="brand-logo" src="{{ asset('images/bb-logo.png') }}" alt="B&B — Bean & Ben's Café">
        </a>
        <button class="nav-toggle" type="button" aria-label="Toggle navigation" aria-expanded="false">☰</button>
        <nav class="main-nav" aria-label="Main navigation">
            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
            <a class="{{ request()->routeIs('menu') ? 'active' : '' }}" href="{{ route('menu') }}">Menu</a>
            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">About</a>
            <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
        </nav>
        <button class="theme-toggle" type="button" aria-label="Light mode is active. Click to switch to dark mode." title="Light mode"><span class="theme-icon" aria-hidden="true">🔆</span><span class="theme-label">Light mode</span></button>
    </header>

    <main>
        @yield('content')
        <section class="storefront-visit" aria-label="Visit Bean and Ben's Café">
            <div class="storefront-frame">
                <img src="{{ asset('images/cafe-exterior.jpg') }}" alt="Exterior of Bean & Ben's Café with outdoor seating">
                <span class="frame-label">THE B&B CAFÉ EXPERIENCE</span>
            </div>
            <div class="storefront-copy">
                <span class="eyebrow">COME FIND YOUR PLACE</span>
                <h2>Your next coffee break<br><em>starts right here.</em></h2>
                <p>Visit Bean & Ben's Café in Butuan City, Agusan del Norte, Philippines. Drop by for a cup, a bite, and a little time well spent.</p>
                <a class="button button-green" href="https://www.google.com/maps/search/?api=1&query=Butuan+City%2C+Agusan+del+Norte%2C+Philippines" target="_blank" rel="noopener">View area on map <span>↗</span></a>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="footer-main">
            <div class="footer-brand">
                <img class="footer-logo" src="{{ asset('images/bb-logo.png') }}" alt="B&B — Bean & Ben's Café">
                <h2>Better Coffee.<br>Better Energy.</h2>
            </div>
            <div><h3>Explore</h3><a href="{{ route('home') }}">Home</a><a href="{{ route('menu') }}">Menu</a><a href="{{ route('about') }}">About</a><a href="{{ route('contact') }}">Contact</a></div>
            <div><h3>Visit us</h3><p>Butuan City, Agusan del Norte<br>Philippines</p><p>Daily · 8:00 AM – 8:00 PM</p></div>
            <div><h3>CONTACT US</h3><p><a href="mailto:officialbeanandbenscafe@gmail.com">officialbeanandbenscafe@gmail.com</a></p><p>Follow us on social media</p><div class="social-links">
                <a href="#" aria-label="Instagram" class="social-name">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="3.5" y="3.5" width="17" height="17" rx="5" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="12" cy="12" r="4" fill="none" stroke="currentColor" stroke-width="1.8"/><circle cx="17.6" cy="6.7" r="1.1" fill="currentColor"/></svg><span>INSTAGRAM</span>
                </a>
                <a href="#" aria-label="Facebook" class="social-name">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path fill="currentColor" d="M13.5 21v-8h2.7l.4-3.1h-3.1V8c0-.9.3-1.5 1.6-1.5h1.7V3.7c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3v2H7.3V13h2.8v8h3.4z"/></svg><span>FACEBOOK</span>
                </a>
            </div></div>
        </div>
        <div class="footer-bottom"><span>© {{ date('Y') }} B&B — Bean & Ben's Café</span></div>
        <div class="footer-team"><strong>Group Members:</strong> Serrano, Salvador, Las Piñas</div>
    </footer>
    <script src="{{ asset('js/app.js') }}?v=20261122-green" defer></script>
    @stack('scripts')
</body>
</html>
