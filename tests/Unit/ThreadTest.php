<?php

namespace Tests\Unit;

use Tests\TestCase;

class ThreadTest extends TestCase
{
    /*
     * @test
     */
    public function testHasPath()
    {
        $thread = factory('App\Thread')->create();

        $this->assertEquals('/threads/'.$thread->id, $thread->path());
    }
}
