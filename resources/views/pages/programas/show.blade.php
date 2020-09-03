@extends('layouts.app')

@section('content')

<div class="mb-4">

    {{-- titre --}}

    <h1 class="w-full py-4 text-3xl not-italic font-black text-center uppercase tracking-loose ">
        {{ $programme->title }} </br>
        <span class="text-lg">
            <i class="pl-1 text-yellow-400 fas fa-star fa-sm"></i>
            <i class="pl-1 text-yellow-400 fas fa-star fa-sm"></i>
            <i class="pl-1 text-yellow-400 fas fa-star fa-sm"></i>
            <i class="pl-1 text-yellow-400 fas fa-star fa-sm"></i>
            <i class="text-yellow-400 fas fa-star fa-sm "></i>
        </span>
    </h1>

    {{-- premier block --}}

    <div
        class="flex flex-col-reverse items-center justify-around w-full mx-auto mb-2 text-justify md:w-3/4 md:flex-row">

        <!--Left Col youtube-->
        <div class="flex flex-col items-center w-full h-full mx-auto md:w-1/2">
            <iframe class="w-full mx-auto" height="345" src="https://www.youtube.com/embed/{{$programme->lienYoutube}}"
                loading="auto" allowfullscreen>
            </iframe>
        </div>

        <!--Right Col-->
        <div class="w-full md:w-1/2 md:py-2 text-center not-italic {{-- items-center --}} mx-auto">

            <p class="px-8 mb-2 font-medium leading-normal whitespace-pre-line md:mx-16 md:text-left">
                {{ $programme->descriptionCourte }}
            </p>

            <div class="grid grid-cols-6 my-4">
                <div class="col-span-3 md:col-span-1 md:col-start-2">
                    <i class="fas fa-film fa-lg fa-2x"></i>
                    <p class="text-xs"> Videos</p>
                </div>
                <div class="col-span-3 md:col-span-2">
                    <i class="fas fa-infinity fa-lg fa-2x"></i>
                    <p class="text-xs">Lifetime access</p>
                </div>
            </div>

            <div class="md:mx-16 md:text-left">
                <h3
                    class="px-8 mx-auto mb-4 text-lg not-italic font-bold leading-normal uppercase md:mx-16 md:text-left">
                    {{ floatval($programme->prixPesos) }} <span class="text-sm text-gray-600 font-sm">AR$</span> /
                    {{ floatval($programme->prixDollar) }} <span class="text-sm text-gray-600 font-sm">US$</span>
                </h3>

                <a href="{{ url($programme->lienTiendup) }}" class="px-8 mx-auto"><button
                        class="px-8 py-2 mx-auto font-semibold tracking-widest text-white uppercase transition duration-500 ease-in-out transform border border-white rounded shadow bg-julien-gris hover:bg-julien-red hover:shadow-lg hover:-translate-y-1 hover:scale-110"
                        type="button">Comprar</button></a>
                <p class="px-8 py-2 text-xs">Pagarlo con MercadoPago o Paypal</p>
            </div>



        </div>
    </div>


    {{-- Deuxieme block --}}

    <div class="flex flex-col items-center w-full mx-auto mb-8 text-center md:flex-row">

        <div class="flex flex-col w-full mx-auto my-4 lg:w-1/2">

            <h2 class="w-full my-2 text-3xl font-black tracking-widest uppercase md:mx-16 md:text-left">El programa</h2>

            <p class="items-center my-4 text-base not-italic leading-normal whitespace-pre-wrap md:mx-16 md:text-left">
                {{$programme->descriptionComplete}}</p>

            <div class="my-4 md:mx-16 md:text-left">
                <a href="{{url($programme->lienTiendup) }}"><button
                        class="px-8 py-2 mx-auto font-semibold tracking-widest text-white uppercase transition duration-500 ease-in-out transform border border-white rounded shadow  bg-julien-gris hover:bg-julien-red hover:shadow-lg hover:-translate-y-1 hover:scale-110"
                        type="button">Pedir Ahora</button></a>
            </div>
        </div>

        <div class="w-full lg:w-1/2">

            <img src="{{ url($programme->imageurl)}}" loading="auto" class="object-cover w-full mx-auto fill-current"
                alt="image">
        </div>
    </div>

    {{-- 3eme block --}}

    <div class="flex flex-col-reverse items-center w-full mx-auto mb-4 text-center md:flex-row">

        <!--Left Col -->
        <div class="flex flex-col justify-center w-full mb-4 overflow-hidden border border-white rounded-lg lg:w-1/2">

            <img src="{{ url($programme->image2url) }}" loading="auto" class="object-cover w-full mx-auto fill-current"
                alt="image">

        </div>

        <!--Right Col-->
        <div class="w-full mx-auto mb-4 text-center lg:w-1/2">

            <div class="md:mx-16 md:text-left">

                <h2 class="w-full py-2 text-3xl font-black tracking-widest uppercase">Adentro del programa</h2>

                @foreach($programme->descriptions as $description)

                <p
                    class="my-8 text-lg not-italic font-bold leading-normal transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <i class="pl-1 text-blue-800 fas fa-check fa-lg"></i>
                    {{ $description->phrase }}
                </p>

                @endforeach

            </div>

            <div class="md:mx-16 md:text-left">
                <a href="{{url($programme->lienTiendup) }}"><button
                        class="px-8 py-2 mx-auto font-semibold tracking-widest text-white uppercase transition duration-500 ease-in-out transform border border-white rounded shadow bg-julien-gris hover:bg-julien-red hover:shadow-lg hover:-translate-y-1 hover:scale-110"
                        type="button">Pedir Ahora</button></a>
            </div>


        </div>
    </div>

    @admin

    @include('layouts/progShowAdmin');

    @endadmin

</div>

{{-- Testimonios block --}}

<div class="w-full text-center">
    <h2 class="w-full py-8 text-3xl font-black text-center uppercase">Testimonios</h2>
</div>

<div class="flex flex-col flex-wrap items-stretch justify-around w-full mx-auto md:flex-row">

    @foreach($testimonios as $testimonio)

    <div class="w-full max-w-sm mx-auto my-4 overflow-hidden rounded shadow-lg md:w-1/3 animated bounceInUp">
        {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
        <img src="{{ url($testimonio->avatarurl) }}" loading="auto"
            class="object-cover w-40 h-40 p-2 mx-auto rounded-full fill-current" alt="avatar">
        <div class="{{-- text-julien-gris --}} px-6 py-4">
            <div class="mb-2 text-xl font-bold text-center">{{$testimonio->name}}</div>
            <div class="text-base not-italic text-left">
                <p class="whitespace-pre-wrap">{{$testimonio->msg}}</p>
            </div>
        </div>

        @admin

        <div class="flex justify-between px-6 py-4">
            <a class="inline-block text-xs not-italic text-julien-red"
                href="{{ action('TestimoniosController@edit', $testimonio) }}">Editar</a>
            <form method="POST" action="{{ action('TestimoniosController@destroy', $testimonio) }}">
                @csrf
                @method('DELETE')
                <button class="inline-block text-xs text-julien-red">Suprimir</button>
            </form>
        </div>

        @endadmin

    </div>

    @endforeach


    @endsection


    {{-- <img class="w-full mb-2" src="/img/muevemas1.jpg" alt="muevemas">  --}}
    {{-- <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component> --}}

    {{-- <div class="flex flex-wrap mb-2">
            @include('layouts/card6');
            @include('layouts/card12');
        </div> --}}
