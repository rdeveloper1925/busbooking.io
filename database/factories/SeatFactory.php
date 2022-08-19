<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SeatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'seatNumber'=>$this->faker->numberBetween(1,63),
            'busId'=>$this->faker->numberBetween(1,40)
        ];
    }
}
