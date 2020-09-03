<template>
  <div class="w-full mx-auto my-4 overflow-hidden text-justify rounded lg:py-2">
    <button @click="isOpen = !isOpen" class="w-full my-2 text-lg font-semibold text-julien-gris">
      <i v-if="!isOpen" class="pl-1 text-blue-600 fas fa-plus-square fa-lg fa-fw"></i>
      <i v-if="isOpen" class="pl-1 text-blue-600 fas fa-minus-square fa-lg fa-fw"></i>
      ¿DURANTE CUANTO TIEMPO PUEDO DISFRUTAR DE ESTE PROGRAMA DESPUÉS DEL PAGO?
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
          >¡Toda tu vida! Pagas una vez y tenes acceso al programa de por vida!</p>
        </div>
        <div :class="isOpen ? 'block' : 'hidden'" class="px-6 py-2">
          <span
            class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris"
          >#TODALAVIDA</span>
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
