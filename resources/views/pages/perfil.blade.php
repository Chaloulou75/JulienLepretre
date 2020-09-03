@extends('layouts.app')

@section('content')

<div class="py-4  bg-bandeau-gris">

    <div class="w-full mx-auto mt-8 mb-12 bg-white md:w-2/3">
        <div class="w-full overflow-hidden rounded-lg md:flex">
            <div class="w-full md:w-1/2">
                <img class="object-contain w-full h-auto overflow-hidden md:mx-0" loading="auto" alt="julien"
                    src="/img/home/julien.jpg">
            </div>
            <div class="flex flex-col justify-around w-full leading-normal text-center md:w-1/2">
                <div class="md:text-left">
                    <h2 class="px-16 pt-12 pb-2 text-5xl font-bold tracking-widest">Julien <span class="uppercase">
                            Leprêtre </span></h2>
                    <h3
                        class="px-6 text-base not-italic font-semibold leading-relaxed uppercase md:px-16 text-titulos ">
                        Osteopata </br>
                        Instructor en prevención</br>
                        Personal Trainer</br>
                        Conferencista</br>
                        Docente
                    </h3>

                    <p class="px-6 py-8 mt-12 text-base not-italic font-semibold md:pl-16 md:pr-4 ">"Mi meta numero 1 es
                        ayudar a toda la gente a recuperar el control de su cuerpo."</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full py-4 my-24 text-white md:flex bg-julien-gris">
        <div class="flex-1 px-4 py-2 text-center">
            <i class="items-center py-2 text-center fas fa-clinic-medical fa-4x"></i>
            <h2 class="py-2 my-2 text-lg font-semibold">Primer Consultorio</h2>
            <p class="not-italic md:text-left ">He creado mi primer consultorio en 2010 en Francia. Lo vendí en 2018
                para establecerme en Buenos Aires.</p>
        </div>
        <div class="flex-1 px-4 py-2 text-center">
            <i class="items-center py-2 text-center fas fa-people-carry fa-4x"></i>
            <h2 class="py-2 my-2 text-lg font-semibold">Instructor en prevención</h2>
            <p class="not-italic md:text-left ">Estuve a cargo de un programa de capacitación sobre la prevención de los
                riesgos relativos a las actividades físicas en empresas.</p>
        </div>
        <div class="flex-1 px-4 py-2 text-center">
            <i class="items-center py-2 text-center fab fa-instagram fa-4x"></i>
            <h2 class="py-2 my-2 text-lg font-semibold">Consejos de salud</h2>
            <p class="not-italic md:text-left ">Desde mis cuentas Instagram y Facebook propongo consejos y ejercicios
                para mejorar tu movilidad.</p>
        </div>
        <div class="flex-1 px-4 py-2 text-center">
            <i class="items-center py-2 text-center fas fa-clinic-medical fa-4x"></i>
            <h2 class="py-2 my-2 text-lg font-semibold">Segundo Consultorio</h2>
            <p class="not-italic md:text-left ">Desde 2019 trabajo en mi nuevo consultorio en Buenos Aires.</p>
        </div>
        <div class="flex-1 px-4 py-2 text-center">
            <i class="items-center py-2 text-center fas fa-chalkboard-teacher fa-4x"></i>
            <h2 class="py-2 my-2 text-lg font-semibold">Docente</h2>
            <p class="not-italic md:text-left ">Enseño clases sobre el movimiento para una Escuela de osteopatia
                francesa y para formaciones de yoga.</p2>
        </div>
    </div>

    <div class="flex flex-col-reverse items-center justify-around my-24 md:flex-row">


        <div class="w-full px-4 py-4 text-base not-italic text-justify md:w-1/2">
            <p>Me llamo Julian Lepretre y soy un osteópata viviendo en Buenos Aires. Desde que era muy joven, siempre
                estuve muy interesado en la practica deportiva.</p>

            <p>Comencé a practicar judo con 6 años. Luego de muchos años de participar en competiciones de alto nivel,
                comencé a interesarme por otros deportes como el rugby, que practiqué por mas de 15 años. Alpinismo,
                yoga, natación, crossfit… claramente el movimiento, el alto rendimiento y la prevención de lesiones son
                cosas que me fascinaron siempre.</p>

            <p>Durante los 8 años que estuve trabajando en Francia en mi propio consultorio de osteopatía, me
                especialicé en prevención de lesiones y el estudio del movimiento. Realicé conferencias y cursos de
                formación sobre la prevención en varias empresas francesas.</p>

            <p>Siempre me esfuerzo aprender más sobre el cuerpo humano, sus capacidades fisicas y mentales, para ayudar
                a mis pacientes a lograr sus objetivos</p>

            <p>En 2018, tomé la decisión de renunciar a todo lo que había construido en Francia para venir a descubrir
                la Argentina y dedicarme a nuevos proyectos. <span class="italic"> Informar. Educar. Formar.</span> </p>
        </div>

        <div class="w-full m-4 md:w-1/2">
            <img src="/img/home/osteo.jpg" loading="lazy" alt="osteo"
                class="object-contain w-full h-auto mx-auto overflow-hidden rounded md:mx-0 hover:shadow-lg">
        </div>
    </div>

    <div
        class="w-full px-2 py-8 text-xl font-semibold text-center text-white uppercase bg-julien-gris md:px-16 md:text-3xl">
        "tenemos el poder de resolver la mayoria de nuestros problemas nosotros mismos, prevenir lesiones y mejorar
        nuestro rendimiento"

    </div>
</div>

@endsection
