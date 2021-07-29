<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Address::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'postalcode' => $this->faker->postcode(),
            'postalcode' => $this->faker->numerify('########'),
            'city' => $this->faker->city(),
            'district' => $this->faker->state(),
            'street' => $this->faker->streetName(),
            'number' => $this->faker->buildingNumber(),
            'reference' => $this->faker->secondaryAddress(),
        ];
    }
}
