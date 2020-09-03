@extends('layouts.app')

@section('content')

<div class="px-8 py-4 text-base not-italic font-semibold tracking-wide text-center uppercase text-julien-gris">

    <h1>Crear tu programa</h1>
</div>

<div class="w-full max-w-xs pt-8 m-auto lg:max-w-xl p-auto text-julien-gris animated bounceInUp">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 border-2 border-white rounded shadow-md" method="POST"
        enctype="multipart/form-data" action="{{ route('programas.store') }}">
        @csrf

        <div class="mb-4">
            <label for="title"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Titre du programme') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ old('title') }}" required
                autocomplete="title">

            @error('title')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="descriptionCourte"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Description Courte') }}</label>

            <textarea id="descriptionCourte" type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('descriptionCourte') bg-red-dark @enderror"
                name="descriptionCourte" value="{{ old('descriptionCourte') }}" required
                autocomplete="descriptionCourte">{{ old('descriptionCourte') }}</textarea>

            @error('descriptionCourte')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="descriptionComplete"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Description Complète') }}</label>

            <textarea id="descriptionComplete" type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('descriptionComplete') bg-red-dark @enderror"
                name="descriptionComplete" value="{{ old('descriptionGlobale') }}" required
                autocomplete="descriptionComplete">{{ old('descriptionGlobale') }}</textarea>

            @error('descriptionComplete')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="photoProgramme"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Photo du programme') }}</label>

            <input id="photoProgramme" type="file"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('photoProgramme') bg-red-dark @enderror"
                name="photoProgramme" value="" required autocomplete="photoProgramme">

            @error('photoProgramme')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="image"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Image du programme') }}</label>

            <input id="image" type="file"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image') bg-red-dark @enderror"
                name="image" value="" required autocomplete="image">

            @error('image')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="image2"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Deuxième Image du programme') }}</label>

            <input id="image2" type="file"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image2') bg-red-dark @enderror"
                name="image2" value="" required autocomplete="image2">

            @error('image2')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="prixPesos"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Precio en Pesos Ar $') }}</label>

            <input id="prixPesos" type="number"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prixPesos') bg-red-dark @enderror"
                name="prixPesos" value="{{ old('prixPesos') }}" required autocomplete="prixPesos">

            @error('prixPesos')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="prixDollar"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Precio en US Dollar $') }}</label>

            <input id="prixDollar" type="number"
                class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prixDollar') bg-red-dark @enderror"
                name="prixDollar" value="{{ old('prixDollar') }}" required autocomplete="prixDollar">

            @error('prixDollar')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="lienYoutube"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Lien Youtube du programme') }}</label>

            <input id="lienYoutube" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienYoutube') bg-red-dark @enderror" name="lienYoutube" value="{{ old('lienYoutube') }}" required
                autocomplete="lienYoutube">

            @error('lienYoutube')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <label for="lienTiendup"
                class="block mb-2 text-sm font-semibold tracking-wide">{{ __('Lien Tiendup du programme') }}</label>

            <input id="lienTiendup" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienTiendup') bg-red-dark @enderror" name="lienTiendup" value="{{ old('lienTiendup') }}" required
                autocomplete="lienTiendup">

            @error('lienTiendup')
            <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <div class="items-center justify-between block">
                <button type="submit"
                    class="flex-auto w-full px-4 py-2 font-semibold tracking-wide text-center bg-gray-100 border-2 rounded shadow hover:bg-julien-red hover:border-white hover:text-white border-julien-red">
                    {{ __('Registrar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
