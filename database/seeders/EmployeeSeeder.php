<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Use Model
use App\Models\Employee;

// Use faker
use Faker\Factory as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //static data
        $employee = new Employee();
        $employee->name = 'Arun';
        $employee->phone = '125365895';
        $employee->email = 'arun@yopmail.com';
        $employee->gender = 'M';
        $employee->save();

        // Faker data
        $faker = Faker::create();
        for ($i = 0; $i < 100; $i++) {
            $employee = new Employee();
            $employee->name = $faker->name;
            $employee->phone = $faker->phoneNumber;
            $employee->email = $faker->email;
            $employee->gender = $faker->randomElement(['M', 'F']);
            $employee->save();

        }



    }
}
