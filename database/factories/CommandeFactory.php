<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommandeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Commande::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ref' => $this->faker->text(255),
            'prixTotale' => $this->faker->randomNumber(2),
            'qauntite' => $this->faker->randomNumber(2),
            'statu' => $this->faker->text(255),
            'user_id' => \App\Models\User::factory(),
            'produit_id' => \App\Models\Produit::factory(),
        ];
    }
}
