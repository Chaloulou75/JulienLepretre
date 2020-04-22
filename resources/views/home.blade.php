@extends('layouts.app')

@section('content')
<div class="container my-4 text-julien-gris uppercase not-italic">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-julien-gris">
                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Estas conectado!

                </div>
                <div class="w-full dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle w-1/2 bg-julien-gris hover:bg-julien-red border-2 border-white rounded text-white not-italic px-4 py-2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class=" dropdown-menu w-1/2 text-white hover:bg-julien-red hover:text-white" aria-labelledby="navbarDropdown">
                        <a class="w-full hover:bg-julien-red text-julien-gris hover:text-white px-4 py-2" href="{{ route('logout') }}" 
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                         
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>                
            </div>

            @admin
            <a href="{{ route('admin.index') }}">
            <div class="my-16 w-full mx-auto bg-julien-gris hover:bg-julien-red border-2 border-white rounded text-white text-center not-italic px-4 py-2">
                {{ __('Go to Admin Page') }} 
            </div>
            </a> 
            @endadmin

        </div>
    </div>
</div>

@endsection
