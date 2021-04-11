<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Author;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 300, $max = 1000),
            'isbn' => $this->faker->randomElement([1,0]),
            'avg_rating' => $this->faker->randomElement([1,2,3,4,5]),
            'publish_date' => $this->faker->dateTime($max = 'now') ,
            'author_id' => $this->faker->randomElement(Author::pluck('id','id')->toArray())
        ];
    }
}
