@extends('layouts.app')

@section('content')

<div class="bg-gray-100 text-gray-700 text-center font-semibold uppercase tracking-wide text-base px-8 py-4">
    <h1>Actualizar el programa</h1>
</div>

<div class="w-full max-w-xs lg:max-w-xl m-auto p-auto pt-8"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('programas.update', $programme->slug )}}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Titre du programme') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ $programme->title }}" required autocomplete="title" autofocus>

            @error('title')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="descriptionGlobale" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Description Globale') }}</label>

            <textarea id="descriptionGlobale" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('descriptionGlobale') bg-red-dark @enderror" name="descriptionGlobale" value="{{ $programme->descriptionGlobale }}" placeholder="{{ $programme->descriptionGlobale }}" required autocomplete="descriptionGlobale" autofocus></textarea>

            @error('descriptionGlobale')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Image du programme') }}</label>

            <input id="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('image') bg-red-dark @enderror" name="image" value="{{ $programme->image}}" required autocomplete="image" autofocus>

            @error('image')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image2" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Deuxième Image du programme') }}</label>

            <input id="image2" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('image2') bg-red-dark @enderror" name="image2" value="{{ $programme->image2}}" required autocomplete="image2" autofocus>

            @error('image2')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>         

        <div class="mb-4">
            <label for="prix6sesionesPesos" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Precio para 6 sesiones (en Pesos Ar $)') }}</label>
           
                <input id="prix6sesionesPesos" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('prix6sesionesPesos') bg-red-dark @enderror" name="prix6sesionesPesos" value="{{ $programme->prix6sesionesPesos }}" required autocomplete="prix6sesionesPesos" autofocus>

                @error('prix6sesionesPesos')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix12sesionesPesos" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Precio para 12 sesiones (en Pesos Ar $)') }}</label>
           
                <input id="prix12sesionesPesos" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('prix12sesionesPesos') bg-red-dark @enderror" name="prix12sesionesPesos" value="{{ $programme->prix12sesionesPesos }}" required autocomplete="prix12sesionesPesos" autofocus>

                @error('prix12sesionesPesos')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix6sesionesEuros" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Precio para 6 sesiones (en Euros)') }}</label>
           
                <input id="prix6sesionesEuros" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('prix6sesionesEuros') bg-red-dark @enderror" name="prix6sesionesEuros" value="{{ $programme->prix6sesionesEuros }}" required autocomplete="prix6sesionesEuros" autofocus>

                @error('prix6sesionesEuros')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix12sesionesEuros" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Precio para 12 sesiones (en Euros)') }}</label>
           
                <input id="prix12sesionesEuros" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('prix12sesionesEuros') bg-red-dark @enderror" name="prix12sesionesEuros" value="{{ $programme->prix12sesionesEuros }}" required autocomplete="prix12sesionesEuros" autofocus>

                @error('prix12sesionesEuros')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                    {{ __('Actualizar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
