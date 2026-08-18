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
        ],
        [
          'title' => 'Training Centers',
          'desc'  => 'Accredited TESDA Technology Institutions and partner centers offering hands-on technical-vocational courses.',
          'icon'  => 'building-office',
        ],
        [
          'title' => 'Assessment & Certification',
          'desc'  => 'Competency assessments leading to nationally recognized National Certificates (NC) and Certificates of Competency (COC).',
          'icon'  => 'badge-check',
        ],
      ] as $program)

      <div class="group relative bg-white rounded-2xl border border-slate-200 p-8
                  transition-all duration-300 hover:border-[#D4AF37]/60 hover:-translate-y-0.5 hover:shadow-md">

        {{-- Icon --}}
        <div class="w-12 h-12 rounded-xl bg-blue-900/5 border border-blue-900/10
                    flex items-center justify-center mb-6
                    group-hover:bg-blue-900 transition-colors duration-300">
          @switch($program['icon'])
            @case('academic-cap')
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.44 60.44 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443" />
              </svg>
              @break
            @case('building-office')
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 21h16.5M4.5 3h15M5.25 3v18m13.5-18v18M9 6.75h1.5m-1.5 3h1.5m-1.5 3h1.5m3-6H15m-1.5 3H15m-1.5 3H15M9 21v-3.375c0-.621.504-1.125 1.125-1.125h3.75c.621 0 1.125.504 1.125 1.125V21" />
              </svg>
              @break
            @case('badge-check')
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-900 group-hover:text-white transition-colors duration-300"
                   fill="none" viewBox="0 0 24 24" stroke-width="1.75" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9 12.75 2.25 2.25 3.75-3.75M4.5 6.75a3 3 0 0 1 3-3h9a3 3 0 0 1 3 3v10.5a3 3 0 0 1-3 3h-9a3 3 0 0 1-3-3V6.75Z" />
              </svg>
              @break
          @endswitch
        </div>

        <h3 class="text-xl sm:text-2xl font-bold text-blue-900">
          {{ $program['title'] }}
        </h3>

        <p class="mt-3 text-slate-600 leading-relaxed">
          {{ $program['desc'] }}
        </p>

        <div class="mt-6 h-px w-8 bg-[#D4AF37]"></div>

      </div>

      @endforeach

    </div>

    {{-- ============================================================
         3 & 4. FEATURED "HOW TO ENROLL" GUIDE SECTION
    ============================================================ --}}
    <div class="mt-20">

      <div class="flex items-center gap-3 mb-4">
        <span class="h-px w-10 bg-[#D4AF37]"></span>
        <span class="text-xs sm:text-sm font-semibold uppercase tracking-widest text-[#D4AF37]">
          Featured Resource
        </span>
      </div>

      <h3 class="text-3xl sm:text-4xl font-bold text-blue-900">
        How to Enroll in a TESDA Program
      </h3>
      <p class="mt-4 text-lg text-slate-600 leading-relaxed max-w-2xl">
        Learn how to browse available programs and complete your enrollment
        through the TESDA B-SRS platform.
      </p>

      {{-- ---------- LEFT: STEPS PANEL (wide, full height)  |  RIGHT: STACKED VIDEOS (narrow) ---------- --}}
      <div class="mt-10 grid lg:grid-cols-5 gap-8 lg:gap-10 items-stretch">

    {{-- LEFT — How Enrollment Works (wide, primary panel, taller, with timeline) --}}
<div class="lg:col-span-3 order-2 lg:order-1">
  <div class="h-full rounded-2xl border border-slate-200 bg-white p-7 sm:p-10 flex flex-col">

    <div class="flex items-center gap-2.5">
      <div class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-900">
        <svg xmlns="http://www.w3.org/2000/svg"
             class="w-4.5 h-4.5 text-white"
             viewBox="0 0 24 24"
             fill="none"
             stroke="currentColor"
             stroke-width="1.75"
             aria-hidden="true">
          <path stroke-linecap="round"
                stroke-linejoin="round"
                d="M9 12h6m-6 4h6m2 5H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5.586a1 1 0 0 1 .707.293l5.414 5.414a1 1 0 0 1 .293.707V19a2 2 0 0 1-2 2Z" />
        </svg>
      </div>

      <h4 class="text-lg font-bold text-blue-900">
        How Enrollment Works
      </h4>
    </div>

    <p class="mt-3 text-sm text-slate-500 leading-relaxed max-w-md">
      A quick summary of the process shown in the videos, for reference
      or offline use.
    </p>

    <!-- Vertical Steps -->
    <ol class="mt-10 relative flex flex-col gap-8">

      <!-- Vertical connecting line -->
      <div class="absolute left-4 top-4 bottom-4 w-px bg-slate-200"></div>

  @foreach([
    [
        'step'  => '01',
        'title' => 'Create an account',
       'desc' => 'Visit <span class="font-semibold text-blue-700 underline decoration-black-500 decoration-2 underline-offset-4">bsrs.tesda.gov.ph</span> and register for a free BSRS account to get started.',
        'link'  => 'https://bsrs.tesda.gov.ph',
    ],
    [
        'step'  => '02',
        'title' => 'Find a program',
        'desc'  => 'Browse available training programs on the TESDA BSRS platform and select one that matches your interest.',
        'link'  => 'https://bsrs.tesda.gov.ph',
    ],
    [
        'step'  => '03',
        'title' => 'Review the details',
        'desc'  => 'Check the schedule, requirements, and training center for your chosen program before proceeding.',
        'link'  => 'https://bsrs.tesda.gov.ph',
    ],
    [
        'step'  => '04',
        'title' => 'Submit your enrollment',
        'desc'  => 'Complete the online enrollment form and submit the required documents through BSRS.',
        'link'  => 'https://bsrs.tesda.gov.ph',
    ],
] as $item)

        <li class="relative flex gap-5">

          <!-- Step Number -->
          <span class="relative z-10 flex-shrink-0
                       h-8 w-8
                       items-center justify-center
                       rounded-full
                       bg-white
                       border-2 border-blue-900
                       text-xs font-bold text-blue-900
                       flex">
            {{ $item['step'] }}
            
          </span>

          <!-- Content -->
         <div class="pt-0.5">
  @if(!empty($item['link']))
  <a
    href="{{ $item['link'] }}"
    target="_blank"
    rel="noopener noreferrer"
    class="group block"
>
    <h5 class="text-sm font-semibold text-slate-900 group-hover:text-blue-900 transition-colors">
        {{ $item['title'] }}
    </h5>

    <p class="mt-1.5 text-sm text-slate-600 leading-relaxed">
        {!! $item['desc'] !!}
    </p>
</a>

@else
    <div class="pt-0.5">
        <h5 class="text-sm font-semibold text-slate-900">
            {{ $item['title'] }}
        </h5>

        <p class="mt-1.5 text-sm text-slate-600 leading-relaxed">
             {!! $item['desc'] !!}
        </p>
    </div>
@endif
</div>

        </li>

      @endforeach

    </ol>

  </div>
</div>

        {{-- RIGHT — Videos stacked vertically (narrow column, small videos) --}}
        <div class="lg:col-span-2 order-1 lg:order-2 flex flex-col gap-6">

          {{-- Video 1 — Primary long-form guide --}}
          <div class="rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm">
            <div class="relative aspect-video w-full bg-blue-950">
              <span class="absolute top-2 left-2 z-10 inline-flex items-center gap-1.5 rounded-full bg-blue-900/90 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wide text-white">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M12 2 3 6v6c0 5.25 3.75 9.75 9 11 5.25-1.25 9-5.75 9-11V6l-9-4Z"/>
                </svg>
                Official Video
              </span>
              <iframe
                src="https://www.youtube.com/embed/LVLlPsUGlwg"
                title="How to Enroll for a Program in BSRS — official TESDA B-SRS guide"
                class="absolute inset-0 w-full h-full"
                frameborder="0"
                loading="lazy"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen
              ></iframe>
            </div>

            <div class="px-4 py-3 border-t border-slate-200">
              <h4 class="text-sm font-semibold text-slate-900">Full Enrollment Walkthrough</h4>
              <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                Search, review requirements, and submit your enrollment.
              </p>
              <a href="https://knowledgebase-bsrs.tesda.gov.ph/video/how-to-enroll-for-a-program-in-bsrs" target="_blank" rel="noopener noreferrer" class="mt-3 inline-flex items-center gap-1.5 rounded-lg bg-blue-900 px-4 py-2 text-xs font-semibold text-white transition-colors duration-200 hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:ring-offset-2">
                Watch Full Guide
                <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5H19.5V10.5M19.5 4.5 10 14M18 14v4.5A1.5 1.5 0 0 1 16.5 20h-9A1.5 1.5 0 0 1 6 18.5v-9A1.5 1.5 0 0 1 7.5 8H12" />
                </svg>
              </a>
            </div>
          </div>

          {{-- Video 2 — Secondary short-form video --}}
          <div class="rounded-2xl overflow-hidden border border-slate-200 bg-white shadow-sm">
            <div class="flex flex-row">

              <div class="relative w-[100px] shrink-0 bg-blue-950" style="aspect-ratio: 9 / 16;">
                <span class="absolute top-1.5 left-1.5 z-10 inline-flex items-center rounded-full bg-blue-900/90 px-2 py-0.5 text-[9px] font-semibold uppercase tracking-wide text-white">
                  Short
                </span>
                <iframe
                  src="https://www.youtube.com/embed/j9xE9eeDJSM"
                  title="TESDA program enrollment guide — YouTube Shorts"
                  class="absolute inset-0 w-full h-full"
                  frameborder="0"
                  loading="lazy"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen
                ></iframe>
              </div>

              <div class="px-4 py-3 flex flex-col justify-center">
                <h4 class="text-sm font-semibold text-slate-900">Quick Enrollment Guide</h4>
                <p class="mt-1 text-xs text-slate-600 leading-relaxed">
                  A faster overview in under a minute.
                </p>
                <p class="mt-2 text-[10px] font-semibold uppercase tracking-wide text-slate-400">
                  Secondary viewing option
                </p>
              </div>
            </div>
          </div>

        </div>

      </div>

      {{-- ---------- HELP / RESOURCES STRIP (full width) ---------- --}}
      <div class="mt-4 rounded-2xl bg-blue-900 px-8 py-6 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
          <p class="text-sm font-semibold uppercase tracking-wide text-[#D4AF37]">Need Help?</p>
          <p class="mt-1 text-white text-sm sm:text-base">
            Visit the official BSRS Knowledgebase for FAQs, or contact your nearest TESDA office.
          </p>
        </div>
        <a href="https://knowledgebase-bsrs.tesda.gov.ph/video/how-to-enroll-for-a-program-in-bsrs" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center gap-2 rounded-lg bg-white px-5 py-3 text-sm font-semibold text-blue-900 transition-colors duration-200 hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-[#D4AF37] focus:ring-offset-2 focus:ring-offset-blue-900 whitespace-nowrap">
          Visit Knowledgebase
        </a>
      </div>

    </div>

  </div>

</section>