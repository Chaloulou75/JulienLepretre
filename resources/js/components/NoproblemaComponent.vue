<template>
    <div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden shadow-lg my-4"> 
      <button @click="isOpen = !isOpen" class="w-full font-semibold text-lg text-gray-700 my-2">

          <i v-if="!isOpen" class="fas fa-plus-square fa-lg fa-fw text-blue-600 pl-1"></i>  
          <i v-if="isOpen" class="fas fa-minus-square fa-lg fa-fw text-blue-600 pl-1"></i>
          ¿NO TENGO PROBLEMA DE ESPALDA, PARA QUÉ ME SIRVE?
      </button>  
      
      <transition name="slide-fade">
        <div v-if="isOpen">
          <div class="px-6 py-4">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <p class="text-gray-700 text-base">
              Este programa te permite trabajar las zonas de tu espalda y de tu pelvis que no tienen suficiente movilidad o que no son suficientemente fuertes para mejorar tu postura y tu equilibrio. </br> Eso te permitirá mejorar tu rendimiento deportivo y sobre todo prevenir las futuras lesiones.
            </p>
          </div>
          <div class="px-6 py-2">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#EQUILIBRIO</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2">#DEPORTE</span>
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

