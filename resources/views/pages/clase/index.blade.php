@extends('layouts.app', ['title' => 'Clase de Movilidad'])

@section('content')

<div class="py-4">

    <div class="w-full mx-auto mt-4 mb-12 bg-white md:w-4/5">

        <h2 class="w-full px-2 mx-auto text-xl not-italic leading-relaxed text-center md:w-4/5 md:text-3xl">
            Cada domingo a las 16hs (hora Argentina) te propongo una clase de 1 hora en vivo por YOUTUBE.
        </h2>

        <div class="flex flex-col mt-12 mb-8 md:flex-row">
            <div class="w-full lg:w-1/3">
                <!--Add your product image here-->
                <img src="/img/home/compress/clase.jpg" loading="auto" class="mx-auto fill-current" alt="Ju clase">
            </div>
            <div class="w-full text-center lg:w-2/3 md:pl-12">
                <h3
                    class="w-full px-2 py-4 my-2 text-lg not-italic font-bold leading-relaxed uppercase md:text-xl md:text-left">
                    SUMATE PARA CUIDAR TU CUERPO
                </h3>
                <p class="w-full px-2 py-4 my-2 text-base not-italic leading-relaxed md:text-left">
                    Durante 1 hora, practicamos una rutina para mejorar nuestra movilidad (cada semana una nueva
                    rutina).Vamos a mover todo el cuerpo (columna, hombros, caderas...)</br>
                    Te voy a guiar para cada ejercicio (cómo, cuanto tiempo, por qué...).
                </p>
            </div>
        </div>

        <p class="w-full px-2 py-4 my-2 text-base not-italic leading-relaxed text-center">
            Te mando la invitación a la clase una vez realizado el pago de 2,9 us$</br>
            (Reunión por youtube solo tendrás que hacer clic en el link de la reunion domingo a las 16hs para sumarte)
        </p>


        <h3 class="w-full px-2 py-4 my-2 text-lg not-italic font-bold leading-relaxed text-center uppercase md:text-xl">
            <span class="text-2xl font-black">1</span>- Inscribirse para poder recibir el link de la clase</h3>

        <div class="w-full mx-auto my-4 uppercase md:w-1/2">
            @include('layouts.accueil.formulario')
        </div>

        <h3 class="w-full px-2 py-2 text-lg not-italic font-bold leading-relaxed text-center uppercase md:text-xl">
            <span class="text-2xl font-black">2</span>- Pagar la clase</h3>

        <div class="flex flex-col justify-around px-4 mx-auto my-2 md:flex-row">
            <div class="py-4 text-center">
                <h3 class="mb-6 text-lg not-italic font-bold leading-relaxed text-center uppercase md:text-xl">
                    Sos argentino
                </h3>
                <div class="w-full">
                    <a href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=379948820-30da9072-62ee-401b-b46b-065257554c6e"
                        target="_blank"><button
                            class="px-4 py-2 text-sm font-medium tracking-wide text-white uppercase transition duration-500 ease-in-out transform border border-white rounded-lg shadow bg-julien-gris hover:bg-julien-red hover:shadow-lg hover:-translate-y-1 hover:scale-110"
                            type="button">Mercado Pago</button></a>
                </div>

            </div>
            <div class="py-4 text-center">
                <h3 class="mb-6 text-lg not-italic font-bold leading-relaxed text-center uppercase md:text-xl">
                    Otro País
                </h3>
                <paypal-component></paypal-component>

            </div>

        </div>

    </div>
</div>
@endsection
