<?php

namespace Database\Seeders;
use App\Models\student;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class studentseeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i < 35; $i++){
            student::create([
                'first_name' => $faker->firstName(), 
                'last_name' => $faker->lastName(), 
                'email' => $faker->email(),
                'dob' => $faker->date(), 
                'gender' => $faker->randomElement(['Male', 'Female']), 
                'address' => $faker->address(),
                'jurusan' => $faker->randomElement(['Computer Science', 'Accounting', 'Entrepreneur', 'Business', 'Mechanical Engineering', 'Pharmacy'])
            ]);
        }
    
    }
}

