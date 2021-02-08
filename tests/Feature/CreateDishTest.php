<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateDishTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dish_can_be_created()
    {
        $dish = [
            'dish' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
        ];

        $this->post(route('dishes.store'), $dish)
            ->assertStatus(201)
            ->assertJson($dish);
    }
}
