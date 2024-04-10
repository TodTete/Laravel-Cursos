<?php

//Este proyecto fue realizado por :
// Ricardo Vallejo Sánchez
// Gmail: vallejoricardo3@gmail.com
// Dedicado a mi esposa : 
// Angelica M. G. 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ExamenController;
use App\Http\Controllers\InscribirseController;;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/cursos/java', [CursoController::class, 'java'])
    ->name('cursos.java');

Route::get('/cursos/javascript', [CursoController::class, 'javascript'])
    ->name('cursos.javascript');

Route::get('/cursos/python', [CursoController::class, 'python'])
    ->name('cursos.python');

Route::get('/cursos/c', [CursoController::class, 'c'])
    ->name('cursos.c');

Route::get('/cursos/sql', [CursoController::class, 'sql'])
    ->name('cursos.sql');

Route::get('/cursos/kotlin', [CursoController::class, 'kotlin'])
    ->name('cursos.kotlin');

Route::get('/cursos/ruby', [CursoController::class, 'ruby'])
    ->name('cursos.ruby');

Route::get('/cursos/go', [CursoController::class, 'go'])
    ->name('cursos.go');

Route::get('/cursos/r', [CursoController::class, 'r'])
    ->name('cursos.r');

Route::get('/cursos/php', [CursoController::class, 'php'])
    ->name('cursos.php');

Route::get('/cursos/NoSql', [CursoController::class, 'NoSql'])
    ->name('cursos.NoSql');

Route::get('/cursos/Cobolt', [CursoController::class, 'Cobolt'])
    ->name('cursos.Cobolt');

Route::get('/cursos/Perl', [CursoController::class, 'Perl'])
    ->name('cursos.Perl');

Route::get('/cursos/Smalltack', [CursoController::class, 'Smalltack'])
    ->name('cursos.Smalltack');

Route::get('/cursos/ObjectC', [CursoController::class, 'ObjectC'])
    ->name('cursos.ObjectC');

Route::get('/cursos/NoSql', [CursoController::class, 'NoSql'])
    ->name('cursos.NoSql');

Route::get('/cursos/Html', [CursoController::class, 'Html'])
    ->name('cursos.Html');

Route::get('/cursos/TypeScript', [CursoController::class, 'TypeScript'])
    ->name('cursos.TypeScript');

Route::get('/cursos/Ensamblador', [CursoController::class, 'Ensamblador'])
    ->name('cursos.Ensamblador');

Route::get('/cursos/Dart', [CursoController::class, 'Dart'])
    ->name('cursos.Dart');

Route::get('/cursos/inscribirse', [CursoController::class, 'inscribirse'])
    ->name('cursos.inscribirse');

Route::post('/actualizarEstadoCurso/{cursoId}', [CursoController::class, 'actualizarEstadoCurso'])
    ->name('actualizarEstadoCurso');

Route::post('/eliminarCurso/{cursoId}', [CursoController::class, 'eliminarCurso'])
    ->name('eliminarCurso');

Route::get('/curso/{id}/examen', [CursoController::class, 'examen'])
    ->name('examen');

Route::post('/calificar-examen/{id}', [ExamenController::class, 'calificarExamen'])
    ->name('calificar_examen');

Route::get('/curso/inscribirse', [InscribirseController::class, 'node'])
    ->name('node');
