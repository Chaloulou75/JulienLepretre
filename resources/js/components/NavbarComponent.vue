<template>
  <header class="bg-white sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-2 ">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0"> <!--  -->
      
      <div class="flex items-center "> <!--  -->
          <img class="h-16 rounded-full" src="/img/ProfilInsta.jpg" alt="Julien">
          <a href="/" class="block animated zoomInLeft delay-1s slower text-lg text-julien-gris hover:text-julien-red font-semibold italic uppercase mx-2 px-2 py-1" >
            Julien Leprêtre
          </a> 
                     
      </div>
      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-julien-gris hover:text-julien-red focus:outline-none"><!-- focus:text-julien-red -->
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-1 pb-2 sm:flex sm:p-0 uppercase not-italic font-bold">
      <a href="/programas" class="no-underline text-julien-gris animated fadeInLeftBig fast hover:text-julien-red mt-1 block px-2 py-1"> Los Programas</a>
      <a href="#" class="no-underline text-julien-gris animated fadeInLeftBig slow hover:text-julien-red mt-1 block px-2 py-1 sm:mt-0 sm:ml-2">Testimonios</a>
      <a href="https://osteopatiafrancesa.com/" class="no-underline text-julien-gris animated fadeInLeftBig slower hover:text-julien-red mt-1 block px-2 py-1 sm:mt-0 sm:ml-2">Consultorio</a>
      <a href="/perfil" class="no-underline text-julien-gris animated fadeInLeftBig faster hover:text-julien-red mt-1 block px-2 py-1 sm:mt-0 sm:ml-2">Sobre mi</a>
      <a href="/contacto" class="no-underline text-julien-gris animated fadeInLeftBig fast hover:text-julien-red mt-1 block px-2 py-1 sm:mt-0 sm:ml-2">Contacto</a>
      
      <!-- <a href="/login" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Conectarse</a> -->
    </nav>
  </header>
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
