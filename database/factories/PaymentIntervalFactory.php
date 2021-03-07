<?php

namespace Database\Factories;

use App\Models\PaymentInterval;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentIntervalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PaymentInterval::class;

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
