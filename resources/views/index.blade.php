@extends('layouts.app')
@section('title','Dhronix Bharat Technologies | IT Solutions')
@section('content')
    <section class="hero-section hero" id="home"
        style="background-image: url('assets/hero2.png');background-repeat: no-repeat;
       background-size:100% 90%;">

        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-badge"><i class="fa-solid fa-award"></i> Leading IT Technology Partner</span>
                <h1 class="animate-fade-up delay-1">Next-Gen Software <br>Platform for <br><span class="highlight"><span
                            class="typed-text"></span><span class="cursor-blink">|</span></span></h1>

                <!-- Dhronix Content -->
                <p class="lead-text animate-fade-up delay-2">We provide comprehensive software solutions including
                    Nidhi
                    Software,
                    NBFC Software, E-commerce Platforms, ERP Systems, and Custom Software Development.</p>

                <div class="hero-input-group animate-fade-up delay-3">
                    <div class="input-wrapper">
                        <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon">
                        <input type="text" placeholder="What software do you need?" readonly>
                        <button class="search-icon-btn"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="hero-btns animate-fade-up delay-4">
                    <a href="contact.html" class="btn btn-primary-solid">Schedule a Demo</a>
                    <a href="services.html" class="btn btn-outline-light-custom">Start Your Business</a>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="hero-visual">

                <div class="floating-card card-one"><i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <strong>Secure Platform</strong>
                        <span>Enterprise Security</span>
                    </div>

                </div>
                <div class="floating-card card-two"><i class="fa-solid fa-chart-line"></i>
                    <div>
                        <strong>Business Growth</strong>
                        <span>Smart Analytics</span>
                    </div>

                </div>
                <div class="floating-card card-three"><i class="fa-solid fa-cloud"></i>
                    <div>
                        <strong>Cloud Ready</strong>
                    </div>

                </div>

            </div>
        </div>

        <!-- Partners Strip -->
        <div class="partners-strip animate-fade-up delay-4">
            <div class="container partners-flex">
                <p class="text-center text-uppercase  fw-semibold mt-4"
                    style="color:var(--text-muted); letter-spacing:1px;"><strong>Trusted by</strong>
                    <b style="color: var(--orange);">200+</b> IT Brands &nbsp;•&nbsp;
                    <b style="color: var(--orange);">100+</b> Live Projects &nbsp;•&nbsp;
                    <b style="color: var(--orange);">10+</b> Years Experience
                </p>
            </div>
        </div>

    </section>
    <!-- <section class="hero-section hero" id="home">
        <div class="hero-bg-pattern"></div>
        <div class="container hero-container">
            <div class="hero-content">
                <span class="hero-badge"><i class="fa-solid fa-award"></i> Leading IT Technology Partner</span>
                <h1 class="animate-fade-up delay-1">Next-Gen Software <br>Platform for <br><span class="highlight"><span
                            class="typed-text"></span><span class="cursor-blink">|</span></span></h1>

               \
                <p class="lead-text animate-fade-up delay-2">We provide comprehensive software solutions including Nidhi
                    Software,
                    NBFC Software, E-commerce Platforms, ERP Systems, and Custom Software Development.</p>

                <div class="hero-input-group animate-fade-up delay-3">
                    <div class="input-wrapper">
                        <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon">
                        <input type="text" placeholder="What software do you need?" readonly>
                        <button class="search-icon-btn"><i class="fas fa-arrow-right"></i></button>
                    </div>
                </div>

                <div class="hero-btns animate-fade-up delay-4">
                    <a href="contact.html" class="btn btn-primary-solid">Schedule a Demo</a>
                    <a href="services.html" class="btn btn-outline-light-custom">Start Your Business</a>
                </div>
            </div>

            <div class="hero-visual">

                <div class="visual-circle"></div>


                <div class="floating-card card-one"><i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <strong>Secure Platform</strong>
                        <span>Enterprise Security</span>
                    </div>

                </div>
                <div class="floating-card card-two"><i class="fa-solid fa-chart-line"></i>
                    <div>
                        <strong>Business Growth</strong>
                        <span>Smart Analytics</span>
                    </div>

                </div>
                <div class="floating-card card-three"><i class="fa-solid fa-cloud"></i>
                    <div>
                        <strong>Cloud Ready</strong>
                    </div>

                </div>
                <div class="slide-window">
                    <div class="slide active"> <img
                            src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?auto=format&fit=crop&w=1200&q=85"
                            alt="Business Technology">
                        <div class="slide-overlay"></div>
                        <div class="slide-caption"> <small>Business Technology</small>
                            <h3>Powerful Digital Platforms</h3>
                        </div>
                    </div>
                    <div class="slide"> <img
                            src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?auto=format&fit=crop&w=1200&q=85"
                            alt="Enterprise Software">
                        <div class="slide-overlay"></div>
                        <div class="slide-caption"> <small>Enterprise Solutions</small>
                            <h3>Technology That Scales</h3>
                        </div>
                    </div>
                    <div class="slide"> <img
                            src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1200&q=85"
                            alt="Analytics Dashboard">
                        <div class="slide-overlay"></div>
                        <div class="slide-caption"> <small>Smart Analytics</small>
                            <h3>Data Driven Decisions</h3>
                        </div>
                    </div>
                    <div class="slide"> <img
                            src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=1200&q=85"
                            alt="Cloud Technology">
                        <div class="slide-overlay"></div>
                        <div class="slide-caption"> <small>Cloud Technology</small>
                            <h3>Secure Cloud Infrastructure</h3>
                        </div>
                    </div>
                    <div class="slider-dots"> <span class="slider-dot active"></span>
                        <span class="slider-dot"></span>
                        <span class="slider-dot"></span>
                        <span class="slider-dot"></span>
                    </div>

                </div>

            </div>
        </div>

        <div class="partners-strip animate-fade-up delay-4">
            <div class="container partners-flex">
                <p class="text-center text-uppercase  fw-semibold mt-4"
                    style="color:var(--text-muted); letter-spacing:1px;"><strong>Trusted by</strong>
                    <b style="color: var(--orange);">200+</b> IT Brands &nbsp;•&nbsp;
                    <b style="color: var(--orange);">100+</b> Live Projects &nbsp;•&nbsp;
                    <b style="color: var(--orange);">10+</b> Years Experience
                </p>
            </div>
        </div>

    </section> -->

    <!-- 2. Stats Section -->

    <section class="stats-section section-padding-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card animate-on-scroll">
                    <div class="stat-icon"><i class="fas fa-laptop-code"></i></div>
                    <div class="stat-text">
                        <h3>50+</h3>
                        <p>Custom Softwares</p>
                    </div>
                </div>
                <div class="stat-card animate-on-scroll delay-1">
                    <div class="stat-icon"><i class="fas fa-users"></i></div>
                    <div class="stat-text">
                        <h3>200+</h3>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="stat-card animate-on-scroll delay-2">
                    <div class="stat-icon"><i class="fas fa-headset"></i></div>
                    <div class="stat-text">
                        <h3>24/7</h3>
                        <p>Dedicated Support</p>
                    </div>
                </div>
                <div class="stat-card animate-on-scroll delay-3">
                    <div class="stat-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="stat-text">
                        <h3>100%</h3>
                        <p>Data Security</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Industries Section -->

    <section class="industries-section section-padding">
        <div class="section-decor-curve"></div>
        <div class="container">
            <div class="section-header text-center animate-on-scroll">
                <span class="section-label">INDUSTRIES</span>
                <h2>Perfect for a broad range of businesses or <br> brands including:</h2>
            </div>
            <div class="industries-grid">

                <div class="industry-card animate-on-scroll">
                    <div class="img-wrapper"><img
                            src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop"
                            alt="Finance"></div>
                    <div class="industry-footer">
                        <div class="industry-left">
                            <span class="industry-icon"><i class="fas fa-building"></i></span>
                            <span class="industry-title">Financial (NBFC/Nidhi)</span>
                        </div>
                        <a href="#" class="industry-arrow"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="industry-card animate-on-scroll delay-1">
                    <div class="img-wrapper"><img
                            src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                            alt="Retail"></div>
                    <div class="industry-footer">
                        <div class="industry-left">
                            <span class="industry-icon"><i class="fas fa-shopping-cart"></i></span>
                            <span class="industry-title">Retail & eCommerce</span>
                        </div>
                        <a href="#" class="industry-arrow"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="industry-card animate-on-scroll delay-2">
                    <div class="img-wrapper"><img
                            src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=1470&auto=format&fit=crop"
                            alt="Enterprise"></div>
                    <div class="industry-footer">
                        <div class="industry-left">
                            <span class="industry-icon"><i class="fas fa-industry"></i></span>
                            <span class="industry-title">Manufacturing (ERP)</span>
                        </div>
                        <a href="#" class="industry-arrow"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="industry-card animate-on-scroll delay-3">
                    <div class="img-wrapper"><img
                            src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=1470&auto=format&fit=crop"
                            alt="Agency"></div>
                    <div class="industry-footer">
                        <div class="industry-left">
                            <span class="industry-icon"><i class="fas fa-briefcase"></i></span>
                            <span class="industry-title">Service Agencies</span>
                        </div>
                        <a href="#" class="industry-arrow"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Dark Solutions Section -->

    <section class="solutions dark-section-services">
        <!-- Background Video -->
        <video class="solutions-video" autoplay muted loop playsinline>
            <source src="https://ik.imagekit.io/skxiwi7ro/DBT_Media/service.mp4" type="video/mp4">
        </video>

        <div class="container">
            <div class="section-header text-center animate-on-scroll">
                <span class="section-label">Services</span>
                <br />
                <span class="badge badge-dark">Seamless Integration & Customization</span>
                <h2 class="text-white">All Types of Software Services Under <br>One Umbrella</h2>
            </div>

            <div class="service-grid services-carousel">

                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fas fa-laptop-code"></i>
                    </div>
                    <h3>Nidhi Software</h3>
                    <p>
                        Gain access to robust, secure, and compliant Nidhi Company software to manage operations
                        for your clients.
                    </p><a href="services.html" class="card-link">Explore Software &rarr;</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-landmark"></i>
                    </div>
                    <h3>NBFC Software</h3>
                    <p>
                        Find the best-value NBFC solutions tailored for your loan management, EMI tracking, and business
                        needs.
                    </p>
                    <a href="services.html" class="card-link">Browse Solutions &rarr;</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-file-invoice-dollar"></i>
                    </div>
                    <h3>ERP Accounting</h3>
                    <p>
                        Easy and convenient ERP accounting software with reliable billing and inventory modules at your
                        fingertips.
                    </p>
                    <a href="services.html" class="card-link">View ERP &rarr;</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <h3>eCommerce</h3>
                    <p>
                        Offer robust domestic & international eCommerce platforms to give online shopping
                        experiences.
                    </p>
                    <a href="services.html" class="card-link">View eCommerce &rarr;</a>
                </div>

                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-bullhorn"></i>
                    </div>
                    <h3>Digital Marketing</h3>
                    <p>
                        Grow your business with powerful digital marketing,
                        SEO, social media and performance marketing solutions.
                    </p>
                    <a href="services.html" class="card-link"> Explore Marketing &rarr;</a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h3>Mobile Application</h3>
                    <p>
                        Build modern, scalable and user-friendly mobile
                        applications for Android and iOS platforms.
                    </p>
                    <a href="services.html" class="card-link"> Explore Apps &rarr;</a>
                </div>
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i class="fa-solid fa-code"></i>
                    </div>
                    <h3>Custom Software</h3>
                    <p>
                        Get custom-built software solutions designed around
                        your business requirements and workflow.
                    </p>
                    <a href="services.html" class="card-link">Build Software &rarr;</a>
                </div>

            </div>

        </div>
    </section>


    <!-- 5. Features Section (Everything you need in one solution) -->
    <section class="features-section section-padding">
        <div class="container features-container">
            <div class="features-content animate-on-scroll">
                <span class="section-label">WHY CHOOSE US</span>
                <h2>All You Need One Solution</h2>
                <p>E-commerce software platform that gives you full control over brand, operations, pricing,
                    analytics, marketing, and more.</p>

                <div class="dhronix-howwork-area">

                    <div class="dhronix-process-list features-list">

                        <!-- STEP 01 -->
                        <div class="dhronix-process-item">
                            <div class="dhronix-process-number"><i class="fas fa-paint-brush fs-6"></i></div>

                            <div>
                                <h4>Customise Your Brand</h4>
                                <p>Control fonts, colors, featured products, and UI flow.</p>
                            </div>
                        </div>

                        <!-- STEP 02 -->
                        <div class="dhronix-process-item">
                            <div class="dhronix-process-number"><i class="fas fa-layer-group fs-6"></i></div>


                            <div>
                                <h4>Robust Modular Architecture</h4>
                                <p>Connect to thousands of APIs, modules, and gateways.</p>
                            </div>
                        </div>

                        <!-- STEP 03 -->
                        <div class="dhronix-process-item">
                            <div class="dhronix-process-number"><i class="fas fa-chart-bar fs-6"></i></div>

                            <div>
                                <h4>Flexible Revenue Controls</h4>
                                <p>Easily set rules for margins, discounts, and markups.</p>
                            </div>
                        </div>

                        <!-- STEP 04 -->
                        <div class="dhronix-process-item">
                            <div class="dhronix-process-number"><i class="fas fa-chart-bar fs-6"></i></div>

                            <div>
                                <h4>Advanced Reporting & Analytics</h4>
                                <p>Get complete visibility into traffic, conversion, and revenue.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="features-image animate-on-scroll delay-2">
                <img src="assets/choose.png" alt="Software Dashboard" class="laptop-img">

                <!-- Top Right -->
                <div class="floating-card card-three">
                    <i class="fa-solid fa-bolt"></i>
                    <div>
                        <strong>Better Performance</strong>
                        <span>Faster & Smarter</span>
                    </div>
                </div>

                <!-- Left Center -->
                <div class="floating-card card-one-choose">
                    <i class="fa-solid fa-shield-halved"></i>
                    <div>
                        <strong>Maximum Security</strong>
                        <span>Your Data, Our Priority</span>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 6. CTA Banner Section -->
    <section class="cta-section section-padding">
        <div class="container">
            <div class="cta-box animate-on-scroll">
                <div class="cta-text">
                    <span class="section-label">OUR PARTNER</span><br />
                    <span>LET'S BUILD SOMETHING GREAT</span>
                    <h2 class="section-title">IT Tech Partner</h2>
                    <p>With Dhronix Tech, you don’t just get software— <br /> you get an ecosystem. Launch faster,
                        <br /> scale
                        smarter, and grow without limits.
                    </p>
                    <a href="contact.html" class="btn btn-primary-solid">Book a demo &rarr;</a>
                </div>
                <div class="cta-graphic">
                    <!-- Placeholder for the illustration -->
                    <!-- <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1469&auto=format&fit=crop"
                        alt="Partner"> -->

                    <div class="dhronix-scroll-gallery">

                        <!-- COLUMN 1 : UP -->
                        <div class="dhronix-gallery-column dhronix-gallery-up">
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800"
                                    alt="">
                            </div>

                            <!-- Duplicate -->
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1521737711867-e3b97375f902?w=800"
                                    alt="">
                            </div>
                        </div>


                        <!-- COLUMN 2 : DOWN -->
                        <div class="dhronix-gallery-column dhronix-gallery-down">
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800"
                                    alt="">
                            </div>

                            <!-- Duplicate -->
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=800"
                                    alt="">
                            </div>
                        </div>


                        <!-- COLUMN 3 : UP -->
                        <div class="dhronix-gallery-column dhronix-gallery-up dhronix-gallery-up-delay">
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800"
                                    alt="">
                            </div>

                            <!-- Duplicate -->
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800"
                                    alt="">
                            </div>
                        </div>


                        <!-- COLUMN 4 : DOWN -->
                        <div class="dhronix-gallery-column dhronix-gallery-down dhronix-gallery-down-delay">
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366811353-6870744d04b2?w=800"
                                    alt="">
                            </div>

                            <!-- Duplicate -->
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=800"
                                    alt="">
                            </div>
                            <div class="dhronix-gallery-card">
                                <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?w=800"
                                    alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
