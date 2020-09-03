@extends('layouts.app')

@section('content')

<div class="px-8 text-base font-semibold tracking-wide text-center text-gray-900 uppercase bg-gray-100">

    <h1>Crear la descripcion de tu programa</h1>
</div>

<div class="w-full max-w-xs pt-2 m-auto lg:max-w-xl lg:w-4/5 p-auto">

    <form class="px-8 pt-6 pb-8 mb-4 bg-gray-100 border-2 border-white rounded shadow-md" method="POST"
        enctype="multipart/form-data" action="{{ route('description.store') }}">
        @csrf
        <div class="mb-4">
            <label for="phrase"
                class="block mb-2 text-sm font-bold tracking-wide text-gray-900">{{ __('Description en detail') }}</label>

            <textarea id="phrase" type="text"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-900 leading-loose focus:outline-none focus:shadow-outline @error('phrase') bg-red-dark @enderror"
                name="phrase" value="{{ old('phrase') }}" required autocomplete="phrase"
                autofocus>{{ old('phrase') }}</textarea>

            @error('phrase')
            <span class="mt-1 text-sm text-red-500 " role="relative px-3 py-3 mb-4 border rounded">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

        </div>

        <div class="mb-4">
            <div class="items-center justify-between block">
                <button type="submit"
                    class="flex-auto w-full px-4 py-2 m-2 font-semibold tracking-widest text-center text-white bg-blue-700 border-2 border-blue-300 rounded-full hover:bg-blue-500 hover:border-blue-700">
                    {{ __('Registrar descripcion') }} &raquo;
                </button>
            </div>
        </div>
    </form>
</div>

@endsection
