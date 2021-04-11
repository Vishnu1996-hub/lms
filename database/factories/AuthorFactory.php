<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Badge;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Author::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'bio' => $this->faker->text(rand(10, 50)),
            'badge_id' => $this->faker->randomElement(Badge::pluck('id','id')->toArray())
        ];
    }
}
