<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Program;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $program = new Program();
        $program->name = 'ITIC';
        $program->description = 'Tecnologias de la Informacion y Comunicaciones';
        $program->save();
        //
    }
}
