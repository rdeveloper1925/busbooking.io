<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'routeId'=>$this->faker->numberBetween(1,20),
            'ratePerSeat'=>$this->faker->numberBetween(300,2000),
            'currency'=>$this->faker->currencyCode,
            'parentBranch'=>$this->faker->numberBetween(1,10),
            'busId'=>$this->faker->numberBetween(1,40),
            'userId'=>$this->faker->numberBetween(1,10),
            'driverId'=>$this->faker->numberBetween(1,50)
        ];
    }
}
