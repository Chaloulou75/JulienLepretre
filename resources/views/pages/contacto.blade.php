@extends('layouts.app')

@section('content')

<div class="w-full bg-julien-gris mb-4">

    <h1 class="w-full font-black text-2xl md:text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-4 ">
        PIDE TU PLAN DE ENTRENAMIENTO EN CASA
    </h1>


    <div class="w-full max-w-xs lg:max-w-xl lg:w-4/5 m-auto animated bounceInUp">   

    <form class="bg-gray-100 border-2 border-white shadow-md rounded text-julien-gris uppercase px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('contact.store') }}">
        @csrf

        <div class="mb-4">
            <label for="apellidos" class="block text-sm font-bold tracking-wide mb-2">{{ __('Apellidos') }}</label>

            <input id="apellidos" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('apellidos') bg-red-dark @enderror" name="apellidos" value="{{ old('apellidos') }}" required autocomplete="apellidos">

            @error('apellidos')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="nombre" class="block text-sm font-bold tracking-wide mb-2">{{ __('Nombre') }}</label>

            <input id="nombre" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('nombre') bg-red-dark @enderror" name="nombre" value="{{ old('nombre') }}" required autocomplete="nombre">

            @error('nombre')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-bold tracking-wide mb-2">{{ __('E-Mail') }}</label>
           
                <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('email') bg-red-dark @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                @error('email')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="birthdate" class="block text-sm font-bold tracking-wide mb-2" >Fecha de nacimiento:</label>

            <input class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline" 
                   type="date" id="birthdate"
                   name="birthdate" value="">
        </div>

        <div class="mb-4">
            <label for="trabajo" class="block text-sm font-bold tracking-wide mb-2">{{ __('Trabajo') }}</label>

            <input id="trabajo" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('trabajo') bg-red-dark @enderror" name="trabajo" value="{{ old('trabajo') }}" required autocomplete="trabajo">

            @error('trabajo')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="deportes" class="block text-sm font-bold tracking-wide mb-2">{{ __('Deportes') }}</label>

            <input id="deportes" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('deportes') bg-red-dark @enderror" name="deportes" value="{{ old('deportes') }}" required autocomplete="deportes">

            @error('deportes')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">

            <fieldset>
            <legend class="block text-sm font-bold tracking-wide mb-2">Objetivos (Elegí 2)</legend>
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
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="msg" class="block text-sm font-bold tracking-wide mb-2">{{ __('Molestias en tu cuerpo:') }}</label>
           
                <textarea id="msg" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 h-24 lg:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('msg') bg-red-dark @enderror" name="msg" value="{{ old('msg') }}" required autocomplete="msg"></textarea>

                @error('msg')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>  

        <div class="mb-4">
            <label for="altura" class="block text-sm font-bold tracking-wide mb-2">{{ __('Tu altura (en cm)') }}</label>

            <input id="altura" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('altura') bg-red-dark @enderror" name="altura" value="{{ old('altura') }}" required autocomplete="altura">

            @error('altura')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="peso" class="block text-sm font-bold tracking-wide mb-2">{{ __('Tu peso (en kg)') }}</label>

            <input id="peso" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('peso') bg-red-dark @enderror" name="peso" value="{{ old('peso') }}" required autocomplete="peso">

            @error('peso')
                <span class="mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="forma" class="block text-sm font-bold tracking-wide mb-2">{{ __('Tu nivel de forma fisica ') }}</label>

            <p class="font-thin">De 1 a 10 : </br>
            1 = si me siento en el piso, tengo problema al levantarme. </br>
            5 = De vez en cuando, entreno hasta sudar. </br>
            10 = Me encanta el fitness, entreno todos los días. </p>  

            <input id="forma" type="number" min="1" max="10" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('forma') bg-red-dark @enderror" name="forma" value="{{ old('forma') }}" required autocomplete="forma">

            @error('forma')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>  

        <div class="mb-4">
            <label for="phone" class="block text-sm font-bold tracking-wide mb-2">{{ __('TU NUMERO DE TELEFONO') }}</label>

            <input id="phone" type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('phone') bg-red-dark @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

            <p class="font-semibold mt-1">* para contactarnos en Whatsapp.</p> 

            @error('phone')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>  

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-julien-gris hover:bg-julien-red text-white font-semibold text-center tracking-widest uppercase border-2 rounded hover:border-julien-red border-white flex-auto py-2 px-4 m-2">
                    {{ __('Enviar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
    </div>

</div>

{{-- @include('layouts.map') --}}

@endsection
