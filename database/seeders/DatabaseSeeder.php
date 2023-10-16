<?php

namespace Database\Seeders;
use App\Models\Student;
use App\Models\Program;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(ProgramSeeder::class);
        $this->call(StudentSeeder::class);
        Program::factory(5)->create();
        Student::factory(5)->create();

    }
}
