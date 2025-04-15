<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class KonkursTest extends TestCase
{
    use RefreshDatabase;

    public function test_show_konkurs_for_logged_in(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get(route('konkurs.show'));
        $response->assertStatus(200);
        $response->assertSee('Konkurs');
    }

    public function test_submit_konkurs_form(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);

        Storage::fake('public');
        $response = $this->post(route('konkurs.submit'), [
            'name' => 'Zbyszek Pomidor',
            'email' => 'pmoidorZbigniew@example.com',
            'answer' => 'Muzyką jest kuchnia mojej żony',
        ]);

        $response->assertStatus(200);

        // Sprawdzenie, czy rekord został zapisany w bazie danych
        $this->assertDatabaseHas('konkurs', [
            'name' => 'Zbyszek Pomidor',
            'email' => 'pmoidorZbigniew@example.com',
            'answer' => 'Muzyką jest kuchnia mojej żony',
        ]);
    }

    public function test_konkurs_form_submission_with_missing_data(): void
    {
        $response = $this->post(route('konkurs.submit'), [
            'name' => '',
            'email' => 'jan.kowalski@example.com',
            'answer' => '',
        ]);

        $response->assertStatus(302);
        // nie widzimy tego bo nie wypelnilismy wszystkeigo
        $response->assertDontSee('Dziękujemy za zgłoszenie!');
    }
    public function test_admin_see_zgloszenia(): void
    {
        $admin = User::factory()->create(['is_admin' => true]);
        $this->actingAs($admin);
        $response = $this->get(route('konkurs.index'));
        $response->assertStatus(200);
        $response->assertSee('Zgłoszenia Konkursowe');
    }
}
