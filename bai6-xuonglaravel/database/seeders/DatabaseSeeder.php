<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Classroom;
use App\Models\Passport;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $student= Student::query()->pluck('id')->all();
        for($i=0;$i<11;$i++){
            Passport::create([
                'passport_number'=>''.$i,
                'issued_date'=>fake()->date(),
                'expiry_date'=>fake()->date(),
                'student_id'=>fake()->randomElement($student)
            ]);
        }
    }
}
