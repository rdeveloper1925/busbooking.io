<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $origin= $this->faker->city();
        $destination= $this->faker->city();
        return [
            'origin'=>$origin,
            'finalDestination'=>$destination,
            'routeSlug'=> $origin." -> ".$destination,
            'departureDateTime'=>$this->faker->dateTimeThisMonth(),
            'userId'=>$this->faker->numberBetween(1,10),
            'branchId'=>$this->faker->numberBetween(1,10)
        ];
    }
}
