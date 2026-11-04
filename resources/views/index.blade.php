@extends('layouts.app')
@section('title','Dhronix Bharat Technologies | IT Solutions')
@section('content')
<section class="hero-section hero home-hero-carousel is-loading" id="home" style="background-image: url('assets/hero2.png');background-repeat: no-repeat;
       background-size:100% 90%;" data-hero-carousel aria-roledescription="carousel" aria-label="Dhronix software solutions">
    <div class="hero-carousel-viewport">
        <article class="hero-slide is-active" data-hero-slide role="group" aria-roledescription="slide" aria-label="1 of 3" aria-hidden="false" aria-labelledby="hero-slide-title-1">
            <div class="container hero-container">
                <div class="hero-content">
                    <span class="hero-badge animate-fade-up"><i class="fa-solid fa-award"></i> Leading IT Technology Partner</span>
                    <h1 class="hero-slide-title" id="hero-slide-title-1" aria-label="Next-Gen Software for your business">Next-Gen Software<br>for <span class="highlight"><span class="typed-text typed-text--financial" data-typed-words="your business.|Nidhi Software|NBFC Software|ERP Accounting|eCommerce|Mobile Apps|Cloud Hosting" aria-hidden="true"></span></span><span class="hero-title-overlays" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span></span></h1>

                    <p class="lead-text animate-fade-up delay-2">We provide comprehensive software solutions including
                        Nidhi
                        Software,
                        NBFC Software, E-commerce Platforms, ERP Systems, and Custom Software Development.</p>
                    <div class="hero-input-group">
                        <div class="input-wrapper">
                            <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon">
                            <input type="text" placeholder="What software do you need?" readonly>
                            <button class="search-icon-btn" type="button" aria-label="Explore software solutions"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="hero-btns">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid">Schedule a Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-outline-light-custom">Explore Solutions</a>
                    </div>
                </div>
                <div class="hero-visual" aria-hidden="true">
                    <div class="floating-card card-one"><i class="fa-solid fa-shield-halved"></i>
                        <div><strong>Secure Platform</strong><span>Enterprise Security</span></div>
                    </div>
                    <div class="floating-card card-two"><i class="fa-solid fa-chart-line"></i>
                        <div><strong>Business Growth</strong><span>Smart Analytics</span></div>
                    </div>
                    <div class="floating-card card-three"><i class="fa-solid fa-cloud"></i>
                        <div><strong>Cloud Ready</strong></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="hero-slide" data-hero-slide role="group" aria-roledescription="slide" aria-label="2 of 3" aria-hidden="true" aria-labelledby="hero-slide-title-2" inert>
            <div class="container hero-container">
                <div class="hero-content">
                    <span class="hero-badge animate-fade-up"><i class="fa-solid fa-award"></i>  BUSINESS OPERATIONS</span>
                    <h1 class="hero-slide-title" id="hero-slide-title-2" aria-label="Every operation, in sync">Every operation,<br><span class="highlight"><span class="typed-text typed-text--operations" data-typed-words="in sync.|connected.|under control." aria-hidden="true"></span></span><span class="hero-title-overlays" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span></span></h1>

                    <p class="lead-text animate-fade-up delay-2">Bring accounting, inventory, teams, and reporting together with a smarter ERP workflow.</p>
                    <div class="hero-input-group">
                        <div class="input-wrapper">
                            <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon">
                            <input type="text" placeholder="What software do you need?" readonly>
                            <button class="search-icon-btn" type="button" aria-label="Explore software solutions"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="hero-btns">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid">Schedule a Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-outline-light-custom">Explore Solutions</a>
                    </div>
                </div>
                <div class="hero-visual" aria-hidden="true">
                    <div class="floating-card card-one"><i class="fa-solid fa-shield-halved"></i>
                        <div><strong>Secure Platform</strong><span>Enterprise Security</span></div>
                    </div>
                    <div class="floating-card card-two"><i class="fa-solid fa-chart-line"></i>
                        <div><strong>Business Growth</strong><span>Smart Analytics</span></div>
                    </div>
                    <div class="floating-card card-three"><i class="fa-solid fa-cloud"></i>
                        <div><strong>Cloud Ready</strong></div>
                    </div>
                </div>
            </div>
        </article>
        <article class="hero-slide" data-hero-slide role="group" aria-roledescription="slide" aria-label="3 of 3" aria-hidden="true" aria-labelledby="hero-slide-title-3" inert>
            <div class="container hero-container">
                <div class="hero-content">
                      <span class="hero-badge animate-fade-up"><i class="fa-solid fa-award"></i>  DIGITAL EXPERIENCES</span>
                    <h1 class="hero-slide-title" id="hero-slide-title-3" aria-label="Make every interaction count">Make every<br>interaction <span class="highlight"><span class="typed-text typed-text--digital" data-typed-words="count.|stand out|grow with you" aria-hidden="true"></span></span><span class="hero-title-overlays" aria-hidden="true"><span></span><span></span><span></span><span></span><span></span><span></span></span></h1>

                    <p class="lead-text animate-fade-up delay-2">Launch polished eCommerce, cloud, and mobile experiences that are ready to grow with you.</p>
                   
                    <div class="hero-input-group">
                        <div class="input-wrapper">
                            <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon">
                            <input type="text" placeholder="What software do you need?" readonly>
                            <button class="search-icon-btn" type="button" aria-label="Explore software solutions"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="hero-btns">
                        <a href="{{ route('contact') }}" class="btn btn-primary-solid">Schedule a Demo</a>
                        <a href="{{ route('services') }}" class="btn btn-outline-light-custom">Explore Solutions</a>
                    </div>
                </div>
                <div class="hero-visual" aria-hidden="true">
                    <div class="floating-card card-one"><i class="fa-solid fa-shield-halved"></i>
                        <div><strong>Secure Platform</strong><span>Enterprise Security</span></div>
                    </div>
                    <div class="floating-card card-two"><i class="fa-solid fa-chart-line"></i>
                        <div><strong>Business Growth</strong><span>Smart Analytics</span></div>
                    </div>
                    <div class="floating-card card-three"><i class="fa-solid fa-cloud"></i>
                        <div><strong>Cloud Ready</strong></div>
                    </div>
                </div>
            </div>
        </article>
        <div class="hero-carousel-controls" aria-label="Hero slide controls">
            <span class="hero-carousel-count"><span data-hero-current>01</span><span aria-hidden="true"> / 03</span></span>
            <div class="hero-carousel-dots" aria-label="Choose a slide">
                <button type="button" data-hero-index="0" aria-label="Show slide 1" aria-current="true"></button>
                <button type="button" data-hero-index="1" aria-label="Show slide 2" aria-current="false"></button>
                <button type="button" data-hero-index="2" aria-label="Show slide 3" aria-current="false"></button>
            </div>
            <button class="hero-carousel-arrow" type="button" data-hero-prev aria-label="Previous slide"><i class="fas fa-arrow-left" aria-hidden="true"></i></button>
            <button class="hero-carousel-arrow" type="button" data-hero-next aria-label="Next slide"><i class="fas fa-arrow-right" aria-hidden="true"></i></button>
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

