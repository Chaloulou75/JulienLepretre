@extends('layouts.app')

@section('content')

<div class="px-8 mb-4 text-base font-semibold tracking-wide text-center uppercase">

    <h1 class="pb-2">TU PLAN DE ENTRENAMIENTO EN CASA</h1>
    <h2 class="pb-2">Elegi tu Plan</h2>
</div>

<div class="flex justify-between px-8">
    <div
        class="w-full max-w-xs p-8 m-auto text-2xl font-medium text-center text-white transition duration-500 ease-in-out transform bg-gray-500 border-2 border-teal-600 rounded lg:max-w-xl lg:w-1/2 p-auto hover:-translate-y-1 hover:scale-110 hover:bg-gray-600">
        <a class="text-2xl text-center text-white no-underline" href="{{ route('payment.6sesiones') }}">
            Plan de 6 sesiones
        </a>
    </div>

    <div
        class="w-full max-w-xs p-8 m-auto text-2xl font-medium text-center text-white transition duration-500 ease-in-out transform bg-gray-500 border-2 border-teal-600 rounded lg:max-w-xl lg:w-1/2 p-auto hover:-translate-y-1 hover:scale-110 hover:bg-gray-600">
        <a class="text-2xl text-center text-white no-underline" href="{{ route('payment.12sesiones') }}">
            Plan de 12 sesiones
        </a>
    </div>


</div>

@endsection
