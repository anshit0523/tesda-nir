<nav id="navbar"
    class="fixed top-0 left-0 w-full z-50 bg-blue-900/95 backdrop-blur-md shadow-md transition-all duration-300">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-24">

            <!-- =========================
                    LOGO
            ========================== -->

            <a href="{{ url('/') }}" class="flex items-center gap-4">

                <img
                    src="{{ asset('images/logo.png') }}"
                    alt="TESDA Logo"
                    class="w-14 h-14 object-contain">

                <div class="hidden md:block">

                    <h1 class="text-white text-xl font-bold tracking-wide">

                        TESDA

                    </h1>

                    <p class="text-blue-100 text-sm">

                        Negros Island Region

                    </p>

                </div>

            </a>

            <!-- =========================
                    DESKTOP MENU
            ========================== -->

            <ul class="hidden lg:flex items-center gap-8 font-medium text-white">

                <!-- Home -->

                <li>

                    <a
                        href="{{ url('/') }}"
                        class="transition duration-200 border-b-2 pb-1
                        {{ request()->is('/')
                            ? 'border-amber-300 text-amber-300'
                            : 'border-transparent hover:border-amber-300 hover:text-amber-300'
                        }}">

                        Home

                    </a>

                </li>

                <!-- About -->

                @include('partials.navigation.about')

                <!-- Programs & Services -->

                @include('partials.navigation.programs-services')

                <!-- News -->

                <li>

                    <a
                        href="#"
                        class="transition duration-200 hover:text-amber-300">

                        News

                    </a>

                </li>

                <!-- Transparency -->

                @include('partials.navigation.transparency')

                <!-- Resources -->

                @include('partials.navigation.resources')

                <!-- Contact -->

                <li>

                    <a
                        href="#"
                        class="transition duration-200 hover:text-amber-300">

                        Contact

                    </a>

                </li>

            </ul>

            <!-- =========================
                    MOBILE BUTTON
            ========================== -->

            <button
                id="menuButton"
                class="lg:hidden text-white">

                <svg
                    class="w-8 h-8"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24">

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"/>

                </svg>

            </button>

        </div>

    </div>

</nav>

<!-- Push page below fixed navbar -->
<div class="h-24"></div>