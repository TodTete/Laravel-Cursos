<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursosSeeder extends Seeder
{
    public function run()
    {
        $cursos = [
            'Java', 'Go', 'JavaScript', 'C', 'Python', 'SQL', 'Ruby', 'R',
            'PHP', 'Kotlin', 'NoSQL', 'Dart', 'TypeScript', 'Perl', 'Smalltalk',
            'Objective-C', 'HTML', 'Cobol', 'Assembly'
        ];

        foreach ($cursos as $curso) {
            Curso::create([
                'nombre' => $curso,
                'estado' => false,
                'inscrito' => 0
            ]);
        }
    }
}

