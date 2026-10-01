@extends('layouts.app')
@section('title','About Us')
@section('content')
<style>
        .about-flex {
            display: flex;
            gap: 60px;
            align-items: center;
        }

        .about-flex>div {
            flex: 1;
        }

        /* About Images Overlap Layout */
        .about-us-images {
            position: relative;
            height: 500px;
            width: 100%;
        }

        .img-1 {
            width: 75%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
            position: absolute;
            top: 0;
            left: 0;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .img-2 {
            width: 65%;
            height: 350px;
            object-fit: cover;
            border-radius: 15px;
            position: absolute;
            bottom: 0;
            right: 0;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            z-index: 2;
            border: 10px solid var(--white);
        }


        /* Mission / Vision Cards (Our Approach Layout) */
        .approach-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .approach-card {
            background: var(--white);
            border: 1px solid #eaeaea;
            border-radius: 15px;
            overflow: hidden;
            transition: var(--transition);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);
        }

        .approach-card:hover {
            transform: translateY(-10px);
            border-color: rgba(243, 108, 33, 0.2);
        }

        .approach-content {
            padding: 30px;
        }

        .approach-content .icon {
            font-size: 30px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .approach-img {
            height: 200px;
            width: 100%;
            object-fit: cover;
        }

        /* Our Feature Section */
        .feature-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            margin-top: 40px;
        }

        .feature-item {
            background: var(--white);
            padding: 30px;
            border-radius: 12px;
            border: 1px solid #eaeaea;
            transition: var(--transition);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.02);
        }

        .feature-item:hover {
            transform: translateY(-5px);
            border-color: rgba(243, 108, 33, 0.3);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
        }

        .feature-item .icon {
            font-size: 35px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }

        .feature-item h3 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        /* Our Benefit Section */
        .benefit-list {
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .benefit-item {
            display: flex;
            align-items: flex-start;
            gap: 20px;
            background: var(--white);
            padding: 25px;
            border-radius: 12px;
            border: 1px solid #eaeaea;
            transition: var(--transition);
        }

        .benefit-item:hover {
            border-color: rgba(243, 108, 33, 0.3);
        }

        .benefit-icon {
            font-size: 32px;
            color: var(--secondary-color);
            background: var(--secondary-light);
            padding: 15px;
            border-radius: 12px;
        }

        /* What We Do Section */
        .what-we-do-list {
            list-style: none;
            margin: 30px 0;
        }

        .what-we-do-list li {
            margin-bottom: 15px;
            font-size: 16px;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .what-we-do-list li i {
            color: var(--secondary-color);
        }

        .experience-box {
            position: absolute;
            bottom: 30px;
            left: -30px;
            background: var(--primary-dark);
            color: var(--white);
            padding: 30px 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            gap: 20px;
            z-index: 5;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .exp-number {
            font-size: 56px;
            font-family: 'Montserrat';
            font-weight: 900;
            line-height: 1;
            color: var(--secondary-color);
        }

        /* How It Work Section */
        .step-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: var(--white);
            padding: 35px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 1px solid #eaeaea;
            transition: var(--transition);
        }

        .step-item:hover {
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.05);
            transform: translateX(-5px);
            border-left: 5px solid var(--secondary-color);
        }

        .step-number {
            font-size: 56px;
            color: var(--secondary-light);
            font-weight: 900;
            font-family: 'Montserrat';
        }

        /* Testimonial Section */
        .testimonial-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 20px;
        }

        .testimonial-card {
            background: var(--white);
            padding: 40px;
            border-radius: 15px;
            border: 1px solid #eaeaea;
            position: relative;
        }

        .quote-icon {
            position: absolute;
            top: 40px;
            right: 40px;
            font-size: 40px;
            color: var(--secondary-light);
        }

        .test-text {
            font-size: 15px;
            font-style: italic;
            margin-bottom: 30px;
            position: relative;
            z-index: 2;
        }

        .author {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .author img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        @media (max-width: 992px) {
            .about-flex {
                flex-direction: column;
            }

            .approach-cards,
            .feature-list,
            .testimonial-grid {
                grid-template-columns: 1fr;
            }

            .experience-box {
                left: 10px;
                bottom: 10px;
            }
        }
    </style>

    <!-- Page Header (Paywise layout) -->
    <div class="page-header">
        <div class="container">
            <h1 class="animate-fade-up">About <span style="color: var(--secondary-color);">Us</span></h1>
            <h5 class="text-silver mt-3">Empowering Businesses with <br/>Innovative Technology Solutions</h5>
            <p class="text-silver mt-3">At Dhronix Technologies, we deliver innovative <br/> software solutions that help businesses grow and succeed.
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
                            <p>We bring  fresh idea and smart solutions.</p>
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
            <div style="display:flex; justify-content:space-between; align-items:end; margin-bottom: 40px;"
                class="animate-on-scroll">
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
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?q=80&w=2070&auto=format&fit=crop"
                        class="approach-img" alt="Mission">
                </div>
                <div class="approach-card animate-on-scroll delay-1">
                    <div class="approach-content">
                        <div class="icon"><i class="fas fa-eye"></i></div>
                        <h3>Our Vision</h3>
                        <p style="font-size: 14px;">Our vision is to lead IT innovation, transforming how businesses
                            manage their ecosystems and transactions with ease.</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2015&auto=format&fit=crop"
                        class="approach-img" alt="Vision">
                </div>
                <div class="approach-card animate-on-scroll delay-2">
                    <div class="approach-content">
                        <div class="icon"><i class="fas fa-history"></i></div>
                        <h3>Our History</h3>
                        <p style="font-size: 14px;">Founded with a passion for innovation and a commitment to
                            excellence, we set out to transform the digital software landscape.</p>
                    </div>
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop"
                        class="approach-img" alt="History">
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Our Feature Section -->
    <section class="section-padding dark-section">
        <div class="container">
            <div style="display:flex; justify-content:space-between; align-items:end;" class="animate-on-scroll">
                <div>
                    <span class="sub-heading" style="color:var(--white); opacity:0.8;">OUR FEATURE</span>
                    <h2 class="text-white" style="font-size: 36px; margin:0;">Key features of our IT <br><span
                            class="highlight">and consulting</span></h2>
                </div>
                <div><a href="contact.html" class="btn btn-primary-solid">Contact Now</a></div>
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

    <!-- 4. Our Benefit Section -->
    <section class="section-padding">
        <div class="container about-flex">
            <div class="animate-on-scroll">
                <span class="sub-heading">OUR BENEFITS</span>
                <h2 style="font-size: 38px; margin-bottom: 20px;">Maximizing value expert <br><span class="highlight">IT
                        solutions</span></h2>
                <p style="margin-bottom: 30px;">Unlocking growth opportunities with tailored digital strategies for
                    maximum value and long-term success.</p>
                <a href="services.html" class="btn btn-primary-solid">Get Started</a>
                <img src="https://images.unsplash.com/photo-1553484771-371a605b060b?q=80&w=2070&auto=format&fit=crop"
                    style="width: 100%; border-radius: 15px; margin-top: 40px;" alt="Benefits">
            </div>
            <div class="benefit-list animate-on-scroll delay-1">
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                    <div>
                        <h3 style="font-size: 20px; margin-bottom: 5px;">Expert Guidance</h3>
                        <p style="font-size: 14px;">Access to professionals with in-depth industry seasoned knowledge.
                        </p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-project-diagram"></i></div>
                    <div>
                        <h3 style="font-size: 20px; margin-bottom: 5px;">Risk Management</h3>
                        <p style="font-size: 14px;">Mitigate technical risks with our robust and tested software
                            infrastructure.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                    <div>
                        <h3 style="font-size: 20px; margin-bottom: 5px;">Long-term Growth</h3>
                        <p style="font-size: 14px;">Scalable solutions designed to grow seamlessly alongside your
                            business.</p>
                    </div>
                </div>
                <div class="benefit-item">
                    <div class="benefit-icon"><i class="fas fa-stopwatch"></i></div>
                    <div>
                        <h3 style="font-size: 20px; margin-bottom: 5px;">Time Efficiency</h3>
                        <p style="font-size: 14px;">Automate workflows to save time and focus on what matters most.</p>
                    </div>
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
                <a href="about.html" class="btn btn-primary-solid">Learn More</a>
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
