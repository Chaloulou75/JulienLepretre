<div class="w-full flex flex-col md:flex-row text-julien-gris mx-auto my-2">

    <div class="w-full md:w-1/3 my-1">
       <form class="px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.store', $programme->slug) }}">
        @csrf
        <div class="mb-1">
            <label for="phrase" class="block font-normal text-left tracking-wide mb-1">{{ __('Anadir una frase') }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full mx-auto px-2 py-2 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"></textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-2 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="text-left mb-1">
            
            <button type="submit" class="text-julien-gris hover:text-julien-red font-sm tracking-widest flex-auto">
                    {{ __('Anadir una descripcion') }} &raquo;
            </button>
            
        </div>
       </form> 
    </div>

    <div class="w-full md:w-1/3 my-1">

        @foreach($programme->descriptions as $description)
        <form class="px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.update', ['slug' => $programme->slug, 'description' => $description->id])}} "> 
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label for="phrase" class="block text-sm font-normal text-left tracking-wide mb-1">{{ __('Cambiar la frase de descripcion: ')  }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full mx-auto px-2 py-2 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="" placeholder="{{ $description->phrase }}" autocomplete="phrase">{{$description->phrase}}</textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            <div class="text-left">
                <button type="submit" class="text-julien-gris hover:text-julien-red font-sm tracking-widest flex-auto">
                    {{ __('Cambiar la descripcion') }} &raquo;
                </button>
            </div>
        </div>            
        </form>
            
        
        <div class="my-1 px-2"> 

            <form method="POST" action="{{ route('description.destroy', ['slug' => $programme->slug, 'description' => $description->id]) }}">

            @csrf
            @method('DELETE')

            <button type="submit" class="text-julien-gris hover:text-julien-red font-sm text-left tracking-widest">
                        {{ __('Suprimir la descripcion') }} &raquo;
            </button>
            </form> 
            
        </div>         
        @endforeach
    </div>
	
    <div class="w-full md:w-1/3 p-2 items-center justify-around my-1">

        <div class="text-left px-2 py-4">
           <a href="{{ route('programas.edit', ['slug' => $programme->slug ] ) }}">
            <button type="submit" class="text-julien-gris hover:text-julien-red font-normal tracking-widest">
                        {{ __('Actualizar el programa') }} &raquo;
            </button>
            </a> 
        </div>
        <div class="text-left px-2 py-4">
           <form method="POST" href="{{ route('programas.destroy', $programme->slug ) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-julien-gris hover:text-julien-red font-normal tracking-widest">
                        {{ __('Suprimir el programa') }} &raquo;
            </button>
            </form> 
        </div>        
    </div>
    
</div>
