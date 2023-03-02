<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Suppliers>
 */
class SuppliersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tableau = ['PC', 'Telephone', 'Ipad'];
        return [
            'name' => $this->faker->company(),
            'email' => $this->faker->safeEmail(),
            'category' => $this->faker->randomElement($tableau)
        ];
    }
}
