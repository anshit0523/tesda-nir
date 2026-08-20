@extends('layouts.app')

@section('title', 'TESDA NIR')

@section('content')

    @include('partials.navbar')

    <main>

        @include('home.hero')

        @include('home.rd-message')

        @include('home.programs')
@include('component.Agenda')


        @include('contact.regional-headquarters')
       

    </main>
    
     
@include('partials.footer')
    @include('partials.chatbot')

@endsection