<nav id="navbar"
    class="fixed top-0 left-0 w-full bg-blue-900/95 backdrop-blur-md shadow-lg z-50 transition-all duration-300">

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-24">

       

            <a href="{{ url('/') }}" class="flex items-center gap-4">

                <img
                    src="{{ asset('images/TESDA Logo official.png') }}"
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

            <!-- ===========================
                    Desktop Navigation
            ============================ -->

            <ul class="hidden lg:flex items-center gap-8 font-medium text-white">

                <!-- Home -->
                <li>

                    <a
                        href="{{ url('/') }}"
                        class="transition duration-300 border-b-2 pb-1
                        {{ request()->is('/')
                            ? 'text-amber-300 border-amber-300'
                            : 'border-transparent hover:text-amber-300 hover:border-amber-300'
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
                        href="#news"
                        class="transition duration-300 hover:text-amber-300">

                        News

                    </a>

                </li>

                <!-- Transparency -->
                @include('partials.navigation.transparency')

           
               

                <!-- Contact -->
           
            @include('partials.navigation.allcontact')

            </ul>

            <!-- ===========================
                    Mobile Button
            ============================ -->

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

    <!-- Mobile Navigation -->
    @include('partials.navigation.mobile')

</nav>

<!-- Spacer -->
<div class="h-24"></div>

@push('scripts')

<script>

const button = document.getElementById('menuButton');

const menu = document.getElementById('mobileMenu');

if(button){

    button.addEventListener('click', () => {

        menu.classList.toggle('hidden');

    });

}

</script>

@endpush