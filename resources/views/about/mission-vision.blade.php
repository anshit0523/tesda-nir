@extends('layouts.app')

@section('title', 'Mission, Vision & Core Values')

@section('content')

@include('partials.navbar')


{{-- =========================================================
     HERO
========================================================= --}}

<section class="relative overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-950 text-white">

    {{-- Background Graphic --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">

        <img
            src="{{ asset('images/B.png') }}"
            alt=""
            class="absolute inset-0 w-full h-full object-cover opacity-10"
        >

        <div class="absolute inset-0 bg-gradient-to-r from-blue-950/80 via-blue-900/60 to-blue-950/80"></div>

    </div>


    <div class="relative z-10 max-w-7xl mx-auto px-6 py-24 lg:py-28">

        <div class="max-w-4xl mx-auto text-center">

            {{-- Label --}}

            <div class="flex items-center justify-center gap-4 mb-7">

                <span class="h-px w-12 bg-amber-400"></span>

                <span class="text-amber-300 text-sm font-bold tracking-[0.2em] uppercase font-[Frutiger]">
                    ABOUT TESDA NIR
                </span>

                <span class="h-px w-12 bg-amber-400"></span>

            </div>


            {{-- Heading --}}

            <h1
                class="font-[Frutiger] text-4xl sm:text-5xl lg:text-6xl font-bold leading-tight tracking-tight"
            >
                Mission, Vision
                <span class="text-amber-300">&</span>
                Core Values
            </h1>


            {{-- Description --}}

            <p
                class="mt-7 max-w-3xl mx-auto text-blue-100 text-lg lg:text-xl leading-8 font-[Frutiger]"
            >
                Building a highly skilled, competitive, adaptable,
                and values-driven workforce for the Negros Island Region.
            </p>


            {{-- Accent --}}

            <div class="flex justify-center mt-8">

                <div class="w-20 h-1 rounded-full bg-amber-400"></div>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     QUICK INFORMATION
========================================================= --}}

<section class="relative bg-white border-b border-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid grid-cols-2 lg:grid-cols-4 divide-x divide-gray-200">

            {{-- Established --}}

            <div
                class="py-10 px-4 text-center group transition duration-300"
            >

                <div
                    class="text-3xl lg:text-4xl font-bold text-blue-900 font-[Frutiger] group-hover:text-blue-700 transition"
                >
                    1994
                </div>

                <p class="mt-2 text-sm lg:text-base text-gray-600 font-[Frutiger]">
                    Established under RA 7796
                </p>

            </div>


            {{-- Republic Act --}}

            <div
                class="py-10 px-4 text-center group transition duration-300"
            >

                <div
                    class="text-3xl lg:text-4xl font-bold text-blue-900 font-[Frutiger] group-hover:text-blue-700 transition"
                >
                    RA 7796
                </div>

                <p class="mt-2 text-sm lg:text-base text-gray-600 font-[Frutiger]">
                    TESDA Act of 1994
                </p>

            </div>


            {{-- Region --}}

            <div
                class="py-10 px-4 text-center group transition duration-300"
            >

                <div
                    class="text-3xl lg:text-4xl font-bold text-blue-900 font-[Frutiger] group-hover:text-blue-700 transition"
                >
                    XVIII
                </div>

                <p class="mt-2 text-sm lg:text-base text-gray-600 font-[Frutiger]">
                    Negros Island Region
                </p>

            </div>


            {{-- Provinces --}}

            <div
                class="py-10 px-4 text-center group transition duration-300"
            >

                <div
                    class="text-3xl lg:text-4xl font-bold text-blue-900 font-[Frutiger] group-hover:text-blue-700 transition"
                >
                    3
                </div>

                <p class="mt-2 text-sm lg:text-base text-gray-600 font-[Frutiger]">
                    Provinces Served
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     MANDATE / VISION / MISSION
========================================================= --}}

