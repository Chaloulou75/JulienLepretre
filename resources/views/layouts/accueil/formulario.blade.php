<form action="https://julienlepretre.us19.list-manage.com/subscribe/post?u=dca3b2c581f84fdd25e228f5f&amp;id=b9f545ae7c"
    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
    class="px-4 py-4 mb-4 uppercase border-2 border-white rounded shadow-md bg-bandeau-gris" target="_blank" novalidate>

    <div class="mb-4">
        <label for="mce-FNAME" class="block mb-2 text-sm font-bold tracking-wide">{{ __('Nombre') }}</label>

        <input id="mce-FNAME" type="text"
            class="w-full px-3 py-2 leading-loose border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="FNAME" value="" required autocomplete="nombre">

    </div>

    <div class="mb-4">
        <label for="mce-LNAME" class="block mb-2 text-sm font-bold tracking-wide">
            {{ __('Apellido') }}
        </label>

        <input id="mce-LNAME" type="text"
            class="w-full px-3 py-2 leading-loose border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="LNAME" value="" required autocomplete="apellido">

    </div>

    <div class="mb-4">
        <label for="mce-EMAIL" class="block mb-2 text-sm font-bold tracking-wide">{{ __('Dirección de Email') }}</label>

        <input id="mce-EMAIL" type="email"
            class="w-full px-3 py-2 leading-loose border rounded shadow appearance-none focus:outline-none focus:shadow-outline"
            name="EMAIL" value="" required autocomplete="email">
    </div>

    <div class="mb-4">

        <label for="mce-MMERGE3-month" class="block mb-2 text-sm font-bold tracking-wide">Fecha de Nacimiento</label>

        <div> {{-- <span class="px-2 py-1 border border-gray-600"> --}}
            <input class="px-2 py-1 border rounded shadow appearance-none" type="text" pattern="[0-9]*" value=""
                placeholder="dd" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"> /
            <input class="px-2 py-1 border rounded shadow appearance-none" type="text" pattern="[0-9]*" value=""
                placeholder="mm" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"> /
            <input class="px-2 py-1 border rounded shadow appearance-none" type="text" pattern="[0-9]*" value=""
                placeholder="yyyy" size="4" maxlength="4" name="MMERGE3[year]" id="mce-MMERGE3-year"></br>
        </div>

    </div>

    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true">
        <input type="text" name="b_dca3b2c581f84fdd25e228f5f_b9f545ae7c" tabindex="-1" value="">
    </div>

    <div class="mb-4">
        <div class="items-center justify-between block">
            <input type="submit"
                class="px-4 py-2 m-2 font-semibold tracking-widest text-center text-white uppercase border border-white rounded bg-julien-gris hover:bg-julien-red hover:border-julien-red"
                name="subscribe" value="Subscribe">
        </div>
    </div>

</form>
