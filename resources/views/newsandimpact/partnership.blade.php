{{-- 
    Partners Carousel — TESDA NIR
    Two rows with seamless infinite scrolling
    Row 1: right → left
    Row 2: left → right

    Usage:
    @include('partials.partners-carousel')

    Save to:
    resources/views/partials/partners-carousel.blade.php
--}}

<section class="relative py-16 overflow-hidden bg-gradient-to-b from-blue-950 via-blue-900 to-blue-950">

    <!-- =====================================================
         BACKGROUND GRAPHIC
    ====================================================== -->

    <div class="absolute inset-0 overflow-hidden pointer-events-none">

        <img
            src="{{ asset('images/B.png') }}"
            alt=""
            class="absolute inset-0 w-full h-full object-cover opacity-10"
        >

    </div>


    <!-- =====================================================
         CONTENT
    ====================================================== -->

    <div class="relative z-10">

        <!-- Section Label -->

        <p class="text-center text-sm font-bold tracking-[0.2em] uppercase text-yellow-300 mb-8">
            Partners and Stakeholders
        </p>


        <!-- =================================================
             ROW 1
             RIGHT → LEFT
        ================================================== -->

        <div class="partners-carousel">

            <div class="partners-track">


                <!-- =========================================
                     GROUP 1
                ========================================== -->

                <div class="partners-group">

                    <div class="partner-logo" data-name="Qualfon">
                        <img
                            src="{{ asset('images/partners/ATINO.png') }}"
                            alt="Qualfon"
                        >
                    </div>

                    <div class="partner-logo" data-name="TeamSkill">
                        <img
                            src="{{ asset('images/partners/teamskill.png') }}"
                            alt="TeamSkill"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 3">
                        <img
                            src="{{ asset('images/partners/logo3.png') }}"
                            alt="Partner 3"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 4">
                        <img
                            src="{{ asset('images/partners/logo4.png') }}"
                            alt="Partner 4"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 5">
                        <img
                            src="{{ asset('images/partners/logo5.png') }}"
                            alt="Partner 5"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 6">
                        <img
                            src="{{ asset('images/partners/logo6.png') }}"
                            alt="Partner 6"
                        >
                    </div>

                </div>


                <!-- =========================================
                     GROUP 2
                     EXACT DUPLICATE
                ========================================== -->

                <div
                    class="partners-group"
                    aria-hidden="true"
                >

                    <div class="partner-logo" data-name="Qualfon">
                        <img
                            src="{{ asset('images/partners/qualfon.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="TeamSkill">
                        <img
                            src="{{ asset('images/partners/teamskill.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 3">
                        <img
                            src="{{ asset('images/partners/logo3.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 4">
                        <img
                            src="{{ asset('images/partners/logo4.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 5">
                        <img
                            src="{{ asset('images/partners/logo5.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 6">
                        <img
                            src="{{ asset('images/partners/logo6.png') }}"
                            alt=""
                        >
                    </div>

                </div>

            </div>

        </div>


        <!-- =================================================
             ROW 2
             LEFT → RIGHT
        ================================================== -->

        <div class="partners-carousel mt-4">

            <div class="partners-track partners-track-reverse">


                <!-- =========================================
                     GROUP 1
                ========================================== -->

                <div class="partners-group">

                    <div class="partner-logo logo-boost"  data-name="Partner 7">
                        <img
                            src="{{ asset('images/partners/LGU-BAIS.png') }}"
                            alt="Partner 7"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 8">
                        <img
                            src="{{ asset('images/partners/LGU-GUIHULNGAN.png') }}"
                            alt="Partner 8"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 9">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt="Partner 9"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 10">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt="Partner 10"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 11">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt="Partner 11"
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 12">
                        <img
                            src="{{ asset('images/partners/qualfon.jpg') }}"
                            alt="Partner 12"
                        >
                    </div>

                </div>


                <!-- =========================================
                     GROUP 2
                     EXACT DUPLICATE
                ========================================== -->

                <div
                    class="partners-group"
                    aria-hidden="true"
                >

                    <div class="partner-logo" data-name="Partner 7">
                        <img
                            src="{{ asset('images/partners/LGU-BAIS.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 8">
                        <img
                            src="{{ asset('images/partners/LGU-GUIHULNGAN.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 9">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 10">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 11">
                        <img
                            src="{{ asset('images/TESDA Logo official.png') }}"
                            alt=""
                        >
                    </div>

                    <div class="partner-logo" data-name="Partner 12">
                        <img
                            src="{{ asset('images/partners/qualfon.jpg') }}"
                            alt=""
                        >
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     STYLES
========================================================= -->

