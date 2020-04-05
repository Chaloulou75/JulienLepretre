<div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden shadow-lg my-2">
    <div>
       <form class="bg-gray-100 px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.store', $slug) }}">
        @csrf
        <div class="mb-1">
            <label for="phrase" class="block text-gray-700 text-sm font-bold tracking-wide mb-1">{{ __('Anadir una frase') }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"></textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-2 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="mb-1">
            <div class="block items-center justify-between">
                <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-1 px-2 m-1">
                    {{ __('Anadir una descripcion') }} &raquo;
                </button>
            </div>
            
        </div>
       </form> 
    </div>

    <div>
        @foreach($programme->descriptions as $description)
        <form class="w-full bg-gray-100 px-2 py-2" method="POST" enctype="multipart/form-data" action="{{ route('description.update', ['slug' => $programme->slug, 'description' => $description->id])}} "> 
        @csrf
        @method('PUT')
        <div class="mb-1">
            <label for="phrase" class="block text-gray-700 text-sm font-bold tracking-wide mb-1">{{ __('Cambiar la frase de descripcion:  '. $description->phrase .' ')  }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="" placeholder="{{ $description->phrase }}" required autocomplete="phrase"></textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>
        <div class="sm:flex justify-around mb-1">
            <div class="block items-center justify-between">
                <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                    {{ __('Cambiar la descripcion') }} &raquo;
                </button>
            </div>        
        </form>
        
            <div>
                <form method="POST" action="{{ route('description.destroy', ['slug' => $programme->slug, 'description' => $description->id]) }}">

                @csrf
                @method('DELETE')

                        <button type="submit" class="bg-red-700 hover:bg-red-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-red-700 border-red-300 flex-auto py-2 px-4 m-2">
                                    {{ __('Suprimir la descripcion') }} &raquo;
                        </button>
                </form> 
            </div>
        </div>         
        @endforeach
    </div>
	
    <div class="sm:flex justify-around mb-1">
        <a href="{{ route('programas.edit', ['slug' => $programme->slug ] ) }}">
        <button type="submit" class="bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                    {{ __('Actualizar el programa') }} &raquo;
        </button>
        </a>

        <form method="POST" href="{{ route('programas.destroy', $programme->slug ) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-800 hover:bg-red-600 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-red-800 border-red-500 flex-auto py-2 px-4 m-2">
                        {{ __('Suprimir el programa') }} &raquo;
            </button>
        </form>
    </div>
    
</div>
