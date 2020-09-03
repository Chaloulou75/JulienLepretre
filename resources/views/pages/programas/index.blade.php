@extends('layouts.app')

@section('content')

<div>

    <h1 class="w-full py-8 text-3xl font-black text-center uppercase ">
        Los Programas
    </h1>

    @foreach($programmes as $programme)

    <div
        class="flex flex-col items-center w-5/6 p-4 mx-auto my-8 border-2 md:w-2/3 md:flex-row border-julien-gris animated bounceInUp">

        <!--Left Col-->
        <div class="items-center w-full mx-auto md:w-1/3 ">
            <!--Add your product image here-->
            <img src="{{ url($programme->photoProgUrl) }}" loading="auto" class="mx-auto fill-current" alt="image">
        </div>

        <!--Right Col-->
        <div class="items-center w-full px-4 mx-auto text-center md:w-2/3">

            <div class="pt-4 md:mt-2">
                <h3 class="not-italic font-semibold uppercase tracking-loose md:mx-16 md:text-left">
                    Programa </br>

                    {{ $programme->title }}
                </h3>

                <p class="py-2 mb-2 md:mx-16 md:text-left">
                    <i class="pl-1 text-yellow-400 fas fa-star fa-fw"></i>
                    <i class="pl-1 text-yellow-400 fas fa-star fa-fw"></i>
                    <i class="pl-1 text-yellow-400 fas fa-star fa-fw"></i>
                    <i class="pl-1 text-yellow-400 fas fa-star fa-fw"></i>
                    <i class="pl-1 text-yellow-400 fas fa-star fa-fw"></i>
                </p>
            </div>

            <div class="items-center mb-8 text-base not-italic font-medium md:mx-16 md:text-left">
                <p class="mx-auto leading-relaxed whitespace-pre-line">{{ $programme->descriptionCourte }}</p>

                <h3 class="mx-auto text-lg font-bold leading-normal uppercase">
                    {{ floatval($programme->prixPesos) }} <span class="text-sm text-gray-600 font-sm">AR$</span> /
                    {{ floatval($programme->prixDollar) }} <span class="text-sm text-gray-600 font-sm">US$</span>
                </h3>

            </div>
            <div class="mb-4 md:mb-2 md:mx-16 md:text-left">
                <a href="{{ route('programas.show', ['slug' => $programme->slug]) }}" {{-- {{ url($programme->lien) }}
                    target="_blank" --}}><button
                        class="px-8 py-2 font-semibold tracking-widest text-white uppercase transition duration-500 ease-in-out transform border-2 border-white rounded shadow bg-julien-gris hover:bg-julien-red hover:border-julien-red hover:shadow-lg hover:-translate-y-1 hover:scale-110"
                        type="button">Ver mas</button></a>
            </div>

        </div>
    </div>


    @endforeach
</div>
@endsection
