@extends('layouts.app')

@section('title', 'Training Centers | TESDA NIR')

@section('content')

<div class="font-[Frutiger,sans-serif] bg-gray-50 text-gray-800 min-h-screen">

    {{-- =========================================================
        HERO / PAGE HEADER
    ========================================================== --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800">

        {{-- Background watermark --}}
        <div class="absolute inset-0 pointer-events-none">
            <img
                src="{{ asset('images/B.png') }}"
                alt=""
                class="w-full h-full object-cover opacity-[0.07]"
            >
        </div>

        {{-- Decorative glow --}}
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 pt-32 pb-16">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-blue-200 mb-6">
                <a
                    href="{{ url('/') }}"
                    class="hover:text-white transition"
                >
                    Home
                </a>

                <svg
                    class="w-4 h-4"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="m9 5 7 7-7 7"
                    />
                </svg>

                <span class="text-white">
                    Training Centers
                </span>
            </div>

            <div class="max-w-3xl">

                <div class="flex items-center gap-3 mb-5">

                    <span class="h-px w-12 bg-amber-400"></span>

                    <span class="uppercase tracking-[0.25em] text-xs sm:text-sm font-bold text-amber-300">
                        TESDA NIR
                    </span>

                    <span class="h-px w-12 bg-amber-400"></span>

                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Training Centers
                </h1>

                <p class="mt-5 text-base sm:text-lg text-blue-100 leading-relaxed max-w-2xl">
                    Explore TESDA-accredited training institutions and their
                    registered programs across the Negros Island Region.
                </p>

            </div>

        </div>

        {{-- Bottom accent --}}
        <div class="h-1 bg-gradient-to-r from-transparent via-amber-400 to-transparent"></div>

    </section>


    {{-- =========================================================
        MAIN DIRECTORY
    ========================================================== --}}
    <main class="max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 py-10 lg:py-14">

        {{-- =====================================================
            SEARCH + FILTER PANEL
        ====================================================== --}}
        <section class="relative -mt-24 z-10">

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

                {{-- Search header --}}
                <div class="p-5 sm:p-6 lg:p-7">

                    <div class="flex flex-col lg:flex-row lg:items-end gap-5">

                        {{-- Search --}}
                        <div class="flex-1">

                            <label
                                for="trainingSearch"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Search Training Centers
                            </label>

                            <div class="relative">

                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg
                                        class="w-5 h-5 text-blue-700"
                                        fill="none"
                                        stroke="currentColor"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                                        />
                                    </svg>
                                </div>

                                <input
                                    id="trainingSearch"
                                    type="text"
                                    placeholder="Search institution, municipality, program..."
                                    class="w-full pl-12 pr-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50
                                           focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                           outline-none transition text-sm sm:text-base"
                                >

                            </div>

                        </div>


                        {{-- Province --}}
                        <div class="w-full lg:w-52">

                            <label
                                for="provinceFilter"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Province
                            </label>

                            <select
                                id="provinceFilter"
                                class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Provinces</option>
                                <option value="Negros Oriental">Negros Oriental</option>
                                <option value="Negros Occidental">Negros Occidental</option>
                                <option value="Siquijor">Siquijor</option>
                            </select>

                        </div>


                        {{-- Municipality --}}
                        <div class="w-full lg:w-52">

                            <label
                                for="municipalityFilter"
                                class="block text-sm font-bold text-gray-700 mb-2"
                            >
                                Municipality / City
                            </label>

                            <select
                                id="municipalityFilter"
                                class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Locations</option>

                                <option value="Dumaguete City">
                                    Dumaguete City
                                </option>

                                <option value="Guihulngan City">
                                    Guihulngan City
                                </option>

                                <option value="Bais City">
                                    Bais City
                                </option>

                                <option value="Bayawan City">
                                    Bayawan City
                                </option>

                            </select>

                        </div>


                        {{-- Reset --}}
                        <button
                            type="button"
                            id="resetFilters"
                            class="inline-flex items-center justify-center gap-2
                                   px-5 py-3.5 rounded-xl border border-gray-200
                                   text-gray-600 font-semibold text-sm
                                   hover:bg-gray-100 hover:text-blue-900
                                   transition whitespace-nowrap"
                        >

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9M4.582 9H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2M20.418 15H16"
                                />
                            </svg>

                            Reset

                        </button>

                    </div>


                    {{-- Additional filters --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 pt-5 border-t border-gray-100">

                        {{-- Institution Type --}}
                        <div>

                            <label
                                for="typeFilter"
                                class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2"
                            >
                                Institution Type
                            </label>

                            <select
                                id="typeFilter"
                                class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Types</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>

                        </div>


                        {{-- Classification --}}
                        <div>

                            <label
                                for="classificationFilter"
                                class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2"
                            >
                                Classification
                            </label>

                            <select
                                id="classificationFilter"
                                class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Classifications</option>
                                <option value="TVI">TVI</option>
                                <option value="TTI">TTI</option>
                                <option value="HEI">HEI</option>
                                <option value="LGU">LGU</option>
                            </select>

                        </div>


                        {{-- Sector --}}
                        <div>

                            <label
                                for="sectorFilter"
                                class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2"
                            >
                                Sector
                            </label>

                            <select
                                id="sectorFilter"
                                class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Sectors</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>

                        </div>


                        {{-- Program --}}
                        <div>

                            <label
                                for="programFilter"
                                class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2"
                            >
                                Program / Qualification
                            </label>

                            <select
                                id="programFilter"
                                class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50
                                       focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10
                                       outline-none transition text-sm"
                            >
                                <option value="">All Programs</option>
                                <option value="Bread and Pastry Production NC II">
                                    Bread & Pastry Production NC II
                                </option>
                                <option value="Cookery NC II">
                                    Cookery NC II
                                </option>
                                <option value="Driving NC II">
                                    Driving NC II
                                </option>
                                <option value="Bookkeeping NC III">
                                    Bookkeeping NC III
                                </option>
                                <option value="CSS NC II">
                                    CSS NC II
                                </option>
                                <option value="Organic Agriculture Production NC II">
                                    Organic Agriculture Production NC II
                                </option>
                                <option value="Trainers Methodology Level I">
                                    Trainers Methodology Level I
                                </option>
                            </select>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- =====================================================
            RESULTS HEADER
        ====================================================== --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-10 mb-6">

            <div>

                <div class="flex items-center gap-3">

                    <span class="h-8 w-1 bg-amber-400 rounded-full"></span>

                    <div>
                        <h2 class="text-2xl sm:text-3xl font-bold text-blue-950">
                            Training Institutions
                        </h2>

                        <p class="text-sm text-gray-500 mt-1">
                            Registered TESDA training providers and programs
                        </p>
                    </div>

                </div>

            </div>


            <div
                id="resultCount"
                class="inline-flex items-center self-start sm:self-auto
                       px-4 py-2 rounded-full bg-blue-50
                       text-blue-900 text-sm font-bold"
            >
                0 Training Centers
            </div>

        </div>


        {{-- =====================================================
            TRAINING CENTER GRID
        ====================================================== --}}
        <div
            id="trainingGrid"
            class="grid grid-cols-1 lg:grid-cols-2 gap-6"
        >


            {{-- =================================================
                PTC DUMAGUETE
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Provincial Training Center Dumaguete Barangay Candau-ay Dumaguete City Negros Oriental Carpentry NC II Driving NC II Masonry NC II Tile Setting NC II Agroentrepreneurship NC II Trainers Methodology Level I"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Public"
                data-classification="TTI"
                data-sector="Government"
                data-program="Carpentry NC II Driving NC II Masonry NC II Tile Setting NC II Agroentrepreneurship NC II Trainers Methodology Level I"
            >

                {{-- Card top --}}
                <div class="p-6 sm:p-7">

                    <div class="flex items-start justify-between gap-4">

                        <div class="flex items-start gap-4">

                            <div
                                class="flex-shrink-0 w-12 h-12 rounded-xl
                                       bg-blue-900 text-white
                                       flex items-center justify-center"
                            >
                                <svg
                                    class="w-6 h-6"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.8"
                                        d="M3 21h18M5 21V7l7-4 7 4v14M9 21v-6h6v6M8 9h1m-1 3h1m6-3h1m-1 3h1"
                                    />
                                </svg>
                            </div>

                            <div>

                                <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                    Public • TTI
                                </span>

                                <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                    Provincial Training Center - Dumaguete
                                </h3>

                            </div>

                        </div>


                        <span
                            class="hidden sm:inline-flex px-3 py-1 rounded-full
                                   bg-green-50 text-green-700 text-xs font-bold"
                        >
                            Active
                        </span>

                    </div>


                    {{-- Location --}}
                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Barangay Candau-ay, Dumaguete City,
                            Negros Oriental
                        </span>

                    </div>


                    {{-- Contact --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">

                        <div class="flex items-center gap-3 text-sm text-gray-600">

                            <svg
                                class="w-5 h-5 text-blue-700 flex-shrink-0"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 5.5A2.5 2.5 0 0 1 5.5 3h2L9 7l-2 1.5a14 14 0 0 0 8.5 8.5L17 15l4 1.5v2A2.5 2.5 0 0 1 18.5 21C9.94 21 3 14.06 3 5.5Z"
                                />
                            </svg>

                            <span>
                                (035) 422-9481
                            </span>

                        </div>


                        <div class="flex items-center gap-3 text-sm text-gray-600 min-w-0">

                            <svg
                                class="w-5 h-5 text-blue-700 flex-shrink-0"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 6h16v12H4z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="m4 7 8 6 8-6"
                                />
                            </svg>

                            <span class="truncate">
                                ptc.dumaguete@tesda.gov.ph
                            </span>

                        </div>

                    </div>


                    {{-- Programs --}}
                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                6 programs
                            </span>

                        </div>


                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Carpentry NC II
                            </span>

                            <span class="program-tag">
                                Driving NC II
                            </span>

                            <span class="program-tag">
                                Masonry NC II
                            </span>

                            <span class="program-tag">
                                Tile Setting NC II
                            </span>

                            <span class="program-tag">
                                Agroentrepreneurship NC II
                            </span>

                            <span class="program-tag">
                                Trainers Methodology Level I
                            </span>

                        </div>

                    </div>

                </div>


                {{-- Card footer --}}
                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <a
                            href="https://www.google.com/maps?q=9.32125056,123.2596064"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center gap-2
                                   text-sm font-bold text-blue-800
                                   hover:text-blue-950 transition"
                        >
                            View Location

                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M5 12h14m-6-6 6 6-6 6"
                                />
                            </svg>

                        </a>

                    </div>

                </div>

            </article>


            {{-- =================================================
                TEAMSKILLS
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Teamskills Technological Institute Inc Dumaguete City Negros Oriental Bread and Pastry Production NC II Cookery NC II Housekeeping NC II Tourism Promotion Services NC II Barista NC II Trainers Methodology Level I"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bread and Pastry Production NC II Cookery NC II Housekeeping NC II Tourism Promotion Services NC II Barista NC II Trainers Methodology Level I"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl
                                   bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 21V5a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v16M8 7h2m4 0h2M8 11h2m4 0h2M8 15h2m4 0h2M9 21v-3h6v3"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Teamskills Technological Institute, Inc.
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            3rd Floor Cecilia Building, Capitol Area,
                            North Road, Daro, Dumaguete City
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                6 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Bread & Pastry Production NC II
                            </span>

                            <span class="program-tag">
                                Cookery NC II
                            </span>

                            <span class="program-tag">
                                Housekeeping NC II
                            </span>

                            <span class="program-tag">
                                Tourism Promotion Services NC II
                            </span>

                            <span class="program-tag">
                                Barista NC II
                            </span>

                            <span class="program-tag">
                                Trainers Methodology Level I
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between gap-3">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                METRO DUMAGUETE COLLEGE
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Metro Dumaguete College Inc Dumaguete City Negros Oriental Computer Systems Servicing NC II CSS NC II Trainers Methodology Level I Bread and Pastry Production Bookkeeping NC III"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Computer Systems Servicing NC II CSS NC II Trainers Methodology Level I Bread and Pastry Production Bookkeeping NC III"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 5h16v11H4zM8 21h8M12 16v5"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Metro Dumaguete College Inc.
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            E.J. Blanco Drive Extension, Brgy. Daro,
                            Dumaguete City
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                4 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                CSS NC II
                            </span>

                            <span class="program-tag">
                                Trainers Methodology Level I
                            </span>

                            <span class="program-tag">
                                Bread & Pastry Production
                            </span>

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between gap-3">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                SILLIMAN UNIVERSITY
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Silliman University Dumaguete City Negros Oriental Animal Production Poultry Chicken NC II Animal Production Swine NC II Organic Agriculture Production NC II Early Childhood Care and Development Services NC III"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Animal Production Poultry Chicken NC II Animal Production Swine NC II Organic Agriculture Production NC II Early Childhood Care and Development Services NC III"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 9.5 12 4l9 5.5-9 5.5-9-5.5Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M6 11.5V17c3 2 9 2 12 0v-5.5M21 10v6"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • HEI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Silliman University
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Dumaguete City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                4 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Animal Production (Poultry-Chicken) NC II
                            </span>

                            <span class="program-tag">
                                Animal Production (Swine) NC II
                            </span>

                            <span class="program-tag">
                                Organic Agriculture Production NC II
                            </span>

                            <span class="program-tag">
                                Early Childhood Care & Development Services NC III
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                STO NINO
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Sto Niño Skills Training Assessment Center Dumaguete Negros Oriental Bookkeeping NC III Driving NC II Caregiving NC II Agroentrepreneurship NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bookkeeping NC III Driving NC II Caregiving NC II Agroentrepreneurship NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
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
                                    d="M5 19h14"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Sto. Niño Skills Training & Assessment Center
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            206 West Rovira Road, Pulantubig,
                            Dumaguete City
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                4 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                            <span class="program-tag">
                                Driving NC II
                            </span>

                            <span class="program-tag">
                                Caregiving NC II
                            </span>

                            <span class="program-tag">
                                Agroentrepreneurship NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                FOUNDATION UNIVERSITY
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Foundation University Dumaguete City Negros Oriental Bread Pastry Production NC II Bookkeeping NC III Cookery NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Bread Pastry Production NC II Bookkeeping NC III Cookery NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 21h16M6 21V8h12v13M9 8V5h6v3M9 12h6M9 16h6"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • HEI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Foundation University
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 9.5 7 9.5"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Dumaguete City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                3 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Bread & Pastry Production NC II
                            </span>

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                            <span class="program-tag">
                                Cookery NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                GLOBAL TECH
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Global Tech Manpower Institute Dumaguete Negros Oriental SMAW NC I SMAW NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="SMAW NC I SMAW NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M6 3h12v18H6zM9 7h6M9 11h6M9 15h3"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Global Tech Manpower Institute
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Dumaguete City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <div class="flex items-center justify-between mb-3">

                            <h4 class="text-sm font-bold text-blue-950">
                                Registered Programs
                            </h4>

                            <span class="text-xs text-gray-500">
                                2 programs
                            </span>

                        </div>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                SMAW NC I
                            </span>

                            <span class="program-tag">
                                SMAW NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Dumaguete City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                GUIHULNGAN SATELLITE
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Guihulngan Satellite Skills Development Center Guihulngan City Negros Oriental Dressmaking NC II"
                data-province="Negros Oriental"
                data-municipality="Guihulngan City"
                data-type="Public"
                data-classification="LGU"
                data-sector="Government"
                data-program="Dressmaking NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M3 21h18M5 21V9h14v12M8 9V5h8v4M8 13h2m4 0h2m-8 4h2m4 0h2"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Public • LGU
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Guihulngan Satellite Skills Development Center
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Public Market, Guihulngan City,
                            Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <h4 class="text-sm font-bold text-blue-950 mb-3">
                            Registered Program
                        </h4>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Dressmaking NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Guihulngan City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                RAMS ART
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Rams Art Training and Assessment Center Bais City Negros Oriental Bread Pastry Production NC II Bookkeeping NC III EIM NC II"
                data-province="Negros Oriental"
                data-municipality="Bais City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bread Pastry Production NC II Bookkeeping NC III EIM NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M12 3 4 7v5c0 5 3.5 8 8 9 4.5-1 8-4 8-9V7l-8-4Z"
                                />
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="m9 12 2 2 4-4"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Rams Art Training and Assessment Center
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 9 7 9.5"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Bais City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <h4 class="text-sm font-bold text-blue-950 mb-3">
                            Registered Programs
                        </h4>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Bread & Pastry Production NC II
                            </span>

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                            <span class="program-tag">
                                EIM NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Bais City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                INTEGRATED DEVELOPMENT
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Integrated Development Training and Assessment Center Bayawan City Negros Oriental Agroentrepreneurship NC II Bookkeeping NC III Driving NC II"
                data-province="Negros Oriental"
                data-municipality="Bayawan City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Agroentrepreneurship NC II Bookkeeping NC III Driving NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 19h16M6 17V7l6-4 6 4v10M9 11h6M9 14h6"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • TVI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Integrated Development Training and Assessment Center
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 12 7 12Z"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Bayawan City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <h4 class="text-sm font-bold text-blue-950 mb-3">
                            Registered Programs
                        </h4>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Agroentrepreneurship NC II
                            </span>

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                            <span class="program-tag">
                                Driving NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Bayawan City
                        </span>

                    </div>

                </div>

            </article>


            {{-- =================================================
                SOUTHERN TECH
            ================================================== --}}
            <article
                class="training-card group bg-white rounded-2xl border border-gray-200
                       overflow-hidden hover:border-blue-300 hover:shadow-xl
                       transition-all duration-300"
                data-search="Southern Tech College Foundation Bayawan City Negros Oriental Bookkeeping NC III CSS NC II"
                data-province="Negros Oriental"
                data-municipality="Bayawan City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Bookkeeping NC III CSS NC II"
            >

                <div class="p-6 sm:p-7">

                    <div class="flex items-start gap-4">

                        <div
                            class="flex-shrink-0 w-12 h-12 rounded-xl bg-blue-900 text-white
                                   flex items-center justify-center"
                        >
                            <svg
                                class="w-6 h-6"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    stroke-width="1.8"
                                    d="M4 20h16M6 20V6l6-3 6 3v14M9 9h6M9 13h6M9 17h6"
                                />
                            </svg>
                        </div>

                        <div>

                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600">
                                Private • HEI
                            </span>

                            <h3 class="mt-1 text-xl font-bold text-blue-950 leading-snug">
                                Southern Tech College Foundation
                            </h3>

                        </div>

                    </div>


                    <div class="flex items-start gap-3 mt-6 text-sm text-gray-600">

                        <svg
                            class="w-5 h-5 mt-0.5 text-blue-700 flex-shrink-0"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 21s7-6.2 7-12A7 7 0 1 0 5 9c0 5.8 7 9 7 9.5"
                            />
                            <circle
                                cx="12"
                                cy="9"
                                r="2.2"
                                stroke-width="1.8"
                            />
                        </svg>

                        <span>
                            Bayawan City, Negros Oriental
                        </span>

                    </div>


                    <div class="mt-6 pt-5 border-t border-gray-100">

                        <h4 class="text-sm font-bold text-blue-950 mb-3">
                            Registered Programs
                        </h4>

                        <div class="flex flex-wrap gap-2">

                            <span class="program-tag">
                                Bookkeeping NC III
                            </span>

                            <span class="program-tag">
                                CSS NC II
                            </span>

                        </div>

                    </div>

                </div>


                <div class="px-6 sm:px-7 py-4 bg-gray-50 border-t border-gray-100">

                    <div class="flex items-center justify-between">

                        <span class="text-xs text-gray-500">
                            TESDA Registered Training Provider
                        </span>

                        <span class="text-xs font-semibold text-blue-800">
                            Bayawan City
                        </span>

                    </div>

                </div>

            </article>


        </div>


        {{-- =====================================================
            EMPTY STATE
        ====================================================== --}}
        <div
            id="emptyState"
            class="hidden py-20 text-center"
        >

            <div
                class="mx-auto w-16 h-16 rounded-2xl
                       bg-blue-50 text-blue-800
                       flex items-center justify-center"
            >

                <svg
                    class="w-8 h-8"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="1.8"
                        d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z"
                    />
                </svg>

            </div>

            <h3 class="mt-5 text-xl font-bold text-blue-950">
                No training centers found
            </h3>

            <p class="mt-2 text-gray-500 max-w-md mx-auto text-sm">
                Try changing your search or filter options to find
                registered training institutions.
            </p>

        </div>


        {{-- =====================================================
            INFORMATION NOTE
        ====================================================== --}}
        <section class="mt-12">

            <div
                class="relative overflow-hidden rounded-2xl
                       bg-gradient-to-r from-blue-950 to-blue-900
                       p-6 sm:p-8"
            >

                <div class="absolute inset-0 pointer-events-none">

                    <img
                        src="{{ asset('images/B.png') }}"
                        alt=""
                        class="absolute right-0 top-0 h-full w-auto opacity-10"
                    >

                </div>


                <div class="relative flex flex-col sm:flex-row gap-5 sm:items-start">

                    <div
                        class="flex-shrink-0 w-11 h-11 rounded-xl
                               bg-amber-400/15 border border-amber-400/30
                               text-amber-300
                               flex items-center justify-center"
                    >

                        <svg
                            class="w-6 h-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="1.8"
                                d="M12 16v-4m0-4h.01M5.5 20h13a2 2 0 0 0 1.73-3L13.73 4a2 2 0 0 0-3.46 0L3.77 17a2 2 0 0 0 1.73 3Z"
                            />
                        </svg>

                    </div>


                    <div>

                        <h3 class="text-lg font-bold text-white">
                            Training Center Directory
                        </h3>

                        <p class="mt-2 text-sm leading-relaxed text-blue-100 max-w-4xl">
                            The directory presents training-provider information
                            and registered programs from the TESDA training-provider
                            dataset. Program registration details, institution
                            classification, location, and other provider information
                            can be presented in the detailed institution view.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>


{{-- =============================================================
    PAGE STYLES
============================================================= --}}
<style>

    .program-tag {
        display: inline-flex;
        align-items: center;
        padding: 0.4rem 0.65rem;
        border-radius: 0.5rem;
        background: #eff6ff;
        color: #1e3a8a;
        border: 1px solid #dbeafe;
        font-size: 0.75rem;
        line-height: 1rem;
        font-weight: 600;
        transition: all 0.2s ease;
    }

    .program-tag:hover {
        background: #dbeafe;
        border-color: #bfdbfe;
    }

    .training-card {
        scroll-margin-top: 6rem;
    }

    @media (max-width: 640px) {

        .program-tag {
            font-size: 0.7rem;
            padding: 0.35rem 0.55rem;
        }

    }

</style>


{{-- =============================================================
    FILTER / SEARCH SCRIPT
============================================================= --}}
<script>

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('trainingSearch');

    const provinceFilter =
        document.getElementById('provinceFilter');

    const municipalityFilter =
        document.getElementById('municipalityFilter');

    const typeFilter =
        document.getElementById('typeFilter');

    const classificationFilter =
        document.getElementById('classificationFilter');

    const sectorFilter =
        document.getElementById('sectorFilter');

    const programFilter =
        document.getElementById('programFilter');

    const resetButton =
        document.getElementById('resetFilters');

    const cards =
        Array.from(document.querySelectorAll('.training-card'));

    const resultCount =
        document.getElementById('resultCount');

    const emptyState =
        document.getElementById('emptyState');


    function normalize(value) {

        return String(value || '')
            .toLowerCase()
            .trim();

    }


    function filterCards() {

        const search =
            normalize(searchInput.value);

        const province =
            normalize(provinceFilter.value);

        const municipality =
            normalize(municipalityFilter.value);

        const type =
            normalize(typeFilter.value);

        const classification =
            normalize(classificationFilter.value);

        const sector =
            normalize(sectorFilter.value);

        const program =
            normalize(programFilter.value);


        let visibleCount = 0;


        cards.forEach(function (card) {

            const cardSearch =
                normalize(card.dataset.search);

            const cardProvince =
                normalize(card.dataset.province);

            const cardMunicipality =
                normalize(card.dataset.municipality);

            const cardType =
                normalize(card.dataset.type);

            const cardClassification =
                normalize(card.dataset.classification);

            const cardSector =
                normalize(card.dataset.sector);

            const cardProgram =
                normalize(card.dataset.program);


            const matchesSearch =
                !search ||
                cardSearch.includes(search);

            const matchesProvince =
                !province ||
                cardProvince === province;

            const matchesMunicipality =
                !municipality ||
                cardMunicipality === municipality;

            const matchesType =
                !type ||
                cardType === type;

            const matchesClassification =
                !classification ||
                cardClassification === classification;

            const matchesSector =
                !sector ||
                cardSector === sector;

            const matchesProgram =
                !program ||
                cardProgram.includes(program);


            const matches =
                matchesSearch &&
                matchesProvince &&
                matchesMunicipality &&
                matchesType &&
                matchesClassification &&
                matchesSector &&
                matchesProgram;


            if (matches) {

                card.classList.remove('hidden');

                visibleCount++;

            } else {

                card.classList.add('hidden');

            }

        });


        resultCount.textContent =
            visibleCount +
            (visibleCount === 1
                ? ' Training Center'
                : ' Training Centers');


        if (visibleCount === 0) {

            emptyState.classList.remove('hidden');

        } else {

            emptyState.classList.add('hidden');

        }

    }


    [
        searchInput,
        provinceFilter,
        municipalityFilter,
        typeFilter,
        classificationFilter,
        sectorFilter,
        programFilter
    ].forEach(function (element) {

        element.addEventListener(
            'input',
            filterCards
        );

        element.addEventListener(
            'change',
            filterCards
        );

    });


    resetButton.addEventListener('click', function () {

        searchInput.value = '';

        provinceFilter.value = '';

        municipalityFilter.value = '';

        typeFilter.value = '';

        classificationFilter.value = '';

        sectorFilter.value = '';

        programFilter.value = '';

        filterCards();

    });


    filterCards();

});

</script>

@endsection