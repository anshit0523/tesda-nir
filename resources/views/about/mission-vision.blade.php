<style>
@keyframes newsCardZoom {
  0%, 85% {
    transform: scale(1);
  }

  92% {
    transform: scale(0.95);
  }

  100% {
    transform: scale(1);
  }
}

.news-slide {
  animation: newsCardZoom 3s ease-in-out infinite;
  transform-origin: center;
}

/* Stagger the zoom animation */
.news-slide:nth-child(2) {
  animation-delay: 0.3s;
}

.news-slide:nth-child(3) {
  animation-delay: 0.6s;
}

.news-slide:nth-child(4) {
  animation-delay: 0.9s;
}

.news-slide:nth-child(5) {
  animation-delay: 1.2s;
}

.news-slide:nth-child(6) {
  animation-delay: 1.5s;
}
</style>


<section id="news" class="py-24 bg-gray-50">

   <div class="max-w-7xl mx-auto px-6 lg:px-8">

      {{-- =====================================================
      HEADER (left-aligned)
      ====================================================== --}}

      <div class="mb-12">

         <div>
            <span class="text-sm font-semibold uppercase tracking-wider text-blue-700">
               Updates & Announcements
            </span>

            <h2 class="mt-2 text-4xl font-bold text-blue-900">
               Latest News
            </h2>

            <p class="mt-3 max-w-2xl text-gray-600">
               Stay informed with the latest news, announcements,
               and activities from TESDA Negros Island Region.
            </p>
         </div>

      </div>


      {{-- =====================================================
      NEWS CAROUSEL
      ====================================================== --}}

      <div class="relative mt-12">

         {{-- =================================================
         PREVIOUS BUTTON
         ================================================== --}}

         <button
            id="newsPrev"
            type="button"
            aria-label="Previous news"
            class="absolute left-2 top-1/2 z-30
                   -translate-y-1/2
                   flex h-11 w-11 items-center justify-center
                   rounded-full
                   border border-gray-200
                   bg-white/95
                   text-blue-800
                   shadow-lg
                   backdrop-blur-sm
                   transition-all duration-300
                   hover:scale-105
                   hover:bg-blue-900
                   hover:text-white
                   disabled:cursor-not-allowed
                   disabled:opacity-40">

            <svg
               xmlns="http://www.w3.org/2000/svg"
               fill="none"
               viewBox="0 0 24 24"
               stroke-width="2"
               stroke="currentColor"
               class="h-5 w-5">

               <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 19.5 8.25 12l7.5-7.5" />

            </svg>

         </button>


         {{-- Carousel Viewport --}}
         <div class="relative overflow-hidden">


            {{-- =================================================
            NEWS TRACK
            ================================================== --}}

            <div
               id="newsTrack"
               class="flex transition-transform duration-500 ease-out">


               {{-- =================================================
               NEWS 1
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="https://web.facebook.com/photo?fbid=122172124520960562&set=a.122113477226960562"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="https://scontent.fceb2-2.fna.fbcdn.net/v/t39.30808-6/771814507_122172124526960562_3001193341690341739_n.jpg?stp=dst-jpg_tt6&cstp=mx1536x1024&ctp=s1536x1024&_nc_cat=101&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeHxcz5pbIp9wljCOuc6bvwVNmV4cjYlCE42ZXhyNiUITuoM8I17mfcr5MeDVBZ7kMYuavm-NopOKsFfZ6ZQ2mkL&_nc_ohc=W2VdUwx3XhIQ7kNvwHoz4nd&_nc_oc=AdqvR8tyFrpP-sMv6qwNZ80B-DnPYRxzJs7ph_w3G64RRXivgdVyVAwYV47mFofhMak&_nc_zt=23&_nc_ht=scontent.fceb2-2.fna&_nc_gid=4zoaeb5D__oK6yBbervXhA&_nc_ss=7b2a8&oh=00_AQEOgfUNbIXVha15VqvKo5vnoRyKY-C3uoK_SLSgIzec0A&oe=6A809B51"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">
                           TESDA NIR
                        </span>

                     </div>


                     <div class="p-6">

                        <div class="flex items-center gap-2 text-xs text-gray-400">

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.7"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.5 1.5 0 0 1 18.75 20.25H5.25a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5Z" />

                           </svg>

                           August 11, 2026

                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           Congratulations, Regional Director Niña Connie G. Dodd!

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           The TESDA Negros Island Region Family proudly celebrates your oath-taking as Full-Pledged
                           Regional Director (Director IV) of TESDA NIR.
                           May your leadership continue to inspire, empower, and lead us toward greater heights.

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


               {{-- =================================================
               NEWS 2
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="https://web.facebook.com/NegOcc.Gov/posts/pfbid02pgFZpV3kjppX1hvxXiKmnzURuFyBJ5p6RZRgtdTbtiBozM5UbfHtjZyYCyQnCixkl"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="https://scontent.fceb6-3.fna.fbcdn.net/v/t39.30808-6/768310269_1510275374466560_7050248491989028016_n.jpg?stp=dst-jpg_tt6&cstp=mx1560x2048&ctp=s1560x2048&_nc_cat=111&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeFPuOgUNOt-MioTr4JGdqNEpO3x3khxjxWk7fHeSHGPFbMTafPXYc8xnK4A2DyEv_m-hGaR5j-egCrlB5ndYiwR&_nc_ohc=YE4pLkS9sYYQ7kNvwFW9N52&_nc_oc=AdoFS7psH-DebzJ16AbqdiPoW1hXt-iyy65hWhXbNC_0wbNXoKBnRohwScP6vUfvlx0&_nc_zt=23&_nc_ht=scontent.fceb6-3.fna&_nc_gid=kSbVyMf0QrcKdhmclNmBnw&_nc_ss=7a2a8&oh=00_AQGogM7BtSz7STBTsFzXT64pW9ugnILoH8r10-102sHS-w&oe=6A80A253"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           Activities

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="flex items-center gap-2 text-xs text-gray-400">

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.7"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.5 1.5 0 0 1 18.75 20.25H5.25a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1 1.5-1.5Z" />

                           </svg>

                           August 7, 2026

                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           NEGROS OCC., TESDA LAUNCH “DRIVE TO THRIVE” PROGRAM TO BOOST SKILLS, ROAD SAFETY

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           The Provincial Government of Negros Occidental, through the Technology and Livelihood
                           Development Center (TLDC), in collaboration with the Technical Education and Skills Development
                           Authority (TESDA), launched the "Drive to Thrive" Program,

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


               {{-- =================================================
               NEWS 3
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="https://web.facebook.com/OfficialTESDANIR/posts/pfbid029fXZVQhFrHkoNQDJrAkhw4ibf1XM5satbkMFLM6fgBiYkeLxjUx7ysJEfW9zVjjol"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="https://scontent.fceb2-1.fna.fbcdn.net/v/t39.30808-6/769394907_122172118946960562_1478694236347191545_n.jpg?stp=dst-jpg_tt6&cstp=mx2048x1536&ctp=s2048x1536&_nc_cat=105&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeFUb3pZcBPYPXlXYixmNiXGPc73XSIw1kQ9zvddIjDWRBTEcnPIHT0tTkgzZoqXT1BNvejBfAWU15PISYz0KbFr&_nc_ohc=KlEmTQw0bkoQ7kNvwHXDGLT&_nc_oc=Adqxi4ypWOtg3xO-lcO2rlmAPnAPthv6wze9QR2wasr_BF2czMSJSGDMVFkMqBAFIJE&_nc_zt=23&_nc_ht=scontent.fceb2-1.fna&_nc_gid=78Hseav94BtEalrnFgCopQ&_nc_ss=7a2a8&oh=00_AQGWstENJyXQVe_kYiVk_l3JNJxVQ7fc7NSquG42wy0ReA&oe=6A80989D"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           Activities

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="flex items-center gap-2 text-xs text-gray-400">

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.7"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M6.75 3v2.25M17.25 3v2.25M3.75 9.75h16.5M5.25 5.25h13.5A1.5 1.5 0 0 1 20.25 6.75v12A1.5 1.5 0 0 1 18.75 20.25H5.25a1.5 1.5 0 0 1-1.5-1.5v-12a1.5 1.5 0 0 1-1.5-1.5Z" />

                           </svg>

                           August 11, 2026

                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           PO Siquijor wraps up its 2026 Internal Quality Audit

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           Behind every quality service is a team committed to getting better. PO Siquijor wraps up its
                           2026 Internal Quality Audit — reaffirming our dedication to continuous improvement and quality
                           service delivery.

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


               {{-- =================================================
               NEWS 4
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="https://web.facebook.com/OfficialTESDANIR/posts/pfbid0saSFNabk2C7G2kUyGkmn22uLKXpMDt192K3iyUPwyZEZZKLUbcL8Przmw1apNKaVl"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="https://scontent.fceb6-3.fna.fbcdn.net/v/t39.30808-6/762903727_122171193128960562_1952808800419619525_n.jpg?stp=dst-jpg_tt6&cstp=mx1920x1080&ctp=s1920x1080&_nc_cat=107&_nc_map=urlgen_bucketless&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeGQQ_3OBsqC1VO-03mZKekIuEG0GEh6UTO4QbQYSHpRM1B6OpS4lHEc9O46tX5wt99oKE7e1hbXtDeGGHoqNRjX&_nc_ohc=JVA742TB8zgQ7kNvwEXvo-K&_nc_oc=AdpRX24k0zNmEpif_52QN3wKQOQq6NB2J3InyrMNTNcPg7KLrcD27L8SQIMzTIDWJ_8&_nc_zt=23&_nc_ht=scontent.fceb6-3.fna&_nc_gid=ThP6-YHo5l2umZyYQjbG4g&_nc_ss=7b2a8&oh=00_AQG-RyRi8QsqqW3yaLX-wwJZd_FJzzlm9KErUoD_jrcR0Q&oe=6A80A677"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           Training

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="text-xs text-gray-400">
                           August 4, 2026
                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           The Masonry NC II training for Twenty (20) Persons Deprived of Liberty (PDLs) and Five (5) BJMP
                           Uniformed Personnel

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           The Masonry NC II training for Twenty (20) Persons Deprived of Liberty (PDLs) and Five (5) BJMP
                           Uniformed Personnel officially commenced through a Training Induction Program (TIP) conducted by
                           TESDA NIR – Negros Oriental Provincial Director Fletcher B. Gumahad at the Dumaguete City
                           District Jail – Female Dormitory.

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


               {{-- =================================================
               NEWS 5
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="#"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="{{ asset('images/news/news-5.jpg') }}"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           Community

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="text-xs text-gray-400">
                           August 7, 2026
                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           TESDA NIR News Title Five

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           Community activities and initiatives
                           supporting skills development in the region.

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


               {{-- =================================================
               NEWS 6
               ================================================== --}}

               <article class="news-slide w-full shrink-0 px-2 sm:w-1/2 lg:w-1/3">

                  <a
                     href="#"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="{{ asset('images/news/news-6.jpg') }}"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           TESDA

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="text-xs text-gray-400">
                           August 6, 2026
                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                           TESDA NIR News Title Six

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                           More news and updates from TESDA
                           Negros Island Region.

                        </p>


                        <span
                           class="mt-5 inline-flex items-center gap-2 text-sm font-semibold text-blue-700 group-hover:text-blue-900">

                           Read more

                           <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.8"
                              stroke="currentColor"
                              class="h-4 w-4">

                              <path
                                 stroke-linecap="round"
                                 stroke-linejoin="round"
                                 d="M4.5 12h15m0 0-6-6m6 6-6 6" />

                           </svg>

                        </span>

                     </div>

                  </a>

               </article>


            </div>

         </div>


         {{-- =================================================
         NEXT BUTTON
         ================================================== --}}

         <button
            id="newsNext"
            type="button"
            aria-label="Next news"
            class="absolute right-2 top-1/2 z-30
                   -translate-y-1/2
                   flex h-11 w-11 items-center justify-center
                   rounded-full
                   border border-gray-200
                   bg-white/95
                   text-blue-800
                   shadow-lg
                   backdrop-blur-sm
                   transition-all duration-300
                   hover:scale-105
                   hover:bg-blue-900
                   hover:text-white
                   disabled:cursor-not-allowed
                   disabled:opacity-40">

            <svg
               xmlns="http://www.w3.org/2000/svg"
               fill="none"
               viewBox="0 0 24 24"
               stroke-width="2"
               stroke="currentColor"
               class="h-5 w-5">

               <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="m8.25 4.5 7.5 7.5-7.5 7.5" />

            </svg>

         </button>

      </div>


      {{-- =====================================================
      DOTS
      ====================================================== --}}

      <div
         id="newsDots"
         class="mt-8 flex justify-center gap-2">
      </div>


      {{-- =====================================================
      VIEW ALL NEWS
      ====================================================== --}}

      <div class="mt-8 text-center">

         <a
            href="https://web.facebook.com/OfficialTESDANIR"
            class="inline-flex items-center gap-2
                   rounded-xl
                   bg-blue-900
                   px-6 py-3
                   text-sm font-semibold
                   text-white
                   shadow-sm
                   transition
                   hover:bg-blue-800
                   hover:shadow-md">

            View All News

            <svg
               xmlns="http://www.w3.org/2000/svg"
               fill="none"
               viewBox="0 0 24 24"
               stroke-width="1.8"
               stroke="currentColor"
               class="h-4 w-4">

               <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M4.5 12h15m0 0-6-6m6 6-6 6" />

            </svg>

         </a>

      </div>

   </div>

</section>


<script>
document.addEventListener('DOMContentLoaded', function () {

   const track = document.getElementById('newsTrack');
   const prevButton = document.getElementById('newsPrev');
   const nextButton = document.getElementById('newsNext');
   const dotsContainer = document.getElementById('newsDots');

   if (!track) return;


   /* =========================================================
      SETTINGS
   ========================================================= */

   const CLONE_COUNT = 3;

   /*
      Change this value to control autoplay speed.

      5000 = 5 seconds
      4000 = 4 seconds
      3000 = 3 seconds
   */
   const AUTOPLAY_DELAY = 5000;


   /* =========================================================
      ORIGINAL SLIDES
   ========================================================= */

   let originals = Array.from(
      track.querySelectorAll('.news-slide')
   );

   const originalCount = originals.length;


   /* =========================================================
      RESPONSIVE SLIDES PER VIEW
   ========================================================= */

   function getSlidesPerView() {

      if (window.innerWidth >= 1024) {
         return 3;
      }

      if (window.innerWidth >= 640) {
         return 2;
      }

      return 1;
   }


   /* =========================================================
      CLEAR CLONES
   ========================================================= */

   function clearClones() {

      Array.from(track.children).forEach(child => {

         if (
            child.dataset &&
            child.dataset.clone === 'true'
         ) {
            child.remove();
         }

      });

   }


   /* =========================================================
      BUILD INFINITE CLONES
   ========================================================= */

   function buildClones() {

      clearClones();

      originals = Array.from(
         track.querySelectorAll('.news-slide')
      ).slice(0, originalCount);


      /* Add clones to the end */

      for (let i = 0; i < CLONE_COUNT; i++) {

         const clone =
            originals[i].cloneNode(true);

         clone.dataset.clone = 'true';

         track.appendChild(clone);

      }


      /* Add clones to the beginning */

      for (let i = 0; i < CLONE_COUNT; i++) {

         const clone =
            originals[
               originalCount - 1 - i
            ].cloneNode(true);

         clone.dataset.clone = 'true';

         track.insertBefore(
            clone,
            track.firstChild
         );

      }

   }


   buildClones();


   /* =========================================================
      STATE
   ========================================================= */

   let currentIndex = CLONE_COUNT;

   let autoplayInterval = null;


   /* =========================================================
      MAX ORIGINAL INDEX
   ========================================================= */

   function getMaxIndexOriginal() {

      return Math.max(
         0,
         originalCount - getSlidesPerView()
      );

   }


   /* =========================================================
      UPDATE DOTS
   ========================================================= */

   function updateDots() {

      const dots =
         dotsContainer.querySelectorAll('button');


      dots.forEach((dot, i) => {

         dot.className =
            i === (currentIndex - CLONE_COUNT)

               ? 'h-2 w-7 rounded-full bg-blue-800 transition-all duration-300'

               : 'h-2 w-2 rounded-full bg-gray-300 transition-all duration-300 hover:bg-blue-400';

      });

   }


   /* =========================================================
      CREATE DOTS
   ========================================================= */

   function createDots() {

      dotsContainer.innerHTML = '';

      const total =
         getMaxIndexOriginal() + 1;


      for (let i = 0; i < total; i++) {

         const dot =
            document.createElement('button');


         dot.type = 'button';


         dot.className =
            'h-2 w-2 rounded-full bg-gray-300 transition-all duration-300';


         dot.setAttribute(
            'aria-label',
            `Go to news slide ${i + 1}`
         );


         dot.addEventListener(
            'click',
            () => {

               currentIndex =
                  CLONE_COUNT + i;

               updateCarousel();

            }
         );


         dotsContainer.appendChild(dot);

      }


      updateDots();

   }


   /* =========================================================
      UPDATE CAROUSEL
   ========================================================= */

   function updateCarousel(animate = true) {

      const slidesPerView =
         getSlidesPerView();


      const percentage =
         100 / slidesPerView;


      track.style.transition =
         animate ? '' : 'none';


      track.style.transform =
         `translateX(-${currentIndex * percentage}%)`;


      /*
         Disable Previous at beginning
         Disable Next at end
      */

      prevButton.disabled =
         currentIndex === CLONE_COUNT;


      nextButton.disabled =
         currentIndex >=
         CLONE_COUNT +
         getMaxIndexOriginal();


      updateDots();

   }


   /* =========================================================
      INFINITE LOOP
   ========================================================= */

   track.addEventListener(
      'transitionend',
      () => {

         const maxOriginalStart =
            CLONE_COUNT +
            getMaxIndexOriginal();


         /*
            Reached the cloned slides at the end
         */

         if (
            currentIndex >
            maxOriginalStart
         ) {

            track.style.transition = 'none';

            currentIndex =
               CLONE_COUNT;

            updateCarousel(false);

            requestAnimationFrame(() => {
               track.style.transition = '';
            });

         }


         /*
            Reached the cloned slides at the beginning
         */

         else if (
            currentIndex <
            CLONE_COUNT
         ) {

            track.style.transition = 'none';

            currentIndex =
               CLONE_COUNT +
               getMaxIndexOriginal();

            updateCarousel(false);

            requestAnimationFrame(() => {
               track.style.transition = '';
            });

         }

      }
   );


   /* =========================================================
      PREVIOUS BUTTON
   ========================================================= */

   prevButton.addEventListener(
      'click',
      () => {

         currentIndex--;

         updateCarousel();

      }
   );


   /* =========================================================
      NEXT BUTTON
   ========================================================= */

   nextButton.addEventListener(
      'click',
      () => {

         currentIndex++;

         updateCarousel();

      }
   );


   /* =========================================================
      START AUTOPLAY
   ========================================================= */

   function startAutoplay() {

      stopAutoplay();


      autoplayInterval =
         setInterval(() => {

            currentIndex++;

            updateCarousel();

         }, AUTOPLAY_DELAY);

   }


   /* =========================================================
      STOP AUTOPLAY
   ========================================================= */

   function stopAutoplay() {

      if (autoplayInterval) {

         clearInterval(
            autoplayInterval
         );

         autoplayInterval = null;

      }

   }


   /* =========================================================
      PAUSE WHEN HOVERING
   ========================================================= */

   track.addEventListener(
      'mouseenter',
      stopAutoplay
   );


   track.addEventListener(
      'mouseleave',
      startAutoplay
   );


   /* =========================================================
      PAUSE WHEN FOCUSING
   ========================================================= */

   track.addEventListener(
      'focusin',
      stopAutoplay
   );


   track.addEventListener(
      'focusout',
      startAutoplay
   );


   /* =========================================================
      PAUSE WHEN TAB IS HIDDEN
   ========================================================= */

   document.addEventListener(
      'visibilitychange',
      () => {

         if (document.hidden) {

            stopAutoplay();

         } else {

            startAutoplay();

         }

      }
   );


   /* =========================================================
      RESPONSIVE RESIZE
   ========================================================= */

   let resizeTimer = null;


   window.addEventListener(
      'resize',
      () => {

         clearTimeout(resizeTimer);


         resizeTimer =
            setTimeout(() => {

               clearClones();

               buildClones();

               currentIndex =
                  CLONE_COUNT;

               createDots();

               updateCarousel(false);

            }, 200);

      }
   );


   /* =========================================================
      INITIALIZE
   ========================================================= */

   createDots();

   updateCarousel(false);

   startAutoplay();

});
</script>