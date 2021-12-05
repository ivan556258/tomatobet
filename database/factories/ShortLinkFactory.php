<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\V1\ShortLink;

class ShortLinkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ShortLink::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
