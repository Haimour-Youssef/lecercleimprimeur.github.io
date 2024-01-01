<?php

namespace Database\Factories;

use App\Models\Detail;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class DetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Detail::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->text(255),
            'thumbnail' => $this->faker->text(255),
            'prix' => $this->faker->randomNumber(2),
            'caracteristique_id' => \App\Models\Caracteristique::factory(),
            'detail_id' => function () {
                return \App\Models\Detail::factory()->create([
                    'detail_id' => null,
                ])->id;
            },
        ];
    }
}
