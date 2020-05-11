@extends('layouts.app')

@section('content')

	@include('pages.consultaprivadas.hero')

    <h2 class="w-full font-black text-2xl text-center py-8 my-4">
            Encontramos soluciones para tus dolores crónicos y tus lesiones
    </h2>

    @include('pages.consultaprivadas.herodivided')

    <h2 class="w-full font-black text-2xl text-center uppercase py-8 my-4">
                Testimonios
    </h2>

    @include('layouts.accueil.carousel')

@endsection
