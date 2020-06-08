@extends('layouts.app')

@section('content')
    
<div class="py-4">
         
    <div class="w-full md:w-2/3 mx-auto bg-white mt-4 mb-12">

        <h2 class="w-full text-xl md:text-3xl leading-relaxed text-center not-italic px-2">
            Cada domingo a las 16hs (hora Argentina) te propongo una clase de 1 hora en vivo por YOUTUBE.
        </h2>
        <h3 class="w-full text-lg md:text-xl leading-relaxed uppercase text-center py-4 px-2 my-2">
            SUMATE PARA CUIDAR TU CUERPO
        </h3>
        <p class="w-full text-base text-center py-4 px-2 my-2">
            Durante 1 hora, practicamos una rutina para mejorar nuestra movilidad (cada semana una nueva rutina).</br>
            Vamos a mover todo el cuerpo (columna, hombros, caderas...) y te voy a guiar para cada ejercicio (cómo, cuanto tiempo, por qué...).
        </p>

        <p class="w-full text-base text-gray-600 leading-relaxed text-center py-4 px-2 my-2">
            <span class="font-semibold">
                Te mando la invitación a la clase una vez realizado el pago de 2,9 us$
            </span></br>
            (Reunión por youtube solo tendrás que hacer clic en el link de la reunion domingo a las 16hs para sumarte) 
        </p>
        
        <div class="my-8 px-4 md:w-1/2 mx-auto text-gray-600 ">
            <p class="text-left">Inscribete para el próximo domingo</p>
            <p class="text-left text-xs">Link de pago 2,9 us$ :</p>
            <paypal-component></paypal-component>
        </div>

    </div>
</div>
@endsection        
