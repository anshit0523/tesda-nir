<section id="programs" class="py-24 bg-[#F7F8FA] font-frutiger">

  <div class="max-w-7xl mx-auto px-6 sm:px-8">

    {{-- ============================================================
         1. SECTION INTRO
    ============================================================ --}}
    <div class="max-w-3xl">
      <div class="flex items-center gap-3 mb-4">
        <span class="h-px w-10 bg-[#D4AF37]"></span>

        <span class="text-xs sm:text-sm font-semibold uppercase tracking-widest text-[#D4AF37]">
          TESDA Negros Island Region
        </span>
      </div>

      <h2 class="text-4xl sm:text-5xl font-bold text-blue-900 leading-tight">
        Programs &amp; Services
      </h2>

      <p class="mt-5 text-lg text-slate-600 leading-relaxed">
        TESDA Negros Island Region provides accessible technical-vocational education
        and training, competency assessment, certification, and scholarship
        opportunities that equip Negrosanons with globally competitive skills.
      </p>
    </div>


    {{-- ============================================================
         2. PROGRAM CARDS
    ============================================================ --}}
    <div class="grid md:grid-cols-3 gap-6 md:gap-8 mt-14">

      @foreach([
        [
          'title' => 'Scholarships',
          'desc'  => 'Government-funded training scholarships covering tuition and assessment fees for qualified applicants.',
          'icon'  => 'academic-cap',
          'link'  => '/scholarships',
        ],
        [
          'title' => 'Training Centers',
          'desc'  => 'Accredited TESDA Technology Institutions and partner centers offering hands-on technical-vocational courses.',
          'icon'  => 'building-office',
          'link'  => '/training-centers',
        ],
        [
          'title' => 'Assessment & Certification',
          'desc'  => 'Competency assessments leading to nationally recognized National Certificates (NC) and Certificates of Competency (COC).',
          'icon'  => 'badge-check',
          'link'  => '/assessment-certification',
        ],
      ] as $program)

        {{-- CLICKABLE CARD --}}
        <a href="{{ $program['link'] }}"
           class="group relative block bg-white rounded-2xl border border-slate-200 p-8
                  transition-all duration-300
                  hover:border-[#D4AF37]/60
                  hover:-translate-y-0.5
                  hover:shadow-md
                  focus:outline-none
                  focus:ring-2
                  focus:ring-[#D4AF37]/50">

          {{-- Icon --}}
          <div class="w-12 h-12 rounded-xl bg-blue-900/5 border border-blue-900/10
                      flex items-center justify-center mb-6
                      group-hover:bg-blue-900 transition-colors duration-300">

            @switch($program['icon'])

              @case('academic-cap')
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.75"
                     stroke="currentColor"
                     aria-hidden="true">

                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4.26 10.147a60.44 60.44 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443" />

                </svg>
                @break


              @case('building-office')
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.75"
                     stroke="currentColor"
                     aria-hidden="true">

                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />

                </svg>
                @break


              @case('badge-check')
                <svg xmlns="http://www.w3.org/2000/svg"
                     class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                     fill="none"
                     viewBox="0 0 24 24"
                     stroke-width="1.75"
                     stroke="currentColor"
                     aria-hidden="true">

                  <path stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m9 12.75 2.25 2.25 3.75-3.75M4.5 6.75a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v10.5a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3V6.75Z" />

                </svg>
                @break

            @endswitch

          </div>


          {{-- Title --}}
          <h3 class="text-xl sm:text-2xl font-bold text-blue-900">
            {{ $program['title'] }}
          </h3>


          {{-- Description --}}
          <p class="mt-3 text-slate-600 leading-relaxed">
            {{ $program['desc'] }}
          </p>


          {{-- Gold Accent --}}
          <div class="mt-6 h-px w-8 bg-[#D4AF37]"></div>


          {{-- Optional "Learn More" indicator --}}
          <div class="mt-5 flex items-center gap-2 text-sm font-semibold text-blue-900
                      opacity-0 translate-y-1
                      group-hover:opacity-100
                      group-hover:translate-y-0
                      transition-all duration-300">

            <span>Learn More</span>

            <svg xmlns="http://www.w3.org/2000/svg"
                 class="w-4 h-4"
                 fill="none"
                 viewBox="0 0 24 24"
                 stroke-width="2"
                 stroke="currentColor">

              <path stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13.5 4.5 19 10.5m0 0-5.5 6m5.5-6H5" />

            </svg>

          </div>

        </a>

      @endforeach

    </div>

  </div>

</section>