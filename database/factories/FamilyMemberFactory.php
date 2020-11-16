<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyMemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'salutation_id' => $this->faker->numberBetween(1, 2),
            'first_name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'nickname' => $this->faker->name,
            'birthday' => $this->faker->date(),
            'email' => $this->faker->unique()->safeEmail,
        ];
    }
}
