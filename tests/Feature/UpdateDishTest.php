<?php

namespace Tests\Feature;

use App\Models\Dish;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateDishTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_update_dish()
    {
        $dish = Dish::factory()->make();

        $data= [
            'dish' => $this->faker->sentence,
            'description' => $this->faker->paragraph
        ];

        $this->put(route('dishes.update', $dish->id), $data)
            ->assertStatus(200)
            ->assertJson($data);
    }
}
