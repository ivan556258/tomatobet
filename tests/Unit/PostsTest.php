<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class PostsTest extends TestCase
{
    use RefreshDatabase;

    public function test_basic_test()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
       
    }
}
