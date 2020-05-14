@extends('layouts.app')

@section('content')
    
    <div class=" bg-bandeau-gris py-4">
             
        <div class="w-full md:w-2/3 mx-auto bg-white mt-8 mb-12">
            <div class="w-full md:flex rounded-lg overflow-hidden">
                <div class="w-full md:w-1/2">
                    <img class="overflow-hidden object-contain h-auto w-full md:mx-0" loading="auto" alt="julien" src="/img/home/julien.jpg">
                </div>
                <div class="w-full md:w-1/2 flex flex-col text-center justify-around leading-normal">
                    <div class="md:text-left">
                      <h2 class="font-bold text-5xl tracking-widest pt-12 pb-2 px-16">Julien <span class="uppercase"> Leprêtre </span></h2>
                        <h3 class="px-6 md:px-16 text-titulos text-base leading-relaxed font-semibold not-italic uppercase ">
                            Osteopata </br>
                            Instructor en prevención</br>
                            Personal Trainer</br>
                            Conferencista</br>
                            Docente
                        </h3>

                        <p class="font-semibold text-base not-italic py-8 mt-12 px-6 md:pl-16 md:pr-4 ">"Mi meta numero 1 es ayudar a toda la gente a recuperar el control de su cuerpo."</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:flex bg-julien-gris text-white my-24 py-4">
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-clinic-medical fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Primer Consultorio</h2>
                    <p class="md:text-left not-italic ">He creado mi primer consultorio en 2010 en Francia. Lo vendí en 2018 para establecerme en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-people-carry fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Instructor en prevención</h2>
                    <p class="md:text-left not-italic ">Estuve a cargo de un programa de capacitación sobre la prevención de los riesgos relativos a las actividades físicas en empresas.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fab fa-instagram fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Consejos de salud</h2>
                    <p class="md:text-left not-italic ">Desde mis cuentas Instagram y Facebook propongo consejos y ejercicios para mejorar tu movilidad.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-clinic-medical fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Segundo Consultorio</h2>
                    <p class="md:text-left not-italic ">Desde 2019 trabajo en mi nuevo consultorio en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Docente</h2>
                    <p class="md:text-left not-italic ">Enseño clases sobre el movimiento para una Escuela de osteopatia francesa y para formaciones de yoga.</p2>
                </div>                   
        </div>

        <div class="flex flex-col-reverse md:flex-row items-center justify-around my-24">
            
            
            <div class="w-full md:w-1/2 text-base text-justify not-italic px-4 py-4">
                <p>Me llamo Julian Lepretre y soy un osteópata viviendo en Buenos Aires. Desde que era muy joven, siempre estuve muy interesado en la practica deportiva.</p>

                <p>Comencé a practicar judo con 6 años. Luego de muchos años de participar en competiciones de alto nivel, comencé a interesarme por otros deportes como el rugby, que practiqué por mas de 15 años. Alpinismo, yoga, natación, crossfit… claramente el movimiento, el alto rendimiento y la prevención de lesiones son cosas que me fascinaron siempre.</p>

                <p>Durante los 8 años que estuve trabajando en Francia en mi propio consultorio de osteopatía, me especialicé en prevención de lesiones y el estudio del movimiento. Realicé conferencias y cursos de formación sobre la prevención en varias empresas francesas.</p>

                <p>Siempre me esfuerzo aprender más sobre el cuerpo humano, sus capacidades fisicas y mentales, para ayudar a mis pacientes a lograr sus objetivos</p>

                <p>En 2018, tomé la decisión de renunciar a todo lo que había construido en Francia para venir a descubrir la Argentina y dedicarme a nuevos proyectos. <span class="italic"> Informar. Educar. Formar.</span> </p>
            </div>

            <div class="w-full md:w-1/2 m-4">
                <img src="/img/home/osteo.jpg" loading="auto" alt="osteo" class="overflow-hidden object-contain h-auto w-full mx-auto md:mx-0 rounded hover:shadow-lg">
            </div>
        </div>

        <div class="w-full text-white text-center bg-julien-gris py-8 px-2 md:px-16 text-xl md:text-3xl font-semibold uppercase">
            "tenemos el poder de resolver la mayoria de nuestros problemas nosotros mismos, prevenir lesiones y mejorar nuestro rendimiento" 
            
        </div>      
    </div>

@endsection
