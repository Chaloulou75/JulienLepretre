@extends('layouts.app')

@section('content')
    
    <div class="px-4">

        @foreach($programmes as $programme)

        <div class="md:flex bg-white rounded-lg p-6">
            <img class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-32 w-32 md:h-64 md:w-64 mx-auto md:mx-0 hover:shadow-lg" src="/img/espsana.png">

            <div class="text-center md:text-left">
                <h1 class="font-semibold text-lg leading-tight truncate uppercase text-gray-900 mt-1"> {{ $programme->title }}</h1>
                <div class="text-purple-500 mt-1">
                    {{ $programme->title }}
                </div>
                <div class="text-gray-600 mt-1">
                    {{ $programme->image }}
                </div>
                <div class="text-gray-600 mt-1">
                    {{ $programme->prix }} /month
                </div>
            </div>
        </div>

        @endforeach

        <div class="sticky top-0 ..."></div>
        
        </div>

              
    </div>

@endsection
