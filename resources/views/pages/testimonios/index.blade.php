@extends('layouts.app')

@section('content')

<div class="my-4">

    <h1 class="font-bold text-3xl text-julien-gris text-center uppercase my-4">
                Testimonios
    </h1>

	<div class="w-full mx-auto flex flex-col md:flex-row flex-wrap items-stretch justify-around text-justify">

	@foreach($testimonios as $testimonio)

	<div class="w-full max-w-sm md:w-1/3 mx-auto my-4 rounded overflow-hidden shadow-lg">
	  {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
	  <img src="{{ url($testimonio->avatarurl)}}" class="fill-current object-cover w-48 h-48 rounded-full mx-auto p-2" alt="avatar">
	  <div class="text-julien-gris px-6 py-4">
	    <div class="font-bold text-xl text-center mb-2">{{$testimonio->name}}</div>
	    <div class="text-base">
	      <p>{{$testimonio->testimonio}}</p>
	    </div>
	  </div>
	</div>

	@endforeach

	{{ $testimonios->links() }}

	</div>

	<div class="max-w-sm mx-auto">

		@if ($errors->any())
	        <div class="alert alert-danger">
	            <ul>
	                @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
    	@endif 

		<form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('testimonios.store') }}">
        @csrf

	        <div class="mb-4">
	            <label for="name" class="block text-julien-gris text-sm font-bold tracking-wide mb-2">{{ __('Tu nombre') }}</label>

	            <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-julien-gris leading-loose focus:outline-none focus:shadow-outline
	             @error('name') bg-red-dark @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

	            @error('name')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>

	        <div class="mb-4">
	            <label for="testimonio" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu testimonio') }}</label>

	            <textarea id="testimonio" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('testimonio') bg-red-dark @enderror" name="testimonio" value="{{ old('testimonio') }}" required autocomplete="testimonio"></textarea>

	            @error('testimonio')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>

	        <div class="mb-4">
	            <label for="avatar" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu avatar o foto') }}</label>

	            <input id="avatar" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('avatar') bg-red-dark @enderror" name="avatar" value="" required autocomplete="avatar">

	            @error('avatar')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>
	        <div class="mb-4">
	            <div class="block items-center justify-between">
	                <button type="submit" class="w-full bg-julien-gris hover:bg-julien-red text-white font-semibold text-center tracking-widest border-2 rounded-full border-white flex-auto py-2 px-4 m-2">
	                    {{ __('Enviar') }} &raquo;
	                </button>
	            </div>
	        </div>
    	</form>		
	</div>	
</div>

@endsection
