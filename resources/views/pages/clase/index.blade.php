@extends('layouts.app')

@section('content')
    
<div class="py-4">
         
    <div class="w-full md:w-4/5 mx-auto bg-white mt-4 mb-12">

        <h2 class="w-full md:w-4/5 mx-auto text-xl md:text-3xl leading-relaxed text-center not-italic px-2">
            Cada domingo a las 16hs (hora Argentina) te propongo una clase de 1 hora en vivo por YOUTUBE.
        </h2>

        <div class="flex flex-col md:flex-row my-8 ">
            <div class="w-full lg:w-1/3">
                <!--Add your product image here-->
                 <img src="/img/home/compress/clase.jpg" loading="auto" class="fill-current mx-auto" alt="Ju clase">
            </div>
            <div class="w-full lg:w-2/3 text-center md:pl-12">
                <h3 class="w-full text-lg md:text-xl leading-relaxed font-bold not-italic uppercase md:text-left py-4 px-2 my-2">
                SUMATE PARA CUIDAR TU CUERPO
                </h3>
                <p class="w-full text-base md:text-left not-italic leading-relaxed py-4 px-2 my-2">
                    Durante 1 hora, practicamos una rutina para mejorar nuestra movilidad (cada semana una nueva rutina).Vamos a mover todo el cuerpo (columna, hombros, caderas...)</br>
                    Te voy a guiar para cada ejercicio (cómo, cuanto tiempo, por qué...).
                </p>
            </div>
        </div>
        
        

        <p class="w-full text-base leading-relaxed text-center not-italic py-4 px-2 my-2">
            Te mando la invitación a la clase una vez realizado el pago de 2,9 us$</br>
            (Reunión por youtube solo tendrás que hacer clic en el link de la reunion domingo a las 16hs para sumarte) 
        </p>
        
        <div class="flex flex-col md:flex-row my-8 px-4 mx-auto justify-around">
            <div class="text-center py-4">
                <h3 class="text-center text-lg md:text-xl leading-relaxed font-bold not-italic uppercase mb-6">
                    Sos argentino
                </h3>
                <div class="w-full">
                    <a href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=379948820-30da9072-62ee-401b-b46b-065257554c6e" target="_blank"><button class="py-2 px-4 text-sm bg-julien-gris hover:bg-julien-red text-white font-medium tracking-wide uppercase border border-white rounded-lg shadow hover:shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Mercado Pago</button></a>
                </div>
                
            </div>
            <div class="text-center py-4">
                <h3 class="text-center text-lg md:text-xl leading-relaxed font-bold not-italic uppercase mb-6">
                    Otro País
                </h3>
                <paypal-component></paypal-component>

            </div>
            
        </div>

    </div>
</div>
@endsection    
 
