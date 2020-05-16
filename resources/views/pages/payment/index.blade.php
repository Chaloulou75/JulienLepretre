@extends('layouts.app')

@section('content')

<div class="text-center font-semibold uppercase tracking-wide text-base px-8 mb-4">

        <h1 class="pb-2">TU PLAN DE ENTRENAMIENTO EN CASA</h1>
        <h2 class="pb-2">Elegi tu Plan</h2>
</div>

<div class="flex justify-between px-8">
	<div class="w-full max-w-xs lg:max-w-xl lg:w-1/2 m-auto p-auto p-8 border-2 rounded border-teal-600 font-medium transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-gray-500 hover:bg-gray-600 text-white text-2xl text-center">
		<a class="no-underline text-white text-2xl text-center" href="{{ route('payment.6sesiones') }}">	
			Plan de 6 sesiones
        </a>       	  
	</div>

	<div class="w-full max-w-xs lg:max-w-xl lg:w-1/2 m-auto p-auto p-8 border-2 rounded border-teal-600 font-medium transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 bg-gray-500 hover:bg-gray-600 text-white text-2xl text-center">   
		<a class="no-underline text-white text-2xl text-center" href="{{ route('payment.12sesiones') }}">
            Plan de 12 sesiones
        </a>	
	</div>

	
</div>

@endsection
