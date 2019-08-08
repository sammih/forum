<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReadThreadsTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->thread = factory('App\Thread')->create();
    }

    /**
     * @test
     */
    public function a_user_can_view_threads()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/threads');

        $response->assertSee($this->thread->title);
    }

    /**
     * @test
     */
    public function a_user_can_view_single_thread()
    {
        $this->withoutExceptionHandling();

        $response = $this->get($this->thread->path());

        $response->assertSee($this->thread->title);
    }

    /*
     * @test
     */
    // public function a_user_can_read_replies_that_are_associated_with_a_thread()
    // {
    // }
}
