@extends('layouts.app')

@section('content')
    
    <div>

        <h1 class="w-full font-black text-3xl text-center uppercase py-8 ">
                Los Programas
        </h1>  

        @foreach($programmes as $programme)

        <div class="w-5/6 md:w-2/3 mx-auto flex flex-col md:flex-row items-center border-2 border-julien-gris p-8 my-8 animated bounceInUp">

            <!--Left Col-->
            <div class="w-full md:w-1/3 items-center mx-auto ">
                <!--Add your product image here-->
                 <img src="{{ url($programme->photoProgUrl) }}" class="fill-current mx-auto" alt="image">
            </div>
        
            <!--Right Col-->
            <div class="w-full md:w-2/3 {{-- text-julien-gris --}} text-center items-center mx-auto px-4">
                
                <div class="pt-4 md:mt-2 m-2">
                    <h3 class="font-bold uppercase">
                    Programa
                    </h3>
                    <h3 class="uppercase not-italic font-semibold tracking-loose">
                        {{ $programme->title }}
                    </h3>

                    <p class="py-2 mx-auto text-center mb-2">
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                    </p>
                </div>                

                <div class="items-center text-base font-medium not-italic mb-8">
                    <p class="whitespace-pre-line py-2 mx-auto text-center">{{ $programme->descriptionCourte }}</p>

                    <h3 class="leading-normal font-bold uppercase text-lg mx-auto">
                         {{ floatval($programme->prixPesos) }} <span class="text-sm font-sm text-gray-600">AR$</span> / {{ floatval($programme->prixDollar) }} <span class="text-sm font-sm text-gray-600">US$</span>
                    </h3>
                    
                </div>
                <div class="mb-4 md:mb-2">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}" {{-- {{ url($programme->lien) }} target="_blank"--}}><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
                
            </div>      
        </div>

        
        @endforeach 
    </div>
@endsection




