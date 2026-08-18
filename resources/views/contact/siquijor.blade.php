@extends('layouts.app')

@section('title', 'Siquijor | TESDA NIR')

@section('content')

@include('partials.navbar')

<section
    id="siquijor"
    class="relative py-24 lg:py-28 bg-gray-50 overflow-hidden"
>


    <!-- Main Content -->
    <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8">

<!-- Section Header -->
<div class="max-w-3xl mx-auto mb-16 text-center">

    <!-- Small Label -->
    <div class="flex items-center justify-center gap-3 mb-5">

        <span class="h-[2px] w-10 bg-amber-500"></span>

        <span
            class="text-sm
                   font-bold
                   tracking-[0.18em]
                   uppercase
                   text-blue-900"
        >
            Contact & Directory
        </span>

        <span class="h-[2px] w-10 bg-amber-500"></span>

    </div>


    <!-- Main Heading -->
    <h2
        class="text-4xl
               sm:text-5xl
               lg:text-5xl
               font-bold
               tracking-tight
               leading-tight
               text-blue-900"
    >
        TESDA NIR Siquijor
    </h2>


    <!-- Description -->
    <p
        class="mt-5
               mx-auto
               text-lg
               lg:text-xl
               leading-8
               text-gray-600
               max-w-2xl"
    >
        Connect with the TESDA Siquijor Provincial Office
        for technical-vocational education and skills
        development services.
    </p>

</div>



        <!-- Existing Two-Column Layout -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-start">


            <!-- ================================= -->
            <!-- OFFICE IMAGE -->
            <!-- ================================= -->

            <div>

                <div
                    class="group relative
                           overflow-hidden
                           rounded-2xl
                           bg-white
                           shadow-xl
                           shadow-blue-900/10
                           border border-gray-200"
                >

                    <img
                        src="{{ asset('images/tesda-seq.jpg') }}"
                        alt="TESDA Siquijor Provincial Office"
                        class="w-full
                               h-[380px]
                               sm:h-[450px]
                               object-cover
                               transition duration-700
                               group-hover:scale-105"
                        loading="lazy"
                    >


                    <!-- Image Overlay -->
                    <div
                        class="absolute inset-0
                               bg-gradient-to-t
                               from-blue-950/70
                               via-transparent
                               to-transparent"
                    ></div>


                    <!-- Image Caption -->
                    <div
                        class="absolute
                               bottom-0
                               left-0
                               right-0
                               p-6"
                    >

                        <div class="flex items-end justify-between gap-4">

                            <div>

                                <p
                                    class="text-xs
                                           font-bold
                                           uppercase
                                           tracking-widest
                                           text-amber-300"
                                >
                                    TESDA NIR
                                </p>

                                <h3
                                    class="mt-1
                                           text-xl
                                           font-bold
                                           text-white"
                                >
                                    Siquijor Provincial Office
                                </h3>

                            </div>


                            <!-- Google Maps -->
                            <a
                                href="https://www.google.com/maps/place/TESDA+Siquijor+Provincial+Office/@9.131283,123.6310287"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex-shrink-0
                                       inline-flex
                                       items-center
                                       justify-center
                                       w-11
                                       h-11
                                       rounded-full
                                       bg-amber-500
                                       text-white
                                       hover:bg-amber-600
                                       transition
                                       shadow-lg"
                                title="View on Google Maps"
                            >

                                <!-- Map Icon -->
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.8"
                                    stroke="currentColor"
                                    class="w-5 h-5"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 6.75L15 4.5l6 2.25v12L15 21l-6-2.25L3 21V9l6-2.25Z"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M9 6.75v12M15 4.5v12"
                                    />

                                </svg>

                            </a>

                        </div>

                    </div>

                </div>


               

            </div>



            <!-- ================================= -->
            <!-- OFFICE INFORMATION -->
            <!-- ================================= -->

            <div>

                <!-- Office Heading -->
                <div class="mb-9">

                    <p
                        class="text-sm
                               font-bold
                               uppercase
                               tracking-[0.16em]
                               text-amber-500"
                    >
                        Provincial Office
                    </p>

                    <h3
                        class="mt-2
                               text-3xl
                               lg:text-4xl
                               font-bold
                               tracking-tight
                               text-blue-900"
                    >
                        Siquijor Provincial Office
                    </h3>

                    

                </div>



                <!-- Contact Information -->
                <div class="space-y-7">


                    <!-- ADDRESS -->
                    <div class="flex gap-5">

                        <div
                            class="flex-shrink-0
                                   w-12
                                   h-12
                                   rounded-xl
                                   bg-blue-900
                                   flex
                                   items-center
                                   justify-center
                                   shadow-lg
                                   shadow-blue-900/20"
                        >

                            <!-- Map Pin -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="w-5 h-5 text-white"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"
                                />

                            </svg>

                        </div>


                        <div>

                            <h4
                                class="font-bold
                                       text-blue-900"
                            >
                                Office Address
                            </h4>

                            <a
                                href="https://www.google.com/maps/place/TESDA+Siquijor+Provincial+Office/@9.131283,123.6310287"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="mt-1
                                       block
                                       text-gray-600
                                       leading-7
                                       hover:text-blue-900
                                       transition"
                            >
                                Catamboan, Lazi, Siquijor,
                                Philippines
                            </a>

                        </div>

                    </div>



                    <!-- EMAIL -->
                    <div class="flex gap-5">

                        <div
                            class="flex-shrink-0
                                   w-12
                                   h-12
                                   rounded-xl
                                   bg-blue-900
                                   flex
                                   items-center
                                   justify-center
                                   shadow-lg
                                   shadow-blue-900/20"
                        >

                            <!-- Envelope -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="w-5 h-5 text-white"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"
                                />

                            </svg>

                        </div>


                        <div>

                            <h4
                                class="font-bold
                                       text-blue-900"
                            >
                                Email Address
                            </h4>

                            <a
                                href="mailto:nir.siquijor@tesda.gov.ph"
                                class="mt-1
                                       block
                                       text-blue-700
                                       hover:text-blue-900
                                       hover:underline
                                       transition"
                            >
                                nir.siquijor@tesda.gov.ph
                            </a>

                        </div>

                    </div>



                    <!-- TELEPHONE -->
                    <div class="flex gap-5">

                        <div
                            class="flex-shrink-0
                                   w-12
                                   h-12
                                   rounded-xl
                                   bg-blue-900
                                   flex
                                   items-center
                                   justify-center
                                   shadow-lg
                                   shadow-blue-900/20"
                        >

                            <!-- Phone -->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="1.8"
                                stroke="currentColor"
                                class="w-5 h-5 text-white"
                            >

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"
                                />

                            </svg>

                        </div>


                        <div>

                            <h4
                                class="font-bold
                                       text-blue-900"
                            >
                                Telephone
                            </h4>

                            <a
                                href="tel:09173140185"
                                class="mt-1
                                       block
                                       text-gray-600
                                       hover:text-blue-900
                                       transition"
                            >
                                (0917) 314-0185
                            </a>

                        </div>

                    </div>


                </div>



           

                 


                 

                </div>

            </div>

        </div>

    </div>

</section>

  @include('partials.footer')
@endsection
