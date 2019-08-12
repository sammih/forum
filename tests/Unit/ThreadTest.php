<?php

namespace Tests\Unit;

use Tests\TestCase;

class ThreadTest extends TestCase
{
    /*
     * @test
     */
    public function testThreadHasReplies()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('Illuminate\Database\Eloquent\Collection', $thread->replies);
    }

    public function testThreadHasCreator()
    {
        $thread = factory('App\Thread')->create();

        $this->assertInstanceOf('App\User', $thread->creator);
    }
}
