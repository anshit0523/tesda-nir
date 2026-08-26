<!-- Programs & Services -->
<li class="relative group">

    <!-- Menu Button -->
    <button
        class="flex items-center gap-2 py-2 transition duration-300 hover:text-amber-300">

        Programs & Services

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
    <div class="absolute left-0 top-full w-full h-3"></div>

    <!-- Mega Menu -->
    <div
         class="absolute left-1/2 -translate-x-1/2 top-full pt-3
           opacity-0 invisible translate-y-3
           group-hover:opacity-100
           group-hover:visible
           group-hover:translate-y-0
           transition-all duration-300 ease-out">

        <div class="w-[620px] bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden">

            <!-- Header -->
            <div class="px-8 py-5 bg-blue-900 text-white">

                <h3 class="text-lg font-semibold">
                    Programs & Services
                </h3>

                <p class="text-sm text-blue-100 mt-1">
                    Explore TESDA training programs, scholarships, certifications, and learner services.
                </p>

            </div>

            <!-- Content -->
            <div class="grid grid-cols-2 gap-6 p-6">

                <!-- LEFT COLUMN -->
                <div>

                    <h4 class="text-blue-900 font-semibold mb-3">
                        Training Programs
                    </h4>

                    <a href="{{ route('training.course') }}"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            Courses
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            Browse available technical and vocational courses.
                        </p>

                    </a>

                    <a href="{{ route('scholarshipmain') }}"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            Scholarships
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            View scholarship opportunities and qualifications.
                        </p>

                    </a>

                    <a href="#"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            Training Centers
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            Find TESDA-accredited training institutions.
                        </p>

                    </a>

                </div>

                <!-- RIGHT COLUMN -->
                <div>

                    <h4 class="text-blue-900 font-semibold mb-3">
                        Certification & Services
                    </h4>

                    <a href="#"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            Assessment & Certification
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            Learn about competency assessment and certification.
                        </p>

                    </a>

                    <a href="#"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            Check Eligibility
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            Determine your eligibility for TESDA programs.
                        </p>

                    </a>

                    <a href="#"
                       class="block rounded-lg px-4 py-3 hover:bg-blue-50 transition">

                        <span class="font-medium text-gray-800">
                            TESDA Online Program
                        </span>

                        <p class="text-sm text-gray-500 mt-1">
                            Access free online learning and digital courses.
                        </p>

                    </a>

                </div>

            </div>

            <!-- Footer -->
            <div class="px-6 py-4 bg-gray-50 border-t">

                <a href="#"
                   class="inline-flex items-center text-blue-900 font-medium hover:text-blue-700">

                    View All Programs

                    <svg class="ml-2 w-4 h-4"
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