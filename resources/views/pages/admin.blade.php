@extends('layouts.app')

@section('content')


<div class="w-full mx-auto my-4 px-4">

	<div class="text-julien-red text-center font-semibold uppercase tracking-wide text-base mx-auto">

            <h1>Admin dashboard</h1>
    </div>
	<ul class="">
		<li class="py-2 px-4 m-2">- Lien vers programas/create : 
			<a class="text-sm text-julien-red not-italic" href="{{ action('ProgrammeController@create') }}"> Crear un programa</a></li>

		<li class="py-2 px-4 m-2">- Lien vers testimonios/create: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('TestimoniosController@create') }}">Crear un testimonio</a></li>

		<li class="py-2 px-4 m-2"> - Lien vers Paiement - 6 sesiones: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('PaymentController@plan6sesiones') }}"> Paiement - 6 sesiones:</a></li>

		<li class="py-2 px-4 m-2">- Lien vers Paiement - 12 sesiones: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('PaymentController@plan12sesiones') }}">Paiement - 12 sesiones:</a></li>

		<li class="py-2 px-4 m-2">- Lien vers confirmation de paiement pour le plan 6 sessions: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('PaymentController@plan6confirmado') }}">confirmado 6</a></li>

		<li class="py-2 px-4 m-2">- Lien vers confirmation de paiement pour le plan 12 sessions: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('PaymentController@plan12confirmado') }}">confirmado 12</a></li>

		<li class="py-2 px-4 m-2">- Lien vers Paiement rechazado: 
			<a class="text-sm text-julien-red not-italic" href="{{ action('PaymentController@rechazado') }}">Rechazado</a></li>
	</ul>
</div>

@endsection
