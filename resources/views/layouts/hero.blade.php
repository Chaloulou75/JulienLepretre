<!--Hero-->
	<div class="w-full mx-auto flex flex-col {{-- md:flex-row --}} items-center px-8 bg-julien-gris">
	 {{-- bg-contain  bg-right bg-no-repeat style="background-image: url(/img/EtirementNOIRetBLANC.jpg)" --}}

		<!--Left Col-->
		<div class="flex flex-col w-full mx-auto {{-- lg:w-1/2 --}} justify-center items-center pt-2 md:px-24 pb-24">
			
			<h1 class="font-bold text-5xl text-white text-center not-italic uppercase my-4">¿Listo para recuperar el control de tu cuerpo?</h1>
			<h2 class="uppercase font-semibold text-3xl text-white text-center tracking-loose my-6">Tus programas online</h2>

			<div class="items-start text-white text-center">
				<p class="leading-normal uppercase text-2xl my-8">Para alivar tus dolores, tu postura y tu rendimiento</p>
				{{-- <p class="leading-normal uppercase text-xl mb-4">	
				Sufrís de la espalda baja o volvés de una lesión y no sabés como recuperar tu movilidad?</p> --}}
			</div>
			<a href="{{route('programas.index')}}"><button class="w-full bg-julien-gris hover:bg-julien-red text-white font-semibold tracking-widest uppercase border-2 border-white hover:border-julien-red rounded shadow hover:shadow-lg py-2 px-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110" type="button">Ver los programas</button></a>
		</div>
		<!--Right Col-->
		<div class="w-full {{-- lg:w-1/2 --}} lg:py-2 text-center">
			<!--Add your product image here-->
			{{-- <img src="/img/EtirementNOIRetBLANC.jpg" class="fill-current text-gray-900 w-3/5 mx-auto" alt="30dias"> --}}
		</div>
		
	</div>
