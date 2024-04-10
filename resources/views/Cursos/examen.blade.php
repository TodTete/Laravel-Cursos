@section('title', 'Examen')

@section('content')

@section('scripts')
@endsection
<!-- 
//Este proyecto fue realizado por :
// Ricardo Vallejo Sánchez
// Gmail: vallejoricardo3@gmail.com
// Dedicado a mi esposa : 
// Angelica M. G. 
-->
<div class="container">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <center>
        <h1 class="title">Examen para el curso {{ $curso->nombre }}</h1>
        <section class="section">
            <div class="container">
                <div id="temporizador" class="has-text-centered">
                    <p class="subtitle">Temporizador: <span id="minutos">5</span>:<span id="segundos">00</span></p>
                </div>
            </div>
        </section>

    </center>
    <form id="quizForm" action="{{ route('calificar_examen', ['id' => $curso->id]) }}" method="POST">
        @csrf

        <div class="box">
            <p class="subtitle">¿Cuál de las siguientes opciones describe mejor la programación orientada a objetos?</p>

            <div class="control">
                <label class="radio">
                    <input type="radio" name="q1" value="correcta"> a) Un enfoque para modelar conceptos del
                    mundo real usando clases y objetos.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q1" value="incorrecta"> b) Un estilo de programación que se centra
                    en funciones y procedimientos.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q1" value="incorrecta"> c) Un método para optimizar el rendimiento
                    del código fuente.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q1" value="incorrecta"> d) Un tipo de programación que utiliza
                    exclusivamente estructuras de control condicional.
                </label>
            </div>
        </div>

        <div class="box">
            <p class="subtitle">¿Qué es un bucle en programación?</p>

            <div class="control">
                <label class="radio">
                    <input type="radio" name="q2" value="correcta"> a) Una estructura de control que repite un
                    bloque de código varias veces.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q2" value="incorrecta"> b) Una variable que puede almacenar
                    múltiples valores.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q2" value="incorrecta"> c) Una función que calcula el promedio de
                    una serie de números.
                </label><br>
                <label class="radio">
                    <input type="radio" name="q2" value="incorrecta"> d) Un tipo de dato utilizado para almacenar
                    texto.
                </label>
            </div>
        </div>

        <button type="submit" class="button is-primary">Calificar Examen</button>
    </form>
</div>

<script>
   $(document).ready(function() {
        var minutos = 5;
        var segundos = 0;

        var intervalo = setInterval(function() {
            if (segundos == 0) {
                if (minutos == 0) {
                    clearInterval(intervalo);
                     window.location.href = "http://127.0.0.1:8000/cursos/inscribirse";
                    return;
                } else {
                    minutos--;
                    segundos = 59;
                }
            } else {
                segundos--;
            }

            var segundosFormateados = segundos < 10 ? "0" + segundos : segundos;

            $("#minutos").text(minutos);
            $("#segundos").text(segundosFormateados);
        }, 1000);
    });
</script>
