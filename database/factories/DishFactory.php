<?php

namespace Database\Factories;

use App\Models\Dish;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DishFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dish::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dish' => $this->faker->text(20),
            'description' => $this->faker->text(50),
            'price' => $this->faker->randomNumber(2),
        ];
    }
}