<section class="py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">


        {{-- Section Header --}}

        <div class="text-center max-w-3xl mx-auto mb-14">

            <div class="flex items-center justify-center gap-4 mb-5">

                <span class="h-px w-10 bg-amber-400"></span>

                <span class="text-blue-900 text-sm font-bold tracking-[0.2em] uppercase font-[Frutiger]">
                    OUR FOUNDATION
                </span>

                <span class="h-px w-10 bg-amber-400"></span>

            </div>

            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 font-[Frutiger]">
                Our Mandate, Vision & Mission
            </h2>

            <p class="mt-5 text-gray-600 leading-7 font-[Frutiger]">
                Guided by the TESDA mandate, we work to strengthen technical
                education and skills development across the Negros Island Region.
            </p>

        </div>



        <div class="grid lg:grid-cols-3 gap-8">


            {{-- =================================================
                 MANDATE
            ================================================== --}}

            <article
                class="group relative bg-white rounded-2xl border border-gray-200
                       shadow-sm hover:shadow-xl transition-all duration-300
                       overflow-hidden"
            >

                <div class="h-1 bg-blue-900"></div>

                <div class="p-8">

                    {{-- Icon --}}

                    <div
                        class="w-14 h-14 rounded-xl bg-blue-50
                               flex items-center justify-center mb-7
                               group-hover:bg-blue-900 transition duration-300"
                    >

                        <svg
                            class="w-7 h-7 text-blue-900 group-hover:text-white transition"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h6l5 5v11a2 2 0 01-2 2z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M13 3v5h5"
                            />

                        </svg>

                    </div>


                    <h3 class="text-2xl font-bold text-blue-900 font-[Frutiger]">
                        Our Mandate
                    </h3>


                    <div class="mt-6 space-y-5 text-gray-700 leading-7 font-[Frutiger]">

                        <p>
                            The Technical Education and Skills Development Authority
                            (TESDA) was established through Republic Act No. 7796,
                            otherwise known as the
                            <strong class="text-blue-900">
                                TESDA Act of 1994
                            </strong>.
                        </p>

                        <p>
                            TESDA replaced the National Manpower and Youth Council
                            (NMYC) and consolidated the technical-vocational education
                            programs of the DECS and the DOLE.
                        </p>

                        <p>
                            TESDA is mandated to formulate plans and policies,
                            coordinate, and integrate technical-vocational education
                            and training (TVET) programs across the country.
                        </p>

                    </div>

                </div>

            </article>



            {{-- =================================================
                 VISION
            ================================================== --}}

            <article
                class="group relative bg-white rounded-2xl border border-gray-200
                       shadow-sm hover:shadow-xl transition-all duration-300
                       overflow-hidden"
            >

                <div class="h-1 bg-amber-400"></div>

                <div class="p-8">

                    {{-- Icon --}}

                    <div
                        class="w-14 h-14 rounded-xl bg-amber-50
                               flex items-center justify-center mb-7
                               group-hover:bg-amber-400 transition duration-300"
                    >

                        <svg
                            class="w-7 h-7 text-amber-600 group-hover:text-white transition"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M2.5 12s3.5-7 9.5-7 9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z"
                            />

                            <circle
                                cx="12"
                                cy="12"
                                r="3"
                                stroke-width="1.8"
                            />

                        </svg>

                    </div>


                    <h3 class="text-2xl font-bold text-blue-900 font-[Frutiger]">
                        Our Vision
                    </h3>


                    <div class="mt-6 space-y-5 text-gray-700 leading-7 font-[Frutiger]">

                        <p class="text-lg font-semibold text-blue-900 leading-8">

                            The leading partner in the development of the Filipino
                            workforce with world-class competence and positive
                            work values.

                        </p>

                        <div class="h-px bg-gray-100"></div>

                        <p>
                            We envision a highly skilled, adaptable, and competitive
                            workforce that contributes to sustainable development
                            and inclusive growth across the Negros Island Region.
                        </p>

                    </div>

                </div>

            </article>



            {{-- =================================================
                 MISSION
            ================================================== --}}

            <article
                class="group relative bg-white rounded-2xl border border-gray-200
                       shadow-sm hover:shadow-xl transition-all duration-300
                       overflow-hidden"
            >

                <div class="h-1 bg-blue-900"></div>

                <div class="p-8">

                    {{-- Icon --}}

                    <div
                        class="w-14 h-14 rounded-xl bg-blue-50
                               flex items-center justify-center mb-7
                               group-hover:bg-blue-900 transition duration-300"
                    >

                        <svg
                            class="w-7 h-7 text-blue-900 group-hover:text-white transition"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 3v18M3 12h18"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M5 7l3-2 3 2 3-2 3 2 2-1v12l-2 1-3-2-3 2-3-2-3 2V6l2 1z"
                            />

                        </svg>

                    </div>


                    <h3 class="text-2xl font-bold text-blue-900 font-[Frutiger]">
                        Our Mission
                    </h3>


                    <div class="mt-6 space-y-5 text-gray-700 leading-7 font-[Frutiger]">

                        <p class="text-lg font-semibold text-blue-900 leading-8">

                            TESDA provides direction, policies, programs,
                            and standards towards quality technical education
                            and skills development.

                        </p>

                        <div class="h-px bg-gray-100"></div>

                        <p>
                            We are committed to delivering accessible, relevant,
                            and high-quality TVET programs that empower
                            Negrenses and Siquijodnons for gainful employment
                            and entrepreneurship.
                        </p>

                    </div>

                </div>

            </article>

        </div>

    </div>

