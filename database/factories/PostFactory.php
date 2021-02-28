<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

use Carbon\Carbon;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->catchPhrase(),
            'texto' => $this->faker->realText(150),
            'publicacao' => Carbon::now(),
            'blog_id' => Blog::inRandomOrder()->first()->id,
        ];
    }
}
