<!-- Contact -->
<li class="relative group">

    <button
        type="button"
        class="flex items-center gap-2 py-2 transition duration-300 hover:text-amber-300">
        Contact
        <svg
            class="w-4 h-4 transition-transform duration-300 group-hover:rotate-180"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24">
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M19 9l-7 7-7-7" />
        </svg>
    </button>

    <!-- Hover Buffer -->
    <div class="absolute right-0 top-full h-3 w-72"></div>

    <!-- Dropdown -->
    <div
        class="absolute right-0 top-full pt-3 w-72
               opacity-0 invisible translate-y-2
               group-hover:opacity-100
               group-hover:visible
               group-hover:translate-y-0
               transition-all duration-300 ease-out
               z-[9999]">

        <div class="bg-blue-800/95 backdrop-blur-md rounded-xl border border-blue-700 shadow-xl overflow-hidden">

            <!-- Regional Headquarters -->
            <a href="{{ url('/') }}#Contact" class="block px-6 py-3 text-white hover:bg-blue-700 hover:text-amber-300 transition">
                Regional Headquarters
            </a>

            <!-- Negros Occidental -->
            <a href="{{ route('contact.negros-occidental') }}" class="block px-6 py-3 text-white hover:bg-blue-700 hover:text-amber-300 transition">
                Negros Occidental
            </a>

            <!-- Negros Oriental -->
            <a href="{{ route('contact.negros-oriental') }}" class="block px-6 py-3 text-white hover:bg-blue-700 hover:text-amber-300 transition">
                Negros Oriental
            </a>

            <!-- Siquijor -->
            <a href="{{ route('contact.siquijor') }}" class="block px-6 py-3 text-white hover:bg-blue-700 hover:text-amber-300 transition">
                Siquijor
            </a>

        </div>

    </div>

</li>