</section>



{{-- =========================================================
     CORE VALUES
========================================================= --}}

<section class="relative py-24 overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-950">

    {{-- Background --}}

    <div class="absolute inset-0 pointer-events-none">

        <img
            src="{{ asset('images/B.png') }}"
            alt=""
            class="absolute inset-0 w-full h-full object-cover opacity-10"
        >

    </div>


    <div class="relative z-10 max-w-7xl mx-auto px-6">


        {{-- Header --}}

        <div class="text-center max-w-3xl mx-auto mb-14">

            <div class="flex items-center justify-center gap-4 mb-5">

                <span class="h-px w-10 bg-amber-400"></span>

                <span class="text-amber-300 text-sm font-bold tracking-[0.2em] uppercase font-[Frutiger]">
                    OUR VALUES
                </span>

                <span class="h-px w-10 bg-amber-400"></span>

            </div>


            <h2 class="text-3xl sm:text-4xl font-bold text-white font-[Frutiger]">
                Core Values
            </h2>


            <p class="mt-5 text-blue-100 leading-7 font-[Frutiger]">
                The principles that guide our commitment to public service,
                skills development, and the Filipino workforce.
            </p>

        </div>



        {{-- Values --}}

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">


            {{-- Value 1 --}}

            <div
                class="group bg-white/10 backdrop-blur-sm border border-white/10
                       rounded-2xl p-8 text-center
                       hover:bg-white hover:text-blue-900
                       transition-all duration-300"
            >

                <div
                    class="mx-auto w-14 h-14 rounded-full
                           bg-amber-400 text-blue-950
                           flex items-center justify-center
                           text-xl font-bold font-[Frutiger]
                           group-hover:bg-blue-900 group-hover:text-white transition"
                >
                    I
                </div>

                <h3
                    class="mt-6 text-xl font-bold text-white
                           group-hover:text-blue-900 font-[Frutiger]"
                >
                    Integrity
                </h3>

                <p
                    class="mt-3 text-blue-100 group-hover:text-gray-600
                           leading-6 font-[Frutiger]"
                >
                    Upholding honesty, accountability, and ethical public service.
                </p>

            </div>



            {{-- Value 2 --}}

            <div
                class="group bg-white/10 backdrop-blur-sm border border-white/10
                       rounded-2xl p-8 text-center
                       hover:bg-white hover:text-blue-900
                       transition-all duration-300"
            >

                <div
                    class="mx-auto w-14 h-14 rounded-full
                           bg-amber-400 text-blue-950
                           flex items-center justify-center
                           text-xl font-bold font-[Frutiger]
                           group-hover:bg-blue-900 group-hover:text-white transition"
                >
                    C
                </div>

                <h3
                    class="mt-6 text-xl font-bold text-white
                           group-hover:text-blue-900 font-[Frutiger]"
                >
                    Commitment
                </h3>

                <p
                    class="mt-3 text-blue-100 group-hover:text-gray-600
                           leading-6 font-[Frutiger]"
                >
                    Dedicated to serving communities and advancing skills development.
                </p>

            </div>



            {{-- Value 3 --}}

            <div
                class="group bg-white/10 backdrop-blur-sm border border-white/10
                       rounded-2xl p-8 text-center
                       hover:bg-white hover:text-blue-900
                       transition-all duration-300"
            >

                <div
                    class="mx-auto w-14 h-14 rounded-full
                           bg-amber-400 text-blue-950
                           flex items-center justify-center
                           text-xl font-bold font-[Frutiger]
                           group-hover:bg-blue-900 group-hover:text-white transition"
                >
                    S
                </div>

                <h3
                    class="mt-6 text-xl font-bold text-white
                           group-hover:text-blue-900 font-[Frutiger]"
                >
                    Service
                </h3>

                <p
                    class="mt-3 text-blue-100 group-hover:text-gray-600
                           leading-6 font-[Frutiger]"
                >
                    Providing accessible, responsive, and meaningful services to all.
                </p>

            </div>



            {{-- Value 4 --}}

            <div
                class="group bg-white/10 backdrop-blur-sm border border-white/10
                       rounded-2xl p-8 text-center
                       hover:bg-white hover:text-blue-900
                       transition-all duration-300"
            >

                <div
                    class="mx-auto w-14 h-14 rounded-full
                           bg-amber-400 text-blue-950
                           flex items-center justify-center
                           text-xl font-bold font-[Frutiger]
                           group-hover:bg-blue-900 group-hover:text-white transition"
                >
                    E
                </div>

                <h3
                    class="mt-6 text-xl font-bold text-white
                           group-hover:text-blue-900 font-[Frutiger]"
                >
                    Excellence
                </h3>

                <p
                    class="mt-3 text-blue-100 group-hover:text-gray-600
                           leading-6 font-[Frutiger]"
                >
                    Pursuing quality and continuous improvement in everything we do.
                </p>

            </div>

        </div>

    </div>

