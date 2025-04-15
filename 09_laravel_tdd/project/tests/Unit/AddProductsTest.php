<?php

namespace Tests\Unit;

use App\Models\Product;
use Database\Seeders\ProductSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class AddProductsTest extends TestCase
{
    use RefreshDatabase;

    public function test_see_page_for_admin(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $this->actingAs($admin);
        $response = $this->get(route('products.index'));
        $response->assertStatus(200);
        $response->assertSee('Dodaj nowy'); // czyli jestesmy na stronie dla admina - ok
    }

    public function test_admin_can_add_product(): void
    {
        $admin = User::factory()->create([
            'is_admin' => true,
        ]);
        $this->actingAs($admin);

        $productData = [
            'name' => 'Nowy Produkt',
            'description' => 'Opis nowego produktu.',
            'price' => 199.99,
            'quantity' => 10,
            'type' => 'Instrumenty smyczkowe',
        ];

        $response = $this->post(route('products.store'), $productData);
        $response->assertStatus(302);
        $response->assertRedirect(route('products.index'));

        $this->assertDatabaseHas('products', [
            'name' => 'Nowy Produkt',
            'description' => 'Opis nowego produktu.',
            'price' => 199.99,
            'quantity' => 10,
            'type' => 'Instrumenty smyczkowe',
        ]);
    }
    public function test_admin_can_access_edit_product_form(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);

        $this->seed(ProductSeeder::class);
        $product = Product::first();
        $this->assertNotNull($product);

        $this->actingAs($admin);

        $response = $this->get(route('products.edit', $product->id));

        // Sprawdzamy, czy formularz edycji jest dostępny
        $response->assertStatus(200);
        $response->assertSee('Edycja Produktu');
        $response->assertSee($product->name);
    }
}
