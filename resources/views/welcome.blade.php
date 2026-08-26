@extends('layouts.app')

@section('title', 'TESDA NIR')

@section('content')

    @include('partials.navbar')

    <main>

        @include('home.hero')
@include('component.Agenda')
        @include('home.rd-message')

        @include('home.programs')



        @include('contact.regional-headquarters')

      
        
 
    </main>
    
     
@include('partials.footer')
@include('partials.chatbot')

@endsection