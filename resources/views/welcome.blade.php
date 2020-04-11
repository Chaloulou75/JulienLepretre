@extends('layouts.app')

@section('content')

	@include('layouts.hero')
    
    <div class="w-full mx-2 my-4">

    	<img class="w-full lg:w-4/5 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mb-2" src="/img/muevemas1.jpg" alt="muevemas">     	

        <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component>

        {{-- <modal-component></modal-component> --}}
         
    </div>

@endsection
