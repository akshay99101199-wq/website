@extends('layouts.app')
@section('title', 'Cloud Hosting | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--cloud-hosting">
    <section class="service-page-hero service-page-hero--cloud-hosting">
        <div class="container">
            <div class="service-hero-inner">
                <div class="service-hero-content animate-fade-up">
                    <ul class="breadcrumb-row">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li>Cloud Hosting</li>
                    </ul>
                    <div class="hero-icon-badge"><i class="fas fa-cloud"></i></div>
                    <span class="sub-heading">CLOUD INFRASTRUCTURE</span>
                    <h1>Secure & Scalable <span style="color:var(--secondary-color)">Cloud Hosting</span> Solutions</h1>
                    <p>Dhronix provides enterprise-grade cloud hosting with 99.99% uptime SLA. From shared hosting to
                        dedicated servers and managed cloud infrastructure — we keep your applications running 24/7,
                        always fast and always secure.</p>
                    <div class="hero-btns-row">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket"
                                style="margin-right:8px;"></i>Get Hosting Now</a>
                        <a href="{{ route('services') }}" class="btn btn-dark-solid"
                            style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i
                                class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                    </div>
                </div>
                <div class="service-hero-img animate-fade-up delay-2"><img
                        src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=1472&auto=format&fit=crop"
                        alt="Cloud Hosting"></div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center animate-on-scroll"><span class="sub-heading">HOSTING PLANS</span>
                <h2>Enterprise Cloud Hosting for Every Business Scale</h2>
            </div>
            <div class="features-grid-2">
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-server"></i></div>
                    <div>
                        <h4>Dedicated Servers</h4>
                        <p>High-performance dedicated physical servers with full root access, custom configurations, and
                            guaranteed resources.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-cloud-upload-alt"></i></div>
                    <div>
                        <h4>Managed Cloud Hosting</h4>
                        <p>AWS, Azure, and GCP managed infrastructure with auto-scaling, load balancing, and 24/7 expert
                            monitoring.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-2">
                    <div class="f-icon"><i class="fas fa-shield-alt"></i></div>
                    <div>
                        <h4>DDoS Protection & Security</h4>
                        <p>Enterprise-grade DDoS mitigation, SSL certificates, firewall management, and malware scanning
                            included.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-3">
                    <div class="f-icon"><i class="fas fa-database"></i></div>
                    <div>
                        <h4>Database Hosting</h4>
                        <p>Managed MySQL, PostgreSQL, MongoDB, and Redis hosting with automated backups and
                            point-in-time recovery.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-sync-alt"></i></div>
                    <div>
                        <h4>Automated Backups</h4>
                        <p>Daily automated backups with 30-day retention, instant restore capability, and off-site
                            backup storage.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <div>
                        <h4>99.99% Uptime SLA</h4>
                        <p>Guaranteed uptime with real-time monitoring, instant alerting, and automatic failover
                            infrastructure.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container side-section">
            <div class="animate-on-scroll">
                <span class="sub-heading">HOW IT WORKS</span>
                <h2 style="font-size:38px;margin-bottom:10px;">Get Hosted in <br><span class="highlight">Under 24
                        Hours</span></h2>
                <p style="margin-bottom:30px;">Our team handles the entire migration and setup so your business never
                    skips a beat.</p>
                <div class="steps-list">
                    <div class="step-row">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Requirement Analysis</h4>
                            <p>We assess your traffic, storage, and performance needs to recommend the perfect hosting
                                plan for your business.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Server Setup & Migration</h4>
                            <p>We set up your environment, migrate your data and applications with zero downtime using
                                our proven migration protocol.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Monitor & Optimize</h4>
                            <p>24/7 proactive monitoring, performance tuning, and monthly reports on uptime, speed, and
                                resource utilization.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-img animate-on-scroll delay-2"><img
                    src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=1534&auto=format&fit=crop"
                    alt="Server Setup"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container side-section">
            <div class="side-img animate-on-scroll"><img
                    src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=1470&auto=format&fit=crop"
                    alt="Benefits"></div>
            <div class="animate-on-scroll delay-1">
                <span class="sub-heading">WHY CHOOSE US</span>
                <h2 style="font-size:38px;margin-bottom:15px;">Why Dhronix Cloud <br><span class="highlight">Hosting is
                        Different</span></h2>
                <p>We host 500+ websites and applications across India with zero compromise on security and speed.</p>
                <ul class="benefits-list">
                    <li><i class="fas fa-check-circle"></i> 99.99% uptime guarantee with SLA credit</li>
                    <li><i class="fas fa-check-circle"></i> Indian data centers — low latency for Indian users</li>
                    <li><i class="fas fa-check-circle"></i> Free SSL certificate included</li>
                    <li><i class="fas fa-check-circle"></i> Free migration from your current host</li>
                    <li><i class="fas fa-check-circle"></i> 24/7 technical support on call & chat</li>
                    <li><i class="fas fa-check-circle"></i> Scale up/down anytime — no long contracts</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone"
                        style="margin-right:8px;"></i>Get Hosting Quote</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container">
            <div class="service-cta animate-on-scroll">
                <h2>Power Your Applications with <span style="color:var(--secondary-color)">Dhronix Cloud</span></h2>
                <p>Get a free hosting consultation and performance audit of your current setup. Switch to Dhronix Cloud
                    today.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i
                        class="fas fa-rocket" style="margin-right:10px;"></i>Get Free Consultation</a>
            </div>
        </div>
    </section>

</main>
@endsection