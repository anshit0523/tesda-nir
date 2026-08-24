<nav 
    id="navbar" 
    class="fixed top-0 left-0 w-full 
           bg-blue-800/95 backdrop-blur-md shadow-lg z-50
           transition-all duration-500 ease-in-out
           translate-y-0 opacity-100"
>

    <div class="max-w-7xl mx-auto px-6">

        <div class="flex items-center justify-between h-20">


            <!-- ===========================
                    TESDA Logo / Brand
            ============================ -->

            <a 
                href="{{ url('/') }}" 
                class="flex items-center gap-4"
            >

                <img 
                    src="{{ asset('images/TESDA Logo official.png') }}" 
                    alt="TESDA Logo"
                    class="w-12 h-12 object-contain"
                >

                <div class="hidden md:block">

                    <h1 
                        class="text-white text-xl font-bold tracking-wide font-[Frutiger]"
                    >
                        TESDA
                    </h1>

                    <p 
                        class="text-blue-100 text-sm font-[Frutiger]"
                    >
                        Negros Island Region
                    </p>

                </div>

            </a>


            <!-- ===========================
                    Desktop Navigation
            ============================ -->

            <ul 
                class="hidden lg:flex items-center gap-8 
                       text-white font-bold"
            >

                <!-- Home -->

                <li>

                    <a 
                        href="{{ url('/') }}" 
                        class="font-[Frutiger] transition duration-300 
                               border-b-2 pb-1
                               {{ request()->is('/') 
                                    ? 'text-amber-300 border-amber-300' 
                                    : 'border-transparent hover:text-amber-300 hover:border-amber-300' 
                               }}"
                    >
                        Home
                    </a>

                </li>


                <!-- About -->

                @include('partials.navigation.about')


                <!-- Transparency -->

                @include('partials.navigation.transparency')


                <!-- Programs & Services -->

                @include('partials.navigation.programs-services')


                <!-- News -->

                <li>

                    <a 
                        href="{{ route('newsmain') }}"
                        class="font-[Frutiger] transition duration-300
                               border-b-2 border-transparent
                               pb-1
                               hover:text-amber-300
                               hover:border-amber-300"
                    >
                        News & Impact
                    </a>

                </li>


                <!-- Contact -->

                @include('partials.navigation.allcontact')

            </ul>


            <!-- ===========================
                    Mobile Menu Button
            ============================ -->

            <button 
                id="menuButton" 
                type="button"
                aria-label="Open navigation menu"
                aria-expanded="false"
                class="lg:hidden
                       text-white
                       hover:text-amber-300
                       transition duration-300"
            >

                <svg 
                    class="w-8 h-8"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    aria-hidden="true"
                >

                    <path 
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16"
                    />

                </svg>

            </button>

        </div>

    </div>


    <!-- ===========================
            Mobile Navigation
    ============================ -->

    @include('partials.navigation.mobile')

</nav>


<!-- ===========================
        Navbar Spacer
============================ -->

<div class="h-20"></div>


@push('scripts')

<script>

    /* =====================================================
       ELEMENTS
    ===================================================== */

    const navbar = document.getElementById('navbar');
    const button = document.getElementById('menuButton');
    const menu = document.getElementById('mobileMenu');


    /* =====================================================
       MOBILE MENU
    ===================================================== */

    if (button && menu) {

        button.addEventListener('click', () => {

            menu.classList.toggle('hidden');

            const isOpen = !menu.classList.contains('hidden');

            button.setAttribute(
                'aria-expanded',
                isOpen ? 'true' : 'false'
            );


            /*
             * Keep navbar visible while mobile menu
             * is open.
             */

            if (isOpen) {

                navbar.classList.remove(
                    '-translate-y-full',
                    'opacity-0'
                );

                navbar.classList.add(
                    'translate-y-0',
                    'opacity-100'
                );

            }

        });

    }


    /* =====================================================
       NAVBAR SCROLL EFFECT
       
       Scroll DOWN  → Hide navbar
       Scroll UP    → Show navbar
       Top of page  → Always show navbar
    ===================================================== */

    let lastScrollY = window.scrollY;

    let ticking = false;


    function handleNavbarScroll() {

        const currentScrollY = window.scrollY;


        /*
         * Always show navbar when at the top
         */

        if (currentScrollY <= 80) {

            navbar.classList.remove(
                '-translate-y-full',
                'opacity-0'
            );

            navbar.classList.add(
                'translate-y-0',
                'opacity-100'
            );

        }


        /*
         * SCROLLING DOWN
         */

        else if (currentScrollY > lastScrollY) {

            /*
             * Don't hide navbar while
             * mobile menu is open.
             */

            if (!menu || menu.classList.contains('hidden')) {

                navbar.classList.remove(
                    'translate-y-0',
                    'opacity-100'
                );

                navbar.classList.add(
                    '-translate-y-full',
                    'opacity-0'
                );

            }

        }


        /*
         * SCROLLING UP
         */

        else if (currentScrollY < lastScrollY) {

            navbar.classList.remove(
                '-translate-y-full',
                'opacity-0'
            );

            navbar.classList.add(
                'translate-y-0',
                'opacity-100'
            );

        }


        /*
         * Update previous scroll position
         */

        lastScrollY = currentScrollY;

        ticking = false;

    }


    /* =====================================================
       OPTIMIZED SCROLL LISTENER
    ===================================================== */

    window.addEventListener('scroll', () => {

        if (!ticking) {

            window.requestAnimationFrame(
                handleNavbarScroll
            );

            ticking = true;

        }

    });


</script>

@endpush