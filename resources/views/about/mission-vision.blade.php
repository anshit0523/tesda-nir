@extends('layouts.app')

@section('title', 'Mission, Vision & Core Values')

@section('content')
@include('partials.navbar')

    <!-- Hero -->
    <section class="bg-blue-900 text-white py-20">

        <div class="max-w-7xl mx-auto px-6 text-center">

            <span class="inline-block px-4 py-2 rounded-full bg-white/20 text-sm font-semibold">
                ABOUT TESDA NIR
            </span>

            <h1 class="mt-6 text-5xl font-bold">
                Mission, Vision & Core Values
            </h1>

            <p class="mt-6 max-w-3xl mx-auto text-blue-100 leading-8 text-lg">

                TESDA remains committed to developing a highly competent,
                globally competitive, and values-driven Filipino workforce
                through quality Technical-Vocational Education and Training
                (TVET).

            </p>

        </div>

    </section>

    <!-- Quick Information -->
    <section class="bg-white py-12 border-b">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">

                <!-- Established -->
                <div class="text-center">

                    <h3 class="text-4xl font-bold text-blue-900">
                        1994
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Established under RA 7796
                    </p>

                </div>

                <!-- Republic Act -->
                <div class="text-center">

                    <h3 class="text-4xl font-bold text-blue-900">
                        RA 7796
                    </h3>

                    <p class="mt-2 text-gray-600">
                        TESDA Act of 1994
                    </p>

                </div>

                <!-- Region -->
                <div class="text-center">

                    <h3 class="text-4xl font-bold text-blue-900">
                        Region XVIII
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Negros Island Region
                    </p>

                </div>

                <!-- Provinces -->
                <div class="text-center">

                    <h3 class="text-4xl font-bold text-blue-900">
                        3
                    </h3>

                    <p class="mt-2 text-gray-600">
                        Provinces Served
                    </p>

                </div>

            </div>

        </div>

    </section>

    <!-- Mandate Vision Mission -->
    <section class="py-20 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-3 gap-8">

                <!-- Mandate -->
                <div class="border border-gray-200 border-t-4 border-t-blue-900 rounded-xl p-8">

                    <div class="flex items-center gap-3 mb-6">



                        <h3 class="text-2xl font-bold text-blue-900">
                            Our Mandate
                        </h3>

                    </div>

                    <div class="space-y-5 text-gray-700 leading-8">

                        <p>
                            The Technical Education and Skills Development Authority (TESDA) was established through
                            Republic Act No. 7796, otherwise known as the <strong>TESDA Act of 1994</strong>.
                        </p>

                        <p>
                            TESDA replaced the National Manpower and Youth Council (NMYC) and consolidated the
                            technical-vocational education programs of the DECS and the DOLE.
                            TESDA is mandated to formulate plan policies, coordinate, and integrate technical-vocational
                            education and training (TVET) programs across the country.
                        </p>



                    </div>

                </div>

                <!-- Vision -->
                <div class="border border-gray-200 border-t-4 border-t-blue-900 rounded-xl p-8">

                    <div class="flex items-center gap-3 mb-6">



                        <h3 class="text-2xl font-bold text-blue-900">
                            Our Vision
                        </h3>

                    </div>

                    <div class="space-y-5 text-gray-700 leading-8">

                        <p>
                            The leading partner in the development of the Filipino workforce with world-class competence and
                            positive work values.

                        </p>

                        <p>
                            We envision a highly skilled, adaptable, and competitive workforce that drives sustainable
                            development and inclusive growth across the Negros Island Region.

                        </p>

                    </div>

                </div>

                <!-- Mission -->
                <div class="border border-gray-200 border-t-4 border-t-blue-900 rounded-xl p-8">

                    <div class="flex items-center gap-3 mb-6">



                        <h3 class="text-2xl font-bold text-blue-900">
                            Our Mission
                        </h3>

                    </div>

                    <div class="space-y-5 text-gray-700 leading-8">

                        <p>
                            TESDA provides direction, policies, programs, and standards towards quality technical education
                            and skills development.

                        </p>

                        <p>
                            We are committed to delivering accessible, relevant, and high-quality TVET programs that empower
                            Negrenses and Siquijodnons for gainful employment and entrepreneurship.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- Region Profile -->
    <section class="py-20 bg-blue-900">

        <div class="max-w-7xl mx-auto px-6">

            <div class="bg-white rounded-3xl p-12">

                <div class="grid lg:grid-cols-2 gap-14 items-center">

                    <!-- Left -->
                    <div>

                        <img src="{{ asset('images/negrosisland.png') }}" alt="Negros Island Region Map"
                            class="w-full rounded-2xl border border-gray-200">

                        <p class="mt-4 text-sm text-center text-gray-500">

                            Negros Island Region (Region XVIII)

                        </p>

                    </div>

                    <!-- Right -->
                    <div>

                        <span class="inline-block px-4 py-2 rounded-full bg-blue-100 text-blue-900 text-sm font-semibold">

                            REGION XVIII

                        </span>

                        <h2 class="mt-5 text-4xl font-bold text-blue-900">

                            Negros Island Region Profile

                        </h2>

                        <div class="mt-8 space-y-6 text-gray-700 leading-8">

                            <h3 class="text-2xl font-bold text-blue-900">
                                About the Negros Island Region (Region XVIII)
                            </h3>

                            <p>
                                Reconstituted under Republic Act No. 12000 in 2024, the Negros Island Region (NIR)
                                integrates the provinces of Negros Occidental, Negros Oriental, and Siquijor into a single
                                administrative region.
                            </p>

                            <p>
                                Prior to its reconstitution, Negros Occidental belonged to Region VI (Western Visayas),
                                while Negros Oriental and Siquijor formed part of Region VII (Central Visayas).
                            </p>

                            <p>
                                The establishment of TESDA NIR centralizes and streamlines technical-vocational education
                                and skills development services, ensuring scholarships, training standards, assessment, and
                                certification programs are delivered more efficiently and are responsive to the workforce
                                development needs of the region.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endsection