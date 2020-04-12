@extends('layouts.app')

@section('content')
    
    <div class="w-full bg-julien-gris text-white px-4 pb-24">

        <h1 class="text-center text-3xl tracking-wider uppercase font-semibold py-4">Sobre mi</h1>
             
        <div class="flex flex-col md:flex-row items-center justify-around m-2">
            <div class="w-full md:w-1/3 m-4">
            	<img src="/img/profilmi.jpg" class="transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 h-48 w-48 md:h-full md:w-full mx-auto md:mx-0 rounded-full hover:shadow-lg">
            </div>
            
            <div class="w-full md:w-2/3 text-base text-justify transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110 md:m-4">
                <p>Me llamo Julien LEPRETRE y me dedico a mejorar la salud de mis pacientes.</p>

                <p>Primero en Francia durante 8 años en mi propio consultorio y ahora en Buenos Aires, lo hago por medio de la osteopatía.</p>

                <p>Llevo muchos años tratando de ayudar a la gente, en mi consultorio, mediante cursos de formación, y ahora a través de las redes sociales con Go Treat Yourself on Instagram y Facebook.</p>

                <p>Tu ambiente, los gestos de la vida cotidiana, los traumatismos del pasado tambien son razones que hacen una postura mas o menos equilibrada. Mi labor es entender como fuciona el cuerpo y proponer un tratamiento adaptado a sus necesidades.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row mt-2 mb-4">
            <div class="w-full md:w-1/4 p-2 mb-4 md:ml-4 md:mr-2 border rounded bg-gray-200 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                <h3 class="text-lg text-gray-600 font-semibold my-2 pb-2">Osteopata</h3>
                <h3 class="text-lg text-gray-600 font-semibold my-2 pb-2">Instructor en prevención</h3>   
                <h3 class="text-lg text-gray-600 font-semibold my-2 pb-2">Coach deportivo</h3>
                <h3 class="text-lg text-gray-600 font-semibold my-2">Conferencista</h3>     
            </div> 
            <div class="md:flex w-full md:w-3/4">
                <div class="flex-1 px-2 py-2 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <i class="fas fa-hospital-alt fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Primer Consultorio</h2>
                    <p class=" text-left text-justify">He creado mi primer consultorio en 2010 en Francia. Lo vendí en 2018 para establecerme en Buenos Aires.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <i class="fas fa-people-carry fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Instructor en prevención</h2>
                    <p class="text-left text-justify">Estuve a cargo de un programa de capacitación sobre la prevención de los riesgos relativos a las actividades físicas en empresas.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <i class="fab fa-instagram fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Consejos de salud</h2>
                    <p class="text-left text-justify">Desde mis cuentas Instagram y Facebook « Go Treat Yourself » propongo consejos y ejercicios para mejorar tu movilidad.</p>
                </div>
                <div class="flex-1 px-2 py-2 text-center transition duration-500 ease-in-out transform hover:-translate-y-1 hover:scale-110">
                    <i class="fas fa-hospital-alt fa-6x text-center pb-2 items-center"></i>
                    <h2 class="text-lg md:text-left font-semibold py-2">Segundo Consultorio</h2>
                    <p class="text-left text-justify">Desde 2019 trabajo en mi nuevo consultorio en Buenos Aires.</p>
                </div>
                   
            </div> 

        </div>	        
    </div>

@endsection
