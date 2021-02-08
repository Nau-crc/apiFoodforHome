<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteDishTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dish_can_be_deleted($dish)
    {
        $dish = [
            'dish' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];

        $this->delete(route('dishes.delete'), $dish)
            ->assertStatus(204)
            ->assertJson($dish);
    }
}
