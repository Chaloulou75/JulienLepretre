@extends('layouts.app')

@section('content')
    
    <div class="mb-4 text-julien-gris">

        <h1 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8 ">
                {{ $programme->title }}
        </h1> 

        <div class="w-full md:w-3/4 mx-auto flex flex-col-reverse md:flex-row items-center justify-around text-justify mb-2" >

            <!--Left Col -->
            <div class="flex flex-col w-full h-full lg:w-1/2 mx-auto items-center">
                <iframe width="420" height="345" src="http://www.youtube.com/embed/{{$programme->lienYoutube}}" allowfullscreen>
                </iframe>            	
            </div>

            <!--Right Col-->
            <div class="w-full lg:w-1/2 md:py-2 text-center items-center">
                
                <div class="pt-4 md:mt-2 m-2">
                    <h2 class="font-black uppercase">
                    Programa
                    </h2>
                    <h2 class="uppercase not-italic font-bold tracking-loose mb-4">
                        {{ $programme->title }}
                    </h2>
                </div>

                <p class="whitespace-pre-line leading-normal uppercase font-medium mb-8 mx-auto px-8">
                    {{ $programme->descriptionCourte }}
                </p>

                <p class="leading-normal font-sm uppercase text-sm mb-4 mx-auto">
                         {{ $programme->prixPesos }} AR$ / {{ $programme->prixDollar }} US$
                </p>

                <p class="mb-12 mx-auto">
                  <i class="fas fa-film fa-fw fa-2x pl-1"></i>
                  <i class="fas fa-infinity fa-fw fa-2x pl-1"></i> 
                </p>
                
                
                <a href="{{ url($programme->lienTiendup) }}" class="mx-auto"><button class="bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-4 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Comprar</button></a>
                <p class="pt-1 text-xs">Pagarlo con MercadoPago o Paypal</p>

            </div>
        </div>
        
		<div class="w-full text-center mb-2">
        	<h2 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8">El programa</h2>
        </div>

        <div class="w-full md:w-5/6 mx-auto flex flex-col md:flex-row items-center justify-around text-justify mb-2">
            <div class="flex flex-col w-full h-full lg:w-1/2 px-2 my-4 mb-4">
                <p class="whitespace-pre-line leading-normal uppercase text-base text-justify items-center mx-auto px-4">{{$programme->descriptionComplete}}</p>
                <a href="{{url($programme->lienTiendup) }}" class="mx-auto"><button class=" bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-4 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Pedir Ahora</button></a>
            </div>

            <div class="w-full lg:w-1/2 md:py-2 text-center">

                <img src="{{ url($programme->imageurl)}}" class="fill-current object-cover w-full mx-auto" alt="image">
            </div>
        </div>

        <div class="w-full text-center mb-2">
            <h2 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8">Adentro del programa</h2>
        </div>    

    	<div class="w-full md:w-5/6 mx-auto flex flex-col-reverse md:flex-row items-center mb-4">

            <!--Left Col -->
            <div class="flex flex-col w-full lg:w-1/2 justify-center border border-white rounded-lg overflow-hidden items-start mb-4">

				<img src="{{ url($programme->image2url) }}" class="fill-current object-cover w-full mx-auto" alt="image">
            	                
            </div>

            <!--Right Col-->
            <div class="w-full lg:w-1/2 mx-auto text-center items-center mb-4">

                <div class="mx-auto my-4">
                    @foreach($programme->descriptions as $description)

                    <p class="mx-auto mb-8 leading-normal uppercase font-bold text-lg transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                        <i class="fas fa-check-square fa-lg fa-fw text-green-600 pl-1"></i>
                         {{ $description->phrase }}
                    </p>

                    @endforeach 

                </div>                

                <a href="{{url($programme->lienTiendup) }}" class="mx-auto"><button class="bg-julien-red text-white font-semibold tracking-widest uppercase border border-white rounded shadow hover:shadow-lg py-2 px-4 mx-auto transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Pedir Ahora</button></a>
            </div>
        </div>        

        @admin

            @include('layouts/progShowAdmin');

        @endadmin

    </div>
    <div class="w-full text-center">
        <h2 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8">Testimonios</h2>
    </div>
    <div class="w-full mx-auto flex flex-col md:flex-row flex-wrap items-stretch justify-around text-justify">

    @foreach($testimonios as $testimonio)

    <div class="w-full max-w-sm md:w-1/3 mx-auto my-4 rounded overflow-hidden shadow-lg animated bounceInUp">
      {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
      <img src="{{ url($testimonio->avatarurl) }}" class="fill-current object-cover w-40 h-40 rounded-full mx-auto p-2" alt="avatar">
      <div class="text-julien-gris px-6 py-4">
        <div class="font-bold text-xl text-center mb-2">{{$testimonio->name}}</div>
        <div class="text-base">
          <p>{{$testimonio->msg}}</p>
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
