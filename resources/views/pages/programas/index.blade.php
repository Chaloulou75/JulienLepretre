@extends('layouts.app')

@section('content')
    
    <div class="px-4 container">

        @foreach($programmes as $programme)
        <h1 class="font-bold text-3xl text-teal-700 text-center uppercase my-4">{{ $programme->title }}</h1>

        <div class="w-full mx-auto flex flex-col md:flex-row items-center px-8" >

        <!--Left Col style="background-image: url(/img/programas/)"-->
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-2 pl-2 pb-24 m-4">

                <h2 class="uppercase font-semibold text-2xl text-gray-700 tracking-loose my-4">¿PARA QUIEN ES EL PROGRAMA?</h2>

                <p class="leading-normal uppercase text-xl text-gray-600 mb-4">{{ $programme->descriptionGlobale }}</p>

                @foreach($programme->descriptions as $description)
                        
                    <p class="leading-normal uppercase text-xl text-gray-600 mb-4">
                        {{ $description }} </br>
                    </p>
                @endforeach

                <p class="leading-normal uppercase text-sm text-gray-600 mb-4">
                        6 sesiones: {{ $programme->prix6sesionesPesos }} $ / {{ $programme->prix6sesionesEuros }} Euros
                </p>
                <p class="leading-normal uppercase text-sm text-gray-600 mb-4">
                        12 sesiones: {{ $programme->prix12sesionesPesos }} $ / {{ $programme->prix12sesionesEuros }} Euros 
                </p>
                
                <a href="{{route('contact.index')}}"><button class="w-full bg-gray-600 hover:bg-teal-600 text-white font-semibold tracking-widest uppercase border-2 border-teal-500 hover:border-gray-600 rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Contactarme para recibir el programa</button></a>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-2 text-center">
                <!--Add your product image here-->
                <img src="/img/programas/{{ $programme->prog_image }}" class="fill-current text-gray-900 w-full mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" alt="prog_image">

                <div class="m-4">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}"><button class="w-full bg-gray-600 hover:bg-teal-600 text-white font-semibold tracking-widest uppercase border-2 border-teal-500 hover:border-gray-600 rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Saber mas</button></a>
                </div>
            </div>
        </div>

       @endforeach 
    </div>
@endsection
