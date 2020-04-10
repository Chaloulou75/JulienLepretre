<template>
	<div class="w-1/3 mx-auto p-auto pt-8">

		<a class="border border-t-0 border-gray-700 rounded-b bg-gray-200 px-4 py-3 text-gray-700 "
		@click="$modal.show('example')">lien du modal</a>

		<modal name="example"
	         width="400"
	         height="auto"
	         >

    		<p class="border border-t-1 border-gray-700 rounded-b bg-gray-200 py-2 px-4 mb-0 text-gray-700"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit obcaecati quidem et temporibus sequi nesciunt neque, odio earum, provident architecto voluptate fuga quod ut vero asperiores magnam excepturi nihil molestiae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. In autem molestiae, voluptatem ratione omnis rerum dolorem deleniti porro? Repudiandae, pariatur dolorum doloribus a quibusdam autem, porro dignissimos quaerat illum magnam.</p>
  		</modal>
		
	</div>

</template>		

<script>

	import VModal from 'vue-js-modal'

	Vue.use(VModal)

	export default {

		  	
		  
	}
</script>
