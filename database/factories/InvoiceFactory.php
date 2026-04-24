<?php

namespace Database\Factories;
use Database\Factories\CustomerFactory;
use App\Models\Invoice;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = $this->faker->randomElement(['B', 'P', 'V']);

        return [
            'customer_id' => CustomerFactory::new(),
            'amount' => $this->faker->numberBetween(100, 10000),
            'status' => $status,
            'billed_date' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'paid_date' => $status ==='P' ? $this->faker->dateTimeBetween('-1 year', 'now') : null
        ];
    }
}