<style>

    /* =====================================================
       VIEWPORT
    ===================================================== */

    .partners-carousel {

        position: relative;

        width: 100%;

        overflow: hidden;

        -webkit-mask-image:
            linear-gradient(
                to right,
                transparent 0,
                #000 80px,
                #000 calc(100% - 80px),
                transparent 100%
            );

        mask-image:
            linear-gradient(
                to right,
                transparent 0,
                #000 80px,
                #000 calc(100% - 80px),
                transparent 100%
            );

    }


    /* =====================================================
       TRACK
    ===================================================== */

    .partners-track {

        display: flex;

        width: max-content;

        flex-shrink: 0;

        animation:
            partners-scroll 28s linear infinite;

        will-change: transform;

    }


    /* =====================================================
       EACH GROUP
       
       VERY IMPORTANT:
       Both groups must have exactly the same width.
    ===================================================== */

    .partners-group {

        display: flex;

        align-items: center;

        flex-shrink: 0;

    }


    /* =====================================================
       ROW 2 REVERSE
    ===================================================== */

    .partners-track-reverse {

        animation-name: partners-scroll-reverse;

    }


    /* =====================================================
       PAUSE ON HOVER
    ===================================================== */

    .partners-carousel:hover .partners-track {

        animation-play-state: paused;

    }


    /* =====================================================
       PARTNER LOGO
    ===================================================== */

  .partner-logo {

    position: relative;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    height: 75px;

    width: 150px;

    padding: 0 20px;

    opacity: 0.85;

    transition:
        opacity 0.25s ease,
        transform 0.25s ease;

}

.partner-logo img {

    height: 100%;

    width: 100%;

    max-width: 100%;

    max-height: 100%;

    object-fit: contain;

    display: block;

    opacity: 0.9;

}

    .partner-logo:hover {

        opacity: 1;

        transform: translateY(-2px);

    }

    .partner-logo.logo-boost img {

    transform: scale(1.4);

}

    /* =====================================================
       IMAGE
    ===================================================== */
.partner-logo {

    position: relative;

    flex-shrink: 0;

    display: flex;

    align-items: center;

    justify-content: center;

    height: 75px;

    width: 150px;

    padding: 0 20px;

    opacity: 0.85;

    transition:
        opacity 0.25s ease,
        transform 0.25s ease;

}

.partner-logo img {

    height: 100%;

    width: 100%;

    max-width: 100%;

    max-height: 100%;

    object-fit: contain;

    display: block;

    opacity: 0.9;

}


    .partner-logo:hover img {

        opacity: 1;

    }


    /* =====================================================
       TOOLTIP
    ===================================================== */

    .partner-logo::after {

        content: attr(data-name);

        position: absolute;

        bottom: calc(100% + 10px);

        left: 50%;

        transform:
            translateX(-50%)
            translateY(4px);

        white-space: nowrap;

        background: #ffffff;

        color: #1e3a8a;

        font-size: 12px;

        font-weight: 700;

        letter-spacing: 0.02em;

        padding: 6px 12px;

        border-radius: 6px;

        box-shadow:
            0 4px 12px rgba(0, 0, 0, 0.2);

        opacity: 0;

        pointer-events: none;

        transition:
            opacity 0.2s ease,
            transform 0.2s ease;

        z-index: 20;

    }


    /* =====================================================
       TOOLTIP ARROW
    ===================================================== */

    .partner-logo::before {

        content: '';

        position: absolute;

        bottom: calc(100% + 4px);

        left: 50%;

        transform:
            translateX(-50%)
            translateY(4px);

        border: 6px solid transparent;

        border-top-color: #ffffff;

        opacity: 0;

        pointer-events: none;

        transition:
            opacity 0.2s ease,
            transform 0.2s ease;

        z-index: 20;

    }


    .partner-logo:hover::after,
    .partner-logo:hover::before {

        opacity: 1;

        transform:
            translateX(-50%)
            translateY(0);

    }


    /* =====================================================
       ROW 1
       
       0%:
       [GROUP 1][GROUP 2]

       100%:
       [GROUP 1 moves completely away]
    ===================================================== */

    @keyframes partners-scroll {

        from {

            transform: translateX(0);

        }

        to {

            transform: translateX(-50%);

        }

    }


    /* =====================================================
       ROW 2
       
       Moves opposite direction.
    ===================================================== */

    @keyframes partners-scroll-reverse {

        from {

            transform: translateX(-50%);

        }

        to {

            transform: translateX(0);

        }

    }


    /* =====================================================
       REDUCED MOTION
    ===================================================== */

    @media (prefers-reduced-motion: reduce) {

        .partners-track {

            animation: none;

        }

        .partners-carousel {

            overflow-x: auto;

        }

    }


    /* =====================================================
       MOBILE
    ===================================================== */

    @media (max-width: 640px) {

        .partner-logo {

            width: 125px;

            height: 60px;

            padding: 0 18px;

        }


        .partners-carousel {

            -webkit-mask-image:
                linear-gradient(
                    to right,
                    transparent 0,
                    #000 32px,
                    #000 calc(100% - 32px),
                    transparent 100%
                );

            mask-image:
                linear-gradient(
                    to right,
                    transparent 0,
                    #000 32px,
                    #000 calc(100% - 32px),
                    transparent 100%
                );

        }


        .partner-logo::after {

            font-size: 11px;

            padding: 5px 10px;

        }

    }

</style>