@extends('layouts.app')

@section('content')

<div class="max-w-sm mx-auto">

		<h1 class="font-bold text-3xl text-julien-gris text-center uppercase my-4">
	            Editar el testimonio de <span class="text-julien-red"> {{ $name }}</span>
	    </h1>

		@if ($errors->any())
	        <div class="alert alert-danger">
	            <ul>
	                @foreach ($errors->all() as $error)
	                    <li>{{ $error }}</li>
	                @endforeach
	            </ul>
	        </div>
    	@endif 

		<form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4 animated bounceInUp" method="POST" enctype="multipart/form-data" action="{{ action('TestimoniosController@update', $testimonio) }}">
        @csrf
        @method('PUT')

	        <div class="mb-4">
	            <label for="name" class="block text-julien-gris text-sm font-bold tracking-wide mb-2">{{ __('Tu nombre') }}</label>

	            <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-julien-gris leading-loose focus:outline-none focus:shadow-outline
	             @error('name') bg-red-dark @enderror" name="name" value="{{ old('name') }}" placeholder="{{$name}}" >

	            @error('name')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>

	        <div class="mb-4">
	            <label for="msg" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu testimonio') }}</label>

	            <textarea id="msg" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('msg') bg-red-dark @enderror" name="msg" value="{{ old('msg') }}" placeholder="{{$msg}}"></textarea>

	            @error('msg')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>

	        <div class="mb-4">
	            <label for="avatar" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu avatar o foto') }}</label>

	            <input id="avatar" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('avatar') bg-red-dark @enderror" name="avatar" value="">

	            @error('avatar')
	                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
	                    <strong>{{ $message }}</strong>
	                </span>
	            @enderror
	            
	        </div>
	        <div class="mb-4">
	            <div class="block items-center justify-between">
	                <button type="submit" class="w-full bg-julien-gris hover:bg-julien-red text-white font-base text-center tracking-widest border-2 rounded border-white flex-auto py-2 px-4 m-2">
	                    {{ __('Editar') }} &raquo;
	                </button>
	            </div>
	        </div>
    	</form>	
	</div>

@endsection
