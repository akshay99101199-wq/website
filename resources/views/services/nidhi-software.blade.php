@extends('layouts.app')
@section('title', 'Nidhi Software | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--nidhi-software">
<section class="service-page-hero service-page-hero--nidhi-software">
    <div class="container">
        <div class="service-hero-inner">
            <div class="service-hero-content animate-fade-up">
                <ul class="breadcrumb-row">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>/</li>
                    <li><a href="{{ route('services') }}">Services</a></li>
                    <li>/</li>
                    <li>Nidhi Software</li>
                </ul><br/>
                <!-- <div class="nidhi-hero-kicker"><span class="hero-icon-badge"><i class="fas fa-landmark"></i></span><span>BUILT FOR NIDHI COMPANIES</span></div> -->
                <h1>One platform to <span>run your Nidhi Company</span></h1>
                <p>Dhronix Nidhi Software brings member management, deposits, loans, and daily operations together in one secure, easy-to-use platform.</p>
                <div class="nidhi-hero-highlights">
                    <span><i class="fas fa-check-circle"></i> Members &amp; KYC</span>
                    <span><i class="fas fa-check-circle"></i> Deposits &amp; Loans</span>
                    <span><i class="fas fa-check-circle"></i> Reports &amp; Compliance</span>
                </div>
                <div class="hero-btns-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket" style="margin-right:8px;"></i>Get a Free Demo</a>
                    <a href="{{ route('services') }}" class="nidhi-hero-secondary"><i class="fas fa-th-large"></i> Explore all solutions</a>
                </div>
            </div>
            <div class="nidhi-hero-product animate-fade-up delay-2" role="img" aria-label="Preview of the Nidhi company management dashboard">
                <div class="nidhi-hero-product-glow"></div>
                <div class="nidhi-hero-product-window">
                    <div class="nidhi-hero-product-topbar">
                        <div class="nidhi-hero-window-dots"><span></span><span></span><span></span></div>
                        <div class="nidhi-hero-product-brand"><i class="fas fa-layer-group"></i> DHRONIX <span>NIDHI</span></div>
                        <span class="nidhi-hero-live"><i class="fas fa-circle"></i> LIVE</span>
                    </div>
                    <div class="nidhi-hero-product-layout">
                        <aside class="nidhi-hero-product-nav" aria-hidden="true">
                            <span class="nidhi-hero-nav-logo"><i class="fas fa-landmark"></i></span>
                            <span class="is-active"><i class="fas fa-th-large"></i></span>
                            <span><i class="fas fa-users"></i></span>
                            <span><i class="fas fa-wallet"></i></span>
                            <span><i class="fas fa-hand-holding-usd"></i></span>
                            <span><i class="fas fa-chart-bar"></i></span>
                        </aside>
                        <div class="nidhi-hero-dashboard">
                            <div class="nidhi-hero-dashboard-heading">
                                <span>MONDAY, 10:24 AM</span>
                                <strong>Good morning, Admin <i class="fas fa-sun"></i></strong>
                                <small>Here’s what’s happening with your company today.</small>
                            </div>
                            <div class="nidhi-hero-kpi-grid">
                                <div><span><i class="fas fa-users"></i> Total members</span><strong>1,248</strong><small><i class="fas fa-arrow-up"></i> 12.8% this month</small></div>
                                <div><span><i class="fas fa-piggy-bank"></i> Total deposits</span><strong>₹2.4 Cr</strong><small><i class="fas fa-arrow-up"></i> 8.4% this month</small></div>
                                <div><span><i class="fas fa-hand-holding-usd"></i> Active loans</span><strong>342</strong><small><i class="fas fa-check-circle"></i> Up to date</small></div>
                            </div>
                            <div class="nidhi-hero-activity">
                                <div class="nidhi-hero-activity-heading"><span><strong>Collection overview</strong><small>Monthly performance</small></span><span class="nidhi-hero-period">This year <i class="fas fa-chevron-down"></i></span></div>
                                <div class="nidhi-hero-chart" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                                <div class="nidhi-hero-chart-labels" aria-hidden="true"><span>Jan</span><span>Mar</span><span>May</span><span>Jul</span><span>Sep</span><span>Nov</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="nidhi-hero-float-card"><span><i class="fas fa-shield-alt"></i></span><span><strong>Secure &amp; Reliable</strong><small>Your business, in control</small></span><i class="fas fa-check-circle"></i></div>
            </div>
        </div>
    </div>
</section>

<!-- KEY FEATURES -->
<section class="section-padding nidhi-key-features">
    <div class="container">
        <div class="section-header text-center animate-on-scroll">
            <span class="sub-heading">KEY FEATURES</span>
            <h2>Everything your Nidhi Company needs</h2>
        </div>
        <div class="service-feature-explorer nidhi-feature-explorer">
            <div class="service-feature-visual nidhi-feature-preview" aria-live="polite">
                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                    alt="Nidhi member management" data-feature-preview-image>
                <div class="service-feature-visual-caption">
                    <span>NIDHI COMPANY PLATFORM</span>
                    <h3 data-feature-preview-title>Member Management</h3>
                    <p data-feature-preview-description>Complete member registration, KYC verification, passbook generation, and profile management with automated workflows.</p>
                    <div><i class="fas fa-shield-alt"></i> Secure Nidhi operations</div>
                </div>
            </div>
            <div class="service-feature-list nidhi-feature-list" role="group" aria-label="Nidhi Software key features">
                <div class="features-grid-2">
                    <button class="feature-box service-feature-item nidhi-feature-item is-active" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1521737711867-e3b97375f902?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Team managing Nidhi member records">
                        <span class="f-icon"><i class="fas fa-users-cog"></i></span>
                        <div><h4>Member Management</h4><p>Complete member registration, KYC verification, passbook generation, and profile management with automated workflows.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    <button class="feature-box service-feature-item nidhi-feature-item" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Savings and deposit management">
                        <span class="f-icon"><i class="fas fa-piggy-bank"></i></span>
                        <div><h4>Deposit &amp; Savings Modules</h4><p>Manage Fixed Deposits, Recurring Deposits, Savings Accounts with auto-interest calculations and maturity alerts.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    <button class="feature-box service-feature-item nidhi-feature-item" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1554224155-6726b3ff858f?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Nidhi loan planning and management">
                        <span class="f-icon"><i class="fas fa-hand-holding-usd"></i></span>
                        <div><h4>Loan Management</h4><p>Process and disburse loans with EMI schedules, automated reminders, collateral tracking, and penalty calculations.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    <button class="feature-box service-feature-item nidhi-feature-item" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1554224154-22dec7ec8818?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Accounting and ledger reports">
                        <span class="f-icon"><i class="fas fa-file-alt"></i></span>
                        <div><h4>Accounting &amp; Ledger</h4><p>Double-entry accounting, balance sheet, P&amp;L reports, trial balance, and automated GST-ready statements.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    <button class="feature-box service-feature-item nidhi-feature-item" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Nidhi compliance documents and regulatory reporting">
                        <span class="f-icon"><i class="fas fa-shield-alt"></i></span>
                        <div><h4>RBI/MCA Compliance</h4><p>Built-in compliance modules for Nidhi Rules 2014 with automatic return filing and regulatory report generation.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                    <button class="feature-box service-feature-item nidhi-feature-item" type="button"
                        data-feature-image="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&amp;w=1470&amp;auto=format&amp;fit=crop"
                        data-feature-image-alt="Nidhi performance dashboard and reports">
                        <span class="f-icon"><i class="fas fa-chart-bar"></i></span>
                        <div><h4>Dashboard &amp; Reports</h4><p>Real-time analytics dashboard with daily collection reports, branch-wise performance, and export to PDF/Excel.</p></div>
                        <span class="feature-arrow" aria-hidden="true"><i class="fas fa-arrow-right"></i></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section-padding nidhi-onboarding-section">
    <div class="container">
        <div class="nidhi-onboarding-heading animate-on-scroll">
            <span class="sub-heading">HOW IT WORKS</span>
            <h2>Simple 3-Step <span class="highlight">Onboarding Process</span></h2>
            <p>Get your Nidhi Company running on our platform within 48 hours with dedicated onboarding support.</p>
        </div>
        <div class="steps-list nidhi-onboarding-steps">
            <article class="step-row animate-on-scroll">
                <div class="step-number"><span>01</span><i class="fas fa-sliders-h" aria-hidden="true"></i></div>
                <div class="step-content"><span class="nidhi-step-label">STEP ONE</span><h3>Register & Configure</h3><p>Share your Nidhi Company details. Our team sets up your branded portal, user roles, and branch structure within 24 hours.</p></div>
            </article>
            <article class="step-row animate-on-scroll delay-1">
                <div class="step-number"><span>02</span><i class="fas fa-database" aria-hidden="true"></i></div>
                <div class="step-content"><span class="nidhi-step-label">STEP TWO</span><h3>Data Migration</h3><p>We securely migrate your existing member records, accounts, and loan data from any format to our system.</p></div>
            </article>
            <article class="step-row animate-on-scroll delay-2">
                <div class="step-number"><span>03</span><i class="fas fa-rocket" aria-hidden="true"></i></div>
                <div class="step-content"><span class="nidhi-step-label">STEP THREE</span><h3>Go Live & Grow</h3><p>Your team gets trained, the system goes live, and our 24/7 support team is always available to help you scale.</p></div>
            </article>
        </div>
    </div>
</section>

<!-- WHY CHOOSE US -->
<section class="section-padding nidhi-why-section">
    <div class="container">
        <div class="nidhi-why-heading animate-on-scroll">
            <span class="sub-heading">WHY CHOOSE US</span>
            <h2>Benefits of Dhronix <span class="highlight">Nidhi Software</span></h2>
            <p>Trusted by 200+ Nidhi Companies across India, our platform is the most reliable choice for your business growth.</p>
        </div>
        <div class="nidhi-software-illustration animate-on-scroll" role="img" aria-label="Nidhi software dashboard connected with member, deposit, loan, and reporting features">
            <div class="nidhi-orbit-card nidhi-orbit-card--members"><i class="fas fa-users"></i><span>Members</span></div>
            <div class="nidhi-orbit-card nidhi-orbit-card--deposits"><i class="fas fa-piggy-bank"></i><span>Deposits</span></div>
            <div class="nidhi-orbit-card nidhi-orbit-card--loans"><i class="fas fa-hand-holding-usd"></i><span>Loans</span></div>
            <div class="nidhi-orbit-card nidhi-orbit-card--reports"><i class="fas fa-chart-pie"></i><span>Reports</span></div>
            <div class="nidhi-laptop">
                <div class="nidhi-laptop-screen">
                    <div class="nidhi-laptop-topbar"><span></span><span></span><span></span><strong>DHRONIX <small>NIDHI</small></strong><i class="fas fa-bell"></i></div>
                    <div class="nidhi-laptop-dashboard">
                        <div class="nidhi-laptop-nav"><b><i class="fas fa-th-large"></i></b><i class="fas fa-users"></i><i class="fas fa-wallet"></i><i class="fas fa-file-alt"></i></div>
                        <div class="nidhi-laptop-main">
                            <div class="nidhi-laptop-welcome"><span>Good morning, Admin</span><strong>Company overview</strong></div>
                            <div class="nidhi-laptop-metrics"><span><small>Total members</small><b>1,248</b></span><span><small>Total deposits</small><b>₹2.4 Cr</b></span><span><small>Active loans</small><b>342</b></span></div>
                            <div class="nidhi-laptop-chart"><span></span><span></span><span></span><span></span><span></span><span></span><span></span><span></span></div>
                        </div>
                    </div>
                </div>
                <div class="nidhi-laptop-base"></div>
            </div>
        </div>
        <div class="nidhi-benefit-cards">
            <article class="nidhi-benefit-card animate-on-scroll">
                <span class="nidhi-benefit-icon"><i class="fas fa-globe"></i></span>
                <strong>100% Web-based</strong><small>No installation needed</small>
            </article>
            <article class="nidhi-benefit-card animate-on-scroll delay-1">
                <span class="nidhi-benefit-icon"><i class="fas fa-code-branch"></i></span>
                <strong>Multi-branch</strong><small>Multi-user support</small>
            </article>
            <article class="nidhi-benefit-card animate-on-scroll delay-2">
                <span class="nidhi-benefit-icon"><i class="fas fa-mobile-alt"></i></span>
                <strong>Mobile App</strong><small>Android &amp; iOS included</small>
            </article>
            <article class="nidhi-benefit-card animate-on-scroll">
                <span class="nidhi-benefit-icon"><i class="fas fa-comment-dots"></i></span>
                <strong>Notifications</strong><small>SMS &amp; WhatsApp alerts</small>
            </article>
            <article class="nidhi-benefit-card animate-on-scroll delay-1">
                <span class="nidhi-benefit-icon"><i class="fas fa-headset"></i></span>
                <strong>24/7 Support</strong><small>Dedicated assistance</small>
            </article>
            <article class="nidhi-benefit-card animate-on-scroll delay-2">
                <span class="nidhi-benefit-icon"><i class="fas fa-sync-alt"></i></span>
                <strong>Free Updates</strong><small>Lifetime updates</small>
            </article>
        </div>
        <div class="nidhi-why-cta animate-on-scroll">
            <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone" style="margin-right:8px;"></i>Talk to an Expert</a>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section-padding" style="background:#fafbfc;">
    <div class="container">
        <div class="service-cta animate-on-scroll">
            <h2>Ready to Transform Your <span style="color:var(--secondary-color)">Nidhi Company?</span></h2>
            <p>Join 200+ satisfied Nidhi Companies who trust Dhronix for their daily operations. Get a free demo today — no credit card required.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i class="fas fa-rocket" style="margin-right:10px;"></i>Schedule a Free Demo</a>
        </div>
    </div>
</section>

<!-- ======================== FOOTER ======================== -->
    
</main>
@endsection
