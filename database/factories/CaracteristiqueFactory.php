<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Caracteristique;
use Illuminate\Database\Eloquent\Factories\Factory;

class CaracteristiqueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Caracteristique::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->text(255),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
