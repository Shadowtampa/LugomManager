<?php

namespace Database\Factories;

use App\Models\Store;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'alias' => $this->faker->word,
            'address' => $this->faker->address,
            'description' => $this->faker->sentence,
            'contact' => $this->faker->phoneNumber,
        ];
    }
}
