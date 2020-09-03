@extends('layouts.app')

@section('content')

<h1 class="w-full py-8 text-3xl font-black text-center uppercase ">
    TU PLAN DE ENTRENAMIENTO EN CASA
</h1>

<h2 class="w-full py-2 text-3xl font-black text-center uppercase ">
    Plan de 12 sesiones
</h2>

<div class="justify-between px-8 sm:flex">
    <div class="w-full max-w-xs p-8 mx-auto my-2 border-2 border-gray-700 rounded lg:max-w-xl lg:w-1/2 p-auto">

        <h3 class="text-base text-center uppercase">Argentino? </br> Pagar con Mercado Pago:</h3>
        <p class="pt-1 text-sm text-center">(con Pesos Argentinos)</p>
        <div class="pt-1 text-base text-center">
            <a mp-mode="dftl"
                href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=379948820-9a9272bd-0c96-4f0c-8371-519128793e71"
                name="MP-payButton" class='blue-ar-l-rn-none'>Pagar con Mercado Pago</a>
        </div>
    </div>

    <div class="w-full max-w-xs p-8 mx-auto my-2 border-2 border-gray-700 rounded lg:max-w-xl lg:w-1/2 p-auto">

        <h3 class="text-base text-center uppercase">Extranjero? </br>Pagar con Paypal:</h3>
        <p class="pt-1 text-sm text-center">(con Dolares o Euros)</p>
        <div class="pt-1 text-base text-center">
            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="C8AMTDZCSFCG8">
                <input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0"
                    name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
                <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
            </form>
        </div>
    </div>
</div>

@endsection


@push('scripts')
<script type="text/javascript">
    (function(){function $MPC_load(){window.$MPC_loaded !== true && (function(){var s = document.createElement("script");s.type = "text/javascript";s.async = true;s.src = document.location.protocol+"//secure.mlstatic.com/mptools/render.js";var x = document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s, x);window.$MPC_loaded = true;})();}window.$MPC_loaded !== true ? (window.attachEvent ?window.attachEvent('onload', $MPC_load) : window.addEventListener('load', $MPC_load, false)) : null;})();

</script>
@endpush
