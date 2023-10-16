<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new Student();
        $student->name = 'Oscar';
        $student->last_name = 'Padilla';
        $student->control = '2015714';
        $student->email = 'oscar@gmail.com';
        $student->semester = 7;
        $student->program_id = 1;
        $student->save();
        //
    }
}
