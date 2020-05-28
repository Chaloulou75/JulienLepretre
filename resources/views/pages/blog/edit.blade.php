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

            <div class="flex">
                <input id="photoPost" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('photoPost') bg-red-dark @enderror" name="photoPost" value="" autocomplete="photoPost">

                <img src="{{ url($post->photoPostUrl) }}" loading="auto" class="h-48 w-48 object-scale-down" alt="image du Post">
            </div>
            @error('photoPost')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror            
        </div>        

        <div class="mb-4">
            <label for="lienYoutube" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Lien Youtube du post (check si bon lien)') }}</label>

            <input id="lienYoutube" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline
             @error('lienYoutube') bg-red-dark @enderror" name="lienYoutube" value="https://www.youtube.com/watch?v={{ $lienYoutube }}" autocomplete="lienYoutube">

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
            <label for="tags" class="block text-sm font-semibold tracking-wide mb-2">{{ __('Ajouter des tags au post (!! sépare chaque tag par une virgule sauf le dernier!!)') }}</label>

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

@push('scripts')

<script src="https://cdn.tiny.cloud/1/5biphfnx23wmkg054imri1ozkt598vs84unrt7qr6xm9472n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> 

<script>
      // tinymce.init({
      //   selector: 'textarea',
      //   plugins : 'advlist autolink link lists charmap print preview autosave quickbars',
      //   default_link_target: "_blank",
      //   toolbar: 'quickimage',
      //   height: 400
      // });
tinymce.init({
  selector: 'textarea',
  plugins: 'advlist autolink link lists charmap print preview autosave quickbars',
  toolbar: 'undo redo | styleselect | bold italic strikethrough forecolor backcolor| alignleft aligncenter alignright alignjustify | outdent indent | link blockquote | bullist numlist preview',
  menubar: true,
  default_link_target: "_blank",
  height: 'calc(100vh - 2rem)',
  
  // Register the cite format
  formats: {
    cite: {block: 'cite'}
  },
  
  // Populate the styleselect menu
  style_formats: [
    { title: 'Paragraph', format: 'p'},
    { title: 'Title', format: 'h1'},
    { title: 'Heading', format: 'h2'},
    { title: 'Subheading', format: 'h3'},
    { title: 'Blockquote', format: 'blockquote'},
    { title: 'Cite', format: 'cite' },
  ],
  
  // This removes the WYSIWYG formatting within the styleselect menu
  preview_styles: false,  
    
  // Setting up the content styles. In this codepen we are using
  // content_style, therefore we disable the default styling that
  // comes with the default content_css
  content_css: false,
  content_style: `
@import url('https://fonts.googleapis.com/css?family=Oxygen:400,700&display=swap');

blockquote {
  font-family: 'Andale Mono', 'Courier New', monospace;
  font-size: 18px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .1em;
  position: relative;
  border: 3px solid #3d3d3d;
  padding: 3em 2.5rem;
  margin: calc(2.5em - 16px) auto 2.5em;
  text-align: left;
  max-width: 320px;
  text-align: center;
  box-sizing: border-box;
  box-shadow: 13px 13px 0 0 #fff inset, 16px 16px 0 0 #fff200;
  background-color: #fff200;
}

blockquote::before {
  content: '“';
  font-size: 5em;
  color: #222;
  position: absolute;
  top: -.05em;
  left: 50%;
  transform: translateX(-50%);
  font-family: 'georgia';
  pointer-events: none;
}

blockquote::after {
  content: '“';
  font-size: 5em;
  color: #222;
  position: absolute;
  bottom: -.55em;
  left: 50%;
  transform: translateX(-50%);
  font-family: 'georgia';
  pointer-events: none;
}

blockquote > * {
  margin: .75em 0;
}

blockquote cite {
  display: block;
  font-style: normal;
  font-size: 12px;
}

  `
});
</script>

@endpush
