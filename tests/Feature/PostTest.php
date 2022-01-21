<?php

namespace Tests\Feature;

use App\Models\V1\Post;
use App\Models\V1\TypeSport;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_save_post()
    {
        $p = TypeSport::factory()->create();
        //$post = Post::factory()->create();

        dd($p);

       // $this->assertCount();
    }
}
