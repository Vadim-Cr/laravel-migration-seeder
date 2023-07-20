<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Raylway>
 */
class RaylwayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company'=> fake() -> company(),
            'start_station'=> fake() -> city(),
            'end_station'=> fake() -> city(),
            'departure_time'=> fake() -> dateTimeBetween('-2 day', '-1 day'),
            'arrival_time'=> fake() -> dateTimeBetween('-1 day', '0 day'),
            'train_code'=> fake() -> unique()-> numerify('##########'),
            'carriage_count'=> fake() -> numberBetween(1, 20),
            'on_time'=> fake() -> boolean(),
            'cancelled' => fake() -> boolean() 
        ];
    }
}

php artisan make:seeder RaylwayTableSeeder