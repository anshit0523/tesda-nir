@extends('layouts.app')

@section('title', 'Training Centers | TESDA NIR')

@section('content')

<div class="font-[Frutiger,sans-serif] bg-gray-50 text-gray-800 min-h-screen">

    {{-- =========================================================
        HERO / PAGE HEADER
    ========================================================== --}}
    <section class="relative overflow-hidden bg-gradient-to-br from-blue-950 via-blue-900 to-blue-800">

        {{-- Background watermark & glow --}}
        <div class="absolute inset-0 pointer-events-none"></div>
        <div class="absolute -top-32 -right-32 w-96 h-96 bg-blue-500/20 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-96 h-96 bg-amber-400/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-5 sm:px-6 lg:px-8 pt-32 pb-16">

            {{-- Breadcrumb --}}
            <div class="flex items-center gap-2 text-sm text-blue-200 mb-6">
                <a href="{{ url('/') }}" class="hover:text-white transition">Home</a>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                </svg>
                <span class="text-white">Training Centers</span>
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
                    Explore TESDA-accredited training institutions and their registered programs across the Negros Island Region.
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

        {{-- SEARCH + FILTER PANEL --}}
        <section class="relative -mt-24 z-10">

            <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">

                <div class="p-5 sm:p-6 lg:p-7">

                    <div class="flex flex-col lg:flex-row lg:items-end gap-5">

                        {{-- Search --}}
                        <div class="flex-1">
                            <label for="trainingSearch" class="block text-sm font-bold text-gray-700 mb-2">
                                Search Training Centers
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                    <svg class="w-5 h-5 text-blue-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />
                                    </svg>
                                </div>
                                <input id="trainingSearch" type="text" placeholder="Search institution, municipality, program..." class="w-full pl-12 pr-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm sm:text-base">
                            </div>
                        </div>

                        {{-- Province --}}
                        <div class="w-full lg:w-52">
                            <label for="provinceFilter" class="block text-sm font-bold text-gray-700 mb-2">Province</label>
                            <select id="provinceFilter" class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Provinces</option>
                                <option value="Negros Oriental">Negros Oriental</option>
                                <option value="Negros Occidental">Negros Occidental</option>
                                <option value="Siquijor">Siquijor</option>
                            </select>
                        </div>

                        {{-- Municipality --}}
                        <div class="w-full lg:w-52">
                            <label for="municipalityFilter" class="block text-sm font-bold text-gray-700 mb-2">Municipality / City</label>
                            <select id="municipalityFilter" class="w-full px-4 py-3.5 rounded-xl border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Locations</option>
                                <option value="Dumaguete City">Dumaguete City</option>
                                <option value="Guihulngan City">Guihulngan City</option>
                                <option value="Bais City">Bais City</option>
                                <option value="Bayawan City">Bayawan City</option>
                            </select>
                        </div>

                        {{-- Reset --}}
                        <button type="button" id="resetFilters" class="inline-flex items-center justify-center gap-2 px-5 py-3.5 rounded-xl border border-gray-200 text-gray-600 font-semibold text-sm hover:bg-gray-100 hover:text-blue-900 transition whitespace-nowrap">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 0 0 4.582 9M4.582 9H9m11 11v-5h-.581m0 0a8.003 8.003 0 0 1-15.357-2M20.418 15H16" />
                            </svg>
                            Reset
                        </button>

                    </div>

                    {{-- Additional filters --}}
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-5 pt-5 border-t border-gray-100">

                        <div>
                            <label for="typeFilter" class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">Institution Type</label>
                            <select id="typeFilter" class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Types</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>

                        <div>
                            <label for="classificationFilter" class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">Classification</label>
                            <select id="classificationFilter" class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Classifications</option>
                                <option value="TVI">TVI</option>
                                <option value="TTI">TTI</option>
                                <option value="HEI">HEI</option>
                                <option value="LGU">LGU</option>
                            </select>
                        </div>

                        <div>
                            <label for="sectorFilter" class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">Sector</label>
                            <select id="sectorFilter" class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Sectors</option>
                                <option value="Government">Government</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>

                        <div>
                            <label for="programFilter" class="block text-xs font-bold uppercase tracking-wide text-gray-500 mb-2">Program / Qualification</label>
                            <select id="programFilter" class="w-full px-3.5 py-3 rounded-lg border border-gray-200 bg-gray-50 focus:bg-white focus:border-blue-500 focus:ring-4 focus:ring-blue-500/10 outline-none transition text-sm">
                                <option value="">All Programs</option>
                                <option value="Bread and Pastry Production NC II">Bread & Pastry Production NC II</option>
                                <option value="Cookery NC II">Cookery NC II</option>
                                <option value="Driving NC II">Driving NC II</option>
                                <option value="Bookkeeping NC III">Bookkeeping NC III</option>
                                <option value="CSS NC II">CSS NC II</option>
                                <option value="Organic Agriculture Production NC II">Organic Agriculture Production NC II</option>
                                <option value="Trainers Methodology Level I">Trainers Methodology Level I</option>
                            </select>
                        </div>

                    </div>

                </div>

            </div>

        </section>


        {{-- RESULTS HEADER --}}
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 mt-10 mb-6">
            <div class="flex items-center gap-3">
                <span class="h-8 w-1 bg-amber-400 rounded-full"></span>
                <div>
                    <h2 class="text-2xl sm:text-3xl font-bold text-blue-950">Training Institutions</h2>
                    <p class="text-sm text-gray-500 mt-1">Registered TESDA training providers and programs</p>
                </div>
            </div>

            <div id="resultCount" class="inline-flex items-center self-start sm:self-auto px-4 py-2 rounded-full bg-blue-50 text-blue-900 text-sm font-bold">
                0 Training Centers
            </div>
        </div>


        {{-- =====================================================
            TRAINING CENTERS - ROW / TABLE STRUCTURE
        ====================================================== --}}
        <div id="trainingList" class="flex flex-col gap-4">

            {{-- PTC DUMAGUETE --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Provincial Training Center Dumaguete Barangay Candau-ay Dumaguete City Negros Oriental Carpentry NC II Driving NC II Masonry NC II Tile Setting NC II Agroentrepreneurship NC II Trainers Methodology Level I"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Public"
                data-classification="TTI"
                data-sector="Government"
                data-program="Carpentry NC II Driving NC II Masonry NC II Tile Setting NC II Agroentrepreneurship NC II Trainers Methodology Level I"
                data-name="Provincial Training Center - Dumaguete"
                data-programs='[
                    {"status": "Active", "modality": "Mobile Training Program (MTP)", "sector": "Government", "course": "Carpentry NC II", "duration": "300 Hours", "reg_no": "WTR-2021-0701", "issued": "2021-03-15", "expiration": "2026-03-15"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Government", "course": "Driving NC II", "duration": "118 Hours", "reg_no": "WTR-2020-0512", "issued": "2020-01-10", "expiration": "2025-01-10"},
                    {"status": "Active", "modality": "Mobile Training Program (MTP)", "sector": "Government", "course": "Masonry NC II", "duration": "258 Hours", "reg_no": "WTR-2019-0411", "issued": "2019-11-20", "expiration": "2024-11-20"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Government", "course": "Tile Setting NC II", "duration": "162 Hours", "reg_no": "WTR-2022-0881", "issued": "2022-05-04", "expiration": "2027-05-04"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Government", "course": "Agroentrepreneurship NC II", "duration": "232 Hours", "reg_no": "WTR-2023-0102", "issued": "2023-02-18", "expiration": "2028-02-18"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Government", "course": "Trainers Methodology Level I", "duration": "264 Hours", "reg_no": "WTR-2018-0099", "issued": "2018-08-12", "expiration": "2023-08-12"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Public • TTI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Provincial Training Center - Dumaguete</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Barangay Candau-ay, Dumaguete City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                (035) 422-9481
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                ptc.dumaguete@tesda.gov.ph
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">6</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- TEAMSKILLS --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Teamskills Technological Institute Inc Dumaguete City Negros Oriental Bread and Pastry Production NC II Cookery NC II Housekeeping NC II Tourism Promotion Services NC II Barista NC II Trainers Methodology Level I"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bread and Pastry Production NC II Cookery NC II Housekeeping NC II Tourism Promotion Services NC II Barista NC II Trainers Methodology Level I"
                data-name="Teamskills Technological Institute, Inc."
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bread and Pastry Production NC II", "duration": "141 Hours", "reg_no": "NTR-2021-0012", "issued": "2021-01-10", "expiration": "2026-01-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Cookery NC II", "duration": "316 Hours", "reg_no": "NTR-2021-0013", "issued": "2021-01-10", "expiration": "2026-01-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Housekeeping NC II", "duration": "436 Hours", "reg_no": "NTR-2022-0450", "issued": "2022-06-15", "expiration": "2027-06-15"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Tourism Promotion Services NC II", "duration": "108 Hours", "reg_no": "NTR-2022-0890", "issued": "2022-09-01", "expiration": "2027-09-01"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Barista NC II", "duration": "178 Hours", "reg_no": "NTR-2023-0112", "issued": "2023-03-20", "expiration": "2028-03-20"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Trainers Methodology Level I", "duration": "264 Hours", "reg_no": "NTR-2019-0021", "issued": "2019-02-14", "expiration": "2024-02-14"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Teamskills Technological Institute, Inc.</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                3rd Floor Cecilia Building, Capitol Area, North Road, Daro, Dumaguete City
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">6</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- METRO DUMAGUETE COLLEGE --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Metro Dumaguete College Inc Dumaguete City Negros Oriental Computer Systems Servicing NC II CSS NC II Trainers Methodology Level I Bread and Pastry Production Bookkeeping NC III"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Computer Systems Servicing NC II CSS NC II Trainers Methodology Level I Bread and Pastry Production Bookkeeping NC III"
                data-name="Metro Dumaguete College Inc."
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Computer Systems Servicing NC II", "duration": "280 Hours", "reg_no": "NTR-2020-0331", "issued": "2020-05-10", "expiration": "2025-05-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Trainers Methodology Level I", "duration": "264 Hours", "reg_no": "NTR-2021-0044", "issued": "2021-08-11", "expiration": "2026-08-11"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bread and Pastry Production NC II", "duration": "141 Hours", "reg_no": "NTR-2019-0112", "issued": "2019-04-03", "expiration": "2024-04-03"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2022-0901", "issued": "2022-11-21", "expiration": "2027-11-21"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Metro Dumaguete College Inc.</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                E.J. Blanco Drive Extension, Brgy. Daro, Dumaguete City
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">4</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- SILLIMAN UNIVERSITY --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Silliman University Dumaguete City Negros Oriental Animal Production Poultry Chicken NC II Animal Production Swine NC II Organic Agriculture Production NC II Early Childhood Care and Development Services NC III"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Animal Production Poultry Chicken NC II Animal Production Swine NC II Organic Agriculture Production NC II Early Childhood Care and Development Services NC III"
                data-name="Silliman University"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Animal Production (Poultry-Chicken) NC II", "duration": "240 Hours", "reg_no": "NTR-2018-0911", "issued": "2018-03-01", "expiration": "2023-03-01"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Animal Production (Swine) NC II", "duration": "240 Hours", "reg_no": "NTR-2018-0912", "issued": "2018-03-01", "expiration": "2023-03-01"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Organic Agriculture Production NC II", "duration": "232 Hours", "reg_no": "NTR-2021-0404", "issued": "2021-09-15", "expiration": "2026-09-15"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Early Childhood Care & Development Services NC III", "duration": "240 Hours", "reg_no": "NTR-2022-0118", "issued": "2022-02-10", "expiration": "2027-02-10"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • HEI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Silliman University</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Dumaguete City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">4</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- STO NINO --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Sto Niño Skills Training Assessment Center Dumaguete Negros Oriental Bookkeeping NC III Driving NC II Caregiving NC II Agroentrepreneurship NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bookkeeping NC III Driving NC II Caregiving NC II Agroentrepreneurship NC II"
                data-name="Sto. Niño Skills Training & Assessment Center"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2020-0110", "issued": "2020-02-11", "expiration": "2025-02-11"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Driving NC II", "duration": "118 Hours", "reg_no": "NTR-2019-0820", "issued": "2019-07-20", "expiration": "2024-07-20"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Caregiving NC II", "duration": "786 Hours", "reg_no": "NTR-2021-0301", "issued": "2021-04-05", "expiration": "2026-04-05"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Agroentrepreneurship NC II", "duration": "232 Hours", "reg_no": "NTR-2023-0009", "issued": "2023-01-18", "expiration": "2028-01-18"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Sto. Niño Skills Training & Assessment Center</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                206 West Rovira Road, Pulantubig, Dumaguete City
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">4</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- FOUNDATION UNIVERSITY --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Foundation University Dumaguete City Negros Oriental Bread Pastry Production NC II Bookkeeping NC III Cookery NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Bread Pastry Production NC II Bookkeeping NC III Cookery NC II"
                data-name="Foundation University"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bread and Pastry Production NC II", "duration": "141 Hours", "reg_no": "NTR-2020-0012", "issued": "2020-01-15", "expiration": "2025-01-15"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2021-0811", "issued": "2021-08-20", "expiration": "2026-08-20"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Cookery NC II", "duration": "316 Hours", "reg_no": "NTR-2019-0302", "issued": "2019-03-12", "expiration": "2024-03-12"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • HEI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Foundation University</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Dumaguete City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">3</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- GLOBAL TECH --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Global Tech Manpower Institute Dumaguete Negros Oriental SMAW NC I SMAW NC II"
                data-province="Negros Oriental"
                data-municipality="Dumaguete City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="SMAW NC I SMAW NC II"
                data-name="Global Tech Manpower Institute"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "SMAW NC I", "duration": "268 Hours", "reg_no": "NTR-2021-0112", "issued": "2021-02-10", "expiration": "2026-02-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "SMAW NC II", "duration": "268 Hours", "reg_no": "NTR-2021-0113", "issued": "2021-02-10", "expiration": "2026-02-10"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Global Tech Manpower Institute</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Dumaguete City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">2</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- GUIHULNGAN SATELLITE --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Guihulngan Satellite Skills Development Center Guihulngan City Negros Oriental Dressmaking NC II"
                data-province="Negros Oriental"
                data-municipality="Guihulngan City"
                data-type="Public"
                data-classification="LGU"
                data-sector="Government"
                data-program="Dressmaking NC II"
                data-name="Guihulngan Satellite Skills Development Center"
                data-programs='[
                    {"status": "Active", "modality": "Mobile Training Program (MTP)", "sector": "Government", "course": "Dressmaking NC II", "duration": "275 Hours", "reg_no": "WTR-2022-0051", "issued": "2022-01-14", "expiration": "2027-01-14"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Public • LGU
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Guihulngan Satellite Skills Development Center</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Public Market, Guihulngan City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">1</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- RAMS ART --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Rams Art Training and Assessment Center Bais City Negros Oriental Bread Pastry Production NC II Bookkeeping NC III EIM NC II"
                data-province="Negros Oriental"
                data-municipality="Bais City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Bread Pastry Production NC II Bookkeeping NC III EIM NC II"
                data-name="Rams Art Training and Assessment Center"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bread & Pastry Production NC II", "duration": "141 Hours", "reg_no": "NTR-2020-0901", "issued": "2020-09-10", "expiration": "2025-09-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2021-0202", "issued": "2021-02-18", "expiration": "2026-02-18"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "EIM NC II", "duration": "196 Hours", "reg_no": "NTR-2022-0311", "issued": "2022-04-12", "expiration": "2027-04-12"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Rams Art Training and Assessment Center</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Bais City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">3</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- INTEGRATED DEVELOPMENT --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Integrated Development Training and Assessment Center Bayawan City Negros Oriental Agroentrepreneurship NC II Bookkeeping NC III Driving NC II"
                data-province="Negros Oriental"
                data-municipality="Bayawan City"
                data-type="Private"
                data-classification="TVI"
                data-sector="Private"
                data-program="Agroentrepreneurship NC II Bookkeeping NC III Driving NC II"
                data-name="Integrated Development Training and Assessment Center"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Agroentrepreneurship NC II", "duration": "232 Hours", "reg_no": "NTR-2022-0100", "issued": "2022-01-20", "expiration": "2027-01-20"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2021-0610", "issued": "2021-06-15", "expiration": "2026-06-15"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Driving NC II", "duration": "118 Hours", "reg_no": "NTR-2020-0412", "issued": "2020-04-10", "expiration": "2025-04-10"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • TVI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Integrated Development Training and Assessment Center</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Bayawan City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">3</span>
                        </button>
                    </div>
                </div>
            </article>

            {{-- SOUTHERN TECH --}}
            <article class="training-row bg-white rounded-2xl border border-gray-200 shadow-sm hover:shadow-md transition p-6"
                data-search="Southern Tech College Foundation Bayawan City Negros Oriental Bookkeeping NC III CSS NC II"
                data-province="Negros Oriental"
                data-municipality="Bayawan City"
                data-type="Private"
                data-classification="HEI"
                data-sector="Private"
                data-program="Bookkeeping NC III CSS NC II"
                data-name="Southern Tech College Foundation"
                data-programs='[
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "Bookkeeping NC III", "duration": "292 Hours", "reg_no": "NTR-2021-0912", "issued": "2021-09-10", "expiration": "2026-09-10"},
                    {"status": "Active", "modality": "Full Bio", "sector": "Private", "course": "CSS NC II", "duration": "280 Hours", "reg_no": "NTR-2022-0210", "issued": "2022-02-14", "expiration": "2027-02-14"}
                ]'>
                
                <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="space-y-2">
                        <div class="flex items-center gap-3">
                            <span class="text-xs font-bold uppercase tracking-wide text-amber-600 bg-amber-50 px-2.5 py-1 rounded-md border border-amber-200">
                                Private • HEI
                            </span>
                            <span class="px-2.5 py-0.5 rounded-full bg-green-50 text-green-700 text-xs font-bold">
                                Active
                            </span>
                        </div>
                        <h3 class="text-xl font-bold text-blue-950">Southern Tech College Foundation</h3>
                        <div class="flex flex-wrap items-center gap-y-2 gap-x-5 text-xs sm:text-sm text-gray-600">
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg>
                                Bayawan City, Negros Oriental
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.25 6.75c0 12.751 10.249 23 23 23 1.25 0 2.25-1 2.25-2.25v-3.882c0-.529-.37-1.002-.882-1.127l-4.508-1.127a1.125 1.125 0 0 0-1.077.307l-1.89 1.89a19.06 19.06 0 0 1-8.625-8.625l1.89-1.89a1.125 1.125 0 0 0 .307-1.077L7.009 3.132A1.125 1.125 0 0 0 5.882 2.25H2.25Z"/></svg>
                                N/A
                            </span>
                            <span class="flex items-center gap-1.5">
                                <svg class="w-4 h-4 text-blue-800 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25H4.5a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5H4.5a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg>
                                N/A
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between md:justify-end gap-3 pt-4 md:pt-0 border-t md:border-t-0 border-gray-100">
                        <button type="button" onclick="openProgramModal(this)" class="btn-view-programs w-full md:w-auto inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-blue-900 text-white hover:bg-blue-800 rounded-xl text-sm font-semibold transition">
                            <span>View All Registered Programs</span>
                            <span class="bg-blue-800 px-2 py-0.5 rounded-full text-xs">2</span>
                        </button>
                    </div>
                </div>
            </article>

        </div>


        {{-- EMPTY STATE --}}
        <div id="emptyState" class="hidden py-20 text-center">
            <div class="mx-auto w-16 h-16 rounded-2xl bg-blue-50 text-blue-800 flex items-center justify-center">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="m21 21-4.35-4.35m2.1-5.4a7.5 7.5 0 1 1-15 0 7.5 7.5 0 0 1 15 0Z" />
                </svg>
            </div>
            <h3 class="mt-5 text-xl font-bold text-blue-950">No training centers found</h3>
            <p class="mt-2 text-gray-500 max-w-md mx-auto text-sm">
                Try changing your search or filter options to find registered training institutions.
            </p>
        </div>


        {{-- INFORMATION NOTE --}}
        <section class="mt-12">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-r from-blue-950 to-blue-900 p-6 sm:p-8">
                <div class="relative flex flex-col sm:flex-row gap-5 sm:items-start">
                    <div class="flex-shrink-0 w-11 h-11 rounded-xl bg-amber-400/15 border border-amber-400/30 text-amber-300 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 16v-4m0-4h.01M5.5 20h13a2 2 0 0 0 1.73-3L13.73 4a2 2 0 0 0-3.46 0L3.77 17a2 2 0 0 0 1.73 3Z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-lg font-bold text-white">Training Center Directory</h3>
                        <p class="mt-2 text-sm leading-relaxed text-blue-100 max-w-4xl">
                            The directory presents training-provider information and registered programs from the TESDA training-provider dataset. Program registration details, institution classification, location, and other provider information can be presented in the detailed institution view.
                        </p>
                    </div>
                </div>
            </div>
        </section>

    </main>

</div>


{{-- =============================================================
    PROGRAM DETAILS MODAL (EXPANDED TABLE)
============================================================= --}}
<div id="programModal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-gray-900/60 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6">
    <div class="relative bg-white rounded-2xl shadow-2xl w-full max-w-6xl overflow-hidden transform transition-all">
        
        {{-- Modal Header --}}
        <div class="flex items-center justify-between p-5 sm:p-6 bg-blue-950 text-white">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider text-amber-400">Registered Programs</span>
                <h3 id="modalInstitutionName" class="text-xl font-bold mt-1">Institution Name</h3>
            </div>
          
        </div>

        {{-- Modal Body / Scrollable Table --}}
        <div class="p-5 sm:p-6 max-h-[70vh] overflow-y-auto">
            <div class="overflow-x-auto rounded-xl border border-gray-200">
                <table class="w-full text-left border-collapse min-w-[800px]">
                    <thead>
                        <tr class="bg-gray-100 text-gray-700 text-xs font-bold uppercase tracking-wider border-b border-gray-200">
                            <th class="py-3 px-4">Status</th>
                            <th class="py-3 px-4">Delivery Modality</th>
                            <th class="py-3 px-4">Sector</th>
                            <th class="py-3 px-4">Course / Registered Program</th>
                            <th class="py-3 px-4">Duration (Hours)</th>
                            <th class="py-3 px-4">Program Reg. No.</th>
                            <th class="py-3 px-4">Date Issued</th>
                            <th class="py-3 px-4">Expiration Date</th>
                        </tr>
                    </thead>
                    <tbody id="modalProgramRows" class="divide-y divide-gray-200 text-sm">
                        {{-- Dynamically Populated --}}
                    </tbody>
                </table>
            </div>
        </div>

        {{-- Modal Footer --}}
        <div class="p-4 bg-gray-50 border-t border-gray-100 flex justify-end">
            <button type="button" onclick="closeProgramModal()" class="px-5 py-2.5 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-semibold rounded-xl transition">
                Close
            </button>
        </div>

    </div>
</div>


{{-- =============================================================
    FILTER / SEARCH & MODAL SCRIPT
============================================================= --}}
<script>

function openProgramModal(button) {
    const row = button.closest('.training-row');
    const institutionName = row.dataset.name || 'Institution Details';
    const rawData = row.dataset.programs;

    document.getElementById('modalInstitutionName').textContent = institutionName;
    
    const tbody = document.getElementById('modalProgramRows');
    tbody.innerHTML = '';

    if (rawData) {
        try {
            const programs = JSON.parse(rawData);
            programs.forEach(prog => {
                const tr = document.createElement('tr');
                tr.className = 'hover:bg-blue-50/50 transition';

                tr.innerHTML = `
                    <td class="py-3.5 px-4 font-semibold text-green-700">
                        <span class="inline-block px-2.5 py-0.5 rounded-full bg-green-50 border border-green-200 text-xs">
                            ${prog.status || 'Active'}
                        </span>
                    </td>
                    <td class="py-3.5 px-4 text-gray-700 font-medium">
                        ${prog.modality || 'Full Bio'}
                    </td>
                    <td class="py-3.5 px-4 text-gray-600">${prog.sector || '—'}</td>
                    <td class="py-3.5 px-4 font-bold text-blue-950">${prog.course || '—'}</td>
                    <td class="py-3.5 px-4 text-gray-700 font-medium">${prog.duration || '—'}</td>
                    <td class="py-3.5 px-4 font-mono text-xs text-gray-700">${prog.reg_no || '—'}</td>
                    <td class="py-3.5 px-4 text-gray-600">${prog.issued || '—'}</td>
                    <td class="py-3.5 px-4 text-gray-600">${prog.expiration || '—'}</td>
                `;
                tbody.appendChild(tr);
            });
        } catch (e) {
            console.error('Invalid JSON for programs data', e);
        }
    }

    document.getElementById('programModal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

function closeProgramModal() {
    document.getElementById('programModal').classList.add('hidden');
    document.body.classList.remove('overflow-hidden');
}

document.addEventListener('DOMContentLoaded', function () {

    const searchInput = document.getElementById('trainingSearch');
    const provinceFilter = document.getElementById('provinceFilter');
    const municipalityFilter = document.getElementById('municipalityFilter');
    const typeFilter = document.getElementById('typeFilter');
    const classificationFilter = document.getElementById('classificationFilter');
    const sectorFilter = document.getElementById('sectorFilter');
    const programFilter = document.getElementById('programFilter');
    const resetButton = document.getElementById('resetFilters');

    const rows = Array.from(document.querySelectorAll('.training-row'));
    const resultCount = document.getElementById('resultCount');
    const emptyState = document.getElementById('emptyState');

    function normalize(value) {
        return String(value || '').toLowerCase().trim();
    }

    function filterRows() {
        const search = normalize(searchInput.value);
        const province = normalize(provinceFilter.value);
        const municipality = normalize(municipalityFilter.value);
        const type = normalize(typeFilter.value);
        const classification = normalize(classificationFilter.value);
        const sector = normalize(sectorFilter.value);
        const program = normalize(programFilter.value);

        let visibleCount = 0;

        rows.forEach(function (row) {
            const rowSearch = normalize(row.dataset.search);
            const rowProvince = normalize(row.dataset.province);
            const rowMunicipality = normalize(row.dataset.municipality);
            const rowType = normalize(row.dataset.type);
            const rowClassification = normalize(row.dataset.classification);
            const rowSector = normalize(row.dataset.sector);
            const rowProgram = normalize(row.dataset.program);

            const matchesSearch = !search || rowSearch.includes(search);
            const matchesProvince = !province || rowProvince === province;
            const matchesMunicipality = !municipality || rowMunicipality === municipality;
            const matchesType = !type || rowType === type;
            const matchesClassification = !classification || rowClassification === classification;
            const matchesSector = !sector || rowSector === sector;
            const matchesProgram = !program || rowProgram.includes(program);

            const matches = matchesSearch && matchesProvince && matchesMunicipality && matchesType && matchesClassification && matchesSector && matchesProgram;

            if (matches) {
                row.classList.remove('hidden');
                visibleCount++;
            } else {
                row.classList.add('hidden');
            }
        });

        resultCount.textContent = visibleCount + (visibleCount === 1 ? ' Training Center' : ' Training Centers');

        if (visibleCount === 0) {
            emptyState.classList.remove('hidden');
        } else {
            emptyState.classList.add('hidden');
        }
    }

    [searchInput, provinceFilter, municipalityFilter, typeFilter, classificationFilter, sectorFilter, programFilter].forEach(function (element) {
        element.addEventListener('input', filterRows);
        element.addEventListener('change', filterRows);
    });

    resetButton.addEventListener('click', function () {
        searchInput.value = '';
        provinceFilter.value = '';
        municipalityFilter.value = '';
        typeFilter.value = '';
        classificationFilter.value = '';
        sectorFilter.value = '';
        programFilter.value = '';
        filterRows();
    });

    filterRows();
});

</script>

@endsection