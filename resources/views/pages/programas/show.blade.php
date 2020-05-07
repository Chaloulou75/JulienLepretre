@extends('layouts.app')

@section('content')
    
    <div class="mb-4">

        {{-- titre --}}

        <h1 class="w-full font-black text-3xl text-center not-italic tracking-loose uppercase py-4 ">
                {{ $programme->title }} </br>
                <span class="text-lg">
                    <i class="fas fa-star fa-sm text-yellow-400 pl-1"></i>
                    <i class="fas fa-star fa-sm text-yellow-400 pl-1"></i>
                    <i class="fas fa-star fa-sm text-yellow-400 pl-1"></i>
                    <i class="fas fa-star fa-sm text-yellow-400 pl-1"></i>
                    <i class="fas fa-star fa-sm text-yellow-400 "></i>
                </span>               
                
        </h1> 

        {{-- premier block --}}

        <div class="w-full md:w-3/4 mx-auto flex flex-col-reverse md:flex-row items-center justify-around text-justify mb-2" >

            <!--Left Col youtube-->
            <div class="flex flex-col w-full h-full md:w-1/2 mx-auto items-center">
                <iframe class="w-full mx-auto" height="345" src="http://www.youtube.com/embed/{{$programme->lienYoutube}}" allowfullscreen>
                </iframe>            	
            </div>

            <!--Right Col-->
            <div class="w-full md:w-1/2 md:py-2 text-center not-italic {{-- items-center --}} mx-auto">
                
                <p class="whitespace-pre-line leading-normal md:mx-16 md:text-left font-medium mb-2 px-8">
                    {{ $programme->descriptionCourte }}
                </p>

                <div class="grid grid-cols-6 my-4">                 
                  <div class="col-span-3 md:col-span-1 md:col-start-2">
                        <i class="fas fa-film fa-lg fa-2x"></i>
                        <p class="text-xs"> Videos</p>
                  </div>
                  <div class="col-span-3 md:col-span-2">
                        <i class="fas fa-infinity fa-lg fa-2x"></i>
                        <p class="text-xs" >Lifetime access</p>
                  </div>
                </div>

                <div class="md:mx-16 md:text-left">
                    <h3 class="leading-normal font-bold uppercase text-lg not-italic mb-4 md:mx-16 md:text-left mx-auto px-8">
                         {{ floatval($programme->prixPesos) }} <span class="text-sm font-sm text-gray-600">AR$</span> / {{ floatval($programme->prixDollar) }} <span class="text-sm font-sm text-gray-600">US$</span>
                    </h3> 

                    <a href="{{ url($programme->lienTiendup) }}" class="mx-auto px-8"><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-8 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Comprar</button></a>
                    <p class="py-2 text-xs px-8">Pagarlo con MercadoPago o Paypal</p>
                </div>
                 
                

            </div>
        </div>


        {{-- Deuxieme block --}}

        <div class="w-full mx-auto flex flex-col md:flex-row items-center text-center mb-8">

            <div class="flex flex-col w-full lg:w-1/2 mx-auto my-4">

                <h2 class="w-full font-black text-3xl uppercase tracking-widest my-2 md:mx-16 md:text-left">El programa</h2>

                <p class="whitespace-pre-wrap leading-normal text-base not-italic my-4 md:mx-16 md:text-left items-center">{{$programme->descriptionComplete}}</p>
                
                <div class="md:mx-16 md:text-left my-4">
                    <a href="{{url($programme->lienTiendup) }}"><button class=" bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-8 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Pedir Ahora</button></a>
                </div>
            </div>

            <div class="w-full lg:w-1/2">

                <img src="{{ url($programme->imageurl)}}" class="fill-current object-cover w-full mx-auto" alt="image">
            </div>
        </div>

        {{-- 3eme block --}}
   
    	<div class="w-full mx-auto flex flex-col-reverse md:flex-row items-center text-center mb-4">

            <!--Left Col -->
            <div class="flex flex-col w-full lg:w-1/2 justify-center border border-white rounded-lg overflow-hidden mb-4">

				<img src="{{ url($programme->image2url) }}" class="fill-current object-cover w-full mx-auto" alt="image">
            	                
            </div>

            <!--Right Col-->
            <div class="w-full lg:w-1/2 text-center mx-auto mb-4">

                <div class="md:mx-16 md:text-left">

                    <h2 class="w-full font-black text-3xl tracking-widest uppercase py-2">Adentro del programa</h2>

                    @foreach($programme->descriptions as $description)

                    <p class="my-8 leading-normal font-bold text-lg not-italic transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <i class="fas fa-check fa-lg text-blue-800 pl-1"></i>
                         {{ $description->phrase }}
                    </p>

                    @endforeach 

                </div>

                <div class="md:mx-16 md:text-left">
                    <a href="{{url($programme->lienTiendup) }}" ><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-8 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Pedir Ahora</button></a>
                </div>                

                
            </div>
        </div>        

        @admin

            @include('layouts/progShowAdmin');

        @endadmin

    </div>

    {{-- Testimonios block --}}

    <div class="w-full text-center">
        <h2 class="w-full font-black text-3xl text-center uppercase py-8">Testimonios</h2>
    </div>
    
    <div class="w-full mx-auto flex flex-col md:flex-row flex-wrap items-stretch justify-around">

    @foreach($testimonios as $testimonio)

    <div class="w-full max-w-sm md:w-1/3 mx-auto my-4 rounded overflow-hidden shadow-lg animated bounceInUp">
      {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
      <img src="{{ url($testimonio->avatarurl) }}" class="fill-current object-cover w-40 h-40 rounded-full mx-auto p-2" alt="avatar">
      <div class="{{-- text-julien-gris --}} px-6 py-4">
        <div class="font-bold text-xl text-center mb-2">{{$testimonio->name}}</div>
        <div class="text-base not-italic text-left">
          <p class="whitespace-pre-wrap">{{$testimonio->msg}}</p>
        </div>
      </div>

      @admin

      <div class="flex justify-between px-6 py-4">
        <a class="inline-block text-xs text-julien-red not-italic" href="{{ action('TestimoniosController@edit', $testimonio) }}">Editar</a>
        <form method="POST" action="{{ action('TestimoniosController@destroy', $testimonio) }}"> 
            @csrf 
            @method('DELETE')
        <button class="inline-block text-xs text-julien-red" >Suprimir</button>
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
