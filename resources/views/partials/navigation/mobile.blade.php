<div
    id="mobileMenu"
    class="hidden lg:hidden bg-blue-900 border-t border-blue-800 text-white">

    <div class="max-h-[80vh] overflow-y-auto">

        <!-- Home -->
        <a href="{{ url('/') }}"
           class="block px-6 py-4 border-b border-blue-800 hover:bg-blue-800">
            Home
        </a>

        <!-- About -->
        <details class="border-b border-blue-800 group">

            <summary
                class="flex justify-between items-center px-6 py-4 cursor-pointer hover:bg-blue-800 list-none">

                <span>About Us</span>

                <svg
                    class="w-5 h-5 transition-transform duration-300 group-open:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"/>

                </svg>

            </summary>

            <div class="bg-blue-950">

                <a href="{{ url('/regional-history') }}" class="block px-10 py-3 hover:bg-blue-800">History</a>
                <a href="{{ route('mission-vision') }}" class="block px-10 py-3 hover:bg-blue-800">Mission, Vision & Core Values</a>
                <a href="{{ url('/organizational-structure') }}" class="block px-10 py-3 hover:bg-blue-800">Organizational Structure</a>
               
              

            </div>

        </details>

        <!-- Transparency -->
        <details class="border-b border-blue-800 group">

            <summary
                class="flex justify-between items-center px-6 py-4 cursor-pointer hover:bg-blue-800 list-none">

                <span>Transparency</span>

                <svg
                    class="w-5 h-5 transition-transform duration-300 group-open:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"/>

                </svg>

            </summary>

            <div class="bg-blue-950">

                <a href="{{ route('transparency.seal') }}"
                   class="block px-10 py-3 hover:bg-blue-800">
                    Transparency Seal
                </a>

                <a href="{{ route('transparency.citizen-charter') }}" class="block px-10 py-3 hover:bg-blue-800">Citizen's Charter</a>
                <a href="{{ route('transparency.awards-committe') }}" class="block px-10 py-3 hover:bg-blue-800">Bids & Awards Committee</a>
                <a href="https://www.tesda.gov.ph/About/TESDA/29" class="block px-10 py-3 hover:bg-blue-800">Downloadable Forms</a>
               

            </div>

        </details>

        <!-- Programs & Services -->
        <details class="border-b border-blue-800 group">

            <summary
                class="flex justify-between items-center px-6 py-4 cursor-pointer hover:bg-blue-800 list-none">

                <span>Programs & Services</span>

                <svg
                    class="w-5 h-5 transition-transform duration-300 group-open:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"/>

                </svg>

            </summary>

            <div class="bg-blue-950">

                <a href="{{ route('training.course') }}" class="block px-10 py-3 hover:bg-blue-800">Courses</a>
                <a href="{{ route('scholarshipmain') }}" class="block px-10 py-3 hover:bg-blue-800">Scholarships</a>
                <a href="#" class="block px-10 py-3 hover:bg-blue-800">Training Centers</a>
                <a href="#" class="block px-10 py-3 hover:bg-blue-800">Assessment & Certification</a>
                <a href="#" class="block px-10 py-3 hover:bg-blue-800">Check Eligibility</a>
                <a href="#" class="block px-10 py-3 hover:bg-blue-800">TESDA Online Program</a>

            </div>

        </details>

        <!-- News & Impact -->
        <a href="{{ route('newsmain') }}"
           class="block px-6 py-4 border-b border-blue-800 hover:bg-blue-800">
            News & Impact
        </a>

        <!-- Contact -->
         <details class="border-b border-blue-800 group">

            <summary
                class="flex justify-between items-center px-6 py-4 cursor-pointer hover:bg-blue-800 list-none">

                <span>Contact</span>

                <svg
                    class="w-5 h-5 transition-transform duration-300 group-open:rotate-180"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M19 9l-7 7-7-7"/>

                </svg>

            </summary>

            <div class="bg-blue-950">

               
                <a href="{{ url('/') }}#Contact" class="block px-10 py-3 hover:bg-blue-800">Regional Headquarters</a>
                <a href="{{ route('contact.negros-occidental') }}" class="block px-10 py-3 hover:bg-blue-800"> Negros Occidental</a>
                <a href="{{ route('contact.negros-oriental') }}" class="block px-10 py-3 hover:bg-blue-800">Negros Oriental</a>
                <a href="{{ route('contact.siquijor') }}" class="block px-10 py-3 hover:bg-blue-800">Siquijor</a>

            </div>

        </details>

    </div>

</div>