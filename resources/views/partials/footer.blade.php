<footer class="font-['Frutiger',sans-serif] relative bg-gradient-to-b from-blue-950 via-blue-900 to-blue-950 text-white overflow-hidden border-t-2 border-amber-500/50">

    <!-- SUBTLE TESDA WATERMARK -->
    <div
        class="absolute inset-0 pointer-events-none bg-contain opacity-[0.035]"
        aria-hidden="true">
    </div>


    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-10 relative z-10 space-y-8">


        <!-- ================================================= -->
        <!-- IDENTITY BANNER: TESDA | Seal | Data Privacy      -->
        <!-- ================================================= -->
        <div class="rounded-2xl  px-6 py-6 lg:px-10">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-0 w-full max-w-sm mx-auto lg:max-w-none">

                <!-- TESDA -->
                <div class="flex items-center justify-start gap-4 lg:pr-8">
                    <img
                        src="images/TESDA Logo official.png"
                        alt="TESDA Logo"
                        class="h-24 w-24 lg:w-auto shrink-0 object-contain"
                    >
                    <div>
                        <h3 class="text-3xl font-bold text-white tracking-tight leading-none">
                            TESDA
                        </h3>
                        <p class="mt-1.5 text-sm font-medium text-amber-400">
                            Negros Island Region
                        </p>
                    </div>
                </div>

                <!-- SEAL -->
                <div class="flex items-center justify-start lg:justify-center gap-4 lg:px-8">
                    <img
                        src="images/philseal.png"
                        alt="Coat of Arms of the Philippines"
                        class="h-24 w-24 lg:w-auto shrink-0 object-contain"
                    >
                    <div>
                        <span class="block text-sm font-bold uppercase tracking-widest text-amber-400">
                            Republic of the Philippines
                        </span>
                        <p class="mt-1.5 max-w-[15rem] text-xs text-white/80 leading-relaxed">
                            All content is in the public domain unless otherwise stated.
                        </p>
                    </div>
                </div>

                <!-- DATA PRIVACY -->
                <a href="#" aria-label="Data Privacy Office" class="flex items-center justify-start lg:justify-end gap-4 lg:pl-8">
                    <img
                        src="images/dpo-dps.png"
                        alt="Data Privacy Office"
                        class="h-28 w-24 lg:w-auto shrink-0 object-contain"
                    >
                    <div>
                        <p class="text-sm font-semibold text-white">Data Privacy Office</p>
                        <p class="mt-1 max-w-[12rem] text-xs text-white/60 leading-relaxed">
                            Data privacy and protection information.
                        </p>
                    </div>
                </a>

            </div>

        </div>


        <!-- ================================================= -->
        <!-- THREE CARDS: About | Programs | Contact           -->
        <!-- ================================================= -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


            <!-- ABOUT -->
            <div class="rounded-xl p-6 space-y-5">

                <h4 class="text-base font-bold uppercase tracking-wider text-amber-400">
                    About
                </h4>

                <div class="w-14 h-0.5 bg-amber-400"></div>

                <ul class="grid grid-cols-2 gap-x-4 gap-y-2.5 text-sm">
                    <li><a href="{{ url('/') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Home</a></li>
                    <li><a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">About Us</a></li>
                    <li><a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Programs & Services</a></li>
                    <li><a href="{{ route('newsmain') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">News</a></li>
                    <li><a href="{{ route('transparency.seal') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Transparency</a></li>
                    <li><a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Contact</a></li>
                </ul>

                <!-- FOLLOW US -->
                <div class="pt-4 flex items-center gap-4">

                    <span class="text-sm uppercase tracking-wider text-amber-400 font-bold">
                        Follow Us
                    </span>

                    <a
                        href="https://web.facebook.com/OfficialTESDANIR"
                        class="w-11 h-11 rounded-full bg-white/10 flex items-center justify-center text-white hover:bg-amber-400 hover:text-blue-950 transition-all duration-300"
                        aria-label="Facebook"
                    >
                        <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </a>

                </div>

            </div>


            <!-- PROGRAMS & SERVICES -->
            <div class="rounded-xl p-6 space-y-5">

                <h4 class="text-base font-bold uppercase tracking-wider text-amber-400">
                    Programs & Services
                </h4>

                <div class="w-14 h-0.5 bg-amber-400"></div>

                <ul class="space-y-2.5 text-sm">
                    <li><a href="{{ route('scholarshipmain') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Scholarships</a></li>
                    <li><a href="{{ route('schoolarship.trainingcenter') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Training Programs</a></li>
                    <li><a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Assessment & Certification</a></li>
                    <li><a href="{{ route('schoolarship.trainingcenter') }}" class="text-white/80 hover:text-amber-400 transition-colors duration-200 block">Training Centers</a></li>
                </ul>

            </div>


            <!-- CONTACT INFO -->
            <div class="rounded-xl p-6 space-y-5 md:col-span-2 lg:col-span-1">

                <h4 class="text-base font-bold uppercase tracking-wider text-amber-400">
                    Contact Info
                </h4>

                <div class="w-14 h-0.5 bg-amber-400"></div>

                <ul class="space-y-3.5 text-sm">

                    <!-- ADDRESS -->
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-amber-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-white/80 leading-snug">
                            TESDA Negros Island Region<br>Regional Headquarters
                        </span>
                    </li>

                    <!-- PHONE -->
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        <a href="tel:" class="text-white/80 hover:text-amber-400 transition-colors duration-200">0960 396 1296</a>
                    </li>

                    <!-- EMAIL -->
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        <a href="mailto:nir@tesda.gov.ph" class="text-white/80 hover:text-amber-400 transition-colors duration-200">nir@tesda.gov.ph</a>
                    </li>

                    <!-- OFFICE HOURS -->
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-amber-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-white/80">Mon - Fri: 8:00 AM - 7:00 PM</span>
                    </li>

                </ul>

            </div>

        </div>

    </div>


    <!-- ===================================================== -->
    <!-- BOTTOM BAR -->
    <!-- ===================================================== -->
    <div class="bg-blue-950/50 border-t border-amber-500/50 relative z-10">

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

            <div class="flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-center md:text-left text-xs sm:text-sm text-white/60 leading-relaxed">
                    &copy; 2026 Technical Education and Skills Development Authority –
                    Negros Island Region. All Rights Reserved.
                </p>

                <div class="flex items-center gap-6 text-xs sm:text-sm">
                    <a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-white/80 hover:text-amber-400 transition-colors duration-200">Terms of Use</a>
                </div>

            </div>

        </div>

    </div>

</footer>