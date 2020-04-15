@extends('layouts.app')

@section('content')
    
    <div class="px-4 container">

        @foreach($programmes as $programme)

        <h1 class="no-underline not-italic font-semibold text-3xl text-julien-gris text-center uppercase my-4">
                Programa </br>
        </h1>
        <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}" class="no-underline">
        <h2 class="uppercase not-italic font-semibold text-2xl text-center text-julien-gris tracking-loose my-4">
                {{ $programme->title }}

        </h2>  
        </a>

        <div class="w-full mx-auto flex flex-col md:flex-row items-center px-8" >

        <!--Left Col style="background-image: url(/img/programas/)"-->
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-2 pl-2 pb-24 m-4">

                

                <p class="leading-normal uppercase text-xl text-gray-600 mb-4">{{ $programme->descriptionGlobale }}</p>

                {{-- <p class="leading-normal uppercase text-sm text-gray-600 mb-4 mx-auto">
                        6 sesiones: {{ $programme->prix6sesionesPesos }} $ / {{ $programme->prix6sesionesEuros }} Euros
                </p>
                <p class="leading-normal uppercase text-sm text-gray-600 mb-4 mx-auto">
                        12 sesiones: {{ $programme->prix12sesionesPesos }} $ / {{ $programme->prix12sesionesEuros }} Euros 
                </p> --}}
                
                <a href="{{ route('contact.index')}}"><button class="w-full bg-gray-600 hover:bg-teal-600 text-white font-semibold tracking-widest uppercase border-2 border-teal-500 hover:border-gray-600 rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-auto" type="button">Contactarme para recibir el programa</button></a>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-2 text-center">
                <!--Add your product image here-->
                <img src="{{ asset('storage/img/programas/'.$programme->image)}}" class="fill-current object-cover w-full mx-auto" alt="image"> {{--  --}}

                <div class="m-4">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}"><button class="w-full bg-gray-600 hover:bg-teal-600 text-white font-semibold tracking-widest uppercase border-2 border-teal-500 hover:border-gray-600 rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
            </div>
        </div>

       @endforeach 
    </div>
@endsection
