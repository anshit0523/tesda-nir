@extends('layouts.app')

@section('title', 'NEWS AND IMPACT')

@section('content')

    @include('partials.navbar')

    <main>

       
        @include('newsandimpact.news')
         @include('newsandimpact.wall-of-success')
         @include('newsandimpact.partnership')


        

    </main>
    
    
    @include('partials.footer')

    

@endsection