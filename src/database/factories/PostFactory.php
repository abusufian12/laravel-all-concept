<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence(),
            'excerpt' => $this->faker->realText($maxNbChars = 50),
            'description' => $this->faker->text(),
            'image_path' => $this->faker->imageUrl(640, 480),
            'is_published' => 1,
            'min_to_read' => $this->faker->numberBetween(1, 10)
        ];
    }
}
