@extends('layouts.app')

@section('content')
    
    <div class="mb-4 text-julien-gris">

        <h1 class="w-full font-black text-3xl text-white bg-julien-gris border-b-1 text-center uppercase py-8 ">Sobre mi
        </h1>
             
        <div class="w-full md:w-2/3 mx-auto bg-white my-6 py-6">
            <div class="w-full md:flex border border-gray-400 rounded-lg overflow-hidden">
                <div class="w-full md:w-1/2">
                    <img class="overflow-hidden object-contain h-auto w-full md:mx-0" alt="julien" src="/img/julien.jpg">
                </div>
                <div class="w-full md:w-1/2 flex flex-col text-center justify-around leading-normal">
                    <div class="md:text-left">
                      <h2 class="text-gray-900 font-bold text-4xl tracking-widest py-12 px-24">Julien <span class="uppercase"> Leprêtre </span></h2>
                        <p class="px-24 text-julien-gris text-lg tracking-wider leading-loose font-semibold not-italic">
                            Osteopata </br>
                            Instructor en prevención</br>
                            Personal Trainer</br>
                            Conferencista</br>
                            Docente
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:flex bg-julien-gris text-white my-4 py-4">
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-clinic-medical fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Primer Consultorio</h2>
                    <p class=" text-justify">He creado mi primer consultorio en 2010 en Francia. Lo vendí en 2018 para establecerme en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-people-carry fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Instructor en prevención</h2>
                    <p class="text-justify">Estuve a cargo de un programa de capacitación sobre la prevención de los riesgos relativos a las actividades físicas en empresas.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fab fa-instagram fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Consejos de salud</h2>
                    <p class="text-justify">Desde mis cuentas Instagram y Facebook « Go Treat Yourself » propongo consejos y ejercicios para mejorar tu movilidad.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-clinic-medical fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Segundo Consultorio</h2>
                    <p class=" text-justify">Desde 2019 trabajo en mi nuevo consultorio en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-4 py-2 text-center">
                    <i class="fas fa-chalkboard-teacher fa-4x text-center py-2 items-center"></i>
                    <h2 class="text-lg font-semibold py-2 my-2">Docente</h2>
                    <p class=" text-justify">Enseno clases sobre el movimiento para una Escuela de osteopatia francesa y para formaciones de yoga.</p2>
                </div>
                   
        </div>



        <div class="flex flex-col md:flex-row items-center justify-around m-2">
            <div class="w-full md:w-1/3 m-4">
            	<img src="/img/profilmi.jpg" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-48 w-48 md:h-full md:w-full mx-auto md:mx-0 rounded-full hover:shadow-lg">
            </div>
            
            <div class="w-full md:w-2/3 text-base text-justify">
                <p>Me llamo Julien LEPRETRE y me dedico a mejorar la salud de mis pacientes.</p>

                <p>Primero en Francia durante 8 años en mi propio consultorio y ahora en Buenos Aires, lo hago por medio de la osteopatía.</p>

                <p>Llevo muchos años tratando de ayudar a la gente, en mi consultorio, mediante cursos de formación, y ahora a través de las redes sociales con Go Treat Yourself on Instagram y Facebook.</p>

                <p>Tu ambiente, los gestos de la vida cotidiana, los traumatismos del pasado tambien son razones que hacen una postura mas o menos equilibrada. Mi labor es entender como fuciona el cuerpo y proponer un tratamiento adaptado a sus necesidades.</p>
            </div>
        </div>

        

        <div class="w-full md:flex md:w-5/6">
                <div class="flex-1 px-2 py-2 text-center">
                    <i class="fas fa-hospital-alt fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Primer Consultorio</h2>
                    <p class=" text-left text-justify">He creado mi primer consultorio en 2010 en Francia. Lo vendí en 2018 para establecerme en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center">
                    <i class="fas fa-people-carry fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Instructor en prevención</h2>
                    <p class="text-left text-justify">Estuve a cargo de un programa de capacitación sobre la prevención de los riesgos relativos a las actividades físicas en empresas.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center">
                    <i class="fab fa-instagram fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Consejos de salud</h2>
                    <p class="text-left text-justify">Desde mis cuentas Instagram y Facebook « Go Treat Yourself » propongo consejos y ejercicios para mejorar tu movilidad.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center">
                    <i class="fas fa-hospital-alt fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Segundo Consultorio</h2>
                    <p class="text-left text-justify">Desde 2019 trabajo en mi nuevo consultorio en Buenos Aires.</p>
                </div>
                   
        </div>        
    </div>

@endsection
