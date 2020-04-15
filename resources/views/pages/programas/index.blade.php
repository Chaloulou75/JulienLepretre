@extends('layouts.app')

@section('content')
    
    <div class="px-4">        
        @foreach($programmes as $programme)

        <div class="w-full mx-auto h-auto flex flex-col md:flex-row items-center">

            <!--Left Col-->
            <div class="w-full lg:w-1/2">
                <!--Add your product image here-->
                 <img src="{{ asset('storage/img/programas/'.$programme->image)}}" class="fill-current mx-auto" alt="30 dias espalda sana">
            </div>
        
            <!--Right Col-->
            <div class="w-full lg:w-1/2 text-julien-gris text-center">
                
                <div class="mt-4 md:mt-2 mb-6">
                    <h1 class="font-semibold text-2xl uppercase">
                    Programa
                    </h1>
                </div>
                
                <div>
                    <h2 class="uppercase not-italic text-3xl tracking-loose my-6">
                        {{ $programme->title }}
                    </h2>
                </div>
                

                <div class="items-center text-base leading-normal not-italic mb-10">
                    <p class="py-4 mx-16">{{ $programme->descriptionGlobale }}</p>

                    @foreach($programme->descriptions as $description)
                    <p>
                        <i class="fas fa-check-square fa-lg fa-fw text-green-600 pl-1"></i>
                         {{ $description->phrase }}
                    </p>
                    @endforeach
                    
                </div>
                <div class="mb-4 md:mb-2">
                    <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}"><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
                
            </div>      
        </div>
        @endforeach 
    </div>
@endsection




