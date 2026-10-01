@extends('cms-admin.cms-layout')
@section('title', 'Responses')

@section('content')
@php
    use App\Support\CsmRow as CsmResponse;
    $clientTypes = ['Citizen', 'Business', 'Government (Employee or another agency)'];
    $services = ['Assessment and Certification', 'Program Registration', 'Training', 'Scholarship', 'Administrative', 'Others'];
    $maxService = max(1, $stats['services']->max() ?? 1);
@endphp

<form method="GET" class="bg-white rounded-xl border border-slate-200 shadow-sm p-4 grid gap-3 sm:grid-cols-2 lg:grid-cols-6 items-end">
    <div class="lg:col-span-2">
        <label class="block text-xs font-semibold text-slate-600 mb-1">Search</label>
        <input type="text" name="q" value="{{ $filters['q'] ?? '' }}" placeholder="Name, email, staff, comments" class="w-full rounded-lg border-slate-300 text-sm">
    </div>
    <div>
        <label class="block text-xs font-semibold text-slate-600 mb-1">Client type</label>
        <select name="client_type" class="w-full rounded-lg border-slate-300 text-sm">
            <option value="">All</option>
            @foreach ($clientTypes as $t)<option value="{{ $t }}" @selected(($filters['client_type'] ?? '') === $t)>{{ Str::before($t, ' (') }}</option>@endforeach
        </select>
    </div>
    <div>
        <label class="block text-xs font-semibold text-slate-600 mb-1">Service</label>
        <select name="service" class="w-full rounded-lg border-slate-300 text-sm">
            <option value="">All</option>
            @foreach ($services as $s)<option @selected(($filters['service'] ?? '') === $s)>{{ $s }}</option>@endforeach
        </select>
    </div>
    <div>
        <label class="block text-xs font-semibold text-slate-600 mb-1">From</label>
        <input type="date" name="from" value="{{ $filters['from'] ?? '' }}" class="w-full rounded-lg border-slate-300 text-sm">
    </div>
    <div>
        <label class="block text-xs font-semibold text-slate-600 mb-1">To</label>
        <input type="date" name="to" value="{{ $filters['to'] ?? '' }}" class="w-full rounded-lg border-slate-300 text-sm">
    </div>
    <div class="flex gap-2 lg:col-span-6">
        <button class="px-4 py-2 bg-tesda-blue hover:bg-tesda-navy text-white text-sm font-semibold rounded-lg">Apply filters</button>
        <a href="{{ route('admin.csm.index') }}" class="px-4 py-2 text-sm text-slate-600 hover:text-slate-900">Clear</a>
        <a href="{{ route('admin.csm.index', $filters + ['refresh' => 1]) }}" class="px-4 py-2 text-sm text-slate-600 hover:text-slate-900">Reload from Drive</a>
        <a href="{{ route('admin.csm.export', $filters) }}" class="ml-auto px-4 py-2 border border-slate-300 text-sm font-semibold rounded-lg hover:bg-slate-50">Export CSV</a>
    </div>
</form>

<section class="grid grid-cols-1 sm:grid-cols-3 gap-4">
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <p class="text-sm text-slate-500">Responses</p>
        <p class="text-3xl font-extrabold text-tesda-navy mt-1">{{ number_format($stats['total']) }}</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <p class="text-sm text-slate-500">Overall average (out of 5)</p>
        <p class="text-3xl font-extrabold text-tesda-navy mt-1">{{ $stats['overall'] ?? '—' }}</p>
    </div>
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <p class="text-sm text-slate-500">Satisfied with the service (SQD0)</p>
        <p class="text-3xl font-extrabold text-tesda-navy mt-1">{{ $stats['satisfied_pct'] !== null ? $stats['satisfied_pct'].'%' : '—' }}</p>
    </div>
</section>

