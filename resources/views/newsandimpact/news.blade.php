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

      <div class="group/carousel relative mt-12">

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
                   opacity-0 invisible group-hover/carousel:opacity-100 group-hover/carousel:visible
                   transition-all duration-300
                   hover:scale-105
                   hover:bg-blue-900
                   hover:text-white
                   disabled:pointer-events-none
                   disabled:invisible
                   disabled:opacity-0">

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
                     href="https://web.facebook.com/photo?fbid=122172148046960562&set=a.122113477226960562"
                     target="_blank"
                     rel="noopener noreferrer"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="images/news/rd.jpg"
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
                        src="images/news/news.jpg"
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
                 src="images/news/news3.jpg"
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
                           src="images/news/news4.jpg"
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
                     href="https://web.facebook.com/photo?fbid=122174215826960562&set=pcb.122174219180960562"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="{{ asset('images/news/news5.jpg') }}"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           Activity

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="text-xs text-gray-400">
                           August 26, 2026
                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                          TESDA NIR - Negros Oriental, in partnership with Public Employment Service Office (PESO) Dumaguete, celebrates TESDA's 32nd Anniversary 

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                          The celebration of National Tech-Voc Day stands as a testament to TESDA’s continuing commitment to bringing quality TVET, 
                          employment opportunities, and essential government services closer to the NegOrenses
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
                     href="https://web.facebook.com/photo/?fbid=122173915046960562&set=pcb.122173915724960562"
                     class="group block h-full cursor-pointer overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-gray-100 transition duration-300 hover:-translate-y-1 hover:shadow-xl">

                     <div class="relative h-56 overflow-hidden bg-gray-200">

                        <img
                           src="{{ asset('images/news/news6.jpg') }}"
                           alt="TESDA NIR News"
                           class="h-full w-full object-cover transition duration-500 group-hover:scale-105">

                        <span
                           class="absolute left-4 top-4 rounded-full bg-white/95 px-3 py-1 text-xs font-semibold text-blue-800 shadow-sm">

                           TESDA

                        </span>

                     </div>


                     <div class="p-6">

                        <div class="text-xs text-gray-400">
                           August 24, 2026
                        </div>


                        <h3 class="mt-4 text-xl font-bold leading-snug text-gray-900 group-hover:text-blue-800">

                       TESDA Regional Training Center–Talisay, in partnership with the Technological University of the Philippines

                        </h3>


                        <p class="mt-3 text-sm leading-relaxed text-gray-600">

                         Visayas (TUP Visayas), officially launched the Research Capacity Building Program for its personnel on August 15, 2026, at the RTC–Talisay DAIKIN Training Room.
Eudina H. David,  RTC-Talisay Chief  TESD Specialist  welcomed the participants and highlighted the importance of strengthening the Center’s research capabilities.
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
                   opacity-0 invisible group-hover/carousel:opacity-100 group-hover/carousel:visible
                   transition-all duration-300
                   hover:scale-105
                   hover:bg-blue-900
                   hover:text-white
                   disabled:pointer-events-none
                   disabled:invisible
                   disabled:opacity-0">

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