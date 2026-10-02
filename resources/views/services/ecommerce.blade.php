@extends('layouts.app')
@section('title', 'eCommerce Solutions | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--ecommerce">
<section class="service-page-hero service-page-hero--ecommerce">
        <div class="container">
            <div class="service-hero-inner">
                <div class="service-hero-content animate-fade-up">
                    <ul class="breadcrumb-row">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li>eCommerce</li>
                    </ul>
                    <div class="hero-icon-badge"><i class="fas fa-shopping-cart"></i></div>
                    <span class="sub-heading">ECOMMERCE PLATFORM</span>
                    <h1>B2B & B2C <span style="color:var(--secondary-color)">eCommerce</span> Development</h1>
                    <p>Dhronix builds powerful, scalable eCommerce platforms tailored for Indian and international
                        markets. From multi-vendor marketplaces to white-label storefronts — launch your online store
                        fast and grow without limits.</p>
                    <div class="hero-btns-row">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket"
                                style="margin-right:8px;"></i>Get a Free Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-dark-solid"
                            style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i
                                class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                    </div>
                </div>
                <div class="service-hero-img animate-fade-up delay-2"><img
                        src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                        alt="eCommerce"></div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center animate-on-scroll"><span class="sub-heading">KEY FEATURES</span>
                <h2>Everything to Run a Successful Online Store</h2>
            </div>
            <div class="features-grid-2">
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-store"></i></div>
                    <div>
                        <h4>Custom Storefront Design</h4>
                        <p>Fully branded, mobile-responsive storefronts with custom themes, color schemes, and your own
                            domain name.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-credit-card"></i></div>
                    <div>
                        <h4>Payment Gateway Integration</h4>
                        <p>Support for Razorpay, PayU, Paytm, UPI, COD, EMI options, and international payment gateways.
                        </p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-2">
                    <div class="f-icon"><i class="fas fa-truck"></i></div>
                    <div>
                        <h4>Logistics & Delivery</h4>
                        <p>Integrate with Shiprocket, Delhivery, Bluedart for automated shipping, tracking, and returns
                            management.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-3">
                    <div class="f-icon"><i class="fas fa-users-cog"></i></div>
                    <div>
                        <h4>Multi-Vendor Marketplace</h4>
                        <p>Allow multiple sellers to register, manage their products, and receive automated payouts with
                            your commission.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-bullhorn"></i></div>
                    <div>
                        <h4>Marketing & SEO Tools</h4>
                        <p>Built-in SEO, coupon management, affiliate programs, email marketing, and push notification
                            support.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h4>Analytics & Reporting</h4>
                        <p>Sales dashboards, customer behavior analytics, inventory reports, and Google
                            Analytics/Facebook Pixel integration.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container side-section">
            <div class="animate-on-scroll">
                <span class="sub-heading">HOW IT WORKS</span>
                <h2 style="font-size:38px;margin-bottom:10px;">Launch Your Store in <br><span class="highlight">3 Simple
                        Steps</span></h2>
                <p style="margin-bottom:30px;">We handle everything from design to deployment so you can focus on
                    selling.</p>
                <div class="steps-list">
                    <div class="step-row">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Requirement & Design</h4>
                            <p>Share your vision. Our UI/UX team designs a stunning, conversion-optimized storefront
                                tailored to your brand.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Development & Integration</h4>
                            <p>Full-stack development with payment, logistics, and inventory integrations. Product
                                upload and testing done by us.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Launch & Grow</h4>
                            <p>We launch your store, set up SEO, and hand over with complete admin training. Ongoing
                                support included.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-img animate-on-scroll delay-2"><img
                    src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop"
                    alt="Store Launch"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container side-section">
            <div class="side-img animate-on-scroll"><img
                    src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                    alt="Benefits"></div>
            <div class="animate-on-scroll delay-1">
                <span class="sub-heading">WHY CHOOSE US</span>
                <h2 style="font-size:38px;margin-bottom:15px;">Why Dhronix for your <br><span
                        class="highlight">eCommerce Platform</span></h2>
                <p>We build stores that convert visitors into buyers and buyers into loyal brand advocates.</p>
                <ul class="benefits-list">
                    <li><i class="fas fa-check-circle"></i> Mobile-first, lightning-fast performance</li>
                    <li><i class="fas fa-check-circle"></i> White-label ready — your brand, your platform</li>
                    <li><i class="fas fa-check-circle"></i> B2B & B2C both supported</li>
                    <li><i class="fas fa-check-circle"></i> Multi-language & multi-currency</li>
                    <li><i class="fas fa-check-circle"></i> 99.9% uptime SLA</li>
                    <li><i class="fas fa-check-circle"></i> Free maintenance for 6 months</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone"
                        style="margin-right:8px;"></i>Talk to an Expert</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container">
            <div class="service-cta animate-on-scroll">
                <h2>Start Selling Online with <span style="color:var(--secondary-color)">Dhronix eCommerce</span></h2>
                <p>Get a custom eCommerce store built for your business in as little as 15 days. Book a free
                    consultation now.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i
                        class="fas fa-rocket" style="margin-right:10px;"></i>Get Free Consultation</a>
            </div>
        </div>
    </section>

  <!-- ======================== FOOTER ======================== -->
    
</main>
@endsection
