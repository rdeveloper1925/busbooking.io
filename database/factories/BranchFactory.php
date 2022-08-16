<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'branchName'=>$this->faker->citySuffix().'Trinity',
            'branchLocation'=>$this->faker->address(),
            'contactPerson'=>$this->faker->firstName." ".$this->faker->lastName,
            'phoneNumber'=>$this->faker->phoneNumber()
        ];
    }
}