<button class="home-back-to-top" type="button" data-back-to-top aria-label="Back to top">
    <i class="fas fa-arrow-up" aria-hidden="true"></i>
</button>

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
                        <span class="industry-title">Financial Software</span>
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
        <!-- <source src="https://ik.imagekit.io/skxiwi7ro/DBT_Media/services.mp4" type="video/mp4"> -->
        <source src="https://ik.imagekit.io/skxiwi7ro/DBT_Media/service.mp4" type="video/mp4">
    </video>

    <div class="container">
        <div class="section-header text-center animate-on-scroll">
            <span class="section-label">Services</span>
            <br />
            <span class="badge badge-dark">Seamless Integration & Customization</span>
            <h2 class="text-white">All Types of Software Services Under <br>One Umbrella</h2>
        </div>

        <div class="service-grid services-carousel animate-on-scroll delay-1">

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fas fa-laptop-code"></i>
                </div>
                <h3>Nidhi Software</h3>
                <p>
                    Gain access to robust, secure, and compliant Nidhi Company software to manage operations
                    for your clients.
                </p><a href="{{ route('services') }}" class="card-link">Explore Software &rarr;</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-landmark"></i>
                </div>
                <h3>NBFC Software</h3>
                <p>
                    Find the best-value NBFC solutions tailored for your loan management, EMI tracking, and business
                    needs.
                </p>
                <a href="{{ route('services') }}" class="card-link">Browse Solutions &rarr;</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                </div>
                <h3>ERP Accounting</h3>
                <p>
                    Easy and convenient ERP accounting software with reliable billing and inventory modules at your
                    fingertips.
                </p>
                <a href="{{ route('services') }}" class="card-link">View ERP &rarr;</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-cart-shopping"></i>
                </div>
                <h3>eCommerce</h3>
                <p>
                    Offer robust domestic & international eCommerce platforms to give online shopping
                    experiences.
                </p>
                <a href="{{ route('services') }}" class="card-link">View eCommerce &rarr;</a>
            </div>

            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-bullhorn"></i>
                </div>
                <h3>Digital Marketing</h3>
                <p>
                    Grow your business with powerful digital marketing,
                    SEO, social media and performance marketing solutions.
                </p>
                <a href="{{ route('services') }}" class="card-link"> Explore Marketing &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>
                <h3>Mobile Application</h3>
                <p>
                    Build modern, scalable and user-friendly mobile
                    applications for Android and iOS platforms.
                </p>
                <a href="{{ route('services') }}" class="card-link"> Explore Apps &rarr;</a>
            </div>
            <div class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-code"></i>
                </div>
                <h3>Custom Software</h3>
                <p>
                    Get custom-built software solutions designed around
                    your business requirements and workflow.
                </p>
                <a href="{{ route('services') }}" class="card-link">Build Software &rarr;</a>
            </div>

        </div>

    </div>
