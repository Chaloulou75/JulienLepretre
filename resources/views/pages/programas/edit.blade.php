@extends('layouts.app')

@section('content')

<div class="bg-gray-100 mx-auto text-julien-gris not-italic text-center font-semibold uppercase tracking-wide text-base px-8 py-4">
    <h1>Actualizar el programa <span class="text-julien-red">{{$title}}</span></h1>
</div>

<div class="w-full max-w-xs lg:max-w-xl m-auto p-auto pt-8 text-julien-gris"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form class="bg-gray-100  border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('programas.update', $programme->slug )}}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Titre du programme') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ $title }}" required autocomplete="title">

            @error('title')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="descriptionCourte" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Description Courte') }}</label>

            <textarea id="descriptionCourte" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('descriptionCourte') bg-red-dark @enderror" name="descriptionCourte" value="{{ $descriptionCourte }}" required autocomplete="descriptionCourte">
                @if( old('descriptionCourte')) 
                    {{old('descriptionCourte') }}
                @else 
                    {{ $descriptionCourte }}
                @endif
            </textarea>

            @error('descriptionCourte')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="descriptionComplete" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Description Complète') }}</label>

            <textarea id="descriptionComplete" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('descriptionComplete') bg-red-dark @enderror" name="descriptionComplete" value="{{ old('descriptionGlobale') }}" required autocomplete="descriptionComplete">
                @if( old('descriptionComplete')) 
                    {{old('descriptionComplete') }}
                @else 
                    {{ $descriptionComplete }}
                @endif
            </textarea>

            @error('descriptionComplete')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="photoProgramme" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Photo du programme') }}</label>

            <input id="photoProgramme" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('photoProgramme') bg-red-dark @enderror" name="photoProgramme" value="" required autocomplete="photoProgramme">

            @error('photoProgramme')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Image du programme') }}</label>

            <input id="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image') bg-red-dark @enderror" name="image" value="" required autocomplete="image">

            @error('image')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="image2" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Deuxième Image du programme') }}</label>

            <input id="image2" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('image2') bg-red-dark @enderror" name="image2" value="" required autocomplete="image2">

            @error('image2')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>         

        <div class="mb-4">
            <label for="prixPesos" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio en Pesos Ar $') }}</label>
           
                <input id="prixPesos" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prixPesos') bg-red-dark @enderror" name="prixPesos" value="{{ $prixPesos }}" required autocomplete="prixPesos">

                @error('prixPesos')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="prixDollar" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Precio en US Dollar $') }}</label>
           
                <input id="prixDollar" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('prixDollar') bg-red-dark @enderror" name="prixDollar" value="{{ $prixDollar }}" required autocomplete="prixDollar">

                @error('prixDollar')
                    <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror           
        </div>

        <div class="mb-4">
            <label for="lienYoutube" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Youtube du programme (remettre le lien entier)') }}</label>

            <input id="lienYoutube" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienYoutube') bg-red-dark @enderror" name="lienYoutube" value="{{ $lienYoutube }}" required autocomplete="lienYoutube">

            @error('lienYoutube')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="lienTiendup" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Tiendup du programme') }}</label>

            <input id="lienTiendup" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienTiendup') bg-red-dark @enderror" name="lienTiendup" value="{{ $lienTiendup }}" required autocomplete="lienTiendup">

            @error('lienTiendup')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-gray-100 hover:bg-julien-red font-semibold text-center tracking-wide border-2 rounded hover:border-white hover:text-white border-julien-red shadow flex-auto py-2 px-4">
                    {{ __('Actualizar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
