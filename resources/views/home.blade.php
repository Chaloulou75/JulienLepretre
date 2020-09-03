@extends('layouts.app')

@section('content')
<div class="flex items-center">
    <div class="md:w-1/2 md:mx-auto">

        @if (session('status'))
        <div class="px-3 py-4 mb-4 text-sm text-green-700 bg-green-100 border border-t-8 border-green-600 rounded"
            role="alert">
            {{ session('status') }}
        </div>
        @endif

        <div class="flex flex-col break-words bg-white border-2 rounded shadow-md">

            <div class="px-6 py-3 mb-0 font-semibold text-gray-700 bg-gray-200">
                Dashboard
            </div>

            <div class="w-full p-6 mb-2">
                <p class="font-semibold">
                    {{ Auth::user()->name }}, you are logged in!
                </p>

                <a href="{{ route('logout') }}" class="text-sm no-underline hover:underline text-julien-red" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                    {{ csrf_field() }}
                </form>
            </div>

            @admin
            <a href="{{ route('admin.index') }}">
                <div
                    class="w-1/2 px-4 py-2 mx-auto not-italic text-center text-white border-2 border-white rounded bg-julien-gris hover:bg-julien-red">
                    {{ __('Go to Admin Page') }}
                </div>
            </a>
            @endadmin

        </div>
    </div>
</div>
@endsection