</section>


<!-- 5. Features Section (Everything you need in one solution) -->
<section class="features-section section-padding">
    <div class="container">
        <div class="section-header text-center animate-on-scroll">
            <span class="section-label">Why Choose Us</span>
            <br />
            <h2 class="mb-0">Technology shaped around your business</h2>
            <p class="pb-4">Explore secure, practical software solutions that simplify operations and help your business grow.</p>
        </div>

        <div class="why-service-tabs animate-on-scroll" data-service-tabs>
            <div class="why-service-tab-list" role="tablist" aria-label="Our software services"
                aria-orientation="vertical">
                <button class="why-service-tab is-active" id="service-tab-nidhi" type="button" role="tab"
                    aria-selected="true" aria-controls="why-service-panel" tabindex="0"
                    data-title="Nidhi Software"
                    data-description="Manage members, savings, deposits, and loan operations in one secure platform. Automated workflows and clear reports help your Nidhi company serve members efficiently."
                    data-image="{{ asset('assets/service2.png') }}"
                    data-image-alt="Nidhi, NBFC, ERP, and eCommerce software solutions">
                    <i class="fas fa-users" aria-hidden="true"></i><span>Nidhi Software</span>
                </button>
                <button class="why-service-tab" id="service-tab-nbfc" type="button" role="tab"
                    aria-selected="false" aria-controls="why-service-panel" tabindex="-1"
                    data-title="NBFC Software"
                    data-description="Streamline loan origination, customer records, EMI schedules, collections, and operational reporting with software designed for lending teams."
                    data-image="{{ asset('assets/service6.png') }}"
                    data-image-alt="Business software dashboard and digital lending tools">
                    <i class="fas fa-landmark" aria-hidden="true"></i><span>NBFC Software</span>
                </button>
                <button class="why-service-tab" id="service-tab-erp" type="button" role="tab"
                    aria-selected="false" aria-controls="why-service-panel" tabindex="-1"
                    data-title="ERP Accounting"
                    data-description="Connect accounting, billing, inventory, and day-to-day workflows in one system. Get a clearer view of business operations and make informed decisions."
                    data-image="{{ asset('assets/service5.png') }}"
                    data-image-alt="Business analytics dashboard for ERP and accounting">
                    <i class="fas fa-file-invoice-dollar" aria-hidden="true"></i><span>ERP Accounting</span>
                </button>
                <button class="why-service-tab" id="service-tab-ecommerce" type="button" role="tab"
                    aria-selected="false" aria-controls="why-service-panel" tabindex="-1"
                    data-title="eCommerce Platforms"
                    data-description="Launch responsive B2B or B2C shopping experiences with product catalogs, order management, and secure checkout integrations tailored to your business."
                    data-image="{{ asset('assets/service4.png') }}"
                    data-image-alt="eCommerce sales and analytics dashboard">
                    <i class="fas fa-cart-shopping" aria-hidden="true"></i><span>eCommerce</span>
                </button>
                <button class="why-service-tab" id="service-tab-mobile" type="button" role="tab"
                    aria-selected="false" aria-controls="why-service-panel" tabindex="-1"
                    data-title="Mobile Applications"
                    data-description="Give customers and teams a simple way to connect with your business through Android and iOS apps with thoughtful interfaces and secure integrations."
                    data-image="{{ asset('assets/service3.png') }}"
                    data-image-alt="Mobile and custom software development workspace">
                    <i class="fas fa-mobile-screen-button" aria-hidden="true"></i><span>Mobile Apps</span>
                </button>
                <button class="why-service-tab" id="service-tab-custom" type="button" role="tab"
                    aria-selected="false" aria-controls="why-service-panel" tabindex="-1"
                    data-title="Custom Software"
                    data-description="Replace manual work with software built around your processes, requirements, and future plans—from focused tools to connected business platforms."
                    data-image="{{ asset('assets/service1.png') }}"
                    data-image-alt="Software team collaborating on custom business solutions">
                    <i class="fas fa-code" aria-hidden="true"></i><span>Custom Software</span>
                </button>
            </div>

            <div class="why-service-panel" id="why-service-panel" role="tabpanel"
                aria-labelledby="service-tab-nidhi" tabindex="0">
                <div class="why-service-copy">
                    <span class="why-service-kicker">SOFTWARE FOR YOUR NEXT STAGE</span>
                    <h3 data-service-title>Nidhi Software</h3>
                    <p data-service-description>Manage members, savings, deposits, and loan operations in one secure platform. Automated workflows and clear reports help your Nidhi company serve members efficiently.</p>
                    <a href="{{ route('services') }}" class="why-service-link">
                        Explore our services <i class="fas fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </div>

                <div class="features-image">
                    <img src="{{ asset('assets/service2.png') }}"
                        alt="Nidhi, NBFC, ERP, and eCommerce software solutions"
                        class="laptop-img" data-service-image>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('[data-service-tabs]').forEach((tabs) => {
        const tabButtons = Array.from(tabs.querySelectorAll('[role="tab"]'));
        const panel = tabs.querySelector('[role="tabpanel"]');
        const title = panel.querySelector('[data-service-title]');
        const description = panel.querySelector('[data-service-description]');
        const image = panel.querySelector('[data-service-image]');

        const activateTab = (tab) => {
            tabButtons.forEach((button) => {
                const isActive = button === tab;
                button.classList.toggle('is-active', isActive);
                button.setAttribute('aria-selected', String(isActive));
                button.tabIndex = isActive ? 0 : -1;
            });

            panel.setAttribute('aria-labelledby', tab.id);
            panel.classList.add('is-changing');
            window.requestAnimationFrame(() => {
                title.textContent = tab.dataset.title;
                description.textContent = tab.dataset.description;
                image.src = tab.dataset.image;
                image.alt = tab.dataset.imageAlt;
                panel.classList.remove('is-changing');
            });
        };

        tabButtons.forEach((tab, index) => {
            tab.addEventListener('click', () => activateTab(tab));
            tab.addEventListener('keydown', (event) => {
                let nextIndex;

                if (event.key === 'ArrowDown' || event.key === 'ArrowRight') {
                    nextIndex = (index + 1) % tabButtons.length;
                } else if (event.key === 'ArrowUp' || event.key === 'ArrowLeft') {
                    nextIndex = (index - 1 + tabButtons.length) % tabButtons.length;
                } else if (event.key === 'Home') {
                    nextIndex = 0;
                } else if (event.key === 'End') {
                    nextIndex = tabButtons.length - 1;
                } else {
                    return;
                }

                event.preventDefault();
                tabButtons[nextIndex].focus();
                activateTab(tabButtons[nextIndex]);
            });
        });
    });
</script>

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
                <a href="{{ route('contact') }}" class="btn btn-primary-solid">Book a demo &rarr;</a>
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