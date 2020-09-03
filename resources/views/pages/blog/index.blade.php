@extends('layouts.app', ['title' => 'Blog'] )

@section('content')

<div>

    <h1 class="w-full py-8 text-3xl font-black text-center uppercase ">
        Blog
    </h1>

    <div class="flex-wrap items-stretch justify-around w-full mx-auto my-4 md:flex">

        @forelse($posts as $post)

        <div
            class="w-full max-w-sm {{-- md:w-1/3 --}} rounded flex flex-col shadow-lg animated bounceInUp mx-auto mb-4">
            <img src="{{ url($post->photoPostUrl) }}" loading="auto" class="w-full mx-auto fill-current"
                alt="image du Post">
            <div class="px-6 py-4">
                <div class="mx-auto text-2xl not-italic font-bold">
                    {{ $post->title }}
                </div>
            </div>
            <div class="mb-auto">
                <a href="{{ route('post.show', ['slug' => $post->slug]) }}">
                    <button
                        class="px-6 py-2 text-sm font-bold tracking-widest text-gray-900 uppercase transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110"
                        type="button">Leer más <i class="pl-1 fas fa-long-arrow-alt-right"></i>
                    </button>
                </a>
            </div>
            <div class="px-6 pt-2 pb-4">
                <a href="{{ url( $post->lienInstagram) }}" target="_blank">
                    <span class="px-1 py-1 mr-2 text-lg font-semibold text-gray-700"> <i
                            class="fab fa-instagram"></i></span>
                </a>
                <a href="{{ url( $post->lienFacebook) }}" target="_blank">
                    <span class="px-1 py-1 mr-2 text-lg font-semibold text-gray-700"> <i
                            class="fab fa-facebook"></i></span>
                </a>
            </div>
            @admin
            <div class="flex justify-between px-6 py-4">
                <a class="inline-block text-xs not-italic text-julien-red"
                    href="{{ action('PostController@edit', $post) }}">Editar</a>
                <form method="POST" action="{{ action('PostController@destroy', $post) }}">
                    @csrf
                    @method('DELETE')
                    <button class="inline-block text-xs text-julien-red">Suprimir</button>
                </form>
            </div>
            @endadmin
        </div>

        @empty
        <p class="font-semibold text-gray-700"> No hay post por el momento.</p>
        @endforelse
    </div>

    <div class="flex justify-center">
        {{ $posts->links() }}
    </div>


    <div class="flex flex-wrap items-stretch justify-center w-full px-2 py-4 mx-auto not-italic leading-normal">

        @foreach($tags as $tag)

        <a href="{{ route('post.index', ['tag'=> $tag->name ]) }}" class="my-2 mr-4">
            <div
                class="self-auto flex-1 px-4 py-2 text-sm font-semibold text-center text-gray-900 border-2 border-gray-900 rounded-lg hover:text-julien-red animated bounceInLeft">
                {{ $tag->name }}
            </div>
        </a>

        @endforeach
    </div>
</div>
@endsection
