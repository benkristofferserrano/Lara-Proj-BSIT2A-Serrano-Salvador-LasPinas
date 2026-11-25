<?php $__env->startSection('title', 'Contact | B&B Café'); ?>

<?php $__env->startSection('content'); ?>

<section class="contact-hero">

    <div class="hero-content">

        <p class="subtitle">WE WOULD LOVE TO HEAR FROM YOU</p>

        <h1>
            <em>Share</em><br>
            <em>Your Thoughts</em>
        </h1>

        <p class="description">
            Have a question or want to share something?
            We'd love to hear from you.
        </p>

        <div class="contact-info">
            <p>📍 Butuan City</p>
            <p>📞 +63 912 345 6789</p>
            <p>✉ officialbeanandbenscafe@gmail.com</p>
        </div>

    </div>

    <div class="contact-form-box">

        <h2>Get in Touch</h2>
        <p>We'd love to hear from you.</p>

       <form id="contactForm"> 
<div class="form-group">
    <label for="name">Full Name</label>
  <input type="text" id="name" placeholder="Full Name" aria-describedby="nameError">

    <small id="nameError" class="error"></small>
</div>

<div class="form-group">
    <label for="email">Email Address</label>
    <input type="email" id="email" placeholder="Email Address" aria-describedby="emailError">

    <small id="emailError" class="error"></small>
</div>

<div class="form-group">
    <label for="subject">Subject</label>
<input type="text" id="subject" placeholder="Subject" aria-describedby="subjectError">
    <small id="subjectError" class="error"></small>
</div>

<div class="form-group">
    <label for="message">Your Message</label>
    <textarea id="message" placeholder="Your Message" aria-describedby="messageError"></textarea>
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

<?php $__env->stopSection(); ?>

<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/contact.css')); ?>?v=20261123-share-white">
<?php $__env->stopPush(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('js/contact.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\Bevs Serrano\Desktop\Laravel Projects\Lara-Proj-BSIT2A-Serrano-Salvador-LasPinas\resources\views/contact.blade.php ENDPATH**/ ?>