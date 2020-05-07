@extends('layouts.app')

@section('content')
    
    <div class="mb-4">

        {{-- titre post --}}

        <h1 class="w-full font-black text-3xl text-center not-italic tracking-loose uppercase py-4 ">
                {{ $post->title }} </br>                             
        </h1> 

        {{-- premier block --}}

        <div class="w-full md:w-4/5 mx-auto items-center justify-around text-justify mb-2" >

            <p class="text-xs text-left py-2">Publicado por <span class="font-semibold">{{ $post->auteur }}</span> el {{  $post->created_at->isoFormat('LL')}} </p>

            <div class="flex flex-col w-full h-full mx-auto items-center">
                <iframe class="w-full mx-auto" height="500" src="http://www.youtube.com/embed/{{ $post->lienYoutube}}" allowfullscreen>
                </iframe>            	
            </div>


            <div class="w-full md:py-2 text-center not-italic mx-auto">
                
                <div class="md:text-left">
                    <h2 class="py-4 uppercase font-semibold text-base">
                    {{ $post->soustitre1 }}
                    </h2>

                    <div class="whitespace-pre-wrap break-words leading-normal py-4">
                        {!! $post->description !!}
                    </div>

                    <h2 class="py-4 uppercase font-semibold text-base">
                        {{ $post->soustitre2 }}
                    </h2>

                    <div class="whitespace-pre-wrap break-words leading-normal py-4">
                        {!! $post->content !!}
                    </div> 
                    
                    <div class="flex leading-normal py-4">

                        @foreach($post->tags as $tag)

                        <a href="{{ route('post.index', ['tag'=> $tag->name ]) }}">
                        <div class=" py-2 px-4 font-semibold text-gray-900 hover:text-julien-red text-sm border-2 border-gray-900 rounded-lg mx-2">
                                {{ $tag->name }}
                        </div></a>

                        @endforeach
                    </div> 
                </div>
                 
            </div>
        </div>
    </div>



@endsection
