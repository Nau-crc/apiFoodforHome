<?php

namespace Tests\Feature;

use App\Models\Dish;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateDishTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_update_dish()
    {
        $this->withoutExceptionHandling();
        $dish = Dish::factory()->create();
        $data = [
            'dish' => 'cacahuete',
            'description' => 'sabroso',
            'price' => 4
        ];

        $this->put(route('dishes.update', $dish->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }
}
