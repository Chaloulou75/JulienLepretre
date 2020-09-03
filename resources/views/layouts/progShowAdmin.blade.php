<div class="flex flex-col w-full mx-auto my-2 md:flex-row text-julien-gris">

    <div class="w-full my-1 md:w-1/3">
        <form class="px-2 py-2" method="POST" enctype="multipart/form-data"
            action="{{ route('description.store', $programme->slug) }}">
            @csrf
            <div class="mb-1">
                <label for="phrase"
                    class="block mb-1 font-normal tracking-wide text-left">{{ __('Anadir una frase') }}</label>

                <textarea id="phrase" type="text"
                    class="shadow appearance-none border rounded w-full mx-auto px-2 py-2 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror"
                    name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"></textarea>

                @error('phrase')
                <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-2 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            </div>
            <div class="mb-1 text-left">

                <button type="submit" class="flex-auto tracking-widest text-julien-gris hover:text-julien-red font-sm">
                    {{ __('Anadir una descripcion') }} &raquo;
                </button>

            </div>
        </form>
    </div>

    <div class="w-full my-1 md:w-1/3">

        @foreach($programme->descriptions as $description)
        <form class="px-2 py-2" method="POST" enctype="multipart/form-data"
            action="{{ route('description.update', ['slug' => $programme->slug, 'description' => $description->id])}} ">
            @csrf
            @method('PUT')
            <div class="mb-1">
                <label for="phrase"
                    class="block mb-1 text-sm font-normal tracking-wide text-left">{{ __('Cambiar la frase de descripcion: ')  }}</label>

                <textarea id="phrase" type="text"
                    class="shadow appearance-none border rounded w-full mx-auto px-2 py-2 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror"
                    name="phrase" value="" placeholder="{{ $description->phrase }}"
                    autocomplete="phrase">{{$description->phrase}}</textarea>

                @error('phrase')
                <span class="mt-1 text-sm  text-julien-red" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                <div class="text-left">
                    <button type="submit"
                        class="flex-auto tracking-widest text-julien-gris hover:text-julien-red font-sm">
                        {{ __('Cambiar la descripcion') }} &raquo;
                    </button>
                </div>
            </div>
        </form>


        <div class="px-2 my-1">

            <form method="POST"
                action="{{ route('description.destroy', ['slug' => $programme->slug, 'description' => $description->id]) }}">

                @csrf
                @method('DELETE')

                <button type="submit" class="tracking-widest text-left text-julien-gris hover:text-julien-red font-sm">
                    {{ __('Suprimir la descripcion') }} &raquo;
                </button>
            </form>

        </div>
        @endforeach
    </div>

    <div class="items-center justify-around w-full p-2 my-1 md:w-1/3">

        <div class="px-2 py-4 text-left">
            <a href="{{ route('programas.edit', ['slug' => $programme->slug ] ) }}">
                <button type="submit" class="font-normal tracking-widest text-julien-gris hover:text-julien-red">
                    {{ __('Actualizar el programa') }} &raquo;
                </button>
            </a>
        </div>
        <div class="px-2 py-4 text-left">
            <form method="POST" href="{{ route('programas.destroy', $programme->slug ) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="font-normal tracking-widest text-julien-gris hover:text-julien-red">
                    {{ __('Suprimir el programa') }} &raquo;
                </button>
            </form>
        </div>
    </div>

</div>
