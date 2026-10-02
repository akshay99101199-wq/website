@extends('layouts.app')
@section('title', 'ERP Accounting | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-detail.css') }}">
<main class="service-detail service-detail--erp-accounting">
<section class="service-page-hero service-page-hero--erp-accounting">
        <div class="container">
            <div class="service-hero-inner">
                <div class="service-hero-content animate-fade-up">
                    <ul class="breadcrumb-row">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Solutions</a></li>
                        <li>ERP Accounting</li>
                    </ul>
                    <div class="hero-icon-badge"><i class="fas fa-file-invoice-dollar"></i></div>
                    <span class="sub-heading">ENTERPRISE RESOURCE PLANNING</span>
                    <h1>ERP Accounting <span style="color:var(--secondary-color)">& Business</span> Management</h1>
                    <p>Dhronix ERP is an integrated business management suite covering Accounting, Inventory, Purchase,
                        Sales, HR, and Payroll — all in one cloud platform built for Indian businesses of all sizes.</p>
                    <div class="hero-btns-row">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-rocket"
                                style="margin-right:8px;"></i>Get a Free Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-dark-solid"
                            style="background:rgba(255,255,255,0.1);color:#fff;border:1px solid rgba(255,255,255,0.2);"><i
                                class="fas fa-arrow-left" style="margin-right:8px;"></i>All Solutions</a>
                    </div>
                </div>
                <div class="service-hero-img animate-fade-up delay-2"><img
                        src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=2072&auto=format&fit=crop"
                        alt="ERP Software"></div>
            </div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center animate-on-scroll"><span class="sub-heading">KEY MODULES</span>
                <h2>Comprehensive ERP Modules for Every Department</h2>
            </div>
            <div class="features-grid-2">
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-calculator"></i></div>
                    <div>
                        <h4>Accounting & Finance</h4>
                        <p>Double-entry bookkeeping, bank reconciliation, multi-currency support, and GST-ready
                            financial statements.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-boxes"></i></div>
                    <div>
                        <h4>Inventory Management</h4>
                        <p>Real-time stock tracking, warehouse management, barcode scanning, reorder alerts, and stock
                            valuation reports.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-2">
                    <div class="f-icon"><i class="fas fa-shopping-bag"></i></div>
                    <div>
                        <h4>Purchase & Sales</h4>
                        <p>Automated purchase orders, vendor management, sales quotations, invoicing, and commission
                            tracking.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-3">
                    <div class="f-icon"><i class="fas fa-users"></i></div>
                    <div>
                        <h4>HR & Payroll</h4>
                        <p>Employee management, attendance tracking, leave management, salary processing, PF/ESI/TDS
                            compliance.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll">
                    <div class="f-icon"><i class="fas fa-file-invoice"></i></div>
                    <div>
                        <h4>GST & Tax Compliance</h4>
                        <p>Auto GST calculation, GSTR-1/2/3B filing, e-invoicing, e-way bill generation, and TDS
                            management.</p>
                    </div>
                </div>
                <div class="feature-box animate-on-scroll delay-1">
                    <div class="f-icon"><i class="fas fa-tachometer-alt"></i></div>
                    <div>
                        <h4>MIS & Business Reports</h4>
                        <p>Real-time dashboards, profit & loss, cash flow, balance sheet, and 100+ custom business
                            intelligence reports.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container side-section">
            <div class="animate-on-scroll">
                <span class="sub-heading">HOW IT WORKS</span>
                <h2 style="font-size:38px;margin-bottom:10px;">From Setup to <br><span class="highlight">Full Operations
                        in Days</span></h2>
                <p style="margin-bottom:30px;">Our implementation team ensures a smooth transition from your current
                    system with zero data loss.</p>
                <div class="steps-list">
                    <div class="step-row">
                        <div class="step-number">01</div>
                        <div class="step-content">
                            <h4>Business Analysis</h4>
                            <p>Our consultants study your current processes and configure the ERP to match your exact
                                business workflows.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">02</div>
                        <div class="step-content">
                            <h4>Data Migration & Setup</h4>
                            <p>Import existing data from Tally, Excel, or any format. Configure chart of accounts, tax
                                codes, and user roles.</p>
                        </div>
                    </div>
                    <div class="step-row">
                        <div class="step-number">03</div>
                        <div class="step-content">
                            <h4>Training & Go Live</h4>
                            <p>Full team training sessions, user manuals, and a dedicated account manager to ensure a
                                smooth go-live.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="side-img animate-on-scroll delay-2"><img
                    src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                    alt="ERP Process"></div>
        </div>
    </section>

    <section class="section-padding">
        <div class="container side-section">
            <div class="side-img animate-on-scroll"><img
                    src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
                    alt="Benefits"></div>
            <div class="animate-on-scroll delay-1">
                <span class="sub-heading">WHY CHOOSE US</span>
                <h2 style="font-size:38px;margin-bottom:15px;">Why Dhronix ERP is <br><span class="highlight">Best for
                        Your Business</span></h2>
                <p>Trusted by manufacturers, traders, service companies, and retail chains across India.</p>
                <ul class="benefits-list">
                    <li><i class="fas fa-check-circle"></i> Replaces Tally, Busy & manual Excel sheets</li>
                    <li><i class="fas fa-check-circle"></i> 100% GST & Indian tax compliant</li>
                    <li><i class="fas fa-check-circle"></i> Works on Web, Android & iOS</li>
                    <li><i class="fas fa-check-circle"></i> Multi-company, multi-branch support</li>
                    <li><i class="fas fa-check-circle"></i> Customizable to any industry vertical</li>
                    <li><i class="fas fa-check-circle"></i> Lifetime updates & 24/7 support</li>
                </ul>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid"><i class="fas fa-phone"
                        style="margin-right:8px;"></i>Talk to an Expert</a>
            </div>
        </div>
    </section>

    <section class="section-padding" style="background:#fafbfc;">
        <div class="container">
            <div class="service-cta animate-on-scroll">
                <h2>Automate Your Business with <span style="color:var(--secondary-color)">Dhronix ERP</span></h2>
                <p>Stop losing time on manual tasks. Get a fully customized ERP demo for your industry in 30 minutes.
                </p>
                <a href="{{ route('contact') }}" class="btn btn-primary-solid" style="font-size:16px;padding:16px 40px;"><i
                        class="fas fa-rocket" style="margin-right:10px;"></i>Schedule a Free Demo</a>
            </div>
        </div>
    </section>

  <!-- ======================== FOOTER ======================== -->
    
</main>
@endsection
