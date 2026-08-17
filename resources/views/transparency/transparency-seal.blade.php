@php
    // PLACEHOLDER DATA — swap this for real documents/links later.
    $categories = [
        [
            'numeral' => 'I',
            'title' => 'Mandates, Officials & Contact Information',
            'description' => 'Agency mandate and functions, directory of officials, and TESDA Board members.',
            'items' => [
                ['label' => 'Mandate and Function', 'href' => 'https://tesda.gov.ph/About/TESDA/10'],
                ['label' => 'Directory of Officials', 'href' => 'https://tesda.gov.ph/directory'],
                ['label' => 'TESDA Board Members', 'href' => 'https://tesda.gov.ph/About/TESDA/24686'],
            ],
        ],
        [
            'numeral' => 'II',
            'title' => 'Budget Execution Reports',
            'description' => 'Financial Plan, Physical Plan, and Monthly Disbursement Program by year.',
            'items' => [
                ['label' => 'Financial Plan (BED No. 1) — 2026', 'href' => '#'],
                ['label' => 'Physical Plan (BED No. 2) — 2026', 'href' => '#'],
                ['label' => 'Monthly Disbursement Program (BED No. 3) — 2026', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'III',
            'title' => 'Approved Budgets & Corresponding Targets',
            'description' => 'Budget as reflected in the General Appropriations Act (GAA) and OPIF targets.',
            'items' => [
                ['label' => 'FY 2026 Budget', 'href' => '#'],
                ['label' => 'FY 2025 Budget', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'IV',
            'title' => 'Efficiency & Integrity Development',
            'description' => "Citizen's Charter, Net Worth of Officials, and COA audit action status.",
            'items' => [
                ['label' => "Citizen's Charter", 'href' => '#'],
                ['label' => 'Net Worth of Officials', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'V',
            'title' => 'Aging of Cash Advances',
            'description' => 'Quarterly summary of cash advances granted and liquidated.',
            'items' => [
                ['label' => '4th Quarter 2026', 'href' => '#'],
                ['label' => '3rd Quarter 2026', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'VI',
            'title' => 'Annual Procurement Plan (APP)',
            'description' => 'Common-use and non-common-use supplies and equipment plans by year.',
            'items' => [
                ['label' => 'Indicative APP — Non-CSE 2026', 'href' => '#'],
                ['label' => 'APP Common Supplies & Equipment 2026', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'VII',
            'title' => 'COA Annual Report',
            'description' => 'Commission on Audit annual report for the agency.',
            'items' => [
                ['label' => 'COA Annual Report 2026', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'VIII',
            'title' => 'Financial Reports',
            'description' => 'Consolidated and per-office quarterly financial reports.',
            'items' => [
                ['label' => 'Consolidated Financial Report — Q4 2026', 'href' => '#'],
                ['label' => 'Consolidated Financial Report — Q3 2026', 'href' => '#'],
            ],
        ],
        [
            'numeral' => 'IX',
            'title' => 'Procurement Monitoring Report',
            'description' => 'Semestral procurement monitoring reports by office.',
            'items' => [
                ['label' => 'PMR — 1st Semester 2026', 'href' => '#'],
                ['label' => 'PMR — 2nd Semester 2025', 'href' => '#'],
            ],
        ],
    ];
@endphp

@extends('layouts.app')

@section('title', 'Transparency Seal')

@section('content')
@include('partials.navbar')

{{-- ============ HERO BANNER ============ --}}
<section class="relative overflow-hidden" style="background-color: #0041A5;">

    <div class="relative max-w-7xl mx-auto px-8 py-20 md:py-28">
        <div class="grid grid-cols-1 md:grid-cols-[auto_1fr] items-center gap-12 md:gap-16">

            {{-- Seal Logo --}}
            <div class="flex justify-center md:justify-start">
                <img
                    src="{{ asset('images/transparency-seal-logo.png') }}"
                    alt="Philippine Transparency Seal"
                    class="w-48 h-48 md:w-64 md:h-64 object-contain drop-shadow-lg"
                >
            </div>

            {{-- Heading & Description --}}
            <div class="text-center md:text-left">
                <p class="font-serif italic text-lg md:text-xl text-blue-100 mb-2">
                    Technical Education and Skills Development Authority
                </p>

                <h1 class="font-serif text-4xl sm:text-5xl md:text-6xl font-bold text-white tracking-tight mb-6">
                    Transparency Seal
                </h1>

                <p class="text-blue-50 text-base md:text-lg leading-8 max-w-2xl mx-auto md:mx-0">
                    A Transparency Seal, prominently displayed on the main page of the
                    website of a particular government agency, is a certificate that it
                    has complied with the requirements of Section 93. This Seal links to
                    a page within the agency's website which contains an index of
                    downloadable items of each of the above-mentioned documents.
                </p>
            </div>

        </div>
    </div>

</section>

{{-- ============ SYMBOLISM SECTION ============ --}}
<section class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-6">
        <h2 class="font-serif text-2xl md:text-3xl font-bold mb-6" style="color: #0041A5;">
            Symbolism
        </h2>
        <div class="space-y-5 text-slate-700 text-base md:text-lg leading-8">
            <p>
                A pearl buried inside a tightly shut shell is practically worthless.
                Government information is a pearl, meant to be shared with the public
                in order to maximize its inherent value. The Transparency Seal,
                depicted by a pearl shining out of an open shell, is a symbol of a
                policy shift towards openness in access to government information.
                On the one hand, it hopes to inspire Filipinos in the civil service
                to be more open to citizen engagement; on the other, to invite the
                Filipino citizenry to exercise their right to participate in
                governance.
            </p>
            <p>
                This initiative is envisioned as a step in the right direction
                towards solidifying the position of the Philippines as the Pearl of
                the Orient – a shining example of democratic virtue in the region.
            </p>
            <p class="font-semibold text-slate-800">
                Compliance with Sec. 91 (Transparency Seal) R.A. No. 10633 (General
                Appropriations Act FY 2014)
            </p>
        </div>
    </div>
</section>

{{-- ============ COMPLIANCE ACCORDION ============ --}}
<section id="transparency" class="bg-slate-50 py-20">
    <div class="max-w-5xl mx-auto px-6">



        {{-- Accordion Categories --}}
        <div class="space-y-4" id="transparency-accordion">
            @foreach ($categories as $index => $category)
                <div class="border border-slate-200 rounded-xl bg-white overflow-hidden">
                    <button
                        type="button"
                        class="accordion-trigger w-full flex items-center justify-between gap-4 text-left px-6 py-5 hover:bg-slate-50 transition"
                        aria-expanded="false"
                        aria-controls="panel-{{ $index }}"
                    >
                        <div class="flex items-center gap-4">
                            <span class="shrink-0 w-9 h-9 rounded-full bg-blue-900 text-yellow-300 font-bold text-sm flex items-center justify-center">
                                {{ $category['numeral'] }}
                            </span>
                            <div>
                                <h3 class="font-bold text-blue-900">{{ $category['title'] }}</h3>
                                <p class="text-sm text-slate-500 mt-0.5">{{ $category['description'] }}</p>
                            </div>
                        </div>
                        <svg
                            class="accordion-icon shrink-0 w-5 h-5 text-slate-400 transition-transform duration-200"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>

                    <div id="panel-{{ $index }}" class="accordion-panel hidden px-6 pb-6">
                        <ul class="divide-y divide-slate-100 border-t border-slate-100">
                            @foreach ($category['items'] as $item)
                                <li>
                                    <a
                                        href="{{ $item['href'] }}"
                                        class="flex items-center gap-3 py-3 text-slate-700 hover:text-blue-900 transition group"
                                    >
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-4 h-4 text-slate-400 group-hover:text-blue-900 shrink-0">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6M7 4h7l5 5v11a1 1 0 01-1 1H7a1 1 0 01-1-1V5a1 1 0 011-1z" />
                                        </svg>
                                        <span class="text-sm">{{ $item['label'] }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>




<script>
    document.querySelectorAll('.accordion-trigger').forEach((btn) => {
        btn.addEventListener('click', () => {
            const panel = document.getElementById(btn.getAttribute('aria-controls'));
            const icon = btn.querySelector('.accordion-icon');
            const isOpen = btn.getAttribute('aria-expanded') === 'true';

            btn.setAttribute('aria-expanded', String(!isOpen));
            panel.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    });
</script>
@endsection

