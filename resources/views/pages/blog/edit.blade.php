@extends('layouts.app')

@section('content')

<div class="text-julien-gris not-italic text-center font-semibold uppercase tracking-wide text-base px-8 py-4">

        <h1>Editar el Post <span class="text-julien-red"> {{ $title }}</span></h1>
</div>

<div class="w-full mx-auto md:mx-2 text-julien-gris animated bounceInUp"> 

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif  

    <form class="border-2 border-white shadow-md rounded px-8 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ action('PostController@update', $post) }}">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Titre du post') }}</label>

            <input id="title" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('title') bg-red-dark @enderror" name="title" value="{{ $title }}" autocomplete="title">

            @error('title')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="auteur" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Auteur du post') }}</label>

            <input id="auteur" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('auteur') bg-red-dark @enderror" name="auteur" value="{{ $auteur }}" autocomplete="auteur">

            @error('auteur')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="soustitre1" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Sous titre 1 du post') }}</label>

            <input id="soustitre1" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('soustitre1') bg-red-dark @enderror" name="soustitre1" value="{{ $soustitre1 }}" autocomplete="soustitre1">

            @error('soustitre1')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">

            <label for="description" class="block text-sm font-semibold tracking-wide mb-2"> {{ __('Description') }}</label>

            <textarea id="description" type="text" class="{{-- shadow appearance-none border rounded w-full h-300 py-2 px-3 leading-loose focus:outline-none focus:shadow-outline --}} @error('description') bg-red-dark @enderror" name="description" value="{{ $description }}" autocomplete="description">
                @if( old('description')) 
                    {!! old('description') !!}
                @else 
                    {!! $description !!} 
                @endif
            </textarea>

            @error('description')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="soustitre2" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Sous titre 2 du post') }}</label>

            <input id="soustitre2" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('soustitre2') bg-red-dark @enderror" name="soustitre2" value="{{ $soustitre2 }}" autocomplete="sous_titre2">

            @error('soustitre2')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="content" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Contenu') }}</label>

            <textarea id="content" type="text" class="{{-- shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline --}} @error('content') bg-red-dark @enderror" name="content" value="{{$content}}" autocomplete="content">
            @if( old('content')) 
                {!! old('content') !!}
            @else 
                {!! $content !!} 
            @endif
            </textarea>

            @error('content')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="photoPost" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Photo du post') }}</label>

            <input id="photoPost" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('photoPost') bg-red-dark @enderror" name="photoPost" value="" autocomplete="photoPost">

            @error('photoPost')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>        


        <div class="mb-4">
            <label for="lienYoutube" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Youtube du post (remettre le lien entier)') }}</label>

            <input id="lienYoutube" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienYoutube') bg-red-dark @enderror" name="lienYoutube" value="{{ $lienYoutube }}" autocomplete="lienYoutube">

            @error('lienYoutube')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="lienInstagram" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Instagram du post') }}</label>

            <input id="lienInstagram" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienInstagram') bg-red-dark @enderror" name="lienInstagram" value="{{ $lienInstagram }}" autocomplete="lienInstagram">

            @error('lienInstagram')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="lienFacebook" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Facebook du post') }}</label>

            <input id="lienFacebook" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienFacebook') bg-red-dark @enderror" name="lienFacebook" value="{{ $lienFacebook }}" autocomplete="lienFacebook">

            @error('lienFacebook')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <label for="tags" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Ajouter des tags au post (!! sépare chaque tag par une virgule!!)') }}</label>

            <input id="tags" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('tags') bg-red-dark @enderror" name="tags" value=" {{ $post->tags()->pluck('name')->implode(', ')}} " autocomplete="tags">

            @error('tags')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror            
        </div> 

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-julien-gris hover:bg-julien-red font-semibold text-center tracking-wide border-2 rounded hover:border-white text-white border-julien-red shadow flex-auto py-2 px-4">
                    {{ __('Editar el post') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection

@section('scripts')

<script src="https://cdn.tiny.cloud/1/5biphfnx23wmkg054imri1ozkt598vs84unrt7qr6xm9472n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
      tinymce.init({
        selector: 'textarea',
        plugins : 'advlist autolink link lists',
        default_link_target: "_blank",
        height: 400
      });
</script>
@endsection