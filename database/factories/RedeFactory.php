<?php

namespace Database\Factories;

use App\Models\Rede;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class RedeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rede::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $list = ['orkut', 'facebook', 'linkedin'];

        return [
            'nome' => $this->faker->name(),
            'link' => $list[array_rand($list)],
            'user_id' => User::inRandomOrder()->first()->id,
        ];
    }
}
