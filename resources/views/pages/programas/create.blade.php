@extends('layouts.app')

@section('content')

<div class="bg-gray-100 text-julien-gris not-italic text-center font-semibold uppercase tracking-wide text-base px-8 py-4">

        <h1>Crear tu programa</h1>
</div>

<div class="w-full max-w-xs lg:max-w-xl m-auto p-auto text-julien-gris pt-8 animated bounceInUp"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('programas.store') }}">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Titre du programme') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

            @error('title')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="descriptionGlobale" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Description Globale') }}</label>

            <textarea id="descriptionGlobale" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('descriptionGlobale') bg-red-dark @enderror" name="descriptionGlobale" value="{{ old('descriptionGlobale') }}" required autocomplete="descriptionGlobale"></textarea>

            @error('descriptionGlobale')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Image du programme') }}</label>

            <input id="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image') bg-red-dark @enderror" name="image" value="" required autocomplete="image">

            @error('image')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image2" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Deuxième Image du programme') }}</label>

            <input id="image2" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image2') bg-red-dark @enderror" name="image2" value="" required autocomplete="image2">

            @error('image2')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>         

        <div class="mb-4">
            <label for="prix6sesionesPesos" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio para 6 sesiones (en Pesos Ar $)') }}</label>
           
                <input id="prix6sesionesPesos" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prix6sesionesPesos') bg-red-dark @enderror" name="prix6sesionesPesos" value="{{ old('prix6sesionesPesos') }}" required autocomplete="prix6sesionesPesos">

                @error('prix6sesionesPesos')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix12sesionesPesos" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio para 12 sesiones (en Pesos Ar $)') }}</label>
           
                <input id="prix12sesionesPesos" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prix12sesionesPesos') bg-red-dark @enderror" name="prix12sesionesPesos" value="{{ old('prix12sesionesPesos') }}" required autocomplete="prix12sesionesPesos">

                @error('prix12sesionesPesos')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix6sesionesEuros" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio para 6 sesiones (en Euros)') }}</label>
           
                <input id="prix6sesionesEuros" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prix6sesionesEuros') bg-red-dark @enderror" name="prix6sesionesEuros" value="{{ old('prix6sesionesEuros') }}" required autocomplete="prix6sesionesEuros">

                @error('prix6sesionesEuros')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prix12sesionesEuros" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio para 12 sesiones (en Euros)') }}</label>
           
                <input id="prix12sesionesEuros" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prix12sesionesEuros') bg-red-dark @enderror" name="prix12sesionesEuros" value="{{ old('prix12sesionesEuros') }}" required autocomplete="prix12sesionesEuros">

                @error('prix12sesionesEuros')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-gray-100 hover:bg-julien-red font-semibold text-center tracking-wide border-2 rounded hover:border-white hover:text-white border-julien-red shadow flex-auto py-2 px-4">
                    {{ __('Registrar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
