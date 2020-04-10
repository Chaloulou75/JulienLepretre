<template>
    <div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden shadow-lg my-4"> 
      <button @click="isOpen = !isOpen" class="w-full font-semibold text-lg text-gray-700 my-2">

          <i v-if="!isOpen" class="fas fa-plus-square fa-lg fa-fw text-blue-600 pl-1"></i>  
          <i v-if="isOpen" class="fas fa-minus-square fa-lg fa-fw text-blue-600 pl-1"></i>
          ¿Y UNA VEZ TERMINADO EL PROGRAMA, QUÉ HAGO?
      </button>  
      
      <transition name="custom-classes-transition" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
        <div v-if="isOpen">
          <div class="px-6 py-2">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <p class="text-gray-700 text-base">
              Una vez el programa terminado, tendrás toda la información y todos los recursos para cuidar bien tu espalda. Podrás seguir practicando las rutinas cada día o cada dos días, variando los ejercicios. Y cuando te sientes suficientemente fuerte y estable, ¡podrás aumentar la intensidad!
            </p>
          </div>
          <div class="px-6 py-2"> <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2"></span>
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
