<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            "category_id"=> Category::factory(),
            "user_id"=> User::factory(),
            "title"=> $this->faker->sentence,
            "slug" =>$this->faker->slug,
            "excerpt" =>$this->faker->sentences(2, true),
            "body"=>$this->faker->paragraphs(8, true),
            "published_at"=>now()
        ];
    }
}
