@extends('layouts.app')

@section('content')

@include('layouts.accueil.hero')

@include('layouts.accueil.herodivided')

@include('layouts.accueil.consultaprivada')

{{-- @include('layouts.accueil.clasemovilidad') --}}

@include('layouts.accueil.redes')

@include('layouts.accueil.carousel')

<div class="w-full mx-auto my-4 uppercase md:w-1/2">
    <h2 class="text-center">Recibir las últimas noticias y la invitaciones a mis clases</h2>
    @include('layouts.accueil.formulario')
</div>

<div class="my-2 text-xs text-center uppercase text-julien-gris md:mt-4">
    <p>
        &copy; {{ date('Y') }} &middot; julien lepretre all right reserved, </br> site designed and developped by <a
            href="https://www.linkedin.com/in/charles-jeandey" target="_blank"><span
                class="text-julien-red">carlito</span></a>.
    </p>

</div>
{{-- <div class="w-full h-screen">

    	<img class="w-full mx-auto mb-2" src="/img/muevemas1.jpg" alt="muevemas">

        <protusion-component></protusion-component>
        <noproblema-component></noproblema-component>
        <tiempo-component></tiempo-component>
        <terminado-component></terminado-component>
        <modal-component></modal-component>
    </div> --}}

@endsection
