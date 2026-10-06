@extends('layouts.app')
@section('title','About Us')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">

<!-- Page Header (DBT layout) -->
<div class="page-header">
    <div class="container">
        <h1 class="animate-fade-up">About <span style="color: var(--secondary-color);">Us</span></h1>
        <h5 class="text-silver mt-3">Empowering Businesses with <br />Innovative Technology Solutions</h5>
        <p class="text-silver mt-3">At Dhronix Technologies, we deliver innovative <br /> software solutions that help businesses grow and succeed.
        </p>

        <ul class="breadcrumb animate-fade-up delay-1">
            <li><a href="index.html"> Home</a></li>
            <li>/</li>
            <li class="active">About Us</li>
        </ul>
    </div>
</div>

<!-- 1. About Us Section -->
<section class="section-padding">
    <div class="container about-flex">
        <div class="about-us-images animate-on-scroll">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                class="img-1" alt="Team">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop"
                class="img-2" alt="Office">
        </div>
        <div class="about-us-content animate-on-scroll delay-1">
            <span class="sub-heading">ABOUT US</span>
            <h2 style="font-size: 38px; margin-bottom: 20px;">Smart solutions <br> <span class="highlight">for your
                    business</span></h2>
            <p>Welcome to Dhronix Tech, a leading provider of secure and seamless IT solutions. We are
                revolutionizing the way individuals and businesses conduct digital operations with our cutting-edge
                technology and robust infrastructure.</p>

            <div class="about-info-boxes">
                <div class="about-info-box">
                    <div class="icon"><i class="fas fa-bullseye"></i></div>
                    <div>
                        <h3>IT Strategies</h3>
                        <p>We bring fresh idea and smart solutions.</p>
                    </div>
                </div>
                <div class="about-info-box">
                    <div class="icon"><i class="fas fa-headset"></i></div>
                    <div>
                        <h3>Integrity</h3>
                        <p>We build trust through transparency and ethics</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Our Approach Section -->
<section class="section-padding" style="background-color: #fafbfc;">
    <div class="container">
        <div class="about-section-heading approach-section-heading animate-on-scroll">
            <div>
                <span class="sub-heading">OUR APPROACH</span>
                <h2 style="font-size: 36px; margin:0;">Customized strategies for <br><span class="highlight">digital
                        success</span></h2>
            </div>
            <div><a href="contact.html" class="btn btn-dark-solid">Contact Now</a></div>
        </div>
        <div class="approach-cards">
            <div class="approach-card animate-on-scroll">
                <div class="approach-content">
                    <!-- <div class="icon"><i class="fas fa-rocket"></i></div> -->
                    <h3>Our Mission</h3>
                    <p style="font-size: 14px;">We aim to revolutionize businesses with secure, innovative software
                        solutions that drive growth and operational efficiency.</p>
                </div>
                <div class="approach-image-frame">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
                        class="approach-img" alt="Mission">
                </div>
            </div>
            <div class="approach-card animate-on-scroll delay-1">
                <div class="approach-content">
                    <!-- <div class="icon"><i class="fas fa-eye"></i></div> -->
                    <h3>Our Vision</h3>
                    <p style="font-size: 14px;">Our vision is to lead IT innovation, transforming how businesses
                        manage their ecosystems and transactions with ease.</p>
                </div>
                <div class="approach-image-frame">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                        class="approach-img" alt="Vision">
                </div>
            </div>
            <div class="approach-card animate-on-scroll delay-2">
                <div class="approach-content">
                    <!-- <div class="icon"><i class="fas fa-history"></i></div> -->
                    <h3>Our History</h3>
                    <p style="font-size: 14px;">Founded with a passion for innovation and a commitment to
                        excellence, we set out to transform the digital software landscape.</p>
                </div>
                <div class="approach-image-frame">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
                        class="approach-img" alt="History">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Our Feature Section -->
<section class="section-padding dark-section feature-sections">
    <div class="container">
        <div class="about-section-heading animate-on-scroll">
            <div>
                <span class="sub-heading" style="color:var(--white); opacity:0.8;">OUR FEATURE</span>
                <h2 class="text-white" style="font-size: 36px; margin:0;">Key features of our IT <br><span
                        class="highlight">and consulting</span></h2>
            </div>
            <div><a href="contact.html" class="btn btn-primary-solid">Contact Now</a></div>
        </div>
        <div class="feature-image-stack" aria-hidden="true">
            <figure class="feature-stack-card" data-position="0"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="1"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="2"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="3"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="4"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="5"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
            <figure class="feature-stack-card" data-position="6"><img src="{{ asset('assets/choose.png') }}" alt=""></figure>
        </div>
    </div>
</section>

<!-- 5. What We Do Section -->
<section class="section-padding" style="background-color: #fafbfc;">
    <div class="container about-flex">
        <div class="animate-on-scroll">
            <span class="sub-heading">WHAT WE DO</span>
            <h2 style="font-size: 38px; margin-bottom: 20px;">Driving digital growth <br><span class="highlight">and
                    success</span></h2>
            <p>We provide expert software and consulting solutions designed to foster growth, stability, and
                long-term success across multiple platforms.</p>

            <div class="dhronix-howwork-area">

                <div class="dhronix-process-list features-list">

                    <!-- STEP 01 -->
                    <div class="dhronix-process-item">
                        <div class="dhronix-process-number"><i class="fas fa-paint-brush fs-6"></i></div>

                        <div>
                            <h4>Best IT Solutions</h4>
                            <p>Control fonts, colors, featured products, and UI flow.</p>
                        </div>
                    </div>

                    <!-- STEP 02 -->
                    <div class="dhronix-process-item">
                        <div class="dhronix-process-number"><i class="fas fa-layer-group fs-6"></i></div>


                        <div>
                            <h4>Cost Effective (Save Money)</h4>
                            <p>Connect to thousands of APIs, modules, and gateways.</p>
                        </div>
                    </div>

                    <!-- STEP 03 -->
                    <div class="dhronix-process-item">
                        <div class="dhronix-process-number"><i class="fas fa-chart-bar fs-6"></i></div>

                        <div>
                            <h4>Quick Support</h4>
                            <p>Easily set rules for margins, discounts, and markups.</p>
                        </div>
                    </div>

                    <!-- STEP 04 -->
                    <div class="dhronix-process-item">
                        <div class="dhronix-process-number"><i class="fas fa-chart-bar fs-6"></i></div>

                        <div>
                            <h4>Secure Architecture</h4>
                            <p>Get complete visibility into traffic, conversion, and revenue.</p>
                        </div>
                    </div>

                </div>
            </div>
           
        </div>

        <div class="about-us-images animate-on-scroll delay-1">
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

