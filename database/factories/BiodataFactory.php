<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\biodata>
 */
class BiodataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            // 'user_id' => $this->faker->6,
            // 'postingan_id' => $this->faker->intdiv(),
            // 'keluarga_id' => $this->faker->intdiv()
        ];
    }
}
