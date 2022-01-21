<?php

namespace Database\Factories\V1;

use App\Models\V1\TypeSport;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeSportFactory extends Factory
{

    protected $model = TypeSport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->title,	
            'urn' => $this->faker->url,		
            'created_at' => $this->faker->dateTime,
            'updated_at' => $this->faker->dateTime,
        ];
    }
}
