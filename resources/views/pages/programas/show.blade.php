@extends('layouts.app')

@section('content')
    
    <div class="px-4 container">

    	<h1 class="font-bold text-3xl text-teal-700 text-center uppercase my-4">
                {{ $programme->title }}
        </h1>


        <div class="w-full m-auto flex flex-col md:flex-row items-center justify-around text-justify" >
        <!--Left Col style="background-image: url(/img/programas/)"-->

            <div class="flex flex-col w-full lg:w-1/2 justify-center items-center pt-2 pl-2 pb-4 m-2 mb-4">

            	<h2 class="uppercase font-semibold text-2xl text-gray-700 tracking-loose mb-4 mx-auto">¿PARA QUIEN ES EL PROGRAMA?</h2>

                <p class="leading-normal text-gray-600 mb-4 mx-auto">{{ $programme->descriptionGlobale }}</p>

                <p class="leading-normal font-semibold uppercase text-sm text-gray-600 mb-4 mx-auto">
                        6 sesiones : {{ $programme->prix6sesionesPesos }} $ / {{ $programme->prix6sesionesEuros }} Euros
                </p>
                <p class="leading-normal font-semibold uppercase text-sm text-gray-600 mb-4 mx-auto">
                        12 sesiones : {{ $programme->prix12sesionesPesos }} $ / {{ $programme->prix12sesionesEuros }} Euros 
                </p>
                
                <a href="{{route('contact.index')}}"><button class="w-full bg-gray-600 hover:bg-teal-600 text-white font-semibold tracking-widest uppercase border-2 border-teal-500 hover:border-gray-600 rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-auto" type="button">Contactarme para recibir el programa</button></a>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-2 p-2 text-center">
                <!--Add your product image here-->
                <img src="{{ asset($programme->image)}}" class="fill-current object-cover text-gray-900 w-full mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" alt="image">

            </div>
        </div>
		<div class="w-full lg:py-2 text-center text-justify mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
        	<h2 class="uppercase font-semibold text-2xl text-gray-700 tracking-loose my-4">¿QUÉ HAY ADENTRO DEL PROGRAMA?</h2>

			<p class="leading-normal uppercase text-xl text-gray-600 mb-2 pb-2">Cada día tendrás una sesión diferente, de entre 10 a 15 minutos de duración con 4 ejercicios. Las sesiones estan pensadas de manera entrar en calor, gradualmente, con ejercicios de movilidad, para luego seguir fortaleciendo tu cuerpo con ejercicios de trabajo muscular de baja intensidad para mejorar tu estabilidad.</p>

			<p class="leading-normal uppercase text-xl text-gray-600 pb-2">Al final de la sesión, se realizan movimientos menos intensos con el objetivo de relajar el cuerpo al mismo tiempo que trabajamos la movilidad.</p>

    	</div>

    	<div class="w-full mx-auto flex flex-col md:flex-row items-center px-8" >
        <!--Left Col style="background-image: url(/img/programas/)"-->

            <div class="flex flex-col w-full lg:w-1/2 justify-center border border-white rounded-lg overflow-hidden items-start pt-2 pl-2 pb-4 mb-4">

				<img src="{{ asset($programme->image2) }}" class="fill-current object-cover text-gray-900 w-full mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" alt="image">
            	                
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-2 lg:px-4 justify-between items-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">

                @foreach($programme->descriptions as $description)

                <p class="leading-normal uppercase font-bold text-lg mx-auto text-gray-800 mb-4">
                	<i class="fas fa-check-square fa-lg fa-fw text-green-600 pl-1"></i>
                	 {{ $description->phrase }}
                </p>

                @endforeach
            </div>
        </div>

        <img class="w-full" src="/img/muevemas1.jpg" alt="muevemas"> 
        <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component>
		

        <div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden shadow-lg my-4">
            <div>
               <form class="w-full bg-gray-100 border-2 border-white shadow-md rounded px-2 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('description.store', $slug) }}">
                @csrf
                <div class="mb-4">
                    <label for="phrase" class="block text-gray-700 text-sm font-bold tracking-wide mb-2">{{ __('Anadir una frase') }}</label>

                    <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"></textarea>

                    @error('phrase')
                        <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="mb-4">
                    <div class="block items-center justify-between">
                        <button type="submit" class="w-full bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                            {{ __('Anadir una descripcion') }} &raquo;
                        </button>
                    </div>
                    
                </div>
                </form> 
            </div>
        	
            <div>
                <a href="{{ route('programas.edit', ['slug' => $programme->slug ] ) }}">
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                            {{ __('Actualizar el programa') }} &raquo;
                </button>
                </a>

                <form method="POST" href="{{ route('programas.destroy', $programme->slug ) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="w-full bg-red-700 hover:bg-red-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-red-700 border-red-300 flex-auto py-2 px-4 m-2">
                                {{ __('Suprimir el programa') }} &raquo;
                    </button>
                </form>
            </div>
            
        </div>

    </div>
@endsection
