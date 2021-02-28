<?php

namespace Database\Factories;

use App\Models\Experiencia;
use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;
use app\Models\Curriculo;

class ExperienciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Experiencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $dt = Carbon::now();

        return [
            'funcao' => $this->faker->jobTitle(),
            'empresa' => $this->faker->company(),
            'inicio' => $dt,
            'fim' => $dt->addYear(4),
            'curriculo_id' => Curriculo::inRandomOrder()->first()->id
        ];
    }
}
