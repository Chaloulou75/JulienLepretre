<template>
  <div class="w-full mx-auto my-4 overflow-hidden text-justify rounded lg:py-2">
    <button @click="isOpen = !isOpen" class="w-full my-2 text-lg font-semibold text-julien-gris">
      <i v-if="!isOpen" class="pl-1 text-blue-600 fas fa-plus-square fa-lg fa-fw"></i>
      <i v-if="isOpen" class="pl-1 text-blue-600 fas fa-minus-square fa-lg fa-fw"></i>
      ¿Y UNA VEZ TERMINADO EL PROGRAMA, QUÉ HAGO?
    </button>

    <transition
      name="custom-classes-transition"
      enter-active-class="animated bounceInLeft"
      leave-active-class="animated bounceOutRight"
    >
      <div v-if="isOpen">
        <div class="px-6 py-2">
          <!-- :class="isOpen ? 'block' : 'hidden'" -->
          <p
            class="text-base text-julien-gris"
          >Una vez el programa terminado, tendrás toda la información y todos los recursos para cuidar bien tu espalda. Podrás seguir practicando las rutinas cada día o cada dos días, variando los ejercicios. Y cuando te sientes suficientemente fuerte y estable, ¡podrás aumentar la intensidad!</p>
        </div>
        <div class="px-6 py-2">
          <!-- :class="isOpen ? 'block' : 'hidden'" -->
          <span
            class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris"
          ></span>
          <span
            class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris"
          ></span>
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
    };
  },
};
</script>
