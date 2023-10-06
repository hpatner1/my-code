<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'full_name' => fake()->name(),
            'address' => fake()->streetAddress(),
            'country' => fake()->country(),
            'state' => fake()->streetSuffix(),
            'local_government' => fake()->streetName(),
            'zip' => fake()->numberBetween(1 ,100),
            'birthdate'=> fake()->dateTime(),
            // 'gender' => fake()->titleMale(),
             'p_mobile' => fake()->phoneNumber(),
               'p_email'=> fake()->unique()->safeEmail(),
               'p_address'=> fake() ->streetAddress(),
                 'class' => fake()->buildingNumber(),
                  'section' => fake() -> streetAddress(),
                   'admision_No' => $this->faker->numberBetween(1,100),

                   

           
        ];
    }
}
