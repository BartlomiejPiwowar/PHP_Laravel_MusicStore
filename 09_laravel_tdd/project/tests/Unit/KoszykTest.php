<?php

namespace Tests\Unit;

/*use PHPUnit\Framework\TestCase;*/

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class KoszykTest extends TestCase
{
    use RefreshDatabase;
    public function test_user_can_add_item(): void
    {
        $user = User::factory()->create();
        $this->seed(\Database\Seeders\ProductSeeder::class);
        $product = Product::first(); // Pobiera pierwszy dostępny produkt
        $this->assertNotNull($product);

        $this->actingAs($user);

        // Wejście na stronę  produktu
        $response = $this->get(route('products.show', ['product' => $product->id]));
        $response->assertStatus(200);

        // Wysłanie żądania POST do dodania produktu do koszyka
        $response = $this->post(route('koszyk.store', ['productId' => $product->id]), [
            'quantity' => 1,
        ]);

        $response->assertStatus(302); // Sprawdza przekierowanie

        // Sprawdzenie, czy produkt został dodany do koszyka w bazie danych
        $this->assertDatabaseHas('koszyk', [
            'user_id' => $user->id,
            'product_id' => $product->id,
            'quantity' => 1,
        ]);
    }

    public function test_user_can_order(): void
    {
        $user = User::factory()->create();

        $this->seed(\Database\Seeders\ProductSeeder::class);
        $product = Product::first();
        $this->assertNotNull($product);

        $this->actingAs($user);

        $response = $this->post(route(
            'koszyk.store',
            ['productId' => $product->id]
        ), ['quantity' => 1,]);
        $response->assertStatus(302);

        // dashboard (koszyk z poprzedniego testu już istnieje)
        $response = $this->get(route('dashboard'));
        $response->assertStatus(200);
        $response->assertSee('Koszyk');

        $response = $this->post(route('koszyk.checkout'));
        $response->assertStatus(302);

        // Sprawdzenie obecności zamówienia w bazie danych
        $this->assertDatabaseHas('orders', [
            'user_id' => $user->id,
            'status' => 'oczekujące',
        ]);

        // czy koszyk jest pusty po złożeniu zamówienia
        $this->assertDatabaseMissing('koszyk', [
            'user_id' => $user->id,
        ]);
    }
}
