<?php

namespace Database\Factories;

use App\Models\Curriculo;
use app\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CurriculoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curriculo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sobre' => $this->faker->realText(100),
            'interesses' => $this->faker->realText(50),
            'user' => User::inRandomOrder()->first()->id,
        ];
    }
}
