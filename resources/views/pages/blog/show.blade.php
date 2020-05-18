@extends('layouts.app')

@section('content')
    
    <div class="mb-4">

        {{-- titre post --}}

        <h1 class="w-full font-black text-3xl text-center not-italic tracking-loose uppercase py-4 ">
                {{ $post->title }} </br>                             
        </h1> 

        {{-- premier block --}}

        <div class="w-full md:w-4/5 mx-auto items-center justify-around mb-2" >

            <div class="w-full mx-auto items-center respContainer">                
                <iframe src="https://www.youtube.com/embed/{{ $post->lienYoutube}}" loading="auto" allowfullscreen> 
                </iframe>   
                           	
            </div>

            <div class="w-full md:flex py-2 text-center not-italic mx-auto">
                
                <div class="md:w-3/4 md:text-left px-2">

                    <div class="whitespace-pre-wrap break-words leading-normal py-4">
                        {!! $post->content !!}
                    </div> 

                    <p class="text-xs py-2">Publicado por <span class="font-semibold">{{ $post->auteur }}</span> el {{  $post->created_at->isoFormat('LL')}} </p>

                    {{-- @include('pages.blog.layouts.compartir') --}}

                    
                    <div class="flex flex-wrap items-stretch leading-normal py-4">

                        @foreach($post->tags as $tag)

                        <a href="{{ route('post.index', ['tag'=> $tag->name ]) }}" class="my-2 mr-4">
                        <div class="py-2 px-4 font-semibold text-gray-900 hover:text-julien-red text-sm border-2 border-gray-900 rounded-lg">
                                {{ $tag->name }}
                        </div></a>

                        @endforeach
                    </div> 
                    
                </div>

                <div class="w-full md:w-1/4 max-w-sm md:border-l-2 md:border-gray-100 md:pl-2">

                    <h2 class="py-8 uppercase font-semibold text-lg mx-auto"> ver los programas</h2>
                    <div class="my-2 rounded overflow-hidden mx-auto">
                        <a href="{{route('programas.index')}}"><img src="/img/home/30diasespaldasana.png" loading="auto" class="w-full fill-current mx-auto rounded-lg" alt="30 dias espalda sana">
                        <p class="py-2 max-auto uppercase font-semibold text-gray-900 hover:text-julien-red text-sm">30 días para una espalda sana!</p></a>
                    </div>
                    <div class="my-2 rounded overflow-hidden mx-auto">
                        <a href="{{route('programas.index')}}"><img src="/img/home/CuerpoFuerte.png" loading="auto" class="fill-current mx-auto rounded-lg" alt="cuerpo fuerte">
                        <p class="py-2 max-auto uppercase font-semibold text-gray-900 hover:text-julien-red text-sm">cuerpo fuerte</p></a>
                    </div>
                    <div class="my-2 rounded overflow-hidden mx-auto">
                        <a href="{{route('consultaIndex')}}"><img src="/img/home/ordi.jpg" loading="auto" class="w-full fill-current mx-auto rounded-lg" alt="consulta privada">
                        <p class="py-2 max-auto uppercase font-semibold text-gray-900 hover:text-julien-red text-sm">consulta privada</p></a>
                    </div>                
                
                </div>
                 
            </div>

            
        </div>
    </div>



@endsection
