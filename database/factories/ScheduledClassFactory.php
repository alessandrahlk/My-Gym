<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ScheduledClass>
 */
class ScheduledClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //since we know that the users id created in the UserSeeder is more than 25 becaudse I already create data in the users table then deleted it and now I will create dummy datas again
        return [
            'instructor_id' => rand(25, 30),
            'class_type_id' => rand(1, 4),
            'date_time' => Carbon::now()->addHours(rand(24, 120))->minutes(0)->seconds(0)
        ];
    }
}