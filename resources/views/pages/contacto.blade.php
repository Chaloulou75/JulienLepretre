@extends('layouts.app')

@section('content')

<div class="w-full py-4 mb-4">

    <h1 class="w-full py-4 text-2xl font-black text-center uppercase md:text-3xl border-b-1 ">
        Pedí una consulta privada
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

    <div class="flex flex-col-reverse items-start w-full h-auto mx-auto md:flex-row md:mb-8">

        <div class="w-full md:w-2/3 {{-- max-w-xs --}} md:max-w-xl text-left mx-auto px-2 animated bounceInUp">
            {{-- <div class="w-full max-w-xs m-auto lg:max-w-xl animated bounceInUp">  --}}

            <form class="px-8 pt-6 pb-8 mb-4 uppercase bg-gray-100 border-2 border-white rounded shadow-md"
                method="POST" action="{{ route('contact.store') }}">
                @csrf

                <div class="mb-4">
                    <label for="apellidos"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Apellidos') }}</label>

                    <input id="apellidos" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('apellidos') bg-red-dark @enderror" name="apellidos" value="{{ old('apellidos') }}" required
                        autocomplete="apellidos">

                    @error('apellidos')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="nombre" class="block mb-2 text-sm font-bold tracking-wide">{{ __('Nombre') }}</label>

                    <input id="nombre" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('nombre') bg-red-dark @enderror" name="nombre" value="{{ old('nombre') }}" required
                        autocomplete="nombre">

                    @error('nombre')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-bold tracking-wide">{{ __('E-Mail') }}</label>

                    <input id="email" type="email"
                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('email') bg-red-dark @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="birthdate" class="block mb-2 text-sm font-bold tracking-wide">Fecha de
                        nacimiento:</label>

                    <input
                        class="w-full px-3 py-2 leading-loose border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
                        type="date" id="birthdate" name="birthdate" value="">
                </div>

                <div class="mb-4">
                    <label for="msg"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Molestias en tu cuerpo:') }}</label>

                    <textarea id="msg" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-32 md:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('msg') bg-red-dark @enderror"
                        name="msg" value="{{ old('msg') }}" autocomplete="msg">{{ old('msg') }}</textarea>

                    @error('msg')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="problema"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Cual es tu problema?') }}</label>

                    <textarea id="problema" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-32 md:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('problema') bg-red-dark @enderror"
                        name="problema" value="{{ old('problema') }}"
                        autocomplete="problema">{{ old('problema') }}</textarea>

                    @error('problema')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="alivia"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Movimiento que alivia:') }}</label>

                    <textarea id="alivia" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-32 md:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('alivia') bg-red-dark @enderror"
                        name="alivia" value="{{ old('alivia') }}" autocomplete="alivia">{{ old('alivia') }}</textarea>

                    @error('alivia')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>


                <div class="mb-4">
                    <label for="antecedentes"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Antecedentes: (operaciones/ traumatismos/ patología)') }}</label>

                    <textarea id="antecedentes" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-32 md:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('antecedentes') bg-red-dark @enderror"
                        name="antecedentes" value="{{ old('antecedentes') }}"
                        autocomplete="antecedentes">{{ old('antecedentes') }}</textarea>

                    @error('antecedentes')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="objetivos"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Tu objetivo') }}</label>

                    <textarea id="objetivos" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 h-32 md:h-40 resize leading-loose focus:outline-none focus:shadow-outline @error('objetivos') bg-red-dark @enderror"
                        name="objetivos" value="{{ old('objetivos') }}"
                        autocomplete="objetivos">{{ old('objetivos') }}</textarea>

                    @error('objetivos')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="altura"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Tu altura (en cm)') }}</label>

                    <input id="altura" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('altura') bg-red-dark @enderror" name="altura" value="{{ old('altura') }}" required
                        autocomplete="altura">

                    @error('altura')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="peso"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Tu peso (en kg)') }}</label>

                    <input id="peso" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('peso') bg-red-dark @enderror" name="peso" value="{{ old('peso') }}" required
                        autocomplete="peso">

                    @error('peso')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="forma"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Tu nivel de forma fisica ') }}</label>

                    <p class="font-thin">De 1 a 10 : </br>
                        1 = si me siento en el piso, tengo problema al levantarme. </br>
                        5 = De vez en cuando, entreno hasta sudar. </br>
                        10 = Me encanta el fitness, entreno todos los días. </p>

                    <input id="forma" type="number" min="1" max="10" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('forma') bg-red-dark @enderror" name="forma" value="{{ old('forma') }}" required
                        autocomplete="forma">

                    @error('forma')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="phone"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('TU NUMERO DE TELEFONO*') }}</label>

                    <input id="phone" type="tel" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
                 @error('phone') bg-red-dark @enderror" name="phone" value="{{ old('phone') }}" required
                        autocomplete="phone">

                    <p class="mt-1 font-semibold">* para contactarnos en Whatsapp.</p>

                    @error('phone')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="trabajo" class="block mb-2 text-sm font-bold tracking-wide">{{ __('Trabajo') }}</label>

                    <input id="trabajo" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('trabajo') bg-red-dark @enderror"
                        name="trabajo" value="{{ old('trabajo') }}" autocomplete="trabajo">

                    @error('trabajo')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <label for="deportes"
                        class="block mb-2 text-sm font-bold tracking-wide">{{ __('Deportes') }}</label>

                    <input id="deportes" type="text"
                        class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('deportes') bg-red-dark @enderror"
                        name="deportes" value="{{ old('deportes') }}" autocomplete="deportes">

                    @error('deportes')
                    <span class="mt-1 text-sm lowercase text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="mb-4">
                    <div class="items-center justify-between block">
                        <button type="submit"
                            class="flex-auto w-full px-4 py-2 m-2 font-semibold tracking-widest text-center text-white uppercase border-2 border-white rounded bg-julien-gris hover:bg-julien-red hover:border-julien-red">
                            {{ __('Enviar') }} &raquo;
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <div class="w-full px-2 pb-4 mx-auto text-center md:w-1/3">

            <div class="my-4 md:ml-2 md:text-left">
                <h2 class="text-base not-italic leading-relaxed uppercase md:text-xl">
                    Consulta privada por videollamada whatsapp + rutina personalizada
                </h2>
            </div>

            <h3 class="py-2 text-lg not-italic font-bold leading-normal uppercase md:text-left md:ml-2 ">
                22 <span class="text-sm text-gray-600 font-sm">US$</span> / 1500 <span
                    class="text-sm text-gray-600 font-sm">AR$</span>
            </h3>
            <p class="not-italic md:text-left md:ml-2">
                El pago se realizará por Paypal o Mercado Pago después de la consulta.
            </p>

        </div>

    </div>

</div>

@endsection


{{-- <fieldset>
    <legend class="block mb-2 text-sm font-bold tracking-wide">Objetivos (Elegí 2)</legend>
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
        <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
            <strong>{{ $message }}</strong>
</span>
@enderror

</div> --}}
