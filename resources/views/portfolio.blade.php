@extends('layouts.app')
@section('title', 'Portfolio | Dhronix Bharat Technologies')
@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">

@php
    $projects = [
        [
            'title' => 'Nidhi Company Software',
            'description' => 'Complete RBI-compliant solution for a leading Nidhi company with 5,000+ members.',
            'image' => 'https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Financial documents and calculator on a desk',
            'product' => 'Nidhi Software',
            'category' => 'Finance',
            'filters' => 'finance',
        ],
        [
            'title' => 'NBFC Loan Management',
            'description' => 'Automated loan processing for a microfinance institution serving 10,000+ customers.',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Analytics dashboard with financial charts',
            'product' => 'NBFC Software',
            'category' => 'Finance',
            'filters' => 'finance',
        ],
        [
            'title' => 'E-commerce Platform',
            'description' => 'Multi-vendor marketplace with payment integration and inventory management.',
            'image' => 'https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Customer shopping online with a payment card',
            'product' => 'E-commerce',
            'category' => 'Retail',
            'filters' => 'ecommerce',
        ],
        [
            'title' => 'Cooperative Society Management',
            'description' => 'Society management software built to coordinate residents, services, and 500+ flats.',
            'image' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Modern residential community',
            'product' => 'Society Software',
            'category' => 'Finance',
            'filters' => 'finance',
        ],
        [
            'title' => 'Custom ERP System',
            'description' => 'Integrated business management software for a manufacturing team of 200+ employees.',
            'image' => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Business analytics and ERP dashboard',
            'product' => 'ERP System',
            'category' => 'Manufacturing',
            'filters' => 'erp',
        ],
        [
            'title' => 'Food Delivery App',
            'description' => 'iOS and Android ordering experience with live delivery tracking.',
            'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Smartphone displaying a mobile application',
            'product' => 'Mobile App',
            'category' => 'Food Delivery',
            'filters' => 'mobile',
        ],
        [
            'title' => 'Shopping Mobile App',
            'description' => 'Cross-platform shopping app with AR try-on and secure checkout.',
            'image' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?auto=format&fit=crop&w=1000&q=85',
            'alt' => 'Secure online shopping on a mobile phone',
            'product' => 'Mobile App',
            'category' => 'E-commerce',
            'filters' => 'mobile ecommerce',
        ],
    ];
@endphp

<div class="portfolio-hero page-header">
    <div class="container">
        <h1 class="animate-fade-up">Our <span style="color: var(--secondary-color);">Portfolio</span></h1>
        <h5 class="text-silver mt-3">Empowering Businesses with <br />Innovative Technology Solutions</h5>
        <p class="text-silver mt-3">At Dhronix Technologies, we deliver innovative <br /> software solutions that help businesses grow and succeed.
        </p>

        <ul class="breadcrumb animate-fade-up delay-1">
            <li><a href="index.html"> Home</a></li>
            <li>/</li>
            <li class="active">Portfolio</li>
        </ul>
    </div>
</div>

<main class="portfolio-main">
    <section class="portfolio-projects" id="projects" aria-labelledby="portfolio-project-heading">
        <div class="portfolio-container">
            <div class="portfolio-section-heading">
                <div>
                    <span class="portfolio-eyebrow">Built for real work</span>
                    <h2 id="portfolio-project-heading">Recent <span>Projects</span></h2>
                </div>
            </div>

            <div class="portfolio-filters" role="group" aria-label="Filter projects">
                <button class="portfolio-filter is-active" type="button" data-filter="all" aria-pressed="true">All Projects</button>
                <button class="portfolio-filter" type="button" data-filter="finance" aria-pressed="false">Finance</button>
                <button class="portfolio-filter" type="button" data-filter="ecommerce" aria-pressed="false">E-commerce</button>
                <button class="portfolio-filter" type="button" data-filter="erp" aria-pressed="false">ERP</button>
                <button class="portfolio-filter" type="button" data-filter="mobile" aria-pressed="false">Mobile Apps</button>
            </div>

            <p class="portfolio-result-count" aria-live="polite"></p>

            <div class="portfolio-grid">
                @foreach ($projects as $project)
                    <article class="portfolio-card"
                        data-categories="{{ $project['filters'] }}"
                        data-project-title="{{ $project['title'] }}"
                        data-project-description="{{ $project['description'] }}"
                        data-project-product="{{ $project['product'] }}"
                        data-project-category="{{ $project['category'] }}">
                        <div class="portfolio-card-image">
                            <img src="{{ $project['image'] }}" alt="{{ $project['alt'] }}" loading="lazy">
                            <button class="portfolio-view-button" type="button" data-project-open>
                                View Details <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                            </button>
                        </div>
                        <div class="portfolio-card-content">
                            <div class="portfolio-card-tags">
                                <span>{{ $project['product'] }}</span>
                                <span>{{ $project['category'] }}</span>
                            </div>
                            <h3>{{ $project['title'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section class="portfolio-cta" aria-labelledby="portfolio-cta-heading">
        <div class="portfolio-cta-inner">
            <div>
                <span class="portfolio-eyebrow">Have a project in mind?</span>
                <h2 id="portfolio-cta-heading">Let's build something <span>useful.</span></h2>
                <p>Tell us what you are working on. We'll help shape the right solution.</p>
            </div>
            <a class="portfolio-cta-link" href="mailto:info.dhronixbharattechnologies@gmail.com?subject=Portfolio%20project%20inquiry">
                Start a Project <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
            </a>
        </div>
    </section>
</main>

<dialog class="portfolio-dialog" aria-labelledby="portfolio-dialog-title">
    <button class="portfolio-dialog-close" type="button" aria-label="Close project details">
        <i class="fa-solid fa-xmark" aria-hidden="true"></i>
    </button>
    <span class="portfolio-eyebrow">Project details</span>
    <h2 id="portfolio-dialog-title"></h2>
    <p class="portfolio-dialog-description"></p>
    <div class="portfolio-dialog-tags"></div>
    <a class="portfolio-cta-link" href="mailto:info.dhronixbharattechnologies@gmail.com?subject=Portfolio%20project%20inquiry">
        Discuss a similar project <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
    </a>
</dialog>

<script src="{{ asset('assets/js/portfolio.js') }}"></script>

@endsection