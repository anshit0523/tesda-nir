{{--
    Wall of Success — graduate success stories, grid layout
    Usage: @include('partials.wall-of-success')
    Save to: resources/views/partials/wall-of-success.blade.php

    Place this section ABOVE @include('partials.partners-carousel')
--}}

<section class="relative py-20 bg-white overflow-hidden">

    <div class="max-w-7xl mx-auto px-8">

        {{-- Section heading --}}
        <div class="text-center max-w-2xl mx-auto mb-14">
            <p class="text-sm font-bold tracking-[0.2em] uppercase text-amber-500 mb-3">
                Wall of Success
            </p>
            <h2 class="text-3xl sm:text-4xl font-bold text-blue-900 leading-tight">
                Graduates Making an Impact
            </h2>
            <p class="mt-4 text-lg text-gray-600 leading-8">
                Real stories from TESDA-NIR graduates who turned skills training
                into careers, businesses, and better lives.
            </p>
        </div>

        {{-- Grid of graduate cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            {{-- Card 1 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate1.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Culinary Arts NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Maria Santos
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Opened her own catering business in Bacolod City after
                        completing her TESDA certification.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate2.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Electrical Installation NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Juan Dela Cruz
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Now employed as a certified electrician with a
                        partner company in Negros Occidental.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate3.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Bread & Pastry Production NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Angeline Reyes
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Built a home-based bakery that now supplies three
                        local cafes across Negros Island.
                    </p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate4.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Automotive Servicing NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Ricardo Villanueva
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Promoted to shop supervisor within a year of
                        completing his certification.
                    </p>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate5.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Dressmaking NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Liza Fernandez
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Launched a tailoring shop that now trains and employs
                        four other women in her barangay.
                    </p>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="success-card group relative rounded-xl overflow-hidden shadow-lg">
                <img
                    src="{{ asset('images/graduates/graduate6.jpg') }}"
                    alt="Graduate name"
                    class="w-full h-72 object-cover transition duration-500 group-hover:scale-105"
                >
                <div class="absolute inset-0 bg-gradient-to-t from-blue-900/90 via-blue-900/20 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <p class="text-xs font-bold tracking-widest uppercase text-yellow-300 mb-1">
                        Computer Systems Servicing NC II
                    </p>
                    <h3 class="text-xl font-bold text-white leading-snug">
                        Mark Anthony Cruz
                    </h3>
                    <p class="mt-2 text-sm text-blue-100 leading-6">
                        Now runs an IT repair shop serving two municipalities
                        in the region.
                    </p>
                </div>
            </div>

            {{-- Duplicate a card block above and update image/text to add more graduates --}}

        </div>

    </div>

</section>

<style>
    .success-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .success-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 20px 40px -12px rgba(30, 58, 138, 0.35);
    }
</style>