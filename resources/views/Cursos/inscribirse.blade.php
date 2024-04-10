@extends('layouts.app')

@section('title', 'Cursos')

@section('content')

    {!! session('success') !!}

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Listado de Cursos</h1>
        <div class="overflow-x-auto">
            <table class="table-auto border-collapse border border-gray-400 w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Nombre del Curso</th>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Estado</th>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Avance</th>
                        <th class="px-4 py-2 bg-gray-200 border border-gray-400">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cursos as $curso)
                        <tr>
                            <td class="px-4 py-2 border border-gray-400">{{ $curso->nombre }}</td>
                            <td class="px-4 py-2 border border-gray-400">
                                @if ($curso->estado)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M0 10a10 10 0 1 1 20 0A10 10 0 0 1 0 10zm2 0a8 8 0 1 0 16 0A8 8 0 0 0 2 10zm9-3a1 1 0 1 0-2 0v4a1 1 0 0 0 2 0V7z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 0c-5.523 0-10 4.477-10 10s4.477 10 10 10 10-4.477 10-10c0-5.523-4.477-10-10-10zm0 17.5c-1.933 0-3.5-1.567-3.5-3.5s1.567-3.5 3.5-3.5 3.5 1.567 3.5 3.5-1.567 3.5-3.5 3.5zm1.06-4.44c-.387.387-.81.704-1.244.951a1.39 1.39 0 0 1-1.49-.269c-.513-.513-.756-1.177-.723-1.858l.027-.186c.062-.483.312-.914.707-1.226a1.62 1.62 0 0 1 1.708-.267c.527.23.958.632 1.234 1.144a1.4 1.4 0 0 1-.22 1.849zm-1.118-5.36l-.002-.001c.002-.001.003-.003.005-.004l-.003.005zm.002.005l.003-.005c-.001.002-.003.003-.005.004z"
                                            clip-rule="evenodd" />
                                    </svg>
                                @endif
                            </td>
                            <td class="px-4 py-2 border border-gray-400">{{ $curso->inscrito }}%</td>
                            <td class="px-4 py-2 border border-gray-400">
                                @if ($curso->estado == 'Inscrito')
                                    <button onclick="confirmarEliminar({{ $curso->id }})"
                                        class="bg-transparent hover:bg-red-500 text-red-700 font-semibold hover:text-white py-2 px-4 border border-red-500 hover:border-transparent rounded mr-2">
                                        Abandonar
                                    </button>
                                    @if ($curso->inscrito == 100)
                                        <a
                                            class="descargarCertificadoBtn bg-transparent hover:bg-green-500 text-green-700 font-semibold hover:text-white py-2 px-4 border border-green-500 hover:border-transparent rounded">
                                            Descargar Certificado
                                        </a>
                                    @endif
                                    <button id="aplicarExamenBtn"
                                        class="bg-transparent hover:bg-yellow-500 text-yellow-700 font-semibold hover:text-white py-2 px-4 border border-yellow-500 hover:border-transparent rounded mr-2"
                                        onclick="window.location.href = '{{ route('examen', ['id' => $curso->id]) }}'">
                                        Aplicar Examen
                                    </button>
                                @elseif($curso->estado == 0)
                                    <form class="formActualizarEstadoCurso"
                                        action="{{ route('actualizarEstadoCurso', ['cursoId' => $curso->id]) }}"
                                        method="POST">
                                        @csrf
                                        <input type="hidden" name="estado" value="Inscrito">
                                        <button
                                            class="inscribirseBtn bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2">Inscribirse</button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <canvas id="confeti-container"
        style="position: fixed; width: 100%; height: 100%; top: 0; left: 0; pointer-events: none;"></canvas>

    <script>
        document.querySelectorAll('.inscribirseBtn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault(); 

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: '¿Deseas inscribirte en este curso?',
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'Sí, inscribirme',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        button.closest('form')
                            .submit(); 
                    }
                });
            });
        });



        function confirmarEliminar(cursoId) {
            Swal.fire({
                title: '¿Estás seguro?',
                text: '¿Estás seguro de abandonar el curso?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    eliminarCurso(cursoId);
                }
            });
        }

        function eliminarCurso(cursoId) {
            fetch('/eliminarCurso/' + cursoId, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        estado: 0,
                        inscrito: 0
                    })
                })
                .then(response => {
                    if (response.ok) {
                        Swal.fire(
                            '¡Curso abandonado!',
                            'El curso ha sido abandonado correctamente.',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    } else {
                        console.error('Error al eliminar el curso');
                        Swal.fire(
                            'Error',
                            'Hubo un problema al intentar eliminar el curso. Por favor, intenta de nuevo más tarde.',
                            'error'
                        );
                    }
                })
                .catch(error => {
                    console.error('Error al realizar la petición Ajax:', error);
                    Swal.fire(
                        'Error',
                        'Hubo un problema al intentar eliminar el curso. Por favor, intenta de nuevo más tarde.',
                        'error'
                    );
                });
        }
        document.querySelectorAll('.descargarCertificadoBtn').forEach(button => {
            button.addEventListener('click', function(event) {
                event.preventDefault();

                var confetiSettings = {
                    target: 'confeti-container'
                };
                var confeti = new ConfettiGenerator(confetiSettings);

                confeti.render();

                Swal.fire({
                    title: '¡Felicidades!',
                    text: 'Has completado el curso con éxito. ¡Descarga tu certificado ahora!',
                    imageUrl: 'https://cursosudgassesorar.com/wp-content/uploads/2022/01/8c6eea90524b4d992dbe84c23a36bf47.gif',
                    imageWidth: 400,
                    imageHeight: 200,
                    imageAlt: 'Ilustración de completar curso',
                    showCancelButton: false,
                    confirmButtonText: 'Descargar',
                    confirmButtonColor: '#4CAF50'
                }).then((result) => {
                    confeti.clear();
                });
            });
        });
    </script>

@endsection
