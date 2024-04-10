<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use Illuminate\Support\Facades\Redirect;

class CursoController extends Controller
{
    public function actualizarEstadoCurso(Request $request, $cursoId)
    {
        $curso = Curso::findOrFail($cursoId);
        $curso->estado = $request->estado;
        $curso->save();

        $script = "<script>";
        $script .= "Swal.fire({";
        $script .= "title: '¡Te has inscrito en el curso!',";
        $script .= "text: '¡Mucha suerte!',";
        $script .= "icon: 'success'";
        $script .= "});";
        $script .= "</script>";

        return redirect()->back()->with('success', $script);
    }

    public function examen($id)
{
    $curso = Curso::find($id); 
    return view('Cursos.examen')->with('curso', $curso);
}


    public function eliminarCurso(Request $request, $cursoId)
    {
        $curso = Curso::findOrFail($cursoId);
        $curso->estado = $request->estado;
        $curso->inscrito = $request->inscrito;
        $curso->save();

        return response()->json(['message' => 'Curso eliminado exitosamente'], 200);
    }


    public function inscribirse()
    {
        $cursos = Curso::all();
        return view('Cursos.inscribirse', compact('cursos'));
    }

    public function java()
    {
        return view('cursos.java');
    }

    public function javascript()
    {
        return view('cursos.javascript');
    }

    public function python()
    {
        return view('cursos.python');
    }

    public function c()
    {
        return view('cursos.c');
    }

    public function sql()
    {
        return view('cursos.sql');
    }

    public function kotlin()
    {
        return view('cursos.kotlin');
    }

    public function ruby()
    {
        return view('cursos.ruby');
    }

    public function go()
    {
        return view('cursos.go');
    }

    public function r()
    {
        return view('cursos.r');
    }

    public function php()
    {
        return view('cursos.php');
    }

    public function NoSql()
    {
        return view('cursos.NoSql');
    }

    public function Cobolt()
    {
        return view('cursos.Cobolt');
    }

    public function Perl()
    {
        return view('cursos.Perl');
    }

    public function Smalltack()
    {
        return view('cursos.Smalltack');
    }

    public function ObjectC()
    {
        return view('cursos.ObjectC');
    }

    public function Html()
    {
        return view('cursos.Html');
    }

    public function TypeScript()
    {
        return view('cursos.TypeScript');
    }

    public function Ensamblador()
    {
        return view('cursos.Ensamblador');
    }

    public function Dart()
    {
        return view('cursos.Dart');
    }
}
