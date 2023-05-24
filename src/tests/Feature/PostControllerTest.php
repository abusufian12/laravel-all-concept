<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Post;
use App\Http\Controllers\PostController;

class PostControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_list_of_post(){
        //Arrange
        //Post::factory()->count(15)->create();
        
        //Act
        $post = (new PostController)->index();
        
        //Assert
        //$this->assertEquals(45, $post->count());
        //$this->assertCount(1, $post->count());
        
        $expected = 1;
        $this->assertGreaterThanOrEqual( 
            $expected, 
            $post->count(), 
            "actual value is greater than or equal to expected"
        );

    }
}
