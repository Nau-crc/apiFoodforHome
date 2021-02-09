<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Dish;
use PHPUnit\Framework\TestCase;

class CreateDishTest extends TestCase
{

   
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
        dd();

        $this->post(route('dishes.store'), $dish)
            ->assertStatus(201)
            ->assertJson($dish);
    }
}
