@extends('layouts.app', ['title' => 'Consulta privada'])

@section('content')

@include('pages.consultaprivadas.hero')

<h2 class="w-full py-8 my-4 text-xl leading-relaxed text-center uppercase md:text-3xl">
    Encontramos soluciones para tus dolores crónicos y tus lesiones
</h2>

@include('pages.consultaprivadas.herodivided')

<h2 class="w-full py-8 my-4 text-2xl font-black text-center uppercase">
    Testimonios
</h2>

@include('layouts.accueil.carousel')

@endsection
