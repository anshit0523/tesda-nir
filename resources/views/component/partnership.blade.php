{{--
    Partners Carousel — matches the hero's navy/gold theme
    Two rows: top scrolls right-to-left, bottom scrolls left-to-right
    Usage: @include('partials.partners-carousel')
    Save to: resources/views/partials/partners-carousel.blade.php
--}}

<section class="relative py-16 bg-blue-900 overflow-hidden">

    <!-- subtle background graphic, same treatment as hero -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <img
            src="{{ asset('images/B.png') }}"
            alt=""
            class="absolute inset-0 w-full h-full object-cover opacity-10"
        >
    </div>

    <div class="relative z-10">

        <p class="text-center text-sm font-bold tracking-[0.2em] uppercase text-yellow-300 mb-8">
            Partners and Stakeholders
        </p>

        {{-- Row 1 — scrolls right to left --}}
        <div class="partners-carousel relative overflow-hidden py-4 ">
            <div class="partners-track flex w-max">

                {{-- Group 1 --}}
                <div class="partners-group flex items-center flex-shrink-0">
                    <div class="partner-logo" data-name="Qualfon"><img src="{{ asset('images/partners/qualfon.png') }}" alt="Qualfon"></div>
                    <div class="partner-logo" data-name="TeamSkill"><img src="{{ asset('images/partners/teamskill.png') }}" alt="TeamSkill"></div>
                    <div class="partner-logo" data-name="Partner 3"><img src="{{ asset('images/partners/logo3.png') }}" alt="Partner 3"></div>
                    <div class="partner-logo" data-name="Partner 4"><img src="{{ asset('images/partners/logo4.png') }}" alt="Partner 4"></div>
                    <div class="partner-logo" data-name="Partner 5"><img src="{{ asset('images/partners/logo5.png') }}" alt="Partner 5"></div>
                    <div class="partner-logo" data-name="Partner 6"><img src="{{ asset('images/partners/logo6.png') }}" alt="Partner 6"></div>
                    {{-- add more <div class="partner-logo" data-name="Real Name"> items as needed --}}
                </div>

                {{-- Group 2 (exact duplicate, same order — required for seamless loop) --}}
                <div class="partners-group flex items-center flex-shrink-0" aria-hidden="true">
                    <div class="partner-logo" data-name="Qualfon"><img src="{{ asset('images/partners/qualfon.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="TeamSkill"><img src="{{ asset('images/partners/teamskill.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 3"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 4"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 5"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 6"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                </div>

            </div>
        </div>

        {{-- Row 2 — scrolls left to right (opposite direction) --}}
        <div class="partners-carousel relative overflow-hidden py-4 mt-4 ">
            <div class="partners-track partners-track-reverse flex w-max">

                {{-- Group 1 --}}
                <div class="partners-group flex items-center flex-shrink-0">
                    <div class="partner-logo" data-name="Partner 7"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 7"></div>
                    <div class="partner-logo" data-name="Partner 8"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 8"></div>
                    <div class="partner-logo" data-name="Partner 9"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 9"></div>
                    <div class="partner-logo" data-name="Partner 10"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 10"></div>
                    <div class="partner-logo" data-name="Partner 11"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 11"></div>
                    <div class="partner-logo" data-name="Partner 12"><img src="{{ asset('images/TESDA Logo official.png') }}" alt="Partner 12"></div>
                    {{-- add more <div class="partner-logo" data-name="Real Name"> items as needed --}}
                </div>

                {{-- Group 2 (exact duplicate, same order — required for seamless loop) --}}
                <div class="partners-group flex items-center flex-shrink-0" aria-hidden="true">
                    <div class="partner-logo" data-name="Partner 7"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 8"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 9"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 10"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 11"><img src="{{ asset('images/TESDA Logo official.png') }}" alt=""></div>
                    <div class="partner-logo" data-name="Partner 12"><img src="{{ asset('images/partners/logo12.png') }}" alt=""></div>
                </div>

            </div>
        </div>

    </div>

</section>

<style>
    .partners-carousel {
        -webkit-mask-image: linear-gradient(to right, transparent 0, #000 80px, #000 calc(100% - 80px), transparent 100%);
        mask-image: linear-gradient(to right, transparent 0, #000 80px, #000 calc(100% - 80px), transparent 100%);
    }

    .partners-track {
        animation: partners-scroll 28s linear infinite;
    }

    /* Row 2: same keyframes, reversed direction */
    .partners-track-reverse {
        animation-direction: reverse;
    }

    .partners-carousel:hover .partners-track {
        animation-play-state: paused;
    }

    .partner-logo {
        position: relative;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 75px;
        padding: 0 20px;
        opacity: 0.85;
        transition: opacity 0.25s ease, transform 0.25s ease;
    }

    .partner-logo:hover {
        opacity: 1;
        transform: translateY(-2px);
    }

    .partner-logo img {
        height: 100%;
        width: auto;
        object-fit: contain;
        display: block;
        opacity: 0.9;
    }

    .partner-logo:hover img {
        opacity: 1;
    }

    /* Name tooltip on hover */
    .partner-logo::after {
        content: attr(data-name);
        position: absolute;
        bottom: calc(100% + 10px);
        left: 50%;
        transform: translateX(-50%) translateY(4px);
        white-space: nowrap;
        background: #ffffff;
        color: #1e3a8a;
        font-size: 12px;
        font-weight: 700;
        letter-spacing: 0.02em;
        padding: 6px 12px;
        border-radius: 6px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease, transform 0.2s ease;
        z-index: 20;
    }

    /* Tooltip arrow */
    .partner-logo::before {
        content: '';
        position: absolute;
        bottom: calc(100% + 4px);
        left: 50%;
        transform: translateX(-50%) translateY(4px);
        border: 6px solid transparent;
        border-top-color: #ffffff;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.2s ease, transform 0.2s ease;
        z-index: 20;
    }

    .partner-logo:hover::after,
    .partner-logo:hover::before {
        opacity: 1;
        transform: translateX(-50%) translateY(0);
    }

    @keyframes partners-scroll {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    @media (prefers-reduced-motion: reduce) {
        .partners-track { animation: none; }
        .partners-carousel { overflow-x: auto; }
    }

    @media (max-width: 640px) {
        .partner-logo { padding: 0 24px; height: 60px; }
        .partners-carousel {
            -webkit-mask-image: linear-gradient(to right, transparent 0, #000 32px, #000 calc(100% - 32px), transparent 100%);
            mask-image: linear-gradient(to right, transparent 0, #000 32px, #000 calc(100% - 32px), transparent 100%);
        }
        .partner-logo::after {
            font-size: 11px;
            padding: 5px 10px;
        }
    }
</style>