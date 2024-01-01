<?php

namespace Database\Factories;

use App\Models\Produit;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProduitFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produit::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->text(255),
            'description' => $this->faker->sentence(15),
            'categorie_id' => \App\Models\Categorie::factory(),
        ];
    }
}
