<?php

namespace Tests\Unit;

use App\Post;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        $this->assertTrue(true);

        //given
        $first  = factory(Post::class)->create();
        $second = factory(Post::class)->create([
                                                   'created_at' => Carbon::now()->subMonth()
                                               ]);

        //when
        $posts = Post::archives();

        //then
        $this->assertCount(2, $posts);
    }
}
