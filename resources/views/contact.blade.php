@extends('layouts.app')
@section('title','Contact Us')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">

<!-- ======================== PAGE HEADER ======================== -->
<div class="page-header contact-page-header">
    <div class="container">
        <h1 class="animate-fade-up">Let's talk <span>business.</span></h1>
        <p class="contact-hero-copy">Tell us what you need. Our team will help you find the right software solution.</p>
        <ul class="breadcrumb animate-fade-up delay-1">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>/</li>
            <li class="active">Contact Us</li>
        </ul>
    </div>
</div>

<!-- ======================== 1. CONTACT INFO CARDS ======================== -->
<section class="section-padding">
    <div class="container">
        <div class="contact-info-grid">

            <!-- Card 1: Phone -->
            <div class="contact-info-card animate-on-scroll">
                <img src="https://images.unsplash.com/photo-1523966211575-eb4a01e7dd51?q=80&w=1710&auto=format&fit=crop"
                    class="card-img" alt="Call Us">
                <div class="contact-info-body">
                    <div class="icon"><i class="fas fa-phone-alt"></i></div>
                    <div class="contact-info-content">
                        <h3>Call us any time!</h3>
                        <p><a href="tel:+917069300077">+91 7069300077</a></p>
                        <p class="contact-info-note">Mon-Fri, 9:00 AM-6:00 PM</p>
                    </div>
                </div>
            </div>

            <!-- Card 2: Email -->
            <div class="contact-info-card animate-on-scroll delay-1">
                <img src="https://images.unsplash.com/photo-1596526131083-e8c633c948d2?q=80&w=1548&auto=format&fit=crop"
                    class="card-img" alt="Email Us">
                <div class="contact-info-body">
                    <div class="icon"><i class="fas fa-envelope-open-text"></i></div>
                    <div class="contact-info-content">
                        <h3>Send us e-mail</h3>
                        <p><a href="mailto:sales@dhronixtech.in">sales@dhronixtech.in</a></p>
                        <p style="margin-top:4px;"><a
                                href="mailto:support@dhronixtech.in">support@dhronixtech.in</a></p>
                    </div>
                </div>
            </div>

            <!-- Card 3: Address -->
            <div class="contact-info-card animate-on-scroll delay-2">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1470&auto=format&fit=crop"
                    class="card-img" alt="Our Office">
                <div class="contact-info-body">
                    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="contact-info-content">
                        <h3>Dhronix Tech Address</h3>
                        <p>Dhronix Bharat Technologies Pvt. Ltd., India – 302001</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ======================== 2. CONTACT FORM SECTION ======================== -->
<section class="section-padding contact-form-section">
    <div class="container contact-flex">

        <!-- Left: Image -->
        <div class="contact-form-img animate-on-scroll">
            <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop"
                alt="Contact Dhronix Tech">
            <div class="contact-image-caption">
                <span>YOUR NEXT STEP</span>
                <strong>Let's build a smarter way to work.</strong>
            </div>
        </div>

        <!-- Right: Form -->
        <div class="contact-form-copy animate-on-scroll delay-1">
            <span class="sub-heading">CONTACT US</span>
            <h2 class="contact-form-title">
                Get in Touch <br><span class="highlight">with Us</span>
            </h2>
            <p class="contact-form-intro">
                Have questions or need assistance? Reach out to us today! We're here to provide expert IT solutions
                and friendly support for all your software needs.
            </p>

            <form id="contactForm">
                <div class="form-row">
                    <div class="form-group">
                        <label for="contactFirstName">First Name</label>
                        <input id="contactFirstName" name="firstName" type="text" class="form-control" placeholder="Rahul" autocomplete="given-name" required>
                    </div>
                    <div class="form-group">
                        <label for="contactLastName">Last Name</label>
                        <input id="contactLastName" name="lastName" type="text" class="form-control" placeholder="Sharma" autocomplete="family-name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="contactPhone">Phone Number</label>
                        <input id="contactPhone" name="phone" type="tel" class="form-control" placeholder="+91 9876543210" autocomplete="tel" required>
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">Email Address</label>
                        <input id="contactEmail" name="email" type="email" class="form-control" placeholder="you@example.com" autocomplete="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="contactMessage">How can we help?</label>
                    <textarea id="contactMessage" name="message" class="form-control" rows="5"
                        placeholder="Tell us about your project or query..." required></textarea>
                </div>
                <button type="submit" class="btn-submit">
                    <i class="fas fa-paper-plane" aria-hidden="true"></i> Send Message
                </button>
                <p class="form-success" id="formSuccess" role="status" aria-live="polite"></p>
            </form>
        </div>
    </div>
</section>

<!-- ======================== 3. GOOGLE MAP ======================== -->
<div class="google-map-wrapper">
    <iframe
        src="https://maps.google.com/maps?width=1200&height=450&hl=en&q=Dhronix+Bharat+Technologies,+India&t=&z=12&ie=UTF8&iwloc=B&output=embed"
        allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>

<script src="{{ asset('assets/js/contact.js') }}"></script>

@endsection