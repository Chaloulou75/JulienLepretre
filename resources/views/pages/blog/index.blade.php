@extends('layouts.app')

@section('content')
    
    <div>

        <h1 class="w-full font-black text-3xl text-center uppercase py-8 ">
                Blog
        </h1> 

        <div class="w-full mx-auto flex flex-col md:flex-row flex-wrap items-stretch justify-around my-4"> 

        @forelse($posts as $post)

        <div class="max-w-sm rounded overflow-hidden shadow-lg animated bounceInUp mb-8">
          <img src="{{ url($post->photoPostUrl) }}" class="w-full fill-current mx-auto" alt="image du Post">
          <div class="px-6 py-4">
            <div class="font-bold text-2xl not-italic mx-auto">
                {{ $post->title }}
            </div>

          </div>
          <div class="mb-4 md:mb-2">
            <a href="{{ route('post.show', ['slug' => $post->slug]) }}"><button class="text-gray-900 font-bold text-sm tracking-widest uppercase py-2 px-6 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Leer más <i class="fas fa-long-arrow-alt-right pl-1"></i></button></a> 
          </div>
          <div class="px-6 pt-2 pb-4">
            <a href="{{ url( $post->lienInstagram) }}" target="_blank">
                <span class="px-1 py-1 text-lg font-semibold text-gray-700 mr-2"> <i class="fab fa-instagram-square"></i></span>
            </a>
            <a href="{{ url( $post->lienFacebook) }}" target="_blank">
                    <span class="px-1 py-1 text-lg font-semibold text-gray-700 mr-2"> <i class="fab fa-facebook"></i></span>
            </a>           
          </div>
          @admin
          <div class="flex justify-between px-6 py-4">
            <a class="inline-block text-xs text-julien-red not-italic" href="{{ action('PostController@edit', $post) }}">Editar</a>
            <form method="POST" action="{{ action('PostController@destroy', $post) }}"> 
                @csrf 
                @method('DELETE')
            <button class="inline-block text-xs text-julien-red" >Suprimir</button>
            </form>     
          </div>      
          @endadmin
        </div>

        @empty

        <p> No hay post por el momento.</p>
        
        @endforelse 

        {{ $posts->links() }}

        </div>
    </div>
@endsection
