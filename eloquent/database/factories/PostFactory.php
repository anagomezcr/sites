<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    

    public function definition()
    {
        return [
            'user_id' => rand(1, 4),
            'title' => $this->faker->sentence
        ];
    }
}
