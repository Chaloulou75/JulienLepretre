@extends('layouts.app',['title' => $post->title])

@section('content')

<div class="mb-4">

    {{-- titre post --}}

    <h1 class="w-full py-4 text-3xl not-italic font-black text-center uppercase tracking-loose ">
        {{ $post->title }} </br>
    </h1>

    {{-- premier block --}}

    <div class="items-center justify-around w-full mx-auto mb-2 md:w-4/5">

        <div class="items-center w-full mx-auto respContainer">
            <iframe src="https://www.youtube.com/embed/{{ $post->lienYoutube}}" loading="auto" allowfullscreen>
            </iframe>

        </div>

        <div class="w-full md:flex py-2{{--  text-center --}} not-italic mx-auto">

            <div class="md:w-3/4 {{-- md:text-left --}} px-2">

                <div class="{{-- whitespace-pre-wrap break-words --}} py-4">
                    {!! $post->content !!}
                </div>

                <p class="py-2 text-xs md:text-left">Publicado por <span
                        class="font-semibold">{{ $post->auteur }}</span> el {{  $post->created_at->isoFormat('LL')}}
                </p>

                <div class="flex flex-wrap items-stretch py-4">

                    @foreach($post->tags as $tag)

                    <a href="{{ route('post.index', ['tag'=> $tag->name ]) }}" class="my-2 mr-4">
                        <div
                            class="px-4 py-2 text-sm font-semibold text-gray-900 border-2 border-gray-900 rounded-lg hover:text-julien-red">
                            {{ $tag->name }}
                        </div>
                    </a>

                    @endforeach
                </div>

            </div>

            <div class="w-full max-w-sm md:w-1/4 md:border-l-2 md:border-gray-100 md:pl-2">

                <h2 class="py-8 text-lg font-semibold text-center uppercase"> ver los programas</h2>
                <div class="mx-auto my-2 overflow-hidden rounded">
                    <a href="https://julienlepretre.tiendup.com/c{{-- {{route('programas.index')}} --}}"
                        target="_blank"><img src="/img/home/compress/30diasespaldasana.jpg" loading="auto"
                            class="w-full mx-auto rounded-lg fill-current" alt="30 dias espalda sana">
                        <p class="py-2 text-sm font-semibold text-center text-gray-900 uppercase hover:text-julien-red">
                            30 días para una espalda sana!</p>
                    </a>
                </div>
                <div class="mx-auto my-2 overflow-hidden rounded">
                    <a href="https://julienlepretre.tiendup.com/c{{-- {{route('programas.index')}} --}}"
                        target="_blank"><img src="/img/home/compress/CuerpoFuerte.jpg" loading="auto"
                            class="mx-auto rounded-lg fill-current" alt="cuerpo fuerte">
                        <p class="py-2 text-sm font-semibold text-center text-gray-900 uppercase hover:text-julien-red">
                            cuerpo fuerte</p>
                    </a>
                </div>
                <div class="mx-auto my-2 overflow-hidden rounded">
                    <a href="{{route('consultaIndex')}}"><img src="/img/home/compress/ordismall.jpg" loading="auto"
                            class="w-full mx-auto rounded-lg fill-current" alt="consulta privada">
                        <p class="py-2 text-sm font-semibold text-center text-gray-900 uppercase hover:text-julien-red">
                            consulta privada</p>
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ec3e62879941b71"></script>
@endpush
