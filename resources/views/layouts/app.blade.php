<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') - Laravel App</title>
    <!-- Font Awesome 6 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha384-ezxm94L+VW41NCE2zrUqy+uFQ4Vl67DhAy/gU8+khZeUSVMpLbhba5I5g8v3FfmY" crossorigin="anonymous">
    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
    <!-- Anime.js -->
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Confetti.js -->
    <script src="https://cdn.jsdelivr.net/npm/confetti-js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mathusummut/confetti.js@latest/confetti.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    @if (request()->routeIs('curso.examen'))
    @else
        <nav class="flex py-5 bg-green-500 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl font-bold">Cursos UTTECAM</p>
            </div>
            <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
                @if (auth()->check())
                    <li class="mx-4">
                        <p class="text-xl">Bienvenido <b>{{ auth()->user()->name }}</b></p>
                    </li>
                    <li class="mx-6">
                        <a href="{{ route('login.destroy') }}"
                            class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">Cerrar Sesión</a>
                    </li>
                    <li>
                        <a href="{{ url('/cursos/inscribirse') }}"
                            class="font-bold py-3 px-4 rounded-md bg-blue-500 hover:bg-blue-600">Mis cursos</a>
                    </li>
                    <li class="mx-4">
                        <a href="{{ route('login.index') }}"
                            class="font-bold py-3 px-4 rounded-md bg-yellow-500 hover:bg-yellow-600">Inicio</a>
                    </li>
                @else
                    <li class="mx-6">
                        <a href="{{ route('login.index') }}"
                            class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md">Iniciar Sesión</a>
                    </li>
                    <li>
                        <a href="{{ route('register.index') }}"
                            class="font-semibold border-2 border-white py-2 px-4 rounded-md hover:bg-white hover:text-indigo-700">Registrarse</a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
    @yield('content')
</body>
</html>