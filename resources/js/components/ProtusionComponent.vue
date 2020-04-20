<template>
    <div class="w-full lg:py-2 text-center text-justify mx-auto rounded overflow-hidden my-4"> 
      <button @click="isOpen = !isOpen" class="w-full font-semibold text-lg text-julien-gris my-2">

          <i v-if="!isOpen" class="fas fa-plus-square fa-lg fa-fw text-blue-600 pl-1"></i>  
          <i v-if="isOpen" class="fas fa-minus-square fa-lg fa-fw text-blue-600 pl-1"></i>
          TENGO UNA PROTRUSIÓN O UNA HERNIA DISCAL... ¿LO PUEDO HACER?
      </button>  
      
      <transition name="custom-classes-transition" enter-active-class="animated bounceInLeft" leave-active-class="animated bounceOutRight">
        <div v-if="isOpen">
          <div class="px-6 py-2"><!-- <div :class="isOpen ? 'block' : 'hidden'"></div> -->
            <p class="text-julien-gris text-base">
              Si podés moverte, es exactamente lo que necesitas. Esos ejercicios de baja intensidad te permitirán aprender a mover tu espalda de nuevo, y tener más control durante los movimientos para proteger la columna.</br>
              Podrás adaptar los ejercicios en función de tus sensaciones. Varios de esos ejercicios te ayudarán a aliviar tus dolores.
            </p>
          </div>
          <div class="px-6 py-2"><!-- :class="isOpen ? 'block' : 'hidden'" -->
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-julien-gris mr-2">#PROTRUSIÓN</span>
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-julien-gris mr-2">#HERNIA</span>
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
