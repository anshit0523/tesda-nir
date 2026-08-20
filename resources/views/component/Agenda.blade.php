{{--
    resources/views/component/Agenda.blade.php
--}}

@push('styles')
<style>

    /* =========================================================
       TESDA BEST 8-POINT AGENDA
       ========================================================= */

    #agenda-page {
        --tesda-blue: #0000A8;
        --tesda-red: #D50000;
        --tesda-gold: #F5C400;
        --agenda-gray: #D9D9D9;
        --agenda-dark: #111111;

        background: #ffffff;

        font-family: 'Frutiger', sans-serif;

        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;

        overflow: hidden;
    }

    #agenda-page * {
        box-sizing: border-box;
    }

    /* =========================================================
       HEADER
       ========================================================= */

    #agenda-page .agenda-header {
        width: 100%;
        line-height: 0;
        background: #fff;
    }

    #agenda-page .agenda-header img {
        display: block;
        width: 100%;
        height: auto;
    }


    /* =========================================================
       MAIN AREA
       ========================================================= */

    #agenda-page .agenda-container {
        width: min(1200px, calc(100% - 48px));

        margin: 42px auto 70px;
    }


    /* =========================================================
       CAROUSEL
       ========================================================= */

    #agenda-page .agenda-carousel {
        position: relative;
        width: 100%;
    }

    #agenda-page .agenda-viewport {
        width: 100%;
        overflow: hidden;
    }

    #agenda-page .agenda-track {
        display: flex;

        width: 100%;

        transition:
            transform .55s cubic-bezier(.65, 0, .35, 1);
    }


    /* =========================================================
       AGENDA SLIDE
       ========================================================= */

    #agenda-page .agenda-slide {
        flex: 0 0 100%;

        display: grid;

        grid-template-columns: 30% 70%;

        min-height: 230px;

        overflow: hidden;

        background: var(--agenda-gray);
    }


    /* =========================================================
       BLUE SIDE
       ========================================================= */

    #agenda-page .agenda-left {
        position: relative;

        display: flex;
        align-items: center;
        justify-content: center;

        min-height: 230px;

        background: var(--tesda-blue);

        overflow: hidden;
    }


    /* Decorative diagonal */
    #agenda-page .agenda-left::after {
        content: "";

        position: absolute;

        right: -55px;
        top: -80px;

        width: 150px;
        height: 150px;

        border-radius: 50%;

        border: 18px solid rgba(255,255,255,.08);
    }


    /* =========================================================
       ICON
       ========================================================= */

    #agenda-page .agenda-icon {
        position: absolute;

        left: 8%;

        width: 115px;
        height: 115px;

        z-index: 2;
    }

    #agenda-page .agenda-icon svg {
        width: 100%;
        height: 100%;

        display: block;
    }


    /* =========================================================
       NUMBER
       ========================================================= */

    #agenda-page .agenda-number {
        position: absolute;

        right: 8%;

        z-index: 2;

        color: #ffffff;

        font-family: 'Frutiger', sans-serif;

        font-size: clamp(80px, 9vw, 145px);

        font-weight: 700;

        line-height: .8;

        letter-spacing: -.07em;
    }


    /* =========================================================
       RIGHT CONTENT
       ========================================================= */

    #agenda-page .agenda-right {
        display: flex;
        flex-direction: column;
        justify-content: center;

        padding: 34px 50px;

        background: var(--agenda-gray);
    }

    #agenda-page .agenda-title {
        margin: 0 0 12px;

        color: #000000;

        font-family: 'Frutiger', sans-serif;

        font-size: clamp(27px, 3vw, 45px);

        font-weight: 700;

        line-height: 1.05;

        letter-spacing: -.025em;
    }

    #agenda-page .agenda-description {
        max-width: 820px;

        margin: 0;

        color: #111111;

        font-family: 'Frutiger', sans-serif;

        font-size: clamp(15px, 1.5vw, 21px);

        font-weight: 400;

        line-height: 1.35;
    }


    /* =========================================================
       NAVIGATION
       ========================================================= */

    #agenda-page .agenda-arrow {
        position: absolute;

        top: 50%;

        z-index: 10;

        width: 48px;
        height: 48px;

        display: flex;
        align-items: center;
        justify-content: center;

        transform: translateY(-50%);

        border: 0;
        border-radius: 50%;

        background: #ffffff;

        color: var(--tesda-blue);

        cursor: pointer;

        box-shadow: 0 5px 18px rgba(0,0,0,.18);

        transition:
            background .2s ease,
            color .2s ease,
            transform .2s ease;
    }

    #agenda-page .agenda-arrow:hover {
        background: var(--tesda-blue);

        color: #ffffff;

        transform:
            translateY(-50%)
            scale(1.08);
    }

    #agenda-page .agenda-arrow.prev {
        left: -24px;
    }

    #agenda-page .agenda-arrow.next {
        right: -24px;
    }

    #agenda-page .agenda-arrow svg {
        width: 20px;
        height: 20px;
    }


    /* =========================================================
       PROGRESS
       ========================================================= */

    #agenda-page .agenda-progress {
        display: flex;

        align-items: center;
        justify-content: center;

        gap: 8px;

        margin-top: 28px;
    }

    #agenda-page .agenda-dot {
        width: 10px;
        height: 10px;

        padding: 0;

        border: 0;
        border-radius: 50%;

        background: #C8C8C8;

        cursor: pointer;

        transition:
            width .25s ease,
            background .25s ease,
            border-radius .25s ease;
    }

    #agenda-page .agenda-dot.active {
        width: 30px;

        border-radius: 10px;

        background: var(--tesda-blue);
    }


    /* =========================================================
       POINT LABEL
       ========================================================= */

    #agenda-page .agenda-point {
        margin-top: 14px;

        text-align: center;

        color: #777;

        font-size: 12px;

        font-weight: 700;

        letter-spacing: .08em;

        text-transform: uppercase;
    }


    /* =========================================================
       TABLET
       ========================================================= */

    @media (max-width: 900px) {

        #agenda-page .agenda-container {
            width: min(
                100% - 36px,
                1000px
            );

            margin-top: 32px;
        }

        #agenda-page .agenda-slide {
            grid-template-columns: 32% 68%;
        }

        #agenda-page .agenda-icon {
            width: 85px;
            height: 85px;

            left: 7%;
        }

        #agenda-page .agenda-number {
            right: 7%;

            font-size: 85px;
        }

        #agenda-page .agenda-right {
            padding: 28px 34px;
        }

        #agenda-page .agenda-title {
            font-size: 29px;
        }

        #agenda-page .agenda-description {
            font-size: 16px;
        }
    }


    /* =========================================================
       MOBILE
       ========================================================= */

    @media (max-width: 640px) {

        #agenda-page .agenda-container {
            width: calc(100% - 24px);

            margin-top: 24px;
            margin-bottom: 65px;
        }

        #agenda-page .agenda-slide {
            grid-template-columns: 36% 64%;

            min-height: 175px;
        }

        #agenda-page .agenda-left {
            min-height: 175px;
        }

        #agenda-page .agenda-icon {
            left: 50%;
            top: 22px;

            width: 52px;
            height: 52px;

            transform: translateX(-50%);
        }

        #agenda-page .agenda-number {
            left: 50%;
            right: auto;
            bottom: 18px;

            transform: translateX(-50%);

            font-size: 62px;
        }

        #agenda-page .agenda-right {
            padding: 20px 17px;
        }

        #agenda-page .agenda-title {
            margin-bottom: 8px;

            font-size: 20px;

            line-height: 1.05;
        }

        #agenda-page .agenda-description {
            font-size: 12px;

            line-height: 1.3;
        }

        #agenda-page .agenda-arrow {
            top: auto;
            bottom: -55px;

            width: 40px;
            height: 40px;

            transform: none;
        }

        #agenda-page .agenda-arrow:hover {
            transform: scale(1.05);
        }

        #agenda-page .agenda-arrow.prev {
            left: calc(50% - 52px);
        }

        #agenda-page .agenda-arrow.next {
            right: calc(50% - 52px);
        }

        #agenda-page .agenda-progress {
            margin-top: 20px;
        }

        #agenda-page .agenda-dot {
            width: 7px;
            height: 7px;
        }

        #agenda-page .agenda-dot.active {
            width: 22px;
        }

        #agenda-page .agenda-point {
            margin-top: 10px;
        }
    }


    /* =========================================================
       VERY SMALL PHONES
       ========================================================= */

    @media (max-width: 390px) {

        #agenda-page .agenda-slide {
            min-height: 155px;
        }

        #agenda-page .agenda-left {
            min-height: 155px;
        }

        #agenda-page .agenda-icon {
            width: 44px;
            height: 44px;

            top: 18px;
        }

        #agenda-page .agenda-number {
            font-size: 54px;

            bottom: 15px;
        }

        #agenda-page .agenda-right {
            padding: 17px 13px;
        }

        #agenda-page .agenda-title {
            font-size: 17px;
        }

        #agenda-page .agenda-description {
            font-size: 10.5px;
        }
    }


    /* =========================================================
       ACCESSIBILITY
       ========================================================= */

    #agenda-page .agenda-arrow:focus-visible,
    #agenda-page .agenda-dot:focus-visible {
        outline: 3px solid var(--tesda-gold);
        outline-offset: 3px;
    }


    @media (prefers-reduced-motion: reduce) {

        #agenda-page .agenda-track {
            transition: none;
        }
    }

