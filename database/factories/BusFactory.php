<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'numberPlate'=>$this->faker->randomNumber(8),
            'model'=>$this->faker->randomAscii(),
            'seatCount'=>$this->faker->randomElement([64,36,60,25,38]),
            'seatLayout'=>$this->faker->randomAscii()
        ];
    }
}
