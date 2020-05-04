@extends('layouts.app')

@section('content')
    
    <div>

        <h1 class="w-full font-black text-3xl text-center uppercase py-8 ">
                El blog
        </h1>  

        {{-- @foreach($posts as $post) --}}

        <div class="w-5/6 md:w-2/3 mx-auto flex flex-col md:flex-row items-center border-2 border-julien-gris p-4 my-8 animated bounceInUp">

            <!--Left Col-->
            <div class="w-full md:w-1/3 items-center mx-auto ">
                <!--Add your product image here-->
                 <img src="{{-- {{ url($programme->photoPostUrl) }} --}}" class="fill-current mx-auto" alt="image">
            </div>
        
            <!--Right Col-->
            <div class="w-full md:w-2/3 text-center items-center mx-auto px-4">
                
                <div class="pt-4 md:mt-2">
                    <h3 class="uppercase not-italic font-semibold tracking-loose md:mx-16 md:text-left">
                        {{-- Programa </br> --}}
                    
                       {{--  {{ $post->title }} --}}
                    </h3>

                </div>                

                <div class="items-center text-base font-medium not-italic md:mx-16 md:text-left mb-8">
                    <p class="whitespace-pre-line mx-auto leading-relaxed">{{-- {{ $post->content }} --}}</p>                   
                    
                </div>
                <div class="mb-4 md:mb-2 md:mx-16 md:text-left">
                    <a href="{{-- {{ route('post.show', ['slug' => $post->slug]) }} --}}"  ><button class="bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-8 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver mas</button></a>
                </div>
                
            </div>      
        </div>

        
       {{--  @endforeach  --}}
    </div>
@endsection
