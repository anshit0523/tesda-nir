@extends('layouts.app')

@section('title', 'Page Under Construction')

@section('content')
<div class="flex-1 min-h-screen bg-[#0B2A5B] flex items-center justify-center p-6 text-white">
    
    <div class="max-w-lg w-full text-center space-y-6 bg-gradient-to-b from-[#0B2A5B] to-[#0041A5] p-10 rounded-2xl shadow-2xl border border-blue-400/20">
        
        <!-- Status Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 bg-[#0041A5]/60 border border-blue-300/30 rounded-full text-xs font-semibold tracking-wider text-blue-100 uppercase">
            <span class="w-2 h-2 rounded-full bg-blue-400 animate-pulse"></span>
            Temporary Page
        </div>

        <!-- Centered Title -->
        <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white leading-tight font-[Frutiger]">
            Under Construction
        </h1>

        <!-- Subtext -->
        <p class="text-blue-100/80 text-base leading-relaxed max-w-sm mx-auto">
            This section is currently being updated. Please check back soon for updates.
        </p>

        <!-- Back Button -->
        <div class="pt-4">
            <a href="{{ url('/') }}" class="inline-block px-6 py-3 bg-[#0041A5] hover:bg-blue-600 text-white font-medium rounded-lg border border-blue-400/30 shadow-lg transition duration-200">
                Return to Home
            </a>
        </div>

    </div>

</div>
@endsection