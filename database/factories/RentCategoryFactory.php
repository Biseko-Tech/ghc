<?php

namespace Database\Factories;

use App\Models\RentCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class RentCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RentCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
        ];
    }
}
