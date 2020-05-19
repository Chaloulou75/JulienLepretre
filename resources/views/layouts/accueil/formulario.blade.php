<h2 class="text-center">Recibir las últimas noticias y la invitaciones a mis clases</h2>

<form action="https://julienlepretre.us19.list-manage.com/subscribe/post?u=dca3b2c581f84fdd25e228f5f&amp;id=b9f545ae7c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="bg-bandeau-gris border-2 border-white shadow-md rounded uppercase px-4 py-4 mb-4" target="_blank" novalidate>

    <div class="mb-4">
        <label for="mce-FNAME" class="block text-sm font-bold tracking-wide mb-2">{{ __('Nombre') }}</label>

        <input id="mce-FNAME" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline" name="FNAME" value="" required autocomplete="nombre">
        
    </div>

    <div class="mb-4">
        <label for="mce-LNAME" class="block text-sm font-bold tracking-wide mb-2">
        	{{ __('Apellido') }}
        </label>

        <input id="mce-LNAME" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline" name="LNAME" value="" required autocomplete="apellido">
        
    </div>

    <div class="mb-4">
        <label for="mce-EMAIL" class="block text-sm font-bold tracking-wide mb-2">{{ __('Dirección de Email') }}</label>
       
        <input id="mce-EMAIL" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 leading-loose focus:outline-none focus:shadow-outline" name="EMAIL" value="" required autocomplete="email">          
    </div>

    <div class="mb-4">

		<label for="mce-MMERGE3-month" class="block text-sm font-bold tracking-wide mb-2">Fecha de Nacimiento</label>

		<div> {{-- <span class="border border-gray-600 px-2 py-1"> --}}
			<input class="shadow appearance-none border rounded px-2 py-1" type="text" pattern="[0-9]*" value="" placeholder="dd" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"> / 
	        <input class="shadow appearance-none border rounded px-2 py-1" type="text" pattern="[0-9]*" value="" placeholder="mm" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"> / 
			<input class="shadow appearance-none border rounded px-2 py-1" type="text" pattern="[0-9]*" value="" placeholder="yyyy" size="4" maxlength="4" name="MMERGE3[year]" id="mce-MMERGE3-year"></br>
		</div>

	</div>

	<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
	<div style="position: absolute; left: -5000px;" aria-hidden="true">
		<input type="text" name="b_dca3b2c581f84fdd25e228f5f_b9f545ae7c" tabindex="-1" value="">
	</div>	

	<div class="mb-4">
        <div class="block items-center justify-between">
            <input type="submit" class="bg-julien-gris hover:bg-julien-red text-white font-semibold text-center tracking-widest uppercase border rounded hover:border-julien-red border-white  py-2 px-4 m-2" name="subscribe" value="Subscribe">
        </div>
    </div>

</form>
