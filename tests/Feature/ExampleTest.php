<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee(route('auth'), false)
            ->assertSee(route('checkout'), false)
            ->assertDontSee('100% Halal ID');
    }

    public function test_the_auth_route_renders_the_account_page(): void
    {
        $response = $this->get(route('auth'));

        $response->assertOk()
            ->assertSee('Selamat datang')
            ->assertSee('Masuk dan pendaftaran belum tersedia.');
    }

    public function test_the_checkout_route_explains_that_checkout_is_not_available(): void
    {
        $response = $this->get(route('checkout'));

        $response->assertOk()
            ->assertSee('Checkout belum tersedia');
    }
}
