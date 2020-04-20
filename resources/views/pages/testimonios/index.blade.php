@extends('layouts.app')

@section('content')

<div class="my-4">

    <h1 class="font-bold text-3xl text-julien-gris text-center uppercase my-4">
                Testimonios
    </h1>

	<div class="w-full mx-auto flex flex-col md:flex-row flex-wrap items-stretch justify-around text-justify">

	@foreach($testimonios as $testimonio)

	<div class="w-full max-w-sm md:w-1/3 mx-auto my-4 rounded overflow-hidden shadow-lg animated bounceInUp">
	  {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
	  <img src="{{ url($testimonio->avatarurl) }}" class="fill-current object-cover w-40 h-40 rounded-full mx-auto p-2" alt="avatar">
	  <div class="text-julien-gris px-6 py-4">
	    <div class="font-bold text-xl text-center mb-2">{{$testimonio->name}}</div>
	    <div class="text-base">
	      <p>{{$testimonio->msg}}</p>
	    </div>
	  </div>

	  @auth

	  <div class="flex justify-between px-6 py-4">
	  	<a class="inline-block text-xs text-julien-red not-italic" href="{{ action('TestimoniosController@edit', $testimonio) }}">Editar</a>
	  	<form method="POST" action="{{ action('TestimoniosController@destroy', $testimonio) }}"> 
	  		@csrf 
	  		@method('DELETE')
	  	<button class="inline-block text-xs text-julien-red" >Suprimir</button>
	  	</form>	  	
	  </div>
	  
	  @endauth
	  
	</div>

	@endforeach

	{{ $testimonios->links() }}

	</div>

		
</div>

@endsection