<!-- 6. How It Work Section -->
<section class="section-padding">
    <div class="container">
        <div class="animate-on-scroll" style="max-width: 700px; margin-bottom: 28px;">
            <span class="sub-heading">HOW IT WORK</span>
            <h2 style="font-size: 38px; margin-bottom: 20px;">Our process for digital <br><span
                    class="highlight">success</span></h2>
            <p>Our process is designed to guide you every step of the way. From initial
                consultation to personalized software deployment and strategy development.</p>
        </div>

        <div class="how-it-work-layout">
            <div class="how-it-work-visual animate-on-scroll">
                <img id="how-it-work-visual-image"
                    src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop"
                    alt="Initial Consultation">
                <div class="how-it-work-visual-badge">
                    <span class="sub-heading">ACTIVE STEP</span>
                    <strong id="how-it-work-visual-label">Initial Consultation</strong>
                </div>
            </div>

            <div class="how-it-work-steps animate-on-scroll delay-1">
                <button type="button" class="step-item active" data-image="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop" data-title="Initial Consultation" aria-selected="true">
                    <div class="step-copy">
                        <span class="sub-heading">STEP</span>
                        <h3 class="step-title">Initial Consultation</h3>
                        <p>We begin with a one-on-one consultation to understand your digital goals, challenges, and priorities.</p>
                    </div>
                    <div class="step-number">01</div>
                </button>

                <button type="button" class="step-item" data-image="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" data-title="Success Pathway" aria-selected="false">
                    <div class="step-copy">
                        <span class="sub-heading">STEP</span>
                        <h3 class="step-title">Success Pathway</h3>
                        <p>We outline the technical roadmap and select the best software modules to fit your needs.</p>
                    </div>
                    <div class="step-number">02</div>
                </button>

                <button type="button" class="step-item" data-image="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=2070&auto=format&fit=crop" data-title="Growth Strategy" aria-selected="false">
                    <div class="step-copy">
                        <span class="sub-heading">STEP</span>
                        <h3 class="step-title">Growth Strategy</h3>
                        <p>We launch the project and continuously monitor performance to guarantee long-term growth.</p>
                    </div>
                    <div class="step-number">03</div>
                </button>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.step-item');
        const image = document.getElementById('how-it-work-visual-image');
        const title = document.getElementById('how-it-work-visual-label');

        tabs.forEach(function (tab) {
            tab.addEventListener('click', function () {
                tabs.forEach(function (item) {
                    item.classList.remove('active');
                    item.setAttribute('aria-selected', 'false');
                });

                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');

                image.src = tab.dataset.image;
                image.alt = tab.dataset.title;
                title.textContent = tab.dataset.title;
            });
        });
    });
</script>

<!-- 7. Our Testimonial Section -->
<section class="section-padding" style="background-color: #fafbfc;">
    <div class="container">
        <div style="max-width: 600px;" class="animate-on-scroll">
            <span class="sub-heading">OUR TESTIMONIAL</span>
            <h2 style="font-size: 38px; margin-bottom: 20px;">1250+ customers say <br><span class="highlight">about
                    our software</span></h2>
            <p>With over 1,250 satisfied clients, our IT and consulting services have earned praise for reliability,
                personalized guidance, and impactful results.</p>
        </div>

        <div class="testimonial-carousel animate-on-scroll delay-1">
            <div class="testimonial-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"Their Nidhi and ERP solutions have simplified our operations and provided
                    greater ease for our customers. The reliability, security, and positive impact on customer
                    retention have been remarkable."</p>
                <div class="author">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1587&auto=format&fit=crop"
                        alt="Richa">
                    <div>
                        <h4 style="margin:0; font-size:16px;">Richa Singh</h4>
                        <span
                            style="font-size:12px; color:var(--secondary-color); font-weight:600; text-transform:uppercase;">Entrepreneur</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"Choosing Dhronix for our eCommerce development was the best decision. Their
                    technical approach and 24/7 support transformed our online presence and significantly boosted
                    our sales."</p>
                <div class="author">
                    <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1587&auto=format&fit=crop"
                        alt="Amit">
                    <div>
                        <h4 style="margin:0; font-size:16px;">Amit Patel</h4>
                        <span
                            style="font-size:12px; color:var(--secondary-color); font-weight:600; text-transform:uppercase;">CEO,
                            Retail Solutions</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-right quote-icon"></i>
                <p class="test-text">"The onboarding experience was smooth, and the custom modules helped us scale faster while keeping our data and processes secure."</p>
                <div class="author">
                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1587&auto=format&fit=crop"
                        alt="Rahul">
                    <div>
                        <h4 style="margin:0; font-size:16px;">Rahul Sharma</h4>
                        <span
                            style="font-size:12px; color:var(--secondary-color); font-weight:600; text-transform:uppercase;">Operations Head</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection