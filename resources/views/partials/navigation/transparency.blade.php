<!-- Transparency -->
<li class="relative group">

    <!-- Menu Button -->
    <button
        class="flex items-center gap-2 py-2 transition duration-300 hover:text-amber-300">

        Transparency

        <svg
            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7"/>

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
           transition-all duration-300 ease-out">

        <div class="w-80 bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden">

            <!-- Header -->
            <div class="px-6 py-5 bg-blue-900 text-white">

                <h3 class="text-lg font-semibold">
                    Transparency
                </h3>

                <p class="text-sm text-blue-100 mt-1">
                    Access official government documents and public information.
                </p>

            </div>

            <!-- Menu Items -->

            <a href="{{ route('transparency.seal') }}"
               class="block px-6 py-4 hover:bg-blue-50 transition">

                <h4 class="font-medium text-gray-800">
                    Transparency Seal
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    View compliance with transparency requirements.
                </p>

            </a>

            <a href="#"
               class="block px-6 py-4 hover:bg-blue-50 transition">

                <h4 class="font-medium text-gray-800">
                    Citizen's Charter
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Learn about frontline services and processing times.
                </p>

            </a>

            <a href="#"
               class="block px-6 py-4 hover:bg-blue-50 transition">

                <h4 class="font-medium text-gray-800">
                    Bids & Awards Committee
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Procurement opportunities, notices, and awards.
                </p>

            </a>

            <a href="#"
               class="block px-6 py-4 hover:bg-blue-50 transition">

                <h4 class="font-medium text-gray-800">
                    Downloadable Forms
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Access official forms and application documents.
                </p>

            </a>

            <a href="#"
               class="block px-6 py-4 hover:bg-blue-50 transition">

                <h4 class="font-medium text-gray-800">
                    Issuances
                </h4>

                <p class="text-sm text-gray-500 mt-1">
                    Memoranda, circulars, and administrative orders.
                </p>

            </a>

            <!-- Footer -->

            <div class="px-6 py-4 bg-gray-50 border-t">

                <a href="#"
                   class="inline-flex items-center text-blue-900 font-medium hover:text-blue-700">

                    View Transparency Portal

                    <svg
                        class="ml-2 w-4 h-4"
                        fill="none"
                        stroke="currentColor"
                        viewBox="0 0 24 24">

                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M9 5l7 7-7 7"/>

                    </svg>

                </a>

            </div>

        </div>

    </div>

</li>