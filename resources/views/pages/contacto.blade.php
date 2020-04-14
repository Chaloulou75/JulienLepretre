@extends('layouts.app')

@section('content')

<div class="w-full bg-julien-gris pb-24">

    <div class="text-white text-center font-semibold uppercase tracking-wide text-base px-8 py-4">

            <h1>PIDE TU PLAN DE ENTRENAMIENTO EN CASA</h1>
    </div>

    <div class="w-full max-w-xs lg:max-w-xl lg:w-4/5 m-auto p-auto pt-8">   

    <form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('contact.store') }}">
        @csrf

        <div class="mb-4">
            <label for="apellidos" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Apellidos') }}</label>

            <input id="apellidos" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('apellidos') bg-red-dark @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

            @error('apellidos')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Nombre') }}</label>

            <input id="nombre" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('nombre') bg-red-dark @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

            @error('nombre')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('E-Mail') }}</label>
           
                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('email') bg-red-dark @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="birthdate" class="block text-gray-700 text-sm font-bold tracking-wide mb-2" >Fecha de nacimiento:</label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline" 
                   type="date" id="birthdate"
                   name="birthdate" value="">
        </div>

        <div class="mb-4">
            <label for="trabajo" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Trabajo') }}</label>

            <input id="trabajo" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('trabajo') bg-red-dark @enderror" name="trabajo" value="{{ old('trabajo') }}" required autocomplete="trabajo" autofocus>

            @error('trabajo')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="deportes" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Deportes') }}</label>

            <input id="deportes" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('deportes') bg-red-dark @enderror" name="deportes" value="{{ old('deportes') }}" required autocomplete="deportes" autofocus>

            @error('deportes')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">

            <fieldset>
            <legend class="block text-gray-700 text-sm font-bold tracking-wide mb-2">Objetivos (Elegí 2)</legend>
                <div>
                  <input type="checkbox" id="grasa" name="objetivos[]" value="Quemar grasa">
                  <label for="grasa">Quemar grasa</label>
                </div>
                <div>
                  <input type="checkbox" id="resistencia" name="objetivos[]" value="Mejorar mi resistencia">
                  <label for="resistencia">Mejorar mi resistencia</label>
                </div>
                <div>
                  <input type="checkbox" id="recuperar" name="objetivos[]" value="Recuperar de una lésion">
                  <label for="recuperar">Recuperar de una lésion</label>
                </div>
                <div>
                  <input type="checkbox" id="musculatura" name="objetivos[]" value="Ganar musculatura">
                  <label for="musculatura">Ganar musculatura</label>
                </div>
                <div>
                  <input type="checkbox" id="movilidad" name="objetivos[]" value="Mejorar mi movilidad">
                  <label for="movilidad">Mejorar mi movilidad</label>
                </div>
                <div>
                  <input type="checkbox" id="other" name="objetivos[]" value="otro">
                  <label for="other">Otro</label>
                </div>
            </fieldset>

            @error('objetivos')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="msg" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Molestias en tu cuerpo:') }}</label>
           
                <textarea id="msg" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 h-24 lg:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('msg') bg-red-dark @enderror" name="msg" value="{{ old('msg') }}" required autocomplete="msg" autofocus></textarea>

                @error('msg')
                    <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>  

        <div class="mb-4">
            <label for="altura" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu altura (en cm)') }}</label>

            <input id="altura" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('altura') bg-red-dark @enderror" name="altura" value="{{ old('altura') }}" required autocomplete="altura" autofocus>

            @error('altura')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="peso" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu peso (en kg)') }}</label>

            <input id="peso" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('peso') bg-red-dark @enderror" name="peso" value="{{ old('peso') }}" required autocomplete="peso" autofocus>

            @error('peso')
                <span class="mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="forma" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Tu nivel de forma fisica ') }}</label>

            <p class="font-thin">De 1 a 10 : </br>
            1 = si me siento en el piso, tengo problema al levantarme. </br>
            5 = De vez en cuando, entreno hasta sudar. </br>
            10 = Me encanta el fitness, entreno todos los días. </p>  

            <input id="forma" type="number" min="1" max="10" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('forma') bg-red-dark @enderror" name="forma" value="{{ old('forma') }}" required autocomplete="forma" autofocus>

            @error('forma')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>  

        <div class="mb-4">
            <label for="phone" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('TU NUMERO DE TELEFONO') }}</label>

            <input id="phone" type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline
             @error('phone') bg-red-dark @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

            <p class="text-gray-700 font-semibold mt-1">* para contactarnos en Whatsapp.</p> 

            @error('phone')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>  

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                    {{ __('Enviar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
    </div>

</div>

{{-- @include('layouts.map') --}}

@endsection
