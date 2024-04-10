<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class ExamenController extends Controller
{
    public function calificarExamen(Request $request, $id)
    {
        $respuestas = $request->only(['q1', 'q2']);
        $calificacion = $this->calcularCalificacion($respuestas);
        $curso = Curso::findOrFail($id);

        $preguntas = [
            'q1' => '¿Cuál de las siguientes opciones describe mejor la programación orientada a objetos?',
            'q2' => '¿Qué es un bucle en programación?'
        ];

        $resultado = [
            'correctas' => [],
            'incorrectas' => []
        ];
        foreach ($respuestas as $pregunta => $respuesta) {
            if ($respuesta === 'correcta') {
                $resultado['correctas'][$pregunta] = $respuesta;
            } else {
                $resultado['incorrectas'][$pregunta] = $respuesta;
            }
        }
        $mensaje = "Tu calificación es: {$calificacion['correctas']} de {$calificacion['total']}.<br>";
        $mensaje .= "Respuestas correctas:<br>";
        foreach ($resultado['correctas'] as $pregunta => $respuesta) {
            $mensaje .= "- $preguntas[$pregunta]: $respuesta<br>";
        }
        $mensaje .= "Respuestas incorrectas:<br>";
        foreach ($resultado['incorrectas'] as $pregunta => $respuesta) {
            $mensaje .= "- $preguntas[$pregunta]: $respuesta<br>";
        }
        if ($calificacion['correctas'] === $calificacion['total']) {
            $curso->inscrito = 100;
            $curso->save();
        }
        return view('calificacion_examen', compact('mensaje', 'curso'));
    }
    private function calcularCalificacion($respuestas)
    {
        $totalPreguntas = 2;
        $respuestasCorrectas = 0;
        if ($respuestas['q1'] === 'correcta') {
            $respuestasCorrectas++;
        }
        if ($respuestas['q2'] === 'correcta') {
            $respuestasCorrectas++;
        }
        return [
            'correctas' => $respuestasCorrectas,
            'total' => $totalPreguntas
        ];
    }
}
