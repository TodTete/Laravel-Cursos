@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <body class="bg-gray-100">
        <div class="text-center pt-20">
            <h1 class="text-3xl font-bold mb-6">Selecciona el curso de tu interes:</h1>
            <div class="flex flex-wrap justify-center space-x-4">
                <a href="{{ url('/cursos/java') }}" class="text-blue-500 hover:text-blue-800">Java</a>
                <a href="{{ url('/cursos/go') }}" class="text-blue-500 hover:text-blue-800">go</a>
                <a href="{{ url('/cursos/javascript') }}" class="text-blue-500 hover:text-blue-800">JavaScript</a>
                <a href="{{ url('/cursos/c') }}" class="text-blue-500 hover:text-blue-800">C</a>
                <a href="{{ url('/cursos/python') }}" class="text-blue-500 hover:text-blue-800">Python</a>
                <a href="{{ url('/cursos/sql') }}" class="text-blue-500 hover:text-blue-800">SQL</a>
                <a href="{{ url('/cursos/ruby') }}" class="text-blue-500 hover:text-blue-800">Ruby</a>
                <a href="{{ url('/cursos/r') }}" class="text-blue-500 hover:text-blue-800">R</a>
                <a href="{{ url('/cursos/php') }}" class="text-blue-500 hover:text-blue-800">PHP</a>
                <a href="{{ url('/cursos/kotlin') }}" class="text-blue-500 hover:text-blue-800">Kotlin</a>
                <a href="{{ url('/cursos/NoSql') }}" class="text-blue-500 hover:text-blue-800">NoSql</a>
                <a href="{{ url('/cursos/Dart') }}" class="text-blue-500 hover:text-blue-800">Dart</a>
                <a href="{{ url('/cursos/TypeScript') }}" class="text-blue-500 hover:text-blue-800">TypeScript</a>
                <a href="{{ url('/cursos/Perl') }}" class="text-blue-500 hover:text-blue-800">Perl</a>
                <a href="{{ url('/cursos/Smalltack') }}" class="text-blue-500 hover:text-blue-800">Smalltack</a>
                <a href="{{ url('/cursos/ObjectC') }}" class="text-blue-500 hover:text-blue-800">Object-C</a>
                <a href="{{ url('/cursos/Html') }}" class="text-blue-500 hover:text-blue-800">Html</a>
                <a href="{{ url('/cursos/Cobolt') }}" class="text-blue-500 hover:text-blue-800">Cobolt</a>
                <a href="{{ url('/cursos/Ensamblador') }}" class="text-blue-500 hover:text-blue-800">Ensamblador</a>
            </div>
        </div>


        <br><br>

        <div class="flex items-center justify-center bg-blue-900 text-white p-12">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-5xl font-bold mb-4">Descubre el Mundo de la Programación</h1>
                <p class="text-lg mb-8 leading-7">
                    Embárcate en una travesía única hacia el conocimiento con nuestros cursos de lenguajes de programación.
                    Sumérgete en un fascinante viaje donde cada línea de código se convierte en una puerta hacia la
                    innovación. Prepárate para una experiencia emocionante que no solo mejorará tus habilidades técnicas,
                    sino que también revolucionará tu perspectiva sobre la tecnología y su impacto en el mundo moderno.
                </p>
                <p class="text-lg mb-8 leading-7">
                    En este emocionante recorrido, te ofrecemos no solo el aprendizaje de lenguajes de programación, sino
                    también la oportunidad de explorar conceptos avanzados y aplicaciones prácticas que te prepararán para
                    los desafíos del futuro tecnológico. ¿Estás listo para transformar tu carrera y adentrarte en el
                    apasionante universo de la programación?
                </p>
            </div>
            <div class="flex-shrink-0 md:w-1/2 ml-12">
                <img src="https://miro.medium.com/v2/resize:fit:1000/0*qSD6Z697a5baxF8H.gif"
                    alt="Ilustración de lenguajes de programación" class="w-full h-auto rounded-lg">
            </div>
        </div>

        <footer class="bg-gray-800 text-white p-6">
            <div class="container mx-auto">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-2xl font-bold">Contacto: Ricardo Vallejo Sanchez</h2>
                        <p class="mt-2">Dirección: Tec, Pueb.</p>
                        <p>Teléfono: 220-125-3713</p>
                        <p>Email: vallejoricardo3@gmail.com</p>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold">Visitame en:</h2>
                        <div class="flex space-x-4 mt-2">
                            <a href="#" class="text-blue-500 hover:text-blue-300">
                                <i class="fab fa-facebook-square"></i> Facebook
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-300">
                                <i class="fab fa-twitter-square"></i> Twitter
                            </a>
                            <a href="#" class="text-blue-500 hover:text-blue-300">
                                <i class="fab fa-linkedin"></i> LinkedIn
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    @endsection
