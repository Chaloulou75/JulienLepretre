<template>
  <header class="bg-white sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-2">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <!--  -->

      <div class="flex items-center">
        <!--  -->
        <img
          class="h-16 rounded-full"
          src="/img/home/compress/ProfilInsta.jpg"
          loading="auto"
          alt="Julien"
        />
        <a
          href="/"
          class="block px-2 py-1 mx-2 text-base italic font-semibold uppercase animated zoomInLeft slower md:text-lg text-julien-gris hover:text-julien-red"
        >Julien Leprêtre</a>
      </div>
      <div class="sm:hidden">
        <button
          @click="isOpen = !isOpen"
          type="button"
          class="block text-julien-gris hover:text-julien-red focus:outline-none"
        >
          <!-- focus:text-julien-red -->
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
              v-if="isOpen"
              fill-rule="evenodd"
              d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
            />
            <path
              v-if="!isOpen"
              fill-rule="evenodd"
              d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
            />
          </svg>
        </button>
      </div>
    </div>
    <nav
      :class="isOpen ? 'block' : 'hidden'"
      class="px-2 pt-1 pb-2 not-italic font-bold uppercase sm:flex sm:p-0"
    >
      <a
        href="https://julienlepretre.tiendup.com/c"
        target="_blank"
        class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red"
      >Los Programas</a>
      <a
        href="/consulta-privada"
        class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2"
      >Consulta Privada</a>
      <!-- <a href="/clase" class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2">Clase de movilidad</a> -->
      <a
        href="/blog"
        class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2"
      >Blog</a>
      <a
        href="/testimonios"
        class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2"
      >Testimonios</a>
      <a
        href="/perfil"
        class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2"
      >Sobre mi</a>
      <!-- <a href="https://osteopatiafrancesa.com/" target="_blank" class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2">Consultorio</a> -->
      <!-- <a href="/login" class="block px-2 py-1 mt-1 no-underline text-julien-gris animated bounceInDown hover:text-julien-red sm:mt-0 sm:ml-2">Login</a> -->
    </nav>
  </header>
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
