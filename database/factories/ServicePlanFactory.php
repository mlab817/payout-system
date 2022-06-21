<?php

namespace Database\Factories;

use App\Models\Operator;
use App\Models\PaymentScheme;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServicePlan>
 */
class ServicePlanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randomNumber = $this->faker->randomNumber(2);

        return [
            'operator_id' => Operator::all()->random()->id,
            'route_id' => 1,
            'nau' => $randomNumber,
            'nou' => $randomNumber,
            'operating_hours_number' => $this->faker->numberBetween(20, 24),
            'operating_hours_start' => '04:00',
            'operating_hours_end' => '23:00',
            'stations_count' => 18,
            'dwell_time' => $this->faker->numberBetween(1, 2),
            'weekday_required_trips' => round(0.8 * $randomNumber),
            'weekend_required_trips' => round(0.7 * $randomNumber),
            'payment_scheme_id' => PaymentScheme::all()->random()->id,
        ];
    }
}
