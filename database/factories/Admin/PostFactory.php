<?php

namespace Database\Factories\Admin;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Admin\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "category_id"=>3,
            "name"=>$this->faker->name,
            "slug"=>$this->faker->name,
            "description"=>$this->faker->text,
            "yt_iframe"=>$this->faker->name,
            "meta_title"=>$this->faker->name,
            "meta_description"=>$this->faker->text,
            "meta_keywords"=>$this->faker->text,
            "created_by"=>1,
        ];
    }
}
