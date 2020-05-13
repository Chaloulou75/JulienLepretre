@extends('layouts.app')

@section('content')
    <div class="flex items-center">
        <div class="md:w-1/2 md:mx-auto">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                    Dashboard
                </div>

                <div class="w-full p-6 mb-2">
                    <p class="font-semibold">
                        {{ Auth::user()->name }}, you are logged in!
                    </p>

                    <a href="{{ route('logout') }}"
                       class="no-underline hover:underline text-julien-red text-sm"
                       onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>

                @admin
                <a href="{{ route('admin.index') }}">
                <div class="w-1/2 mx-auto bg-julien-gris hover:bg-julien-red border-2 border-white rounded text-white text-center not-italic px-4 py-2">
                    {{ __('Go to Admin Page') }} 
                </div>
                </a> 
                @endadmin

            </div>
        </div>
    </div>
@endsection
