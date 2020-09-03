@extends('layouts.app')

@section('content')


<div class="w-full px-4 mx-auto my-4">

    <div class="mx-auto text-base font-semibold tracking-wide text-center uppercase text-julien-red">

        <h1>Admin dashboard</h1>
    </div>
    <ul class="">
        <li class="px-4 py-2 m-2">- Lien vers la creation de Post de Blog (post/create) :
            <a class="text-sm not-italic text-julien-red" href="{{ action('PostController@create') }}"> Crear un Post de
                Blog</a></li>

        <li class="px-4 py-2 m-2">- Lien vers programas/create :
            <a class="text-sm not-italic text-julien-red" href="{{ action('ProgrammeController@create') }}"> Crear un
                programa</a></li>

        <li class="px-4 py-2 m-2">- Lien vers testimonios/create:
            <a class="text-sm not-italic text-julien-red" href="{{ action('TestimoniosController@create') }}">Crear un
                testimonio</a></li>

        <li class="px-4 py-2 m-2"> - Lien vers Paiement:
            <a class="text-sm not-italic text-julien-red" href="{{ action('PaymentController@index') }}"> Paiements</a>
        </li>

        <li class="px-4 py-2 m-2"> - Lien vers Paiement - 6 sesiones:
            <a class="text-sm not-italic text-julien-red" href="{{ action('PaymentController@plan6sesiones') }}">
                Paiement - 6 sesiones:</a></li>

        <li class="px-4 py-2 m-2">- Lien vers Paiement - 12 sesiones:
            <a class="text-sm not-italic text-julien-red"
                href="{{ action('PaymentController@plan12sesiones') }}">Paiement - 12 sesiones:</a></li>

        <li class="px-4 py-2 m-2">- Lien vers confirmation de paiement pour le plan 6 sessions:
            <a class="text-sm not-italic text-julien-red"
                href="{{ action('PaymentController@plan6confirmado') }}">confirmado 6</a></li>

        <li class="px-4 py-2 m-2">- Lien vers confirmation de paiement pour le plan 12 sessions:
            <a class="text-sm not-italic text-julien-red"
                href="{{ action('PaymentController@plan12confirmado') }}">confirmado 12</a></li>

        <li class="px-4 py-2 m-2">- Lien vers Paiement rechazado:
            <a class="text-sm not-italic text-julien-red"
                href="{{ action('PaymentController@rechazado') }}">Rechazado</a></li>
    </ul>
</div>

@endsection
