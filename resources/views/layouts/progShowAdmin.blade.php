<div class="w-full lg:py-2 text-center text-justify text-julien-gris mx-auto rounded overflow-hidden shadow-lg my-2">
    <div>
       <form class="bg-gray-100 px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.store', $slug) }}">
        @csrf
        <div class="mb-1">
            <label for="phrase" class="block text-sm font-base text-left tracking-wide mb-1">{{ __('Anadir una frase') }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"></textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-2 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="mb-1">
            <div class="block">
                <button type="submit" class="hover:bg-julien-red text-julien-gris hover:text-white font-sm text-center tracking-widest border rounded border-julien-red flex-auto py-1 px-2 m-1">
                    {{ __('Anadir una descripcion') }} &raquo;
                </button>
            </div>
            
        </div>
       </form> 
    </div>

    <div class="border-t-2 border-gray-400 my-2">
        @foreach($programme->descriptions as $description)
        <form class="bg-gray-100 px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.update', ['slug' => $programme->slug, 'description' => $description->id])}} "> 
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label for="phrase" class="block text-sm font-base text-left tracking-wide mb-1">{{ __('Cambiar la frase de descripcion:  '. $description->phrase .' ')  }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="" placeholder="{{ $description->phrase }}" autocomplete="phrase">{{$description->phrase}}</textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="sm:flex justify-around mb-1">
            <div class="block items-center justify-between">
                <button type="submit" class="bg-gray-100 hover:bg-julien-red text-julien-gris hover:text-white font-base text-center tracking-widest border rounded border-julien-gris flex-auto py-2 px-4 m-2">
                    {{ __('Cambiar la descripcion') }} &raquo;
                </button>
            </div>        
        </form>
        
            <div>
                <form method="POST" action="{{ route('description.destroy', ['slug' => $programme->slug, 'description' => $description->id]) }}">

                @csrf
                @method('DELETE')

                        <button type="submit" class="hover:bg-julien-red text-julien-gris hover:text-white font-base text-center tracking-widest border rounded border-julien-red flex-auto py-2 px-4 m-2">
                                    {{ __('Suprimir la descripcion') }} &raquo;
                        </button>
                </form> 
            </div>
        </div>         
        @endforeach
    </div>
	
    <div class="border-t-2 border-gray-400 sm:flex justify-around mb-1">
        <a href="{{ route('programas.edit', ['slug' => $programme->slug ] ) }}">
        <button type="submit" class="hover:bg-julien-red text-julien-gris hover:text-white font-sm text-center tracking-widest border rounded border-julien-red flex-auto py-2 px-4 m-2">
                    {{ __('Actualizar el programa') }} &raquo;
        </button>
        </a>

        <form method="POST" href="{{ route('programas.destroy', $programme->slug ) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="hover:bg-julien-red text-julien-gris hover:text-white font-sm text-center tracking-widest border rounded border-julien-red flex-auto py-2 px-4 m-2">
                        {{ __('Suprimir el programa') }} &raquo;
            </button>
        </form>
    </div>
    
</div>
