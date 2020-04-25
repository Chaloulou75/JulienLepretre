@extends('layouts.app')

@section('content')
    
    <div>

        <h1 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8 ">
                Los Programas
        </h1>  

        @foreach($programmes as $programme)

        <div class="w-5/6 md:w-2/3 mx-auto h-auto flex flex-col md:flex-row items-center border-2 border-julien-gris p-8 m-16">

            <!--Left Col-->
            <div class="w-full md:w-1/3">
                <!--Add your product image here-->
                 <img src="{{ url($programme->photoProgUrl) }}" class="fill-current mx-auto" alt="image">
            </div>
        
            <!--Right Col-->
            <div class="w-full md:w-2/3 text-julien-gris text-center">
                
                <div class="pt-4 md:mt-2 m-2">
                    <h1 class="font-bold text-2xl uppercase">
                    Programa
                    </h1>
                    <h2 class="uppercase not-italic text-3xl font-semibold tracking-loose mb-4">
                        {{ $programme->title }}
                    </h2>
                </div>                

                <div class="items-center text-base leading-medium not-italic mb-10">
                    <p class="py-2 mx-auto text-center">{{ $programme->descriptionCourte }}</p>

                    <p class="py-2 mx-auto text-center">
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                        <i class="fas fa-star fa-fw text-yellow-400 pl-1"></i>
                    </p>

                    <p class="leading-normal font-sm uppercase text-sm mx-auto">
                         {{ $programme->prixPesos }} AR$ / {{ $programme->prixDollar }} US$
                    </p>
                    
                </div>
                <div class="mb-4 md:mb-2">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}" {{-- {{ url($programme->lien) }} target="_blank"--}}><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
                
            </div>      
        </div>

        
        @endforeach 
    </div>
@endsection




