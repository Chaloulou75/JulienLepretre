

@section('styles')
	<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

@endsection

<div id="mc_embed_signup">
	<form action="https://julienlepretre.us19.list-manage.com/subscribe/post?u=dca3b2c581f84fdd25e228f5f&amp;id=b9f545ae7c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>

	<div id="mc_embed_signup_scroll">

		<h2>Recibir las últimas noticias y la invitaciones a mis clases</h2>

		{{-- <div class="indicates-required">
			<span class="asterisk">*</span> required
		</div> --}}
		<div class="mc-field-group">
			<label for="mce-EMAIL">
				Dirección de Email  
				{{-- <span class="asterisk">*</span> --}}
			</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>

		<div class="mc-field-group">
			<label for="mce-FNAME">Nombre </label>
			<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
		</div>

		<div class="mc-field-group">
			<label for="mce-LNAME">Apellido </label>
			<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
		</div>

		<div class="mc-field-group {{-- size1of2 --}}">

			<label for="mce-MMERGE3-month">Fecha de Nacimiento  {{-- <span class="asterisk">*</span> --}}
			</label>

			<div class="datefield">
				<span class="subfield dayfield"><input class="datepart required" type="text" pattern="[0-9]*" value="" placeholder="" size="2" maxlength="2" name="MMERGE3[day]" id="mce-MMERGE3-day"></span> / 
		        <span class="subfield monthfield"><input class="datepart required" type="text" pattern="[0-9]*" value="" placeholder="" size="2" maxlength="2" name="MMERGE3[month]" id="mce-MMERGE3-month"></span> / 
				<span class="subfield yearfield"><input class="datepart required" type="text" pattern="[0-9]*" value="" placeholder="" size="4" maxlength="4" name="MMERGE3[year]" id="mce-MMERGE3-year"></span>
		        <span class="small-meta nowrap">( dd / mm / yyyy )</span>
			</div>

		</div>	

		<div id="mce-responses" class="clear">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>    
		<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

		<div style="position: absolute; left: -5000px;" aria-hidden="true">
			<input type="text" name="b_dca3b2c581f84fdd25e228f5f_b9f545ae7c" tabindex="-1" value="">
		</div>

		<div class="clear">
			<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
		</div>
	</div>
	</form>
</div>

<!--End mc_embed_signup-->
