<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Dish;

class DeleteDishTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_dish_can_be_deleted()
    {
        $this->withoutExceptionHandling();
        $dish = Dish::factory()->create();

        $response = $this->delete('/api/dishes/1');
           $response->assertStatus(204);
          
    }
}
