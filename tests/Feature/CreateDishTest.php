<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Dish;
use Tests\TestCase;

class CreateDishTest extends TestCase
{

   use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dish_can_be_created()
    {
        // $dishes = Dish::factory(2)->create();

        // $dishes = $this->getJson('api/dishes');


        $this->withoutExceptionHandling();

        $dish = [
            'dish' => 'ensalada',
            'description' => 'es muy rica',
            'price' => 12,
        ];

        $this->postJson(route('dishes.store'), $dish)
            ->assertStatus(201)
            ->assertJson($dish);
    }
}