</section>



{{-- =========================================================
     REGION XVIII PROFILE
========================================================= --}}

<section class="py-24 bg-gray-50">

    <div class="max-w-7xl mx-auto px-6">


        {{-- Main Card --}}

        <div
            class="bg-white rounded-3xl border border-gray-200
                   shadow-sm overflow-hidden"
        >

            <div class="grid lg:grid-cols-2">


                {{-- =================================================
                     MAP
                ================================================== --}}

                <div class="relative bg-blue-50 p-8 lg:p-12">

                    <div
                        class="absolute top-6 left-6
                               w-20 h-20 rounded-full
                               bg-amber-400/20 blur-2xl"
                    ></div>


                    <div class="relative">

                        <img
                            src="{{ asset('images/negrosisland.png') }}"
                            alt="Negros Island Region Map"
                            class="w-full rounded-2xl border border-gray-200
                                   shadow-sm bg-white"
                        >


                        <p
                            class="mt-5 text-sm text-center text-gray-500 font-[Frutiger]"
                        >
                            Negros Island Region (Region XVIII)
                        </p>

                    </div>

                </div>



                {{-- =================================================
                     PROFILE CONTENT
                ================================================== --}}

                <div class="p-8 lg:p-12">

                    <div class="flex items-center gap-4 mb-6">

                        <span class="h-px w-10 bg-amber-400"></span>

                        <span
                            class="text-blue-900 text-sm font-bold
                                   tracking-[0.2em] uppercase font-[Frutiger]"
                        >
                            REGION XVIII
                        </span>

                    </div>


                    <h2
                        class="text-3xl lg:text-4xl font-bold
                               text-blue-900 font-[Frutiger]"
                    >
                        Negros Island Region Profile
                    </h2>


                    <h3
                        class="mt-7 text-xl font-bold text-blue-900 font-[Frutiger]"
                    >
                        About the Negros Island Region
                    </h3>


                    <div
                        class="mt-5 space-y-5 text-gray-700
                               leading-7 font-[Frutiger]"
                    >

                        <p>
                            Reconstituted under Republic Act No. 12000 in 2024,
                            the Negros Island Region (NIR) integrates the provinces
                            of Negros Occidental, Negros Oriental, and Siquijor
                            into a single administrative region.
                        </p>


                        <p>
                            Prior to its reconstitution, Negros Occidental belonged
                            to Region VI (Western Visayas), while Negros Oriental
                            and Siquijor formed part of Region VII (Central Visayas).
                        </p>


                        <p>
                            The establishment of TESDA NIR centralizes and streamlines
                            technical-vocational education and skills development
                            services, ensuring scholarships, training standards,
                            assessment, and certification programs are delivered
                            more efficiently and are responsive to the workforce
                            development needs of the region.
                        </p>

                    </div>


                    {{-- Province Tags --}}

                    <div class="mt-8 flex flex-wrap gap-3">

                        <span
                            class="px-4 py-2 rounded-full
                                   bg-blue-50 text-blue-900
                                   text-sm font-bold font-[Frutiger]"
                        >
                            Negros Occidental
                        </span>

                        <span
                            class="px-4 py-2 rounded-full
                                   bg-blue-50 text-blue-900
                                   text-sm font-bold font-[Frutiger]"
                        >
                            Negros Oriental
                        </span>

                        <span
                            class="px-4 py-2 rounded-full
                                   bg-blue-50 text-blue-900
                                   text-sm font-bold font-[Frutiger]"
                        >
                            Siquijor
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


@endsection