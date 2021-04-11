<?php

namespace Database\Factories;

use App\Models\Badge;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;

class BadgeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Badge::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'label' => Str::random(10),
            'label' => $this->faker->unique()->randomElement(['Platinum','Gold','Silver','Bronze']),
            'desc' => $this->faker->text(rand(10, 50)),
            'author_id' => $this->faker->randomElement(Author::pluck('id','id')->toArray())
        ];
    }
}
