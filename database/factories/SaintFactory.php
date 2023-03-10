<?php
namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

class SaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake()->firstname(),
            'luogoNascita' => fake()->city(),
            'dataBenedizione' => fake()->dateTimeAD(),
            'numeroMiracoli' => fake()->numberBetween(5, 20),
        ];
    }
}