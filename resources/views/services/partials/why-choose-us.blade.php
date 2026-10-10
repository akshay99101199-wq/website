<section class="section-padding nidhi-why-section service-why-section">
    <div class="container">
        <div class="nidhi-why-heading animate-on-scroll">
            <span class="sub-heading">WHY CHOOSE US</span>
            <h2>{{ $title }} <span class="highlight">{{ $highlight }}</span></h2>
            <p>{{ $description }}</p>
        </div>

        <img class="nidhi-benefit-image animate-on-scroll" src="{{ $image }}" alt="{{ $imageAlt }}">

        <div class="nidhi-benefit-cards">
            @foreach ($benefits as $index => $benefit)
                <article class="nidhi-benefit-card animate-on-scroll{{ $index % 3 === 1 ? ' delay-1' : ($index % 3 === 2 ? ' delay-2' : '') }}">
                    <span class="nidhi-benefit-icon"><i class="{{ $benefit['icon'] }}" aria-hidden="true"></i></span>
                    <strong>{{ $benefit['text'] }}</strong>
                </article>
            @endforeach
        </div>

        <div class="nidhi-why-cta animate-on-scroll">
            <a href="{{ route('contact') }}" class="btn btn-primary-solid">
                <i class="fas fa-phone" aria-hidden="true"></i>{{ $cta }}
            </a>
        </div>
    </div>
</section>
