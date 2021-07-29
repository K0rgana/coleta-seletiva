<?php

namespace Database\Factories;

use App\Models\Ad;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'description' => $this->faker->paragraph(2),
            'quantity' => $this->faker->randomNumber(2),

            'user_id'=> \App\Models\User::all()->random()-> id,
            'category_id' => \App\Models\Category::all()->random()-> id,
            'address_id' => \App\Models\Address::all()->random()-> id,
        ];
    }
}
