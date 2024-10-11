<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'firts_name'       =>fake()->firstName(),
            'last_name'        =>fake()->lastName(),
            'email'            =>fake()->unique()->email(),
            'date_of_birth'    =>fake()->date(),
            'hire_date'        =>fake()->dateTime(),
            'salary'           =>fake()->randomFloat(2,1,1000),
            'is_active'        =>rand(0,1),
            'deparment_id'     =>fake()->randomElement([1,2,3,4]) ,
            'manager_id'       =>fake()->randomElement([1,2,3,4]),
            'address'          =>fake()->address(),
        ];
    }
}
