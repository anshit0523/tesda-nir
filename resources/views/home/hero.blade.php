<section
    id="home"
    class="relative min-h-[100dvh] flex items-center pb-24 overflow-hidden bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('images/hero.jpg') }}');"
>

    <!-- Blue Overlay -->
    <div class="absolute inset-0 bg-blue-900"></div>


    <!-- Hero Background Graphic -->
<div class="absolute inset-0 overflow-hidden pointer-events-none">

    <img 
        src="{{ asset('images/B.png') }}" 
        alt="" 
        class="absolute inset-0 
               w-full 
               h-full 
               object-cover 
               opacity-20"
    >

</div>


    <!-- Hero Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-8 w-full">

        <div class="max-w-3xl">

            <!-- Main Heading -->
         <h1 
    class="text-3xl sm:text-4xl md:text-5xl lg:text-5xl 
           font-bold 
           leading-[1.15] 
           tracking-tight 
           text-white"
>
    <span class="text-[1.15em]">T</span>echnical
    <span class="text-[1.15em]">E</span>ducation and
    <span class="text-[1.15em]">S</span>kills
    <span class="text-[1.15em]">D</span>evelopment
    <span class="text-[1.15em]">A</span>uthority
</h1> 


            <!-- Region -->
            <p
                class="mt-6
                       text-2xl lg:text-3xl
                       font-bold
                       text-yellow-300"
            >
                Negros Island Region (NIR)
            </p>


            <!-- Description -->
            <p
                class="mt-8
                       text-lg lg:text-xl
                       font-normal
                       text-blue-100
                       leading-9
                       max-w-2xl"
            >
                Empowering every Filipino through quality
                Technical-Vocational Education and Skills Development (TVET),
                fostering a globally competitive workforce and inclusive regional growth.
            </p>


            <!-- CTA Buttons -->
            <div class="mt-12 flex flex-wrap gap-5">

                <a
                    href="#programs"
                    class="inline-flex items-center
                           px-6 py-4
                           rounded-lg
                           bg-amber-500
                           text-white
                           font-bold
                           hover:bg-amber-600
                           transition"
                >
                    Explore Programs
                </a>


                <a
                    href="#about"
                    class="inline-flex items-center
                           px-6 py-4
                           rounded-lg
                           border border-white
                           text-white
                           font-bold
                           hover:bg-white
                           hover:text-blue-900
                           transition"
                >
                    Learn More
                </a>

            </div>

        </div>

    </div>


    <!-- Scroll Indicator -->
    <div
        class="absolute
               bottom-8
               left-1/2
               -translate-x-1/2
               animate-bounce"
    >

        <svg
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            class="w-8 h-8 text-white/70"
        >

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M19.5 13.5L12 21l-7.5-7.5M19.5 3L12 10.5 4.5 3"
            />

        </svg>

    </div>

</section>