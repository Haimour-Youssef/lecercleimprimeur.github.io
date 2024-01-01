<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);

        $this->call(CaracteristiqueSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(CommandeSeeder::class);
        $this->call(DetailSeeder::class);
        $this->call(ProduitSeeder::class);
        $this->call(UserSeeder::class);
    }
}
