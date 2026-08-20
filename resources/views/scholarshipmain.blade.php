@extends('layouts.app')

@section('title', 'Scholarship')

@section('content')

    @include('partials.navbar')

    <main>

        @include('schoolarship.tesdaenroll')

    </main>
    
     @include('partials.footer')

  

@endsection