<?php $__env->startSection('title', "Our Story | B&B Café"); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/about.css')); ?>?v=20261123-espresso-frame">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<section class="page-hero about-hero">
    <div>
        <span class="eyebrow light">A PLACE TO COME TOGETHER</span>
        <h1>Our story is<br><em>still brewing.</em></h1>
        <p>A café built around good coffee, warm welcomes, and the little moments in between.</p>
    </div>
</section>

<section class="story-section section-wrap">
    <div class="story-photo">
        <img src="<?php echo e(asset('images/cafe-interior-seating.png')); ?>" alt="Barista preparing coffee">
        <span>THE HEART OF B&B</span>
    </div>

    <div class="story-text">
        <span class="eyebrow">HOW IT STARTED</span>
        <h2>Rooted in coffee.<br><em>Made for people.</em></h2>

        <p>Bean & Ben's Café began with a simple idea: create a comfortable place where people can enjoy thoughtfully prepared drinks and feel welcome every time they visit.</p>

        <p>Whether you're catching up with friends, taking a study break, or enjoying a quiet moment, there's always a seat for you at B&B.</p>

        <p>We want every detail, from the first greeting to the final sip, to feel thoughtful and genuine. Our café is a celebration of everyday connections and the joy of sharing something good.</p>
    </div>
</section>

<section class="purpose-section">
    <div class="section-wrap purpose-grid">

        <article>
            <span class="eyebrow light">01 / OUR MISSION</span>
            <h2>Serve good coffee.<br><em>Share good moments.</em></h2>
            <p>To offer quality drinks and welcoming service in a comfortable space where every guest feels valued.</p>
        </article>

        <article>
            <span class="eyebrow light">02 / OUR VISION</span>
            <h2>A familiar place<br><em>for every day.</em></h2>
            <p>To become a loved neighborhood café known for meaningful connections, consistency, and memorable coffee experiences.</p>
        </article>

    </div>
</section>

<section class="team-section section-wrap">
    <div class="section-heading">
        <div>
            <span class="eyebrow">THE PEOPLE BEHIND THE BREW</span>
            <h2>Meet the <em>team.</em></h2>
        </div>
    </div>

    <div class="team-grid">

        <article>
            <div class="team-avatar">B</div>
            <h3>Ben</h3>
            <span>FOUNDER / PROJECT LEADER</span>
        </article>

        <article>
            <div class="team-avatar">J</div>
            <h3>Jhoel</h3>
            <span>WEB DESIGN & MENU DEVELOPMENT</span>
        </article>

        <article>
            <div class="team-avatar">A</div>
            <h3>Andrie</h3>
            <span>WEB DEVELOPMENT & CONTENT</span>
        </article>

    </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Bevs Serrano\Desktop\Laravel Projects\Lara-Proj-BSIT2A-Serrano-Salvador-LasPinas\resources\views/about.blade.php ENDPATH**/ ?>