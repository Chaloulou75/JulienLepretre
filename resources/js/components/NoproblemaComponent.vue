<template>
    <div class="w-full mx-auto my-4 overflow-hidden text-center rounded lg:py-2">
      <button @click="isOpen = !isOpen" class="w-full my-2 text-lg font-semibold text-julien-gris">

          <i v-if="!isOpen" class="pl-1 text-blue-600 fas fa-plus-square fa-lg fa-fw"></i>
          <i v-if="isOpen" class="pl-1 text-blue-600 fas fa-minus-square fa-lg fa-fw"></i>
          ¿NO TENGO PROBLEMA DE ESPALDA, PARA QUÉ ME SIRVE?
      </button>

      <transition name="custom-classes-transition" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
        <div v-if="isOpen">
          <div class="px-6 py-2">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <p class="text-base text-julien-gris">
              Este programa te permite trabajar las zonas de tu espalda y de tu pelvis que no tienen suficiente movilidad o que no son suficientemente fuertes para mejorar tu postura y tu equilibrio.
            </p>
            <p class="text-base text-julien-gris"> Eso te permitirá mejorar tu rendimiento deportivo y sobre todo prevenir las futuras lesiones.
            </p>
          </div>
          <div class="px-6 py-2">   <!-- :class="isOpen ? 'block' : 'hidden'" -->
            <span class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris">#EQUILIBRIO</span>
            <span class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris">#DEPORTE</span>
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

