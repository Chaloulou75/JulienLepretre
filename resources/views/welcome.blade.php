@extends('layouts.app')

@section('content')

	@include('layouts.hero')

    
    <div class="w-full h-screen">

    	<img class="w-full mx-auto mb-2" src="/img/muevemas1.jpg" alt="muevemas">  {{-- transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110  --}}  	

        <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component>

        {{-- <modal-component></modal-component> --}}
         
    </div>

@endsection
