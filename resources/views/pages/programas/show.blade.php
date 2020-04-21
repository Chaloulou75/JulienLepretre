@extends('layouts.app')

@section('content')
    
    <div class="my-4 text-julien-gris">

    	{{-- <h1 class="font-bold text-3xl text-teal-700 text-center uppercase my-4">
                {{ $programme->title }}
        </h1> --}}


        <div class="w-full m-auto flex flex-col-reverse md:flex-row items-center justify-around text-justify" >
        <!--Left Col style="background-image: url(/img/programas/)"-->

            <div class="flex flex-col w-full h-full lg:w-1/2 px-2 my-4 mb-4">

            	<h2 class="uppercase font-base not-italic text-julien-red text-3xl tracking-loose mx-auto mb-16">{{ $programme->title }}</h2>

                <p class="leading-normal uppercase font-base mb-12 mx-auto px-8">{{ $programme->descriptionGlobale }}</p>

                <p class="leading-normal font-sm uppercase text-sm mb-4 mx-auto">
                        6 sesiones : {{ $programme->prix6sesionesPesos }} $ / {{ $programme->prix6sesionesEuros }} €
                </p>
                <p class="leading-normal font-sm uppercase text-sm mb-12 mx-auto">
                        12 sesiones : {{ $programme->prix12sesionesPesos }} $ / {{ $programme->prix12sesionesEuros }} € 
                </p>
                
                <a href="{{route('contact.index')}}" class="mx-auto"><button class=" bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-4 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Contactarme para recibir el programa</button></a>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 md:py-2 text-center">
                <!--Add your product image here-->
                <img src="{{ url($programme->imageurl)}}" class="fill-current object-cover w-full mx-auto" alt="image">

            </div>
        </div>
		<div class="w-full md:py-2 px-4 md:px-2 text-center mx-auto">
        	<h2 class="uppercase font-semibold not-italic text-xl tracking-loose my-4">¿QUÉ HAY ADENTRO DEL PROGRAMA?</h2>

			<p class="leading-normal uppercase text-base text-justify mb-2 pb-2">Cada día tendrás una sesión diferente, de entre 10 a 15 minutos de duración con 4 ejercicios. Las sesiones estan pensadas de manera entrar en calor, gradualmente, con ejercicios de movilidad, para luego seguir fortaleciendo tu cuerpo con ejercicios de trabajo muscular de baja intensidad para mejorar tu estabilidad.</p>

			<p class="leading-normal uppercase text-base text-justify pb-2">Al final de la sesión, se realizan movimientos menos intensos con el objetivo de relajar el cuerpo al mismo tiempo que trabajamos la movilidad.</p>

    	</div>

    	<div class="w-full mx-auto flex flex-col md:flex-row items-center md:px-4" >
        <!--Left Col style="background-image: url(/img/programas/)"-->

            <div class="flex flex-col w-full lg:w-1/2 justify-center border border-white rounded-lg overflow-hidden items-start mb-4">

				<img src="{{ url($programme->image2url) }}" class="fill-current object-cover w-full mx-auto" alt="image">
            	                
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 md:py-2 md:px-24 {{-- justify-between items-center --}}">

                @foreach($programme->descriptions as $description)

                <p class="leading-normal uppercase font-bold text-lg mx-auto mb-8 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                	<i class="fas fa-check-square fa-lg fa-fw text-green-600 pl-1"></i>
                	 {{ $description->phrase }}
                </p>

                @endforeach
            </div>
        </div>

        <div class="flex flex-wrap mb-2">
           @include('layouts/card6');
            @include('layouts/card12'); 
        </div>

        

        {{-- <img class="w-full mb-2" src="/img/muevemas1.jpg" alt="muevemas">  --}}
        <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component>

        @admin

            @include('layouts/progShowAdmin');

        @endadmin

    </div>
@endsection
