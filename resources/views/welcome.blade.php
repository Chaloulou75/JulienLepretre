@extends('layouts.app')

@section('content')

	@include('layouts.hero')

	@include('layouts.herodivided')

    @include('layouts.consultaprivada')

    @include('layouts.carousel')

    @include('layouts.redes')

    <div class="text-julien-gris text-center uppercase text-xs my-2 md:mt-4">
		<p>
			&copy;2020 julien lepretre all right reserved, </br> site designed and developped by <span class="text-julien-red"> charles jeandey</span>.
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
