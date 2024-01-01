<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Produit;

use App\Models\Categorie;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProduitControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_produits(): void
    {
        $produits = Produit::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('produits.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.produits.index')
            ->assertViewHas('produits');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_produit(): void
    {
        $response = $this->get(route('produits.create'));

        $response->assertOk()->assertViewIs('app.produits.create');
    }

    /**
     * @test
     */
    public function it_stores_the_produit(): void
    {
        $data = Produit::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('produits.store'), $data);

        $this->assertDatabaseHas('produits', $data);

        $produit = Produit::latest('id')->first();

        $response->assertRedirect(route('produits.edit', $produit));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_produit(): void
    {
        $produit = Produit::factory()->create();

        $response = $this->get(route('produits.show', $produit));

        $response
            ->assertOk()
            ->assertViewIs('app.produits.show')
            ->assertViewHas('produit');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_produit(): void
    {
        $produit = Produit::factory()->create();

        $response = $this->get(route('produits.edit', $produit));

        $response
            ->assertOk()
            ->assertViewIs('app.produits.edit')
            ->assertViewHas('produit');
    }

    /**
     * @test
     */
    public function it_updates_the_produit(): void
    {
        $produit = Produit::factory()->create();

        $categorie = Categorie::factory()->create();

        $data = [
            'nom' => $this->faker->text(255),
            'description' => $this->faker->sentence(15),
            'categorie_id' => $categorie->id,
        ];

        $response = $this->put(route('produits.update', $produit), $data);

        $data['id'] = $produit->id;

        $this->assertDatabaseHas('produits', $data);

        $response->assertRedirect(route('produits.edit', $produit));
    }

    /**
     * @test
     */
    public function it_deletes_the_produit(): void
    {
        $produit = Produit::factory()->create();

        $response = $this->delete(route('produits.destroy', $produit));

        $response->assertRedirect(route('produits.index'));

        $this->assertModelMissing($produit);
    }
}
