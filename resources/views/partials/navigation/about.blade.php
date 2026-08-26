<!-- About Us -->
<li class="relative group">

    @php
        $aboutActive =
            request()->is('regional-profile') ||
            request()->routeIs('mission-vision') ||
            request()->is('organizational-structure') ||
            request()->is('regional-director');
    @endphp

    <!-- Button -->
    <button
        type="button"
        class="flex items-center gap-2 py-2 font-[Frutiger]
               border-b-2
               transition duration-300
               {{ $aboutActive
                    ? 'text-amber-300 border-amber-300'
                    : 'text-white border-transparent hover:text-amber-300 hover:border-amber-300'
               }}"
    >

        About Us

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
    <div class="absolute left-0 top-full h-3 w-72"></div>


    <!-- Dropdown -->
    <div
        class="absolute left-0 top-full pt-3 w-72
               opacity-0 invisible translate-y-2
               group-hover:opacity-100
               group-hover:visible
               group-hover:translate-y-0
               transition-all duration-300 ease-out
               z-[9999]"
    >

        <div class="bg-white rounded-xl border border-gray-200 shadow-xl overflow-hidden">


            <!-- Header -->
            <div class="px-6 py-4 bg-blue-900 text-white">

                <h3 class="font-semibold text-lg font-[Frutiger]">
                    About TESDA NIR
                </h3>

                <p class="text-xs text-blue-100 mt-1 font-[Frutiger]">
                    Learn more about the Regional Office.
                </p>

            </div>


            <!-- Links -->

            <a
                href="{{ url('/regional-profile') }}"
                class="block px-6 py-3 font-[Frutiger]
                       {{ request()->is('regional-profile')
                            ? 'bg-blue-50 text-blue-900 font-bold'
                            : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900'
                       }}
                       transition"
            >
                History
            </a>


            <a
                href="{{ route('mission-vision') }}"
                class="block px-6 py-3 font-[Frutiger]
                       {{ request()->routeIs('mission-vision')
                            ? 'bg-blue-50 text-blue-900 font-bold'
                            : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900'
                       }}
                       transition"
            >
                Mission, Vision & Core Values
            </a>


            <a
                href="{{ url('/organizational-structure') }}"
                class="block px-6 py-3 font-[Frutiger]
                       {{ request()->is('organizational-structure')
                            ? 'bg-blue-50 text-blue-900 font-bold'
                            : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900'
                       }}
                       transition"
            >
                Organizational Structure
            </a>


            <a
                href="{{ url('/regional-director') }}"
                class="block px-6 py-3 font-[Frutiger]
                       {{ request()->is('regional-director')
                            ? 'bg-blue-50 text-blue-900 font-bold'
                            : 'text-gray-700 hover:bg-blue-50 hover:text-blue-900'
                       }}
                       transition"
            >
                Regional Director
            </a>

        </div>

    </div>

</li>