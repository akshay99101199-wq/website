@extends('layouts.app')
@section('title', 'Mobile Apps | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--mobile-apps">
<section class="service-page-hero service-page-hero--mobile-apps">
        <div class="container">
            <div class="service-hero-inner">
                <div class="service-hero-content animate-fade-up">
                    <ul class="breadcrumb-row">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li>Mobile Apps</li>
                    </ul>
                    <div class="hero-icon-badge"><i class="fas fa-mobile-alt"></i></div>
                    <span class="sub-heading">MOBILE APP DEVELOPMENT</span>
                    <h1>Native iOS & Android <span style="color:var(--secondary-color)">App</span> Development</h1>
                    <p>Dhronix builds high-performance, beautifully designed native mobile applications for Android and
                        iOS. From concept to App Store — we deliver apps that users love and businesses rely on.</p>
                    <div class="hero-btns-row">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket"
                                style="margin-right:8px;"></i>Get a Free Quote</a>
                        <a href="{{ route('services') }}" class="btn btn-dark-solid"
                            style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i
                                class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                    </div>
                </div>
                <div class="service-hero-img animate-fade-up delay-2"><img
                        src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=1470&auto=format&fit=crop"
                        alt="Mobile Apps"></div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center animate-on-scroll"><span class="sub-heading">KEY FEATURES</span>
                <h2>End-to-End Mobile App Development Services</h2>
            </div>
            <div class="features-grid-2">
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fab fa-android"></i></div>
                    <div>
                        <h4>Android App Development</h4>
                        <p>Native Android apps in Kotlin/Java with Material Design, optimized for all screen sizes and
                            Android versions.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fab fa-apple"></i></div>
                    <div>
                        <h4>iOS App Development</h4>
                        <p>Native iOS apps in Swift with Apple Human Interface Guidelines, ready for App Store
                            submission and review.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-2">
                    <div class="f-icon"><i class="fas fa-layer-group"></i></div>
                    <div>
                        <h4>Cross-Platform (Flutter)</h4>
                        <p>Build once, deploy everywhere with Flutter. Same codebase for Android & iOS with native
                            performance and feel.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-3">
                    <div class="f-icon"><i class="fas fa-plug"></i></div>
                    <div>
                        <h4>API & Backend Integration</h4>
                        <p>Seamless integration with REST APIs, Firebase, payment gateways, maps, social logins, and
                            third-party services.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-paint-brush"></i></div>
                    <div>
                        <h4>UI/UX Design</h4>
                        <p>User-centered design with wireframing, prototyping, and pixel-perfect UI that maximizes
                            engagement and retention.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-tools"></i></div>
                    <div>
                        <h4>Testing & Maintenance</h4>
                        <p>Rigorous QA testing, crash reporting setup, app store optimization, and ongoing maintenance
                            packages.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container side-section">
            <div class="animate-on-scroll">
                <span class="sub-heading">HOW IT WORKS</span>
                <h2 style="font-size:38px;margin-bottom:10px;">From Idea to <br><span class="highlight">App Store in
                        Weeks</span></h2>
                <p style="margin-bottom:30px;">Our agile development process ensures fast delivery without compromising
                    quality.</p>
                <div class="steps-list">
                    <div class="step-row">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Discovery & Planning</h4>
                            <p>We analyze your requirements, define features, create user stories, and plan the complete
                                development roadmap.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Design & Development</h4>
                            <p>UI/UX design approval, sprint-based development with weekly demos, and continuous
                                feedback incorporation.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Testing & Launch</h4>
                            <p>Comprehensive QA, performance testing, App Store submission, and post-launch monitoring
                                and bug fixes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-img animate-on-scroll delay-2"><img
                    src="https://images.unsplash.com/photo-1551650975-87deedd944c3?q=80&w=1548&auto=format&fit=crop"
                    alt="App Development Process"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container side-section">
            <div class="side-img animate-on-scroll"><img
                    src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1469&auto=format&fit=crop"
                    alt="Benefits"></div>
            <div class="animate-on-scroll delay-1">
                <span class="sub-heading">WHY CHOOSE US</span>
                <h2 style="font-size:38px;margin-bottom:15px;">Why Dhronix for <br><span class="highlight">Mobile App
                        Development</span></h2>
                <p>We've delivered 50+ apps across fintech, retail, healthcare, and education sectors.</p>
                <ul class="benefits-list">
                    <li><i class="fas fa-check-circle"></i> 5+ years of mobile development experience</li>
                    <li><i class="fas fa-check-circle"></i> 50+ apps delivered across India</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated project manager for every project</li>
                    <li><i class="fas fa-check-circle"></i> Source code ownership — it's 100% yours</li>
                    <li><i class="fas fa-check-circle"></i> NDA & IP protection guaranteed</li>
                    <li><i class="fas fa-check-circle"></i> Free 3-month post-launch support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone"
                        style="margin-right:8px;"></i>Discuss Your App</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container">
            <div class="service-cta animate-on-scroll">
                <h2>Turn Your App Idea into <span style="color:var(--secondary-color)">Reality Today</span></h2>
                <p>Get a free project estimate in 24 hours. Our team is ready to build your next successful mobile
                    application.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i
                        class="fas fa-rocket" style="margin-right:10px;"></i>Get Free Estimate</a>
            </div>
        </div>
    </section>

   <!-- ======================== FOOTER ======================== -->
    
</main>
@endsection