<section class="grid lg:grid-cols-2 gap-4">
    <div class="bg-white rounded-xl border border-slate-200 p-5">
        <h2 class="font-bold text-tesda-navy">Agreement by service quality dimension</h2>
        <p class="text-xs text-slate-500 mb-3">Share of answers that were Agree or Strongly Agree. N/A excluded.</p>
        <div class="space-y-2.5">
            @foreach ($stats['sqd'] as $i => $s)
                <div>
                    <div class="flex justify-between text-xs mb-1">
                        <span class="font-medium">SQD{{ $i }} · {{ CsmResponse::SQD_LABELS[$i] }}</span>
                        <span class="text-slate-500">{{ $s['agree_pct'] !== null ? $s['agree_pct'].'%' : 'no data' }} <span class="text-slate-400">(avg {{ $s['avg'] ?? '—' }})</span></span>
                    </div>
                    <div class="h-2 bg-slate-100 rounded-full overflow-hidden">
                        <div class="h-full bg-tesda-blue rounded-full" style="width: {{ $s['agree_pct'] ?? 0 }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="space-y-4">
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <h2 class="font-bold text-tesda-navy mb-3">Responses by service availed</h2>
            <div class="space-y-2.5">
                @forelse ($stats['services'] as $name => $count)
                    <div>
                        <div class="flex justify-between text-xs mb-1"><span class="font-medium">{{ $name }}</span><span class="text-slate-500">{{ $count }}</span></div>
                        <div class="h-2 bg-slate-100 rounded-full overflow-hidden"><div class="h-full bg-tesda-gold rounded-full" style="width: {{ $count / $maxService * 100 }}%"></div></div>
                    </div>
                @empty
                    <p class="text-sm text-slate-500">No responses match these filters.</p>
                @endforelse
            </div>
        </div>
        <div class="bg-white rounded-xl border border-slate-200 p-5">
            <h2 class="font-bold text-tesda-navy mb-3">Citizen's Charter awareness (CC1)</h2>
            <ul class="text-sm space-y-1.5">
                @foreach (CsmResponse::CC1 as $code => $label)
                    <li class="flex justify-between"><span>{{ $label }}</span><span class="font-semibold">{{ $stats['cc1'][$code] ?? 0 }}</span></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<section class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left">
            <thead class="bg-slate-50 text-xs text-slate-600 border-b border-slate-200">
                <tr>
                    <th class="p-3">Date</th><th class="p-3">Client</th><th class="p-3">Service</th>
                    <th class="p-3">Region</th><th class="p-3 text-center">Avg</th><th class="p-3">Comment</th><th class="p-3"></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                @forelse ($responses as $r)
                    @php $avg = $r->average_score; @endphp
                    <tr class="hover:bg-blue-50/40">
                        <td class="p-3 whitespace-nowrap">{{ ($r->date?->format('M d, Y') ?? '—') }}</td>
                        <td class="p-3">
                            <div class="font-medium">{{ $r->name ?: 'Anonymous' }}</div>
                            <div class="text-xs text-slate-500">{{ Str::before($r->client_type, ' (') }} · {{ $r->sex }}{{ $r->age ? ', '.$r->age : '' }}</div>
                        </td>
                        <td class="p-3">{{ $r->service_availed }}</td>
                        <td class="p-3">{{ $r->region }}</td>
                        <td class="p-3 text-center">
                            <span class="inline-block min-w-[2.5rem] px-2 py-0.5 rounded-full text-xs font-bold
                                {{ $avg === null ? 'bg-slate-100 text-slate-500' : ($avg >= 4 ? 'bg-green-100 text-green-800' : ($avg >= 3 ? 'bg-amber-100 text-amber-800' : 'bg-red-100 text-red-800')) }}">{{ $avg ?? '—' }}</span>
                        </td>
                        <td class="p-3 max-w-xs text-slate-600 truncate">{{ $r->suggestions ?: '—' }}</td>
                        <td class="p-3 text-right whitespace-nowrap">
                            <a href="{{ route('admin.csm.show', $r->id) }}" class="text-tesda-blue font-semibold hover:underline">View</a>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="7" class="p-8 text-center text-slate-500">No responses match these filters. Clear the filters or widen the date range.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="p-3 border-t border-slate-200">{{ $responses->links() }}</div>
</section>
@endsection
