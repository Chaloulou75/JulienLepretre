@extends('layouts.app')

@section('content')
    
    <div>

        <h1 class="w-full font-black text-3xl text-center uppercase py-8 ">
                Los Programas
        </h1>  

        @foreach($programmes as $programme)

        <div class="w-5/6 md:w-2/3 mx-auto flex flex-col md:flex-row items-center border-2 border-julien-gris p-4 my-8 animated bounceInUp">

            <!--Left Col-->
            <div class="w-full md:w-1/3 items-center mx-auto ">
                <!--Add your product image here-->
                 <img src="{{ url($programme->photoProgUrl) }}" class="fill-current mx-auto" alt="image">
            </div>
        
            <!--Right Col-->
            <div class="w-full md:w-2/3 text-center items-center mx-auto px-4">
                
                <div class="pt-4 md:mt-2">
                    <h3 class="uppercase not-italic font-semibold tracking-loose md:mx-16 md:text-left">
                        Programa </br>
                    
                        {{ $programme->title }}
                    </h3>

                    <p class="py-2 mb-2 md:mx-16 md:text-left">
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                    </p>
                </div>                

                <div class="items-center text-base font-medium not-italic md:mx-16 md:text-left mb-8">
                    <p class="whitespace-pre-line mx-auto leading-relaxed">{{ $programme->descriptionCourte }}</p>

                    <h3 class="leading-normal font-bold uppercase text-lg mx-auto">
                         {{ floatval($programme->prixPesos) }} <span class="text-sm font-sm text-gray-600">AR$</span> / {{ floatval($programme->prixDollar) }} <span class="text-sm font-sm text-gray-600">US$</span>
                    </h3>
                    
                </div>
                <div class="mb-4 md:mb-2 md:mx-16 md:text-left">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}" {{-- {{ url($programme->lien) }} target="_blank"--}}><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-8 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
                
            </div>      
        </div>

        
        @endforeach 
    </div>
@endsection




