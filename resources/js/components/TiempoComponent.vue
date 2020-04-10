<template>
    <div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden shadow-lg my-4"> 
      <button @click="isOpen = !isOpen" class="w-full font-semibold text-lg text-gray-700 my-2">

          <i v-if="!isOpen" class="fas fa-plus-square fa-lg fa-fw text-blue-600 pl-1"></i>  
          <i v-if="isOpen" class="fas fa-minus-square fa-lg fa-fw text-blue-600 pl-1"></i>
          ¿DURANTE CUANTO TIEMPO PUEDO DISFRUTAR DE ESTE PROGRAMA DESPUÉS DEL PAGO?
      </button>  
      
      <transition name="custom-classes-transition" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
        <div v-if="isOpen">
          <div class="px-6 py-2">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <p class="text-gray-700 text-base">
              ¡Toda tu vida! Pagas una vez y tenes acceso al programa de por vida!
            </p>
          </div>
          <div :class="isOpen ? 'block' : 'hidden'" class="px-6 py-2">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#TODALAVIDA</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"></span>
          </div>
        </div>
      </transition>
    </div>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false,
    }
  },
}
</script>
