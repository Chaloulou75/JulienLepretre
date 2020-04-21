@extends('layouts.app')

@section('content')


<div class="w-full mx-auto my-4 px-4">

	<div class="text-julien-red text-center font-semibold uppercase tracking-wide text-base mx-auto">

            <h1>Admin dashboard</h1>
    </div>
	<ul class="">
		<li class="py-2 px-4 m-2">- Lien programas create : <a class="text-sm text-julien-red not-italic" href="{{ action('ProgrammeController@create') }}"> Crear un programa</a></li>
		<li class="py-2 px-4 m-2">- Lien testimonios create: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('TestimoniosController@create') }}">Crear un testimonio</a></li>
		<li class="py-2 px-4 m-2">Tu veux d'autres choses ici? dis moi bébé.... liens vers paiements? etc...</li>
	</ul>
</div>

@endsection
