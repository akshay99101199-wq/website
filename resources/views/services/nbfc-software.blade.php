@extends('layouts.app')
@section('title', 'NBFC Software | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--nbfc-software">
<section class="service-page-hero service-page-hero--nbfc-software">
        <div class="container">
            <div class="service-hero-inner">
                <div class="service-hero-content animate-fade-up">
                    <ul class="breadcrumb-row">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li>NBFC Software</li>
                    </ul>
                    <div class="hero-icon-badge"><i class="fas fa-university"></i></div>
                    <span class="sub-heading">FINANCIAL SOFTWARE</span>
                    <h1>NBFC Software <span style="color:var(--secondary-color)">Loan Management</span> System</h1>
                    <p>Dhronix NBFC Software is an end-to-end digital platform for Non-Banking Financial Companies.
                        Automate loan origination, credit assessment, EMI collections, and regulatory compliance from a
                        single cloud platform.</p>
                    <div class="hero-btns-row">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket"
                                style="margin-right:8px;"></i>Get a Free Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-dark-solid"
                            style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i
                                class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                    </div>
                </div>
                <div class="service-hero-img animate-fade-up delay-2">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1470&auto=format&fit=crop"
                        alt="NBFC Software">
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center animate-on-scroll"><span class="sub-heading">KEY FEATURES</span>
                <h2>Complete NBFC Operations in One Platform</h2>
            </div>
            <div class="features-grid-2">
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-file-contract"></i></div>
                    <div>
                        <h4>Loan Origination System</h4>
                        <p>Digital loan applications with document upload, credit scoring, auto-approval workflows, and
                            sanction letter generation.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-calendar-check"></i></div>
                    <div>
                        <h4>EMI & Repayment Tracking</h4>
                        <p>Automated EMI schedules, overdue tracking, penalty calculations, and customer payment
                            reminders via SMS/WhatsApp.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-2">
                    <div class="f-icon"><i class="fas fa-search-dollar"></i></div>
                    <div>
                        <h4>Credit Bureau Integration</h4>
                        <p>Real-time CIBIL, Equifax, and Experian credit score checks integrated directly in the loan
                            approval workflow.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-3">
                    <div class="f-icon"><i class="fas fa-balance-scale"></i></div>
                    <div>
                        <h4>RBI Compliance & Reporting</h4>
                        <p>Automated RBI returns, CERSAI integration, and statutory reports. Stay audit-ready with zero
                            manual effort.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-coins"></i></div>
                    <div>
                        <h4>Disbursement Management</h4>
                        <p>Direct bank transfers, cheque disbursals, and integration with payment gateways for seamless
                            fund release.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-chart-pie"></i></div>
                    <div>
                        <h4>NPA & Portfolio Management</h4>
                        <p>Track your NPA portfolio in real-time with recovery dashboards, legal notices, and write-off
                            management tools.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container side-section">
            <div class="animate-on-scroll">
                <span class="sub-heading">HOW IT WORKS</span>
                <h2 style="font-size:38px;margin-bottom:10px;">Streamlined Loan <br><span class="highlight">Processing
                        Flow</span></h2>
                <p style="margin-bottom:30px;">From application to disbursement, everything happens digitally and in
                    record time.</p>
                <div class="steps-list">
                    <div class="step-row">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Application & KYC</h4>
                            <p>Borrower submits online application with Aadhaar/PAN eKYC verification completed within
                                minutes.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Credit Assessment</h4>
                            <p>Automated credit score check, income verification, and risk scoring determines loan
                                eligibility instantly.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Disbursal & Tracking</h4>
                            <p>Approved loans are disbursed directly to accounts. EMI tracking and collection automation
                                begins immediately.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-img animate-on-scroll delay-2"><img
                    src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                    alt="Loan Process"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container side-section">
            <div class="side-img animate-on-scroll"><img
                    src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
                    alt="Benefits"></div>
            <div class="animate-on-scroll delay-1">
                <span class="sub-heading">WHY CHOOSE US</span>
                <h2 style="font-size:38px;margin-bottom:15px;">Benefits of Dhronix <br><span class="highlight">NBFC
                        Software</span></h2>
                <p>Designed specifically for Indian NBFCs, our platform handles everything from micro-loans to large
                    corporate credit.</p>
                <ul class="benefits-list">
                    <li><i class="fas fa-check-circle"></i> RBI & CERSAI ready compliance module</li>
                    <li><i class="fas fa-check-circle"></i> Supports all loan types: Personal, Home, Vehicle, MSME</li>
                    <li><i class="fas fa-check-circle"></i> Cloud-based — access from anywhere</li>
                    <li><i class="fas fa-check-circle"></i> API integration with banks & payment gateways</li>
                    <li><i class="fas fa-check-circle"></i> Scalable for 1000+ daily loan applications</li>
                    <li><i class="fas fa-check-circle"></i> Dedicated onboarding & 24/7 support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone"
                        style="margin-right:8px;"></i>Talk to an Expert</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container">
            <div class="service-cta animate-on-scroll">
                <h2>Scale Your NBFC with <span style="color:var(--secondary-color)">Smart Technology</span></h2>
                <p>Join leading NBFCs who have reduced loan processing time by 70% using our platform. Schedule a free
                    demo today.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i
                        class="fas fa-rocket" style="margin-right:10px;"></i>Schedule a Free Demo</a>
            </div>
        </div>
    </section>

  <!-- ======================== FOOTER ======================== -->
    
</main>
@endsection
