<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BlogPostTest extends TestCase
{

    public function test_the_application_returns_a_successful_response_for_first_loaf_post()
    {
        $response = $this->get('/posts/first_loaf');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_for_feed_starter()
    {
        $response = $this->get('/posts/feed_starter');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_a_successful_response_for_basics()
    {
        $response = $this->get('/posts/basics');

        $response->assertStatus(200);
    }

    public function test_the_application_returns_an_error_response_for_post_that_does_not_exist()
    {
        $this->withoutExceptionHandling();
        $this->get('/posts/foo')
        ->assertRedirect('/');
    }
}
