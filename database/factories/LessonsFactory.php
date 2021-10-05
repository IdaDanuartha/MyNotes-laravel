<?php

namespace Database\Factories;

use App\Models\Lessons;
use Illuminate\Database\Eloquent\Factories\Factory;

class LessonsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Lessons::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2,4)),
            'slug' => $this->faker->slug(),
            'kutipan' => $this->faker->paragraph(2),
            'body' => collect($this->faker->paragraphs(mt_rand(8,10)))
                        ->map(fn($p) => "<p>$p</p>")
                        ->implode(''),
            'user_id' => mt_rand(1,3),
            'category_id' => mt_rand(1,4)
        ];
    }
}
