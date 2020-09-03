@extends('layouts.app')

@section('content')

<div class="max-w-sm mx-auto">

    <h1 class="my-4 text-2xl font-bold text-center uppercase text-julien-gris">
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

    <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 border-2 border-white rounded shadow-md animated bounceInUp"
        method="POST" enctype="multipart/form-data" action="{{ action('TestimoniosController@update', $testimonio) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="name"
                class="block mb-2 text-sm font-bold tracking-wide text-julien-gris">{{ __('Tu nombre') }}</label>

            <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-julien-gris leading-loose focus:outline-none focus:shadow-outline
	             @error('name') bg-red-dark @enderror" name="name" value="{{ $name }}" placeholder="{{$name}}">

            @error('name')
            <span class="mt-1 text-sm text-red-500 " role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="msg"
                class="block mb-2 text-sm font-bold tracking-wide text-gray-700">{{ __('Tu testimonio') }}</label>

            <textarea id="msg" type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('msg') bg-red-dark @enderror"
                name="msg" value="{{ $msg }}" placeholder="{{ $msg }} ">
	            @if( old('msg'))
                    {{ old('msg')}}
                @else
                    {{ $msg }}
                @endif
            	</textarea>

            @error('msg')
            <span class="mt-1 text-sm text-red-500 " role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="avatar"
                class="block mb-2 text-sm font-bold tracking-wide text-gray-700">{{ __('Tu avatar o foto') }}</label>

            <div class="flex">
                <input id="avatar" type="file"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('avatar') bg-red-dark @enderror"
                    name="avatar" value="">

                <img src="{{ url($testimonio->avatarurl) }}" loading="auto" class="object-scale-down w-48 h-48"
                    alt="image du Post">
            </div>

            @error('avatar')
            <span class="mt-1 text-sm text-red-500 " role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>
        <div class="mb-4">
            <div class="items-center justify-between block">
                <button type="submit"
                    class="flex-auto w-full px-4 py-2 m-2 tracking-widest text-center text-white border-2 border-white rounded bg-julien-gris hover:bg-julien-red font-base">
                    {{ __('Editar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
