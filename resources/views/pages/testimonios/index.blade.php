@extends('layouts.app', ['title' => 'Testimonios'])

@section('content')

<div class="mb-4">

    <h1 class="w-full py-8 text-3xl font-black text-center uppercase ">
        Testimonios
    </h1>

    <div class="flex flex-col flex-wrap items-stretch justify-around w-full mx-auto md:flex-row">

        @foreach($testimonios as $testimonio)

        <div class="w-full max-w-sm mx-auto my-4 overflow-hidden rounded shadow-lg md:w-1/3 animated bounceInUp">
            {{-- <img class="w-full" src="/img/titreprog.jpg" alt="programme"> --}}
            <img src="{{ url($testimonio->avatarurl) }}" loading="auto"
                class="object-cover w-40 h-40 p-2 mx-auto rounded-full fill-current" alt="avatar">
            <div class="{{-- text-julien-gris --}} px-6 py-4">
                <div class="mb-2 text-xl font-bold text-center">{{$testimonio->name}}</div>
                <div class="text-base not-italic text-left">
                    <p class="whitespace-pre-wrap ">{{$testimonio->msg}}</p>
                </div>
            </div>

            @admin
            <div class="flex justify-between px-6 py-4">
                <a class="inline-block text-xs not-italic text-julien-red"
                    href="{{ action('TestimoniosController@edit', $testimonio) }}">Editar</a>
                <form method="POST" action="{{ action('TestimoniosController@destroy', $testimonio) }}">
                    @csrf
                    @method('DELETE')
                    <button class="inline-block text-xs text-julien-red">Suprimir</button>
                </form>
            </div>
            @endadmin

        </div>

        @endforeach
    </div>

    <div class="flex justify-center">
        {{ $testimonios->links() }}
    </div>


    <h1 class="w-full py-8 my-4 text-xl font-black text-center uppercase">
        sus comentarios en instagram
    </h1>

    @include('layouts.accueil.carousel')


</div>

@endsection