</style>
@endpush


<div id="agenda-page">

    {{-- =====================================================
         HEADER
         ===================================================== --}}

    <header class="agenda-header">

        <img
            src="{{ asset('images/Agenda-header.jpg') }}"
            alt="TESDA Best 8-Point Agenda"
        >

    </header>


    {{-- =====================================================
         CAROUSEL
         ===================================================== --}}

    <section class="agenda-container">

        <div class="agenda-carousel">


            {{-- PREVIOUS --}}

            <button
                type="button"
                id="prevBtn"
                class="agenda-arrow prev"
                aria-label="Previous agenda point"
            >

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M15 18l-6-6 6-6"/>
                </svg>

            </button>


            {{-- VIEWPORT --}}

            <div
                class="agenda-viewport"
                id="agendaViewport"
                tabindex="0"
            >

                <div
                    class="agenda-track"
                    id="track"
                >


                    {{-- =================================================
                         01
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <circle cx="40" cy="48" r="25"/>
                                    <path d="M28 48l9 9 17-19"/>
                                    <path d="M67 30l13-13"/>
                                    <path d="M67 70l13 13"/>
                                    <rect
                                        x="62"
                                        y="15"
                                        width="20"
                                        height="20"
                                        rx="4"
                                    />
                                    <path d="M62 73h20"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                01
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Access to TVET
                            </h2>

                            <p class="agenda-description">
                                Expand access to training programs through
                                scholarships and free assessment, to enhance
                                the employability of TVET graduates.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         02
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <circle cx="50" cy="35" r="17"/>
                                    <path d="M22 80c3-18 13-27 28-27s25 9 28 27"/>
                                    <path d="M70 20l8 8"/>
                                    <path d="M78 28l8-8"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                02
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Behavior and Mindset Change
                            </h2>

                            <p class="agenda-description">
                                Cultivate a dynamic organizational culture
                                and instill a growth mindset among internal
                                and external stakeholders to enhance
                                efficiency and quality of TVET programs,
                                changing public perception of TVET as
                                "second-rate" education.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         03
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M10 35l40-18 40 18-40 18z"/>
                                    <path d="M25 43v22c0 10 15 17 25 17s25-7 25-17V43"/>
                                    <path d="M90 35v30"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                03
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Competency Standards and TRs for New and
                                Higher-Level Qualifications
                            </h2>

                            <p class="agenda-description">
                                Develop training courses for high-skill jobs
                                and promote workforce agility amidst a
                                changing job market.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         04
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M10 50l25-25 12 12-25 25z"/>
                                    <path d="M90 50L65 25 53 37l25 25z"/>
                                    <path d="M25 50l15 15"/>
                                    <path d="M75 50L60 65"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                04
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Demand-Driven and Data-Driven TVET
                            </h2>

                            <p class="agenda-description">
                                Strengthen partnership with industry to align
                                training programs with market needs, and
                                enhance labor market intelligence and
                                evidence-based TVET programming.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         05
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <circle cx="35" cy="30" r="14"/>
                                    <path d="M12 78c3-17 12-25 23-25s20 8 23 25"/>
                                    <path d="M58 50l12 12 20-25"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                05
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Employment Outcomes
                            </h2>

                            <p class="agenda-description">
                                Enhance employability and facilitate
                                employment and career progression of TVET
                                graduates.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         06
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                >
                                    <rect
                                        x="10"
                                        y="30"
                                        width="80"
                                        height="40"
                                        rx="20"
                                    />
                                    <circle cx="32" cy="50" r="6"/>
                                    <circle cx="68" cy="50" r="6"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                06
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Flexible Learning, and Facilities
                            </h2>

                            <p class="agenda-description">
                                Enable different learning modalities and
                                improve the quality of TVET programs through
                                immersive experience and the use of adequate
                                facilities and appropriate technology.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         07
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                >
                                    <circle
                                        cx="50"
                                        cy="50"
                                        r="35"
                                    />

                                    <path d="M15 50h70"/>
                                    <path d="M50 15c15 18 15 52 0 70"/>
                                    <path d="M50 15c-15 18-15 52 0 70"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                07
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Global Competitiveness, and Good Housekeeping
                            </h2>

                            <p class="agenda-description">
                                Enhance global competitiveness of TVET
                                graduates by aligning TVET programs with
                                international standards, and improve internal
                                processes to increase efficiency in program
                                implementation.
                            </p>

                        </div>

                    </article>


                    {{-- =================================================
                         08
                         ================================================= --}}

                    <article class="agenda-slide">

                        <div class="agenda-left">

                            <div class="agenda-icon">

                                <svg
                                    viewBox="0 0 100 100"
                                    fill="none"
                                    stroke="white"
                                    stroke-width="6"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path d="M12 82h22V60H12z"/>
                                    <path d="M34 60h22V40H34z"/>
                                    <path d="M56 40h22V18H56z"/>
                                    <path d="M78 18h10"/>
                                    <path d="M82 12v10"/>
                                </svg>

                            </div>

                            <div class="agenda-number">
                                08
                            </div>

                        </div>


                        <div class="agenda-right">

                            <h2 class="agenda-title">
                                Harmonization with SHS Curriculum,
                                Ladderization with Higher Education,
                                and Lifelong Learning Pathways
                            </h2>

                            <p class="agenda-description">
                                Enhance the employability of SHS graduates
                                by integrating TVET standards into the SHS
                                curriculum, and enable multiple learning and
                                career pathways through ladderization programs.
                            </p>

                        </div>

                    </article>


                </div>

            </div>


            {{-- NEXT --}}

            <button
                type="button"
                id="nextBtn"
                class="agenda-arrow next"
                aria-label="Next agenda point"
            >

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                >
                    <path d="M9 18l6-6-6-6"/>
                </svg>

            </button>

        </div>


        {{-- =====================================================
             DOT NAVIGATION
             ===================================================== --}}

        <div
            class="agenda-progress"
            id="agendaProgress"
        >

            @for($i = 0; $i < 8; $i++)

                <button
                    type="button"
                    class="agenda-dot {{ $i === 0 ? 'active' : '' }}"
                    data-index="{{ $i }}"
                    aria-label="Agenda point {{ $i + 1 }}"
                ></button>

            @endfor

        </div>


        <div class="agenda-point" id="agendaPoint">
            POINT 01 OF 08
        </div>

    </section>

</div>


@push('scripts')
<script>
(function () {

    const page =
        document.getElementById('agenda-page');

    if (!page) return;


    const track =
        page.querySelector('#track');

    const viewport =
        page.querySelector('#agendaViewport');

    const prevBtn =
        page.querySelector('#prevBtn');

    const nextBtn =
        page.querySelector('#nextBtn');

    const dots = [
        ...page.querySelectorAll('.agenda-dot')
    ];

    const pointLabel =
        page.querySelector('#agendaPoint');


    const total =
        track.children.length;


    let index = 0;

    let autoTimer = null;

    let startX = null;


    /* =====================================================
       RENDER
       ===================================================== */

    function render() {

        track.style.transform =
            `translateX(-${index * 100}%)`;


        dots.forEach((dot, i) => {

            dot.classList.toggle(
                'active',
                i === index
            );

        });


        pointLabel.textContent =
            `POINT ${String(index + 1).padStart(2, '0')} OF 08`;

    }


    /* =====================================================
       CHANGE SLIDE
       ===================================================== */

    function goTo(indexValue) {

        index =
            (indexValue + total) % total;

        render();

        resetAuto();

    }


    /* =====================================================
       BUTTONS
       ===================================================== */

    prevBtn.addEventListener(
        'click',
        () => goTo(index - 1)
    );


    nextBtn.addEventListener(
        'click',
        () => goTo(index + 1)
    );


    /* =====================================================
       DOTS
       ===================================================== */

    dots.forEach(dot => {

        dot.addEventListener(
            'click',
            () => {
                goTo(
                    parseInt(
                        dot.dataset.index,
                        10
                    )
                );
            }
        );

    });


    /* =====================================================
       KEYBOARD
       ===================================================== */

    viewport.addEventListener(
        'keydown',
        event => {

            if (event.key === 'ArrowLeft') {

                event.preventDefault();

                goTo(index - 1);

            }

            if (event.key === 'ArrowRight') {

                event.preventDefault();

                goTo(index + 1);

            }

        }
    );


    /* =====================================================
       SWIPE
       ===================================================== */

    viewport.addEventListener(
        'touchstart',
        event => {

            startX =
                event.touches[0].clientX;

        },
        {
            passive: true
        }
    );


    viewport.addEventListener(
        'touchend',
        event => {

            if (startX === null) return;

            const endX =
                event.changedTouches[0].clientX;

            const distance =
                endX - startX;


            if (Math.abs(distance) > 45) {

                if (distance > 0) {

                    goTo(index - 1);

                } else {

                    goTo(index + 1);

                }

            }

            startX = null;

        },
        {
            passive: true
        }
    );


    /* =====================================================
       AUTO PLAY
       ===================================================== */

    function startAuto() {

        clearInterval(autoTimer);

        autoTimer =
            setInterval(
                () => goTo(index + 1),
                7000
            );

    }


    function stopAuto() {

        clearInterval(autoTimer);

    }


    function resetAuto() {

        stopAuto();

        startAuto();

    }


    /* =====================================================
       PAUSE ON HOVER
       ===================================================== */

    page.addEventListener(
        'mouseenter',
        stopAuto
    );

    page.addEventListener(
        'mouseleave',
        startAuto
    );


    /* =====================================================
       INITIAL
       ===================================================== */

    render();

    startAuto();

})();
</script>
@endpush