<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $class_ids = DB::table('classes')->pluck('id')->toArray();
        foreach (range(1, 50) as $index) {
            DB::table('students')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->safeEmail,
                'student_number' => $faker->numberBetween(1000, 9999),
                'class_id' => $faker->randomElement($class_ids),
                'status' => $faker->randomElement(['Trial', 'Enrolled', 'Dropped']),
                'date_of_birth' => $faker->date(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
