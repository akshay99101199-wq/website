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
                    <li><a href="{{ route('services') }}">Solutions</a></li>
                    <li>Nidhi Software</li>
                </ul>
                <div class="hero-icon-badge"><i class="fas fa-laptop-code"></i></div>
                <span class="sub-heading">SOFTWARE SOLUTION</span>
                <h1>Nidhi Software <span style="color:var(--secondary-color)">Management</span> System</h1>
                <p>Dhronix Nidhi Software is a comprehensive, secure, and fully automated solution for Nidhi Companies. Manage members, deposits, loans, and day-to-day operations with ease — all from a single dashboard.</p>
                <div class="hero-btns-row">
                    <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket" style="margin-right:8px;"></i>Get a Free Demo</a>
                    <a href="{{ route('services') }}" class="btn btn-dark-solid" style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                </div>
            </div>
            <div class="service-hero-img animate-fade-up delay-2">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop" alt="Nidhi Software">
            </div>
        </div>
    </div>
</section>

<!-- FEATURES GRID -->
<section class="section-padding">
    <div class="container">
        <div class="section-header text-center animate-on-scroll">
            <span class="sub-heading">KEY FEATURES</span>
            <h2>Everything your Nidhi Company needs</h2>
        </div>
        <div class="features-grid-2">
            <div class="feature-box animate-on-scroll">
                <div class="f-icon"><i class="fas fa-users-cog"></i></div>
                <div><h4>Member Management</h4><p>Complete member registration, KYC verification, passbook generation, and profile management with automated workflows.</p></div>
            </div>
            <div class="feature-box animate-on-scroll delay-1">
                <div class="f-icon"><i class="fas fa-piggy-bank"></i></div>
                <div><h4>Deposit & Savings Modules</h4><p>Manage Fixed Deposits, Recurring Deposits, Savings Accounts with auto-interest calculations and maturity alerts.</p></div>
            </div>
            <div class="feature-box animate-on-scroll delay-2">
                <div class="f-icon"><i class="fas fa-hand-holding-usd"></i></div>
                <div><h4>Loan Management</h4><p>Process and disburse loans with EMI schedules, automated reminders, collateral tracking, and penalty calculations.</p></div>
            </div>
            <div class="feature-box animate-on-scroll delay-3">
                <div class="f-icon"><i class="fas fa-file-alt"></i></div>
                <div><h4>Accounting & Ledger</h4><p>Double-entry accounting, balance sheet, P&L reports, trial balance, and automated GST-ready statements.</p></div>
            </div>
            <div class="feature-box animate-on-scroll">
                <div class="f-icon"><i class="fas fa-shield-alt"></i></div>
                <div><h4>RBI/MCA Compliance</h4><p>Built-in compliance modules for Nidhi Rules 2014 with automatic return filing and regulatory report generation.</p></div>
            </div>
            <div class="feature-box animate-on-scroll delay-1">
                <div class="f-icon"><i class="fas fa-chart-bar"></i></div>
                <div><h4>Dashboard & Reports</h4><p>Real-time analytics dashboard with daily collection reports, branch-wise performance, and export to PDF/Excel.</p></div>
            </div>
        </div>
    </div>
</section>

<!-- HOW IT WORKS -->
<section class="section-padding" style="background:#fafbfc;">
    <div class="container side-section">
        <div class="animate-on-scroll">
            <span class="sub-heading">HOW IT WORKS</span>
            <h2 style="font-size:38px;margin-bottom:10px;">Simple 3-Step <br><span class="highlight">Onboarding Process</span></h2>
            <p style="margin-bottom:30px;">Get your Nidhi Company running on our platform within 48 hours with dedicated onboarding support.</p>
            <div class="steps-list">
                <div class="step-row">
                    <div class="step-number">01</div>
                    <div class="step-content"><h4>Register & Configure</h4><p>Share your Nidhi Company details. Our team sets up your branded portal, user roles, and branch structure within 24 hours.</p></div>
                </div>
                <div class="step-row">
                    <div class="step-number">02</div>
                    <div class="step-content"><h4>Data Migration</h4><p>We securely migrate your existing member records, accounts, and loan data from any format to our system.</p></div>
                </div>
                <div class="step-row">
                    <div class="step-number">03</div>
                    <div class="step-content"><h4>Go Live & Grow</h4><p>Your team gets trained, the system goes live, and our 24/7 support team is always available to help you scale.</p></div>
                </div>
            </div>
        </div>
        <div class="side-img animate-on-scroll delay-2">
            <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop" alt="How it works">
        </div>
    </div>
</section>

<!-- BENEFITS -->
<section class="section-padding">
    <div class="container side-section">
        <div class="side-img animate-on-scroll">
            <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop" alt="Benefits">
        </div>
        <div class="animate-on-scroll delay-1">
            <span class="sub-heading">WHY CHOOSE US</span>
            <h2 style="font-size:38px;margin-bottom:15px;">Benefits of Dhronix <br><span class="highlight">Nidhi Software</span></h2>
            <p>Trusted by 200+ Nidhi Companies across India, our platform is the most reliable choice for your business growth.</p>
            <ul class="benefits-list">
                <li><i class="fas fa-check-circle"></i> 100% Web-based — No installation needed</li>
                <li><i class="fas fa-check-circle"></i> Multi-branch & Multi-user support</li>
                <li><i class="fas fa-check-circle"></i> Android & iOS mobile app included</li>
                <li><i class="fas fa-check-circle"></i> SMS & WhatsApp notifications</li>
                <li><i class="fas fa-check-circle"></i> 24/7 Dedicated customer support</li>
                <li><i class="fas fa-check-circle"></i> Lifetime free updates</li>
            </ul>
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
