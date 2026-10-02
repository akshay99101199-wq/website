@extends('layouts.app')
@section('title','Our Services')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/service-page.css') }}">

<!-- Page Header -->
<header class="page-header services-page-header">
    <div class="container">
        <span class="sub-heading">OUR SERVICES</span>
        <h1 class="animate-fade-up">Software for <span>every stage.</span></h1>
        <p class="services-hero-copy">Secure software and technology solutions built around the way your business works.</p>
        <ul class="breadcrumb animate-fade-up delay-1">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>/</li>
            <li class="active">Our Services</li>
        </ul>
    </div>
</header>

<main class="services-page">
<!-- 1. Page Services Section -->
<section class="section-padding" style="background-color: #fafbfc;">
    <div class="container">
        <div class="service-catalog-heading">
            <span class="sub-heading">BUSINESS SYSTEMS</span>
            <h2>Tools for the work <span>you do.</span></h2>
            <p>Choose a focused solution or bring your operations together with one technology partner.</p>
        </div>
        <div class="service-grid">
            <div class="service-item animate-on-scroll">
                <div class="icon-box"><i class="fas fa-laptop-code"></i></div>
                <span class="service-index">01 <i></i> FINANCE</span>
                <h3>Nidhi Software</h3>
                <p>Introducing Nidhi Software by Dhronix Tech - a seamless and secure way to manage your company's
                    daily operations, member accounts, and loans. Experience hassle-free transactions and automated
                    workflows.</p>
                <a href="nidhi-software.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-item animate-on-scroll delay-1">
                <div class="icon-box"><i class="fas fa-university"></i></div>
                <span class="service-index">02 <i></i> LENDING</span>
                <h3>NBFC Software</h3>
                <p>Introducing NBFC Solutions by Dhronix Tech - your one-stop platform for hassle-free loan
                    management, EMI collections, and accounting. Enjoy the convenience of managing everything
                    securely.</p>
                <a href="nbfc-software.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-item animate-on-scroll delay-2">
                <div class="icon-box"><i class="fas fa-file-invoice-dollar"></i></div>
                <span class="service-index">03 <i></i> OPERATIONS</span>
                <h3>ERP Accounting</h3>
                <p>Introducing robust ERP Accounting - the simplest and secure way to manage your enterprise
                    finances, inventory, and billing. Say goodbye to manual ledgers and enjoy the convenience of
                    automation.</p>
                <a href="erp-accounting.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-item animate-on-scroll">
                <div class="icon-box"><i class="fas fa-shopping-cart"></i></div>
                <span class="service-index">04 <i></i> COMMERCE</span>
                <h3>eCommerce App</h3>
                <p>Introducing robust eCommerce platform development - the fastest way to sell locally and
                    internationally. Experience seamless B2B & B2C transactions with our customized storefront
                    solutions.</p>
                <a href="ecommerce.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-item animate-on-scroll delay-1">
                <div class="icon-box"><i class="fas fa-mobile-alt"></i></div>
                <span class="service-index">05 <i></i> MOBILE</span>
                <h3>Mobile Apps</h3>
                <p>Introducing custom Native Mobile Apps - the easiest way to reach your customers on Android and
                    iOS. Enjoy seamless user experiences with our high-performance, flawlessly designed mobile
                    applications.</p>
                <a href="mobile-apps.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="service-item animate-on-scroll delay-2">
                <div class="icon-box"><i class="fas fa-cloud"></i></div>
                <span class="service-index">06 <i></i> CLOUD</span>
                <h3>Cloud Hosting</h3>
                <p>Introducing Enterprise Cloud Hosting - a hassle-free and secure way to deploy your applications
                    with 99.99% uptime. Experience the ease of scaling your digital infrastructure on demand.</p>
                <a href="cloud-hosting.html" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="service-flow-band" aria-labelledby="service-flow-title">
    <div class="container service-flow-inner">
        <div class="service-flow-heading">
            <span>HOW WE WORK</span>
            <h2 id="service-flow-title">From business need to <em>better work.</em></h2>
        </div>
        <ol class="service-flow-list">
            <li><span>01</span><div><h3>Understand</h3><p>Map your goals and workflow.</p></div></li>
            <li><span>02</span><div><h3>Build</h3><p>Shape the right software setup.</p></div></li>
            <li><span>03</span><div><h3>Support</h3><p>Keep your operations moving.</p></div></li>
        </ol>
    </div>
</section>

<!-- 2. What We Do Section -->
<section class="section-padding">
    <div class="container flex-container">
        <div class="service-overview-copy animate-on-scroll">
            <span class="sub-heading">WHAT WE DO</span>
            <h2 class="service-overview-title">One partner for <span>every moving part.</span></h2>
            <p>We connect the software, infrastructure, and support your business needs to work with more clarity and less manual effort.</p>

            <ul class="what-we-do-list service-capability-list">
                <li><i class="fas fa-check-circle"></i> Financial and lending systems</li>
                <li><i class="fas fa-check-circle"></i> Commerce and mobile experiences</li>
                <li><i class="fas fa-check-circle"></i> ERP, cloud, and custom integrations</li>
            </ul>
            <a href="{{ route('contact') }}" class="btn btn-dark-solid mt-3">Discuss your requirements <i class="fas fa-arrow-right"></i></a>
        </div>

        <div class="overlap-images animate-on-scroll delay-1">
            <img src="https://images.unsplash.com/photo-1531498860502-7c67cf02f657?q=80&w=2070&auto=format&fit=crop"
                class="img-1" alt="What we do">
            <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1469&auto=format&fit=crop"
                class="img-2" alt="Working">

            <div class="experience-box">
                <div class="exp-number">10<span style="font-size:30px">+</span></div>
                <div>
                    <h4 style="color:var(--white); margin:0;">Years of experience</h4>
                    <p style="margin:0; font-size:13px; opacity:0.8;">in IT Software</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-padding service-faq-section" aria-labelledby="service-faq-heading">
    <div class="container service-faq-layout">
        <div class="service-faq-heading">
            <span class="sub-heading">FAQ</span>
            <h2 id="service-faq-heading">Questions, <span>answered.</span></h2>
            <p>A few helpful details before we start planning your solution.</p>
            <a href="{{ route('contact') }}" class="service-faq-contact">Still have a question? Contact us <i class="fas fa-arrow-right"></i></a>
        </div>
        <div class="service-faq-list">
            <details class="service-faq-item" open>
                <summary>What kind of software solutions do you offer?</summary>
                <p>We work across Nidhi and NBFC software, ERP accounting, eCommerce, mobile applications, cloud hosting, and custom integrations.</p>
            </details>
            <details class="service-faq-item">
                <summary>Can a solution fit our existing workflow?</summary>
                <p>Yes. We start by understanding your operations and requirements, then shape the implementation around the way your team works.</p>
            </details>
            <details class="service-faq-item">
                <summary>Can you help us choose the right service?</summary>
                <p>Share your goals and current challenges with us. We can discuss the options and recommend a practical starting point.</p>
            </details>
            <details class="service-faq-item">
                <summary>How do we get started?</summary>
                <p>Use the contact form to tell us about your project. Our team will follow up to understand your needs and next steps.</p>
            </details>
        </div>
    </div>
</section>

 </main>

@endsection