<?php

namespace Database\Factories;

use App\Models\Habilidade;
use Illuminate\Database\Eloquent\Factories\Factory;

use app\Models\Curriculo;

class HabilidadeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habilidade::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descricao' => $this->faker->realText('15'),
            'curriculo_id' => Curriculo::inRandomOrder()->first()->id
        ];
    }
}
