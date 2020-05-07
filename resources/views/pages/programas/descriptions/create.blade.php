@extends('layouts.app')

@section('content')

<div class="bg-gray-100 text-gray-900 text-center font-semibold uppercase tracking-wide text-base px-8">

        <h1>Crear la descripcion de tu programa</h1>
</div>

<div class="w-full max-w-xs lg:max-w-xl lg:w-4/5 m-auto p-auto pt-2">

    <form class="bg-gray-100 border-2 border-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" enctype="multipart/form-data" action="{{ route('description.store') }}">
        @csrf
        <div class="mb-4">
            <label for="phrase" class="block text-gray-900 text-sm font-bold tracking-wide mb-2">{{ __('Description en detail') }}</label>

            <textarea id="phrase" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror" name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase" autofocus>{{ old('phrase') }}</textarea>

            @error('phrase')
                <span class=" mt-1 text-sm text-red-500" role="relative px-3 py-3 mb-4 border rounded">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
        </div>

        <div class="mb-4">
            <div class="block items-center justify-between">
                <button type="submit" class="w-full bg-blue-700 hover:bg-blue-500 text-white font-semibold text-center tracking-widest border-2 rounded-full hover:border-blue-700 border-blue-300 flex-auto py-2 px-4 m-2">
                    {{ __('Registrar descripcion') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
