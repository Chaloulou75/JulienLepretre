@extends('layouts.app')

@section('content')

<div class="bg-gray-100 text-julien-gris not-italic text-center font-semibold uppercase tracking-wide text-base px-8 py-4">

        <h1>Crear tu Post</h1>
</div>

<div class="w-full max-w-xs lg:max-w-xl m-auto p-auto text-julien-gris pt-8 animated bounceInUp"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{-- {{ route('blogs.store') }} --}}">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Titre du programme') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">

            @error('title')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Contenu') }}</label>

            <textarea id="content" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('content') bg-red-dark @enderror" name="content" value="{{ old('content') }}" required autocomplete="content"></textarea>

            @error('content')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="photoBlog" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Photo du post') }}</label>

            <input id="photoBlog" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('photoBlog') bg-red-dark @enderror" name="photoBlog" value="" required autocomplete="photoBlog">

            @error('photoBlog')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>        


        <div class="mb-4">
            <label for="lienYoutube" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Youtube du programme') }}</label>

            <input id="lienYoutube" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienYoutube') bg-red-dark @enderror" name="lienYoutube" value="{{ old('lienYoutube') }}" required autocomplete="lienYoutube">

            @error('lienYoutube')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="lienTiendup" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Tiendup du programme') }}</label>

            <input id="lienTiendup" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienTiendup') bg-red-dark @enderror" name="lienTiendup" value="{{ old('lienTiendup') }}" required autocomplete="lienTiendup">

            @error('lienTiendup')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-gray-100 hover:bg-julien-red font-semibold text-center tracking-wide border-2 rounded hover:border-white hover:text-white border-julien-red shadow flex-auto py-2 px-4">
                    {{ __('Registrar') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
