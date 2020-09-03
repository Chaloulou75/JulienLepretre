<template>
  <div class="w-full mx-auto my-4 overflow-hidden text-justify rounded lg:py-2">
    <button @click="isOpen = !isOpen" class="w-full my-2 text-lg font-semibold text-julien-gris">
      <i v-if="!isOpen" class="pl-1 text-blue-600 fas fa-plus-square fa-lg fa-fw"></i>
      <i v-if="isOpen" class="pl-1 text-blue-600 fas fa-minus-square fa-lg fa-fw"></i>
      TENGO UNA PROTRUSIÓN O UNA HERNIA DISCAL... ¿LO PUEDO HACER?
    </button>

    <transition
      name="custom-classes-transition"
      enter-active-class="animated bounceInLeft"
      leave-active-class="animated bounceOutRight"
    >
      <div v-if="isOpen">
        <div class="px-6 py-2">
          <!-- <div :class="isOpen ? 'block' : 'hidden'"></div> -->
          <p
            class="text-base text-julien-gris"
          >Si podés moverte, es exactamente lo que necesitas. Esos ejercicios de baja intensidad te permitirán aprender a mover tu espalda de nuevo, y tener más control durante los movimientos para proteger la columna.</p>
          <p
            class="text-base text-julien-gris"
          >Podrás adaptar los ejercicios en función de tus sensaciones. Varios de esos ejercicios te ayudarán a aliviar tus dolores.</p>
        </div>
        <div class="px-6 py-2">
          <!-- :class="isOpen ? 'block' : 'hidden'" -->
          <span
            class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris"
          >#PROTRUSIÓN</span>
          <span
            class="inline-block px-3 py-1 mr-2 text-sm font-semibold bg-gray-200 rounded-full text-julien-gris"
          >#HERNIA</span>
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
