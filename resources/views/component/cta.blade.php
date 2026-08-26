{{-- resources/views/components/news-announcement.blade.php --}}
@props([
    'badge' => 'PUBLIC TRUST & RECOGNITION',
    'category' => 'FEATURED ANNOUNCEMENT',
    'title' => 'TESDA Recognized Among the Most Trusted Government Agencies',
    'description' => 'TESDA is highlighted in the 2026 Pahayag Second Quarter Survey on Approval and Trust Ratings of Government Agencies.',
    'period' => '2026 Pahayag • Second Quarter',
    'readMoreUrl' => '#',
    'surveyDetailsUrl' => '#',
    'imageSrc' => 'images/pahayag-2026-survey.jpg',
    'imageAlt' => '2026 Pahayag Second Quarter Survey Results',
    'surveyQuestion' => 'Q: How would you rate the overall performance of the following government officials and institutions/agencies THROUGHOUT THE MARCOS ADMINISTRATION, from June 2026 to present?'
])

<section class="relative bg-gradient-to-b from-slate-100 via-blue-50/50 to-slate-100 text-slate-800 font-['Frutiger',sans-serif] py-12 lg:py-16 overflow-hidden">
    
    {{-- BACKGROUND DECORATIVE GLOWS --}}
    <div class="absolute top-0 left-0 w-96 h-96 bg-[#0041A5]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-[#F59E0B]/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute -bottom-20 -left-20 w-80 h-80 bg-[#0B2A5B]/15 rounded-full blur-2xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
       

        {{-- MAIN TWO-COLUMN LAYOUT --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12 items-center">
            
            {{-- LEFT COLUMN: CONTENT --}}
            <div class="lg:col-span-6 space-y-6">
                
           

                {{-- FEATURED CATEGORY --}}
                <span class="block text-xs sm:text-sm font-bold uppercase tracking-widest text-[#F59E0B]">
                    {{ $category }}
                </span>

                {{-- MAIN HEADLINE --}}
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#0B2A5B] tracking-tight leading-tight">
                    {{ $title }}
                </h2>

                {{-- DESCRIPTION --}}
                <p class="text-base sm:text-lg text-slate-600 leading-relaxed max-w-xl">
                    {{ $description }}
                </p>

                {{-- PERIOD --}}
                <p class="text-sm font-semibold text-slate-500">
                    {{ $period }}
                </p>

                {{-- ACTION BUTTONS --}}
                <div class="pt-2 flex flex-col sm:flex-row items-start sm:items-center gap-4">
                    <a 
                        href="{{ $readMoreUrl }}"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3 rounded-xl bg-[#0041A5] hover:bg-[#0B2A5B] text-white font-bold text-sm shadow-md hover:shadow-lg transition-all duration-300 group"
                    >
                        <span>Read Full Story</span>
                        <svg class="w-4 h-4 text-[#F59E0B] group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>

                  
                </div>

            </div>

            {{-- RIGHT COLUMN: FRAMED ACTUAL IMAGE --}}
            <div class="lg:col-span-6 relative flex justify-center lg:justify-end">
                
                {{-- OUTER FRAMED CONTAINER --}}
                <div class="relative w-full max-w-md lg:max-w-lg bg-[#0B2A5B] p-3 sm:p-4 rounded-3xl shadow-2xl border-2 border-[#0041A5]/30 group transition-transform duration-500 hover:-translate-y-1">
                    
                    {{-- INNER GLOW ACCENT --}}
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#0041A5]/20 via-transparent to-[#F59E0B]/10 rounded-3xl pointer-events-none"></div>

                    {{-- ACTUAL INFOGRAPHIC IMAGE --}}
                    <div class="relative overflow-hidden rounded-2xl border border-blue-900/50 bg-slate-900">
                        <img 
                            src="{{ ('images/pahayag.jpg') }}" 
                            alt="{{ $imageAlt }}"
                            class="w-full h-auto object-contain rounded-2xl transition-scale duration-700 group-hover:scale-[1.01]"
                        >
                    </div>

                </div>

            </div>

        </div>

        {{-- BOTTOM FOOTER & SURVEY QUESTION CITATION --}}
        <div class="mt-14 pt-6 border-t border-slate-300/80 grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
            
            {{-- SURVEY QUESTION --}}
            <div class="md:col-span-8">
                <p class="text-xs sm:text-sm text-slate-500 italic leading-relaxed">
                    {{ $surveyQuestion }}
                </p>
            </div>

            {{-- SURVEY SERIES BRANDING --}}
            <div class="md:col-span-4 flex items-center justify-start md:justify-end gap-3">
                <div class="px-3 py-1 rounded bg-[#0041A5] text-white font-extrabold text-xs uppercase tracking-wider">
                    Pahayag
                </div>
                <div class="text-xs font-bold text-[#0B2A5B] uppercase tracking-wider">
                    Quarterly Survey Series
                </div>
            </div>

        </div>

    </div>
</section>