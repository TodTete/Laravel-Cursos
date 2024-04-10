@extends('layouts.app')

@section('title', 'C')

@section('content')

    <body class="bg-gray-100">

        <div class="text-center pt-20">
            <h1 class="text-3xl font-bold mb-6">Selecciona el curso de tu interes:</h1>
            <div class="flex flex-wrap justify-center space-x-4">
                <a href="{{ url('/cursos/java') }}" class="text-blue-500 hover:text-blue-800">Java</a>
                <a href="{{ url('/cursos/go') }}" class="text-blue-500 hover:text-blue-800">Go</a>
                <a href="{{ url('/cursos/javascript') }}" class="text-blue-500 hover:text-blue-800">JavaScript</a>
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
        <div class="flex p-9 p-md-5 m-md-3 bg-black">
            <div class="md:w-1/2 mx-auto my-5" style="position: relative; left: 5%; top:10%;">
                <h1 class="text-4xl font-bold text-center text-white mb-4">Programación en C</h1>
                <p class="text-lg mb-4 leading-7 text-white text-justify">C es un lenguaje de programación de propósito
                    general que fue creado en la década de 1970 por Dennis Ritchie en los laboratorios Bell de AT&T. Es un
                    lenguaje de programación de bajo nivel y alto rendimiento que ha influido significativamente en muchos
                    otros lenguajes modernos, como C++, Java, y Python.</p>
                <h2 class="text-xl font-bold text-white mb-2">Temas</h2>
                <ul class="list-disc text-white ml-6">
                    <li>Fundamentos de C</li>
                    <li>Variables y tipos de datos</li>
                    <li>Operadores y expresiones</li>
                    <li>Estructuras de control</li>
                </ul>
                <br>
                <a href="{{ route('node') }}" class="">
                    <button
                        class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Más
                        información</button>
                </a>
            </div>
            <div class="md:w-1/2">
                <img src="https://i.blogs.es/21f7ba/c-lenguaje/1366_2000.jpg"
                    style="max-width: 80%; position: relative; left: 20%; top:6%;"
                    alt="Ilustración de lenguajes de programación" class="w-full h-auto rounded-lg">
            </div>
        </div>

    @endsection
