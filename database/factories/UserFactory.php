<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = 'test' . $this->faker->randomNumber(2);
        return [
            'name' => $user,
            'surname' =>  $user,
            'api_token' => Str::random(64),
        ];
    }
}
