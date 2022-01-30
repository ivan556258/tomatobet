<?php

namespace Database\Factories\V1;

use App\Models\Team;
use App\Models\V1\Post;
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
            'titleText' => $this->faker->title,	
            'h1Text'	=> $this->faker->title,
            'keywordsText'	=> $this->faker->word, 
            'prevText'	=> $this->faker->text, 
            'DescText'	=> $this->faker->paragraph, 
            'eDataHtml'	=> $this->faker->paragraph, 
            'eDataOrigin'	=> $this->faker->paragraph, 
            'smallPicture'	=> $this->faker->imageUrl, 
            'bigPicture'	=> $this->faker->imageUrl, 
            'oneHashTag'	=> $this->faker->word,
            'twoHashTag'	=> $this->faker->word,
            'threeHashTag'	=> $this->faker->word,
            'fooHashTag'	=> $this->faker->word,
            'fiveHashTag'	=> $this->faker->word,
            'type_sport_id'	=> Team::factory(), 
        ];
    }
}
