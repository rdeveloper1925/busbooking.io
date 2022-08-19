<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name(),
            'branchId'=>$this->faker->numberBetween(1,10),
            'phoneNumber'=>$this->faker->phoneNumber(),
            'address'=>$this->faker->address(),
            'permitNo'=>$this->faker->randomAscii()
        ];
    }
}
