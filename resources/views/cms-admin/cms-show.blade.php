@extends('cms-admin.cms-layout')
@section('title', 'Response #'.$response->id)

@section('content')
@php
    use App\Support\CsmRow as CsmResponse;
    $cc2 = [1 => 'Easy to see', 2 => 'Somewhat easy to see', 3 => 'Difficult to see', 4 => 'Not visible at all', 5 => 'N/A'];
    $cc3 = [1 => 'Helped very much', 2 => 'Somewhat helped', 3 => 'Did not help', 4 => 'N/A'];
    $statements = [
        0 => 'I am satisfied with the service that I availed.',
        1 => 'I spent a reasonable amount of time for my transaction.',
        2 => 'The office followed the transaction\'s requirements and steps based on the information provided.',
        3 => 'The steps (including payment) I needed to do for my transaction were easy and simple.',
        4 => 'I easily found information about my transaction from the office or its website.',
        5 => 'I paid a reasonable amount of fees for my transaction.',
        6 => 'I feel the office was fair to everyone ("walang palakasan").',
        7 => 'I was treated courteously by the staff, and the staff was helpful.',
        8 => 'I got what I needed, or a denial was sufficiently explained to me.',
    ];
    $tone = fn ($v) => match (CsmResponse::SCORES[$v] ?? 0) {
        5, 4 => 'bg-green-100 text-green-800', 3 => 'bg-amber-100 text-amber-800',
        2, 1 => 'bg-red-100 text-red-800', default => 'bg-slate-100 text-slate-500' };
@endphp

<div class="flex items-center justify-between">
    <a href="{{ route('admin.csm.index') }}" class="text-sm text-tesda-blue font-semibold hover:underline">← All responses</a>
    </div>

<div class="bg-white rounded-xl border border-slate-200 shadow-sm p-6 space-y-6">
    <div>
        <h1 class="text-xl font-bold text-tesda-navy">Response #{{ $response->id }}</h1>
        <p class="text-sm text-slate-500">{{ $response->created_at ? 'Submitted '.$response->created_at->format('M d, Y g:i A') : '' }}</p>
    </div>

    <dl class="grid sm:grid-cols-2 lg:grid-cols-3 gap-x-6 gap-y-4 text-sm">
        @foreach ([
            'Date of transaction' => $response->date?->format('M d, Y') ?? 'Not provided',
            'Client type' => $response->client_type,
            'Name' => $response->name ?: 'Not provided',
            'Sex' => $response->sex,
            'Age' => $response->age ?: 'Not provided',
            'Region' => $response->region,
            'Service availed' => $response->service_availed,
            'Email' => $response->email ?: 'Not provided',
            'Staff attended' => $response->employee_name ?: 'Not provided',
        ] as $label => $value)
            <div><dt class="text-xs text-slate-500">{{ $label }}</dt><dd class="font-medium">{{ $value }}</dd></div>
        @endforeach
    </dl>

    <div class="border-t border-slate-200 pt-5">
        <h2 class="font-bold text-tesda-navy mb-3">Citizen's Charter</h2>
        <dl class="grid sm:grid-cols-3 gap-4 text-sm">
            <div><dt class="text-xs text-slate-500">CC1 · Awareness</dt><dd class="font-medium">{{ CsmResponse::CC1[$response->cc1] ?? $response->cc1 }}</dd></div>
            <div><dt class="text-xs text-slate-500">CC2 · Visibility</dt><dd class="font-medium">{{ $cc2[$response->cc2] ?? 'Not answered' }}</dd></div>
            <div><dt class="text-xs text-slate-500">CC3 · Helpfulness</dt><dd class="font-medium">{{ $cc3[$response->cc3] ?? 'Not answered' }}</dd></div>
        </dl>
    </div>

    <div class="border-t border-slate-200 pt-5">
        <div class="flex items-baseline justify-between mb-3">
            <h2 class="font-bold text-tesda-navy">Service quality ratings</h2>
            <span class="text-sm text-slate-500">Average: <strong class="text-slate-800">{{ $response->average_score ?? '—' }}</strong> / 5</span>
        </div>
        <ul class="divide-y divide-slate-100 text-sm">
            @foreach ($statements as $i => $text)
                @php $ans = $response->sqd[$i] ?? 'N/A'; @endphp
                <li class="py-2.5 flex items-start justify-between gap-4">
                    <span><strong>SQD{{ $i }}</strong> {{ $text }}</span>
                    <span class="shrink-0 px-2.5 py-0.5 rounded-full text-xs font-semibold {{ $tone($ans) }}">{{ $ans }}</span>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="border-t border-slate-200 pt-5">
        <h2 class="font-bold text-tesda-navy mb-2">Suggestions</h2>
        <p class="text-sm text-slate-700 whitespace-pre-line">{{ $response->suggestions ?: 'No suggestions provided.' }}</p>
    </div>
</div>
@endsection
