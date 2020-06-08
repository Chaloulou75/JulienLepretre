@extends('layouts.app')

@section('content')

<h1 class="w-full font-black text-3xl text-center uppercase py-8 ">
                TU PLAN DE ENTRENAMIENTO EN CASA
</h1> 

<h2 class="w-full font-black text-3xl text-center uppercase py-2 ">
                Plan de 6 sesiones
</h2> 

<div class="sm:flex justify-between px-8">
	<div class="w-full max-w-xs lg:max-w-xl lg:w-1/2 mx-auto my-2 p-8 border-2 rounded border-gray-700">   

		<h3 class="text-center text-base uppercase">Argentino? </br> Pagar con Mercado Pago:</h3>
		<p class="text-center text-sm pt-1">(con Pesos Argentinos)</p>
		<div class="text-center text-base pt-1">
			<a mp-mode="dftl" href="https://www.mercadopago.com.ar/checkout/v1/redirect?pref_id=379948820-e9271c46-fa0b-434b-b2d7-01712dc7dfa7" name="MP-payButton" class='blue-ar-l-rn-none'>Pagar con Mercado Pago</a> 
		</div>
	</div>

	<div class="w-full max-w-xs lg:max-w-xl lg:w-1/2 mx-auto my-2 p-8 border-2 rounded border-gray-700">   

		<h3 class="text-center text-base uppercase">Extranjero? </br> Pagar con Paypal:</h3>
		<p class="text-center text-sm pt-1">(con Dolares o Euros)</p>
		<div class="text-center text-base pt-1">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="NEXB8MXKTDGGC">
			<input type="image" src="https://www.paypalobjects.com/fr_FR/FR/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, le réflexe sécurité pour payer en ligne">
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
