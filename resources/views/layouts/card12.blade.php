<div class="w-full mx-auto max-w-sm overflow-hidden rounded border bg-white shadow">
  <div class="relative">
    <div class="h-48 bg-cover bg-no-repeat bg-center"
      style="background-image: url({{$programme->imageurl}})" >
    </div>
    <div style="background-color: rgba(0,0,0,0.6)"
      class="absolute bottom-0 mb-2 ml-3 px-2 py-1 rounded text-sm text-white">$ {{ $programme->prix12sesionesPesos }}  / {{ $programme->prix12sesionesEuros }} €</div>
    <div style="bottom: -20px;" class="absolute right-0 w-10 mr-2">
      <a href="#">
        <img class="rounded-full border-2 border-white" src="/img/ProfilInsta.jpg" >
      </a>
    </div>
  </div>
  <div class="p-3">
    <h3 class="mr-10 text-sm truncate-2nd not-italic">
      <a class="text-julien-red" href="/contacto">{{ $programme->title }}</a>
    </h3>
    <div class="flex items-start justify-between">
      <p class="text-sm text-julien-gris">12 sesiones</p>
      <button class="outline text-xs text-julien-gris" title="Bookmark this ad"><i class="far fa-bookmark"></i></button>
    </div>
    <p class="text-xs text-julien-gris"><a href="https://www.instagram.com/julien_lepretre_/" class="hover:underline hover:text-julien-red">Julien Leprêtre</a> • 2020</p>
  </div>
</div>
