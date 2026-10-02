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
                    <div class="icon"><i class="fas fa-rocket"></i></div>
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
                    <div class="icon"><i class="fas fa-eye"></i></div>
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
                    <div class="icon"><i class="fas fa-history"></i></div>
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
<section class="section-padding dark-section">
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

        <div class="feature-list">
            <div class="feature-card dark-card animate-on-scroll">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-cogs"></i></div>
                <h3>Comprehensive Solutions</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">From Nidhi to ERP, we cover it all, ensuring
                    all your software needs are met conveniently.</p>
            </div>
            <div class="feature-card dark-card animate-on-scroll delay-1">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-bolt"></i></div>
                <h3>Efficiency Guaranteed</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">Our streamlined processes and cutting-edge
                    technology ensure swift execution and hassle-free experiences.</p>
            </div>
            <div class="feature-card dark-card animate-on-scroll delay-2">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-user-tie"></i></div>
                <h3>Tailored Support</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">We understand your unique requirements and
                    offer personalized solutions to help you achieve goals.</p>
            </div>
            <div class="feature-card dark-card animate-on-scroll">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-users"></i></div>
                <h3>Customer-Centric</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">With a focus on your satisfaction, we strive
                    to provide the best-in-class services, all under one roof.</p>
            </div>
            <div class="feature-card dark-card animate-on-scroll delay-1">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-shield-alt"></i></div>
                <h3>Secure Infrastructure</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">We ensure your data is safe with advanced
                    encryption and secure software architecture.</p>
            </div>
            <div class="feature-card dark-card animate-on-scroll delay-2">
                <div class="icon" style="color:var(--secondary-color); font-size:35px; margin-bottom:15px;"><i
                        class="fas fa-trophy"></i></div>
                <h3>Best Solutions</h3>
                <p style="color:rgba(255,255,255,0.7); font-size:14px;">Delivering exceptional results and
                    Innovative solutions maximizing your operational success.</p>
            </div>
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

            <ul class="what-we-do-list">
                <li><i class="fas fa-check-circle"></i> Best IT Solutions</li>
                <li><i class="fas fa-check-circle"></i> Secure Architecture</li>
                <li><i class="fas fa-check-circle"></i> Cost Effective (Save Money)</li>
                <li><i class="fas fa-check-circle"></i> Quick Support</li>
            </ul>
            <a href="contact.html" class="btn btn-dark-solid">Contact Now</a>
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
    <div class="container about-flex">
        <div class="animate-on-scroll">
            <span class="sub-heading">HOW IT WORK</span>
            <h2 style="font-size: 38px; margin-bottom: 20px;">Our process for digital <br><span
                    class="highlight">success</span></h2>
            <p style="margin-bottom: 30px;">Our process is designed to guide you every step of the way. From initial
                consultation to personalized software deployment and strategy development.</p>
             <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop"
                style="width: 90%; border-radius: 15px; margin-top: 40px;" alt="Benefits">
        
        </div>

        <div class="animate-on-scroll delay-1">
            <div class="step-item">
                <div>
                    <span class="sub-heading">STEP</span>
                    <h3 style="font-size:22px; margin-bottom:10px;">Initial Consultation</h3>
                    <p style="font-size:14px; margin:0;">We begin with a one-on-one consultation to understand your
                        digital goals, challenges, and priorities.</p>
                </div>
                <div class="step-number">01</div>
            </div>
            <div class="step-item">
                <div>
                    <span class="sub-heading">STEP</span>
                    <h3 style="font-size:22px; margin-bottom:10px;">Success Pathway</h3>
                    <p style="font-size:14px; margin:0;">We outline the technical roadmap and select the best
                        software modules to fit your needs.</p>
                </div>
                <div class="step-number">02</div>
            </div>
            <div class="step-item">
                <div>
                    <span class="sub-heading">STEP</span>
                    <h3 style="font-size:22px; margin-bottom:10px;">Growth Strategy</h3>
                    <p style="font-size:14px; margin:0;">We launch the project and continuously monitor performance
                        to guarantee long-term growth.</p>
                </div>
                <div class="step-number">03</div>
            </div>
        </div>
    </div>
</section>

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

        <div class="testimonial-grid animate-on-scroll delay-1">
            <!-- Testimonial 1 -->
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
            <!-- Testimonial 2 -->
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
        </div>
    </div>
</section>

@endsection