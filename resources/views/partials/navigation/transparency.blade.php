

<style>
    /* Put scrollbar on the LEFT */
    .direction-rtl {
        direction: rtl;
    }

    /* Keep the actual content normal */
    .direction-ltr {
        direction: ltr;
    }

    /* Slim scrollbar */
    .direction-rtl::-webkit-scrollbar {
        width: 3px;
    }

    .direction-rtl::-webkit-scrollbar-track {
        background: #f1f5f9;
    }

    .direction-rtl::-webkit-scrollbar-thumb {
        background: #1e3a8a;
        border-radius: 9999px;
    }

    .direction-rtl::-webkit-scrollbar-thumb:hover {
        background: #1e40af;
    }
</style>

<!-- Transparency -->
<li class="relative group">

    @php
        $transparencyActive =
            request()->routeIs('transparency.seal');
    @endphp


    <!-- Menu Button -->
    <button
        type="button"
        class="flex items-center gap-2 py-2 font-[Frutiger]
               border-b-2
               transition duration-300
               {{ $transparencyActive
                    ? 'text-amber-300 border-amber-300'
                    : 'text-white border-transparent hover:text-amber-300 hover:border-amber-300'
               }}"
    >

        Transparency

        <svg
            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
        >

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"
            />

        </svg>

    </button>


    <!-- Hover Buffer -->
    <div class="absolute left-0 top-full w-72 h-3"></div>


    <!-- Dropdown -->
    <div
        class="absolute left-1/2 -translate-x-1/2 top-full pt-3
               opacity-0 invisible translate-y-3
               group-hover:opacity-100
               group-hover:visible
               group-hover:translate-y-0
               transition-all duration-300 ease-out
               z-[9999]"
    >

     <div class="w-80 bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden">

    <!-- Header - NOT SCROLLABLE -->
    <div class="px-6 py-5 bg-blue-900 text-white">
        <h3 class="text-lg font-semibold font-[Frutiger]">
            Transparency
        </h3>

        <p class="text-sm text-blue-100 mt-1 font-[Frutiger]">
            Access official government documents and public information.
        </p>
    </div>


    <!-- ONLY THESE ITEMS SCROLL -->
    <div
        class="max-h-[280px] overflow-y-auto direction-rtl"
    >

        <div class="direction-ltr">

            <!-- Transparency Seal -->
            <a
                href="{{ route('transparency.seal') }}"
                class="block px-6 py-4 font-[Frutiger]
                       {{ request()->routeIs('transparency.seal')
                            ? 'bg-blue-50 text-blue-900'
                            : 'text-gray-800 hover:bg-blue-50'
                       }}
                       transition"
            >
                <h4 class="font-medium">
                    Transparency Seal
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    View compliance with transparency requirements.
                </p>
            </a>


            <!-- Citizen's Charter -->
            <a
                href="{{ route('transparency.citizen-charter') }}"
                class="block px-6 py-4 font-[Frutiger]
                       text-gray-800 hover:bg-blue-50 transition"
            >
                <h4 class="font-medium">
                    Citizen's Charter
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Learn about frontline services and processing times.
                </p>
            </a>


            <!-- Bids & Awards Committee -->
            <a
                href="{{ route('transparency.awards-committe') }}"
                class="block px-6 py-4 font-[Frutiger]
                       text-gray-800 hover:bg-blue-50 transition"
            >
                <h4 class="font-medium">
                    Bids & Awards Committee
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Procurement opportunities, notices, and awards.
                </p>
            </a>


            <!-- Downloadable Forms -->
            <a
                href="https://www.tesda.gov.ph/About/TESDA/29"
                class="block px-6 py-4 font-[Frutiger]
                       text-gray-800 hover:bg-blue-50 transition"
            >
                <h4 class="font-medium">
                    Downloadable Forms
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Access official forms and application documents.
                </p>
            </a>


            <!-- Issuances 
            <a
                href="#"
                class="block px-6 py-4 font-[Frutiger]
                       text-gray-800 hover:bg-blue-50 transition"
            >
                <h4 class="font-medium">
                    Issuances
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Memoranda, circulars, and administrative orders.
                </p>
            </a> -->

        </div>

    </div>


</div>

    </div>

</li>