<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\RakModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RakModel>
 */
class RakModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_rak'=> $this->faker->words(),
            'nomor_rak'=>$this->faker->paragraph()
        ];
    }
}
