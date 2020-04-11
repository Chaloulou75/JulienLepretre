<template>
  <header class="bg-gray-600 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-2">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      
      <div class="flex items-center">  
          <img class="h-16 rounded-full" src="/img/ProfilInsta.jpg" alt="Julien Leprêtre">
          <a href="/" class="block animated zoomInLeft delay-2s slower text-white text-base rounded font-medium transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mx-2 px-2 py-1 hover:bg-gray-500">
            Julien Leprêtre
          </a> 
                     
      </div>
      <div class="sm:hidden">
        <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
          <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path v-if="isOpen" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
            <path v-if="!isOpen" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
          </svg>
        </button>
      </div>
    </div>
    <nav :class="isOpen ? 'block' : 'hidden'" class="px-2 pt-1 pb-2 sm:flex sm:p-0">
      <a href="/programas" class="animated fadeInLeftBig delay-1s slower transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500">Programas</a>
      <a href="/perfil" class="animated fadeInLeftBig faster transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Sobre mi</a>
      <a href="/contacto" class="animated fadeInLeftBig transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Sesiones  personalizadas</a>
      <a href="https://osteopatiafrancesa.com/" class="animated fadeInLeftBig slow transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Consultorio</a>
      <a href="#" class="animated fadeInLeftBig slower transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Testimonios</a>
      <a href="/contacto" class="animated fadeInLeftBig fast transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 mt-1 block px-2 py-1 text-white rounded hover:bg-gray-500 sm:mt-0 sm:ml-2">Contacto</a>
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